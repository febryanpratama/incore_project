@extends('layouts.back')

@section('content')
    <div class="page-content">
        <div class="row">
            
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
                                        {{-- <th class="text-center">Nama Tag</th> --}}
                                        <th class="text-center">Value</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $key=>$item)
                                        <tr class="">
                                            <td class="text-center">{{ $key+1 }}</td>
                                            {{-- <td class="text-center">{{ $item->nama_section }}</td> --}}
                                            <td class="text-center">

                                                @if (App\Helpers\Format::getParam($item->nama_section, $item->navigation_id) == "NULL")
                                                    <button class="btn btn-sm btn-primary" onclick="showModal({{ $item->navigation_id }},'{{$item->type}}', '{{ $item->nama_section }}')">Tambah</button>
                                                @else
                                                    {{ App\Helpers\Format::getParam($item->nama_section, $item->navigation_id) }}<br>
                                                    @if ($item->type == 'card')
                                                    <a href="{{ url('user/set-template/'.$item->navigation_id.'/card/'.$item->id) }}" class="btn btn-sm btn-info">Detail Card</a>
                                                    @endif
                                                @endif


                                            </td>
                                            <td class="text-center">
                                                @php
                                                    $random = rand(1, 2);
                                                @endphp

                                                {{-- @if ($random == 1)
                                                    
                                                @else
                                                    
                                                @endif --}}
                                                {{-- <a href="{{ url('admin/materi/detail-soal/'.$item->id) }}" class="btn btn-sm btn-success">Active</a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="http://localhost:8000/file/1712006818_BG_BRIGHT_OK.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ url('user/set-template/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="navigation_id" class="navigation_id" value="">
                <input type="hidden" name="nama_tag" class="nama_tag" value="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Value</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="mb-3" for=""><h4>Value</h4></label>
                            <textarea name="value" class="form-control" id="ckeditor" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="exampleModalFile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ url('user/set-template/store-file') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="navigation_id" class="navigation_id" value="">
                <input type="hidden" name="nama_tag" class="nama_tag" value="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Value</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="mb-3" for=""><h4>Value</h4></label>
                            <input type="file" name="value" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ url('user/set-template/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="navigation_id" class="navigation_id" value="">
                <input type="hidden" name="nama_tag" class="nama_tag" value="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Value</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="mb-3" for=""><h4>Value</h4></label>
                            <input type="text" class="form-control" name="value" id="Produk Saya">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection
{{-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, necessitatibus sed illo molestias quod possimus. --}}


@section('scripts')
    <script>
        function showModal(navigation_id, type, nama_tag) {
            
            if(type == 'text'){
                $('#exampleModal').modal('show')
                $('.navigation_id').val(navigation_id)
                $('.nama_tag').val(nama_tag)
            }else if (type == 'file') {
                $('#exampleModalFile').modal('show')
                $('.navigation_id').val(navigation_id)
                $('.nama_tag').val(nama_tag)
            }else{
                $('#exampleModalCard').modal('show')
                $('.navigation_id').val(navigation_id)
                $('.nama_tag').val(nama_tag)
            }
        }
    </script>
@endsection