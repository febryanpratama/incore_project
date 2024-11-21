@extends('layouts.back')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Generate Website Kamu Menggunakan Ai</h5>
                        <button class="btn btn-outline-primary mt-4" id="generateSession">Mulai Generate dengan ai</button>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between" style="font-size: 1.5rem">
                            <div class="font-bold">
                                Total penggunaan Ai saat ini
                            </div>
                            <div class="font-weight-bold ">
                                {{-- 0.03*20000 * jumlah prompt --}}
                                Rp. {{ number_format((0.03*20000)*$length) }}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Detail Conversation {{ auth()->user()->id }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="background-color: #f9fafc" id="listChat">
                            {{-- {{ dd($length) }} --}}
                            @foreach ($data as $item)
                            
                                @if (!$item['isUser'])
                                    <!-- Bubble 1 (Left aligned) -->
                                    {{-- <div class="px-4 py-2 mt-2 isAi" style="border-radius: 10px">
                                        <div class="d-flex">
                                            <div class="mx-2">
                                                <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="" style="width: 50px;height: 50px;border-radius:100%">
                                            </div>
                                            <div class="mx-2">{!! $item["response"] !!}</div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            @if (App\Helpers\Format::checkContainsString($item["response"]))
                                                <div class="mx-2">
                                                    <button type="button" class="btn btn-primary" onClick="functionModal({{ json_encode($item['response']) }})">
                                                        Priview Halaman
                                                    </button>
                                                </div>
                                                <div class="mx-2">
                                                    <button type="button" class="btn btn-primary" onClick="{{ App\Helpers\Format::generateHtml($item["response"]) }}">
                                                        Save Code
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                    </div> --}}
                                    <div class="px-4 py-2 mt-2 isAi" style="border-radius: 10px">
                                        <div class="d-flex">
                                            <div class="mx-2">
                                                <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="" style="width: 50px;height: 50px;border-radius:100%">
                                            </div>
                                            <div class="mx-2">{!! $item["response"] !!}</div>
                                        </div>
                                    </div>
                                @endif

                                @if ($item['isUser'])
                                
                                    <!-- Bubble 2 (Right aligned) -->
                                    <div class="px-4 py-2 mt-2" style="border-radius: 10px">
                                        <div class="d-flex justify-content-end">
                                            <div class="mx-2 text-end">{{ $item["response"] }}</div>
                                            <div class="mx-2">
                                                <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="" style="width: 50px;height: 50px;border-radius:100%">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            
                            @endforeach
                        
                            {{-- Form Input Message --}}
                        </div>
                        <div class="px-4 py-2 mt-2" style="background-color: gray;border-radius: 10px">
                            {{-- <form action="" method="POST"> --}}
                                <div class="d-flex">
                                    <!-- Input message with full width -->
                                    <div class="flex-grow-1 mx-2">
                                        <input type="text" class="form-control w-100" id="inputtext" placeholder="Ketik Pesan Anda">
                                    </div>
                                    <div class="mx-2">
                                        <button type="button" class="btn btn-outline-primary" id="btnsend">Kirim</button>
                                    </div>
                                </div>
                            {{-- </form> --}}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBody">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script>
        $(document).ready(function(){

            function functionModal(string) {
                console.log(string);
            }
            $("#generateSession").click(function(){
                $.ajax({
                    url: "{{ url('user/website/generate-session') }}",
                    type: "GET",
                    success: function(response){
                        console.log(response);
                    }
                });
            });

            $("#btnsend").on("click", function() {
                var text = $("#inputtext").val();
                $(this).attr("disabled", true); // Disable the send button
                $("#listChat").append(`
                    <div class="px-4 py-2 mt-2" style="border-radius: 10px">
                        <div class="d-flex justify-content-end">
                            <div class="mx-2 text-end">`+text+`</div>
                            <div class="mx-2">
                                <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="" style="width: 50px;height: 50px;border-radius:100%">
                            </div>
                        </div>
                    </div>
                `);

                var conversation_id = "{{ @$data[0]['conversationId'] }}";
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                // Scroll to bottom after user message
                $("#listChat").animate({ scrollTop: $("#listChat")[0].scrollHeight }, "slow");

                // Add a "bot typing" message
                $("#listChat").append(`
                    <div class="px-4 py-2 mt-2 remove" style="border-radius: 10px">
                        <div class="d-flex">
                            <div class="mx-2">
                                <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="" style="width: 50px;height: 50px;border-radius:100%">
                            </div>
                            <div class="mx-2">Sedang Mengetik ....</div>
                        </div>
                    </div>
                `);

                // Scroll to bottom after typing indicator
                $("#listChat").animate({ scrollTop: $("#listChat")[0].scrollHeight }, "slow");

                $.ajax({
                    url: "{{ url('user/website/send-message') }}",
                    dataType: "json",
                    type: "POST",
                    data: {
                        text: text,
                        conversation_id: conversation_id,
                        _token: csrfToken
                    },
                    success: function(response) {
                        console.log(response.data.response);

                        // Remove the "bot typing" message
                        $(".remove").remove();

                        // Append the actual response from the bot
                        $("#listChat").append(`
                            <div class="px-4 py-2 mt-2 isAi" style="border-radius: 10px">
                                <div class="d-flex">
                                    <div class="mx-2">
                                        <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="" style="width: 50px;height: 50px;border-radius:100%">
                                    </div>
                                    <div class="mx-2">`+response.data.response+`</div>
                                </div>
                            </div>
                        `);

                        // Scroll to the bottom after bot response
                        $("#listChat").animate({ scrollTop: $("#listChat")[0].scrollHeight }, "slow");

                        // Re-enable the send button
                        $("#btnsend").removeAttr("disabled");
                        window.location.reload();
                    }
                });
            });
        });
    </script>

    <script>
        // function functionModal(string) {
        //     // Tampilkan modal
        //     $("#exampleModal").modal("show");

        //     // Regex untuk menangkap blok kode HTML
        //     const codeRegex = /```html([\s\S]*?)```/;
        //     const match = string.match(codeRegex);

        //     if (match && match[1]) {
        //         // Escape karakter HTML agar tidak dieksekusi
        //         const extractedCode = match[1].trim()
        //             .replace(/&/g, "&amp;")
        //             .replace(/</g, "&lt;")
        //             .replace(/>/g, "&gt;")
        //             .replace(/"/g, "&quot;")
        //             .replace(/'/g, "&#039;");

        //         // Masukkan kode yang telah di-escape ke dalam modal body
        //         $("#modalBody").html(`<pre><code>${extractedCode}</code></pre>`);
        //     } else {
        //         console.log("Tidak ditemukan blok kode HTML.");
        //     }
        // }

        function functionModal(string) {
            // Tampilkan modal
            $("#exampleModal").modal("show");

            // Regex untuk menangkap blok kode HTML
            const codeRegex = /```html([\s\S]*?)```/;
            const match = string.match(codeRegex);

            if (match && match[1]) {
                // Ambil bagian kode HTML yang ditemukan
                const extractedCode = match[1].trim();

                // Masukkan HTML ke dalam modal untuk ditampilkan sebagai preview
                $("#modalBody").html(extractedCode);
            } else {
                console.log("Tidak ditemukan blok kode HTML.");
            }
        }
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle preview
        document.querySelectorAll('.preview-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const htmlContent = this.getAttribute('data-html');
                const previewWindow = window.open('', '_blank');
                previewWindow.document.open();
                previewWindow.document.write(htmlContent);
                previewWindow.document.close();
            });
        });

        // Handle download
        document.querySelectorAll('.download-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const htmlContent = this.getAttribute('data-html');
                const blob = new Blob([htmlContent], { type: 'text/html' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'code.html';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            });
        });
    });
</script>
@endsection