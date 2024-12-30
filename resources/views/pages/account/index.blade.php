@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-info">
                        Perhatian! Jika akun sosial media dihapus maka semua konten juga akan terhapus!
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-xl-12 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Akun Sosial Media</h4>

                                <div class="pull-right">
                                    <a href="#" id="x-auth-link" class="btn btn-primary btn-sm" target="_blank">
                                        Tambahkan Akun Twitter
                                    </a>

                                    <a href="#" id="instagram-auth-link" class="btn btn-danger btn-sm" target="_blank">
                                        Tambahkan Akun Instagram
                                    </a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th class="bb-2">ID</th>
                                            <th class="bb-2">Nama Akun</th>
                                            <th class="bb-2">Apps</th>
                                            <th class="bb-2">Status</th>
                                            <th class="bb-2">Tanggal Koneksi</th>
                                            <th class="bb-2">Opsi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($data as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama_sosmed }}</td>
                                            <td>{{ $item->app }}</td>
                                            <td><span class="badge {{ ($item->status == 'Active') ? 'badge-success' : 'badge-info' }}">{{ $item->status }}</span></td>
                                            <td>
                                                {{ date('d F Y H:i:s', strtotime($item->created_at)) }}
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger delete-data" id="{{ $item->id }}">Hapus</a>

                                                @if (($item->status == 'Inactive') && ($item->app == 'Instagram'))
                                                <a href="{{ route('instagram.activation', $item->id) }}" class="btn btn-sm btn-primary">Aktivasi</a>
                                                @elseif (($item->status == 'Inactive') && ($item->app == 'Twitter'))
                                                <a href="{{ route('x.activation', $item->id) }}" class="btn btn-sm btn-primary">Aktivasi</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Belum ada data.</td>
                                        </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
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
    // Instagram
    document.addEventListener('DOMContentLoaded', function() {
        fetch(`{{ route('instagram.auth.url') }}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('instagram-auth-link').setAttribute('href', data.authUrl);
            });
    });

    // X
    document.addEventListener('DOMContentLoaded', function() {
        fetch(`{{ route('x.auth.url') }}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('x-auth-link').setAttribute('href', data.authUrl);
            });
    });

    // Delete
    $(document).on('click', '.delete-data', function () {
        const id = this.id

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
                // Call Function
                destroy(id)
            }
        })
    })

    function destroy(id) {
        fetch(`${endpoint}/api/delete-account/${id}`, {
            method: 'DELETE'
        })
            .then(response => response.json())
            .then(success => {
                if (success.status) {
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
                }
            })
            .catch(err => {
                $.toast({
                    heading: 'Error!',
                    text: 'Terjadi kesalahan. Silakan coba lagi.',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 3500,
                    stack: 6
                });

                console.log(err)
            })
    }
</script>
@endsection
