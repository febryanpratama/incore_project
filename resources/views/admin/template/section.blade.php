@extends('layouts.back')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Template</h5>
                    </div>
                    <form action="{{ url('admin/template/navigation/section') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="navigation_id" value="{{ @$data->id }}">
                        <div class="card-body">
                            <div class="form-group mb-3 d-flex justify-content-center">
                                <button class="btn btn-sm btn-primary mx-2" id="text">Add Text</button>
                                <button class="btn btn-sm btn-info mx-2" id="image">Add Image</button>
                                <button class="btn btn-sm btn-secondary mx-2" id="card">Add Card</button>
                            </div>
                            <span class="kolom">
                                {{-- Initialize --}}
                            </span>
                            <div class="form-group mb-3">
                                <button type="submit" class="form-control btn btn-outline-success"> Simpan Data </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>List Soal</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="text-center">
                                    <tr class="text-center">
                                        <th class="text-center" width="5%">Nomor</th>
                                        <th class="text-center">Nama Tag</th>
                                        <th class="text-center">Value</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($section as $key=>$item)
                                        <tr class="">
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-center">{{ $item->nama_section }}</td>
                                            <td class="text-center">{{ $item->value }}</td>
                                            <td class="text-center">
                                                {{-- <a href="{{ url('admin/template/'.$item->id.'/navigation') }}" class="btn btn-sm btn-primary">Set Section</a> --}}
                                                <a href="{{ url('admin/materi/detail-soal/'.$item->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, necessitatibus sed illo molestias quod possimus. --}}


@section('scripts')
    <script>
        $('#text').on('click', function(e){
            e.preventDefault()
            $('.kolom').html(`
            <input type="hidden" name="type" value="text">
            <div class="form-group mb-3">
                    <label for="" class="control-label mb-2">Nama Tag</label>
                    <input type="text" name="nama_tag" class="form-control" placeholder="$new_page">
                </div>

                <div class="form-group mb-3">
                    <label for="" class="control-label mb-2">Konten</label>
                    <textarea name="value" id="ckeditor" class="form-control" rows="5"></textarea>
                </div>
            `)
        })

        $('#image').on('click', function(e){
            e.preventDefault()

            $('.kolom').html(`
                <input type="hidden" name="type" value="file">
                <div class="form-group mb-3">
                    <label for="" class="control-label mb-2">Nama Tag</label>
                    <input type="text" name="nama_tag" class="form-control" placeholder="$new_page">
                </div>

                <div class="form-group mb-3">
                    <label for="" class="control-label mb-2">Konten</label>
                    <input type="file" class="form-control" name="value">
                </div>
            `)
        })


        $('#card').on('click', function(e){
            e.preventDefault()

            $('.kolom').html(`
            <input type="hidden" name="type" value="card">
            <div class="form-group mb-3">
                    <label for="" class="control-label mb-2">Nama Tag</label>
                    <input type="text" name="nama_tag" class="form-control" placeholder="$new_page">
                </div>

                <div class="form-group mb-3">
                    <label for="" class="control-label mb-2">Konten</label>
                    <textarea name="value" id="ckeditor" class="form-control" rows="5"></textarea>
                </div>
            
            `)
        })

    </script>
@endsection