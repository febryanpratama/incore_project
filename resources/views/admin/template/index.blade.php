@extends('layouts.back')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Template</h5>
                    </div>
                    <form action="{{ url('admin/template') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="" class="control-label mb-2">Nama Template</label>
                                <input type="text" name="nama_template" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="control-label mb-2">Harga</label>
                                <input type="number" name="harga" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="control-label mb-2">Thumbnail</label>
                                <input type="file" name="thumbnail" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="control-label mb-2">Diskon</label>
                                <input type="number" name="diskon" class="form-control">
                                <small class="text-danger">Range 1 - 100. Set 0 jika tidak ada diskon</small>
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
                        <h5>List Navigation</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="text-center">
                                    <tr class="text-center">
                                        <th class="text-center" width="5%">Nomor</th>
                                        <th class="text-center">Nama Navigation</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $key=>$item)
                                        <tr class="">
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-center">{{ $item->nama_template }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('admin/template/'.$item->id.'/navigation') }}" class="btn btn-sm btn-primary">Set Navigation</a>
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
