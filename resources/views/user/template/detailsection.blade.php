@extends('layouts.back')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Template</h5>
                    </div>
                    {{-- {{ dd($data) }} --}}
                    <form action="{{ url('user/set-template/card') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="nav_value_id" value="{{ $nav_value_id }}">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="" class="control-label mb-2">Nama Title</label>
                                <input type="text" name="nama_title" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="control-label mb-2">Deskripsi</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="" class="control-label mb-2">Gambar</label>
                                <input type="file" name="path" class="form-control">
                            </div>

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
                                        <th class="text-center">Nama Title</th>
                                        <th class="text-center">Deskripsi</th>
                                        <th class="text-center">File</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $key=>$item)
                                        <tr class="">
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-center">{{ $item->title }}</td>
                                            <td class="text-center">{{ $item->description }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('file_card/'.$item->file) }}" alt="">
                                            </td>
                                            <td class="text-center">
                                                {{-- <a href="{{ url('admin/template/'.$item->template_id.'/navigation/'.$item->id.'/section') }}" class="btn btn-sm btn-primary">Set Section</a> --}}
                                                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
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
