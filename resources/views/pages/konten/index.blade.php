@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="col-xl-12 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Konten Sosial Media</h4>

                                <div class="pull-right">
                                    <a href="{{ route('konten.create') }}" class="btn btn-primary btn-sm">
                                        Tambah Data
                                    </a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="bb-2">No.</th>
                                                <th class="bb-2">App</th>
                                                <th class="bb-2">Akun</th>
                                                <th class="bb-2">Kategori Posting</th>
                                                <th class="bb-2">Jadwal Posting</th>
                                                <th class="bb-2">Status Posting</th>
                                                <th class="bb-2">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->app }} ({{ postType($item->post_type) }})</td>
                                                <td>
                                                    @foreach ($item->accountKontens as $account)
                                                    <span>{{ $account->account->nama_sosmed }}</span>
                                                    @endforeach
                                                </td>
                                                <td>{{ $item->status_post }}</td>
                                                <td>{{ ($item->date_jadwal) ? date('d F Y H:i', strtotime($item->date_jadwal)) : '-' }}</td>
                                                <td><span class="badge {{ ($item->status_posting == 'Berhasil') ? 'badge-success' : 'badge-info' }}">{{ $item->status_posting }}</span></td>
                                                <td>
                                                    @if($item->status_posting == 'Menunggu')
                                                    <a class="btn btn-sm btn-warning waves-effect waves-light" href="{{ route('konten.edit', $item->id) }}">Edit</a>
                                                    <button onclick="postContent({{ $item->id }})" id="now-post-{{ $item->id }}" data-id="{{ $item->id }}" class="btn btn-sm btn-primary">Posting Sekarang</button>
                                                    <form action="{{ route('konten.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                    <!-- <button onclick="deleteContent({{ $item->id }})" id="delete-content-{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</button> -->
                                                    </form>
                                                    @endif
                                                    <!-- <a href="" class="btn btn-sm btn-warning">Edit</a> -->
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Data tidak ditemuka.</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // POST
    function postContent(id) {
        // Disabled Btn
        $(`#now-post-${id}`).attr('disabled', true)

        $.ajax({
            url: `${endpoint}/api/post-content?id=${id}`,
            type: "GET",
            success: function(response) {
                if (response.status) {
                    $(`#now-post-${id}`).attr('disabled', false)

                    $.toast({
                        heading: 'Sukses!',
                        text: `${response.message}`,
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'success',
                        hideAfter: 3500,
                        stack: 6
                    });

                    setTimeout(() => {
                        window.location.reload(true)
                    }, 1000)
                } else {
                    $(`#now-post-${id}`).attr('disabled', false)

                    $.toast({
                        heading: 'Error!',
                        text: `${response.message}`,
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'error',
                        hideAfter: 3500,
                        stack: 6
                    });
                }
            }
        });
    }

    function deleteContent(id) {
        Swal.fire({
            title: `Hapus data ini?`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Hapus",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`${endpoint}/api/delete-content/${id}`, {
                    method: "DELETE"
                })
                    .then(response => response.json())
                    .then(success => {
                        $.toast({
                            heading: 'Sukses!',
                            text: `${success.message}`,
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500,
                            stack: 6
                        });

                        setTimeout(() => {
                            window.location.reload(true);
                        }, 1500);
                    })
                    .catch(err => {
                        $.toast({
                            heading: 'Error!',
                            text: `Terjadi kesalahan, silahkan coba lagi.`,
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'error',
                            hideAfter: 3500,
                            stack: 6
                        });
                    })
            }
        })
    }
</script>
@endsection
