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
                                <h4 class="box-title">Tambah Data</h4>

                                <div class="pull-right">
                                    <a href="#" class="btn btn-info btn-sm" id="generate-btn">Generate Caption From AI</a>

                                    <a href="{{ route('konten.index') }}" class="btn btn-warning btn-sm">
                                        Kembali
                                    </a>
                                </div>
                            </div>

                            <form action="{{ route('konten.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <div class="alert alert-info">
                                        Posting instagram Video (Reels atau Posting Carousel Video) masih dalam tahap maintenance Meta.
                                    </div>

                                    <div class="form-group">
                                        <label for="">Caption <span class="text-danger">*</span></label>
                                        <textarea name="caption" class="form-control mt-2" rows="10" id="caption" value="{{ old('caption') }}">{{ $data->caption }}</textarea>
                                    </div>

                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Generate Caption -->
<div class="modal fade" id="generate-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Generate Caption</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info" id="alert-info">Proses generate caption sedang berjalan, mohon tunggu sebentar...</div>
                        <div class="alert alert-danger" id="alert-danger">Proses generate caption gagal, silahkan generate ulang.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">Kata Kunci <span class="text-danger">*</span></div>
                        <input type="text" class="form-control" id="keywords" placeholder="Masukkan Kata Kunci">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary btn-sm" id="submit-generate">Generate</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection

@section('scripts')
<script>
    $(document).on('click', '#generate-btn', function() {
        $('#generate-modal').modal('show')
    })

    $(document).on('click', '#submit-generate', function() {
        // Initialize
        const keywords = $('#keywords').val()

        if (!keywords) {
            $.toast({
                heading: 'Error!',
                text: "Keyword harus diisi!",
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'error',
                hideAfter: 3500,
                stack: 6
            })

            return 0
        }

        $('#submit-generate').attr('disabled', true)
        $('#alert-info').show()

        // Call Function
        callGpt()
    })

    function callGpt() {
        $.ajax({
            url: "https://ai.indonesiacore.com/api/generate/text",
            type: "POST",
            data: {
                prompt: 'Bertindaklah sebagai seorang expert digital marketing, buatkan caption yang mudah dibaca dan mudah dimengerti untuk sosial media instagram dan twitter dengan kata kunci : ' + $('#keywords').val()
            },
            success: function(response) {
                $('#submit-generate').attr('disabled', false)

                if (response.code == 200) {
                    $('#generate-modal').modal('hide')
                    $('#alert-info').hide()
                    $('#alert-danger').hide()
                    $('#keywords').val('')

                    // Initialize
                    const results = response.result.response

                    $('#caption').text(results)
                } else {
                    $('#alert-info').hide()
                    $('#alert-danger').show()
                }
            }
        });
    }

</script>
@endsection
