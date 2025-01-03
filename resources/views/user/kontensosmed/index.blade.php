@extends('layouts.back')

@section('content')
    <div class="page-content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-between">
                        <h4>Konten Sosmed</h4>
                        {{-- <button class="btn btn-sm btn-primary">Posting Konten</button> --}}
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Konten Sosmed
                        </button>  
                    </div>
                </div>
            </div>
            <div class="card-body" style="background-color: #f1ebe0">
                <div class="row">
                    {{-- {{ dd($data) }} --}}

                    @foreach ($data as $item)
                        <div class="col-md-4 stretch-card grid-margin grid-margin-md-0 mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ $item['image'] }}" class="img-fluid text-center" style="max-height: 100px" alt="">
                                    </div>
                                    <h5 class="text-center text-uppercase mt-3 mb-4">{{ Carbon\Carbon::parse($item['date_jadwal'])->format('d-m-Y') }}</h5>
                                    <div class="text-center">
                                        @if ($item['app'] == "Instagram")
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
                                                <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
                                            </svg>
                                        @endif

                                        @if ($item['app'] == "Twitter")
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
                                                <path d="M 34.21875 5.46875 C 28.238281 5.46875 23.375 10.332031 23.375 16.3125 C 23.375 16.671875 23.464844 17.023438 23.5 17.375 C 16.105469 16.667969 9.566406 13.105469 5.125 7.65625 C 4.917969 7.394531 4.597656 7.253906 4.261719 7.277344 C 3.929688 7.300781 3.632813 7.492188 3.46875 7.78125 C 2.535156 9.386719 2 11.234375 2 13.21875 C 2 15.621094 2.859375 17.820313 4.1875 19.625 C 3.929688 19.511719 3.648438 19.449219 3.40625 19.3125 C 3.097656 19.148438 2.726563 19.15625 2.425781 19.335938 C 2.125 19.515625 1.941406 19.839844 1.9375 20.1875 L 1.9375 20.3125 C 1.9375 23.996094 3.84375 27.195313 6.65625 29.15625 C 6.625 29.152344 6.59375 29.164063 6.5625 29.15625 C 6.21875 29.097656 5.871094 29.21875 5.640625 29.480469 C 5.410156 29.742188 5.335938 30.105469 5.4375 30.4375 C 6.554688 33.910156 9.40625 36.5625 12.9375 37.53125 C 10.125 39.203125 6.863281 40.1875 3.34375 40.1875 C 2.582031 40.1875 1.851563 40.148438 1.125 40.0625 C 0.65625 40 0.207031 40.273438 0.0507813 40.71875 C -0.109375 41.164063 0.0664063 41.660156 0.46875 41.90625 C 4.980469 44.800781 10.335938 46.5 16.09375 46.5 C 25.425781 46.5 32.746094 42.601563 37.65625 37.03125 C 42.566406 31.460938 45.125 24.226563 45.125 17.46875 C 45.125 17.183594 45.101563 16.90625 45.09375 16.625 C 46.925781 15.222656 48.5625 13.578125 49.84375 11.65625 C 50.097656 11.285156 50.070313 10.789063 49.777344 10.445313 C 49.488281 10.101563 49 9.996094 48.59375 10.1875 C 48.078125 10.417969 47.476563 10.441406 46.9375 10.625 C 47.648438 9.675781 48.257813 8.652344 48.625 7.5 C 48.75 7.105469 48.613281 6.671875 48.289063 6.414063 C 47.964844 6.160156 47.511719 6.128906 47.15625 6.34375 C 45.449219 7.355469 43.558594 8.066406 41.5625 8.5 C 39.625 6.6875 37.074219 5.46875 34.21875 5.46875 Z M 34.21875 7.46875 C 36.769531 7.46875 39.074219 8.558594 40.6875 10.28125 C 40.929688 10.53125 41.285156 10.636719 41.625 10.5625 C 42.929688 10.304688 44.167969 9.925781 45.375 9.4375 C 44.679688 10.375 43.820313 11.175781 42.8125 11.78125 C 42.355469 12.003906 42.140625 12.53125 42.308594 13.011719 C 42.472656 13.488281 42.972656 13.765625 43.46875 13.65625 C 44.46875 13.535156 45.359375 13.128906 46.3125 12.875 C 45.457031 13.800781 44.519531 14.636719 43.5 15.375 C 43.222656 15.578125 43.070313 15.90625 43.09375 16.25 C 43.109375 16.65625 43.125 17.058594 43.125 17.46875 C 43.125 23.71875 40.726563 30.503906 36.15625 35.6875 C 31.585938 40.871094 24.875 44.5 16.09375 44.5 C 12.105469 44.5 8.339844 43.617188 4.9375 42.0625 C 9.15625 41.738281 13.046875 40.246094 16.1875 37.78125 C 16.515625 37.519531 16.644531 37.082031 16.511719 36.683594 C 16.378906 36.285156 16.011719 36.011719 15.59375 36 C 12.296875 35.941406 9.535156 34.023438 8.0625 31.3125 C 8.117188 31.3125 8.164063 31.3125 8.21875 31.3125 C 9.207031 31.3125 10.183594 31.1875 11.09375 30.9375 C 11.53125 30.808594 11.832031 30.402344 11.816406 29.945313 C 11.800781 29.488281 11.476563 29.097656 11.03125 29 C 7.472656 28.28125 4.804688 25.382813 4.1875 21.78125 C 5.195313 22.128906 6.226563 22.402344 7.34375 22.4375 C 7.800781 22.464844 8.214844 22.179688 8.355469 21.746094 C 8.496094 21.3125 8.324219 20.835938 7.9375 20.59375 C 5.5625 19.003906 4 16.296875 4 13.21875 C 4 12.078125 4.296875 11.03125 4.6875 10.03125 C 9.6875 15.519531 16.6875 19.164063 24.59375 19.5625 C 24.90625 19.578125 25.210938 19.449219 25.414063 19.210938 C 25.617188 18.96875 25.695313 18.648438 25.625 18.34375 C 25.472656 17.695313 25.375 17.007813 25.375 16.3125 C 25.375 11.414063 29.320313 7.46875 34.21875 7.46875 Z"></path>
                                            </svg>
                                        @endif
                                    </div>

                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-primary icon-xxl d-block mx-auto my-3"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg> --}}
                                    {{-- <h3 class="text-center ">$40</h3> --}}
                                    <div class="text-center mb-2 text-danger">
                                        {{ $item['status_post'] ?? "Terjadwal" }}
                                    </div>
                                    <hr>
                                    {{-- <p class="text-muted ">{{ $item->status_post ?? "Terjadwal" }}</p> --}}
                                    <h6 class="text-muted text-center mb-2 fw-normal">{{ $item['caption'] }}</h6>
                                    
                                    <div class="d-grid">
                                        {{-- <div class="badge badge-danger">{{ $item->url ?? "Url saat ini belum tersedia" }}</div> --}}
                                        <button class="btn btn-primary mt-4">{{ $item['url'] ?? "Url saat ini belum tersedia" }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ url('user/konten-sosmed') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="control-label">Caption</label>
                                <textarea name="caption" class="form-control mt-2" cols="30" rows="5" id="caption"></textarea>
                            </div>
                            <div class="col-md-12 mt-2 d-flex justify-content-center">
                                <button type="button" class="btn btn-info btn-sm" id="generate">Generate Caption From AI</button>
                                {{-- <textarea name="caption" class="form-control mt-2" id="" cols="30" rows="5"></textarea> --}}
                            </div>
        
                            <div class="col-md-12 hide" id="hideresult">
                                <label for="" class="control-label">Caption From Generate AI</label>
                                <textarea class="form-control mt-2" cols="30" rows="5" id="result"></textarea>
                            </div>
                            
                            <div class="col-md-12 mt-2">
                                <label for="" class="control-label">Gambar</label>
                                <input type="file" class="form-control" name="foto" multiple>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="" class="control-label">List Sosmed</label>
                                <select class="selectpicker form-control" multiple data-live-search="true" name="list[]" id="app">
                                    <option value="Account Instagram RizkyAngrh">Account Instagram RizkyAngrh</option>
                                    <option value="Account Twitter Usefullairdrop">Account Twitter Usefullairdrop</option>
                                </select>
                                {{-- <select name="app" class="form-control" id="">
                                    <option value="" selected disabled>== Pilih ==</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Twitter">Twitter</option>
                                </select> --}}
                            </div>
                            
                            <div class="col-md-6 mt-2">
                                <label for="" class="control-label">Tanggal </label><small class="text-danger"><sup> * Isi jika konten terjadwal</sup></small>
                                <input type="date" class="form-control" name="tanggal">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="" class="control-label">Waktu </label><small class="text-danger"><sup> * Isi jika konten terjadwal</sup></small>
                                <input type="time" class="form-control" name="waktu">
                            </div>
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

@section('scripts')
<script>
    $(document).ready(function(){
        $('#generate').click(function(){
            console.log('clicked')
            let prompt = $('#caption').val();
            $.ajax({
                url: "http://localhost:8080/api/generate/text",
                type: "POST",
                data: {
                    prompt: 'Bertindaklah sebagai seorang expert digital marketing, buatkan caption yang mudah dibaca dan mudah dimengerti untuk sosial media instagram dan twitter dengan kata kunci : '+ prompt
                },
                success: function(response){
                    // $('textarea[name="caption"]').val(data);
                    // console.log(data);
                    if(response.code == 200){
                        $('#result').val(response.result)

                        $('#hideresult').removeClass('hide')
                    }
                }
            });
        });
    });
</script>
@endsection