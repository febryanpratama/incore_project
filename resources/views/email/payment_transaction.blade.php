@extends('layouts.email')

@section('content')
<!-- Body / Grey -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td bgcolor="#f8fafc">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th class="column" width="50" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"></th>
                    <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="p30-15">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td class="h3 white pb20" style="font-family:'Merriweather', Georgia,serif; font-size:15px; line-height:32px; text-align:left; color:black; padding-bottom:20px;">
                                                {{-- {{ dd($data) }} --}}
                                                Hi {{ $data['email'] }},
                                                {{-- Hi customer --}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text white pb20" style="font-family:Arial,sans-serif; font-size:14px; line-height:26px; text-align:left; color:black; padding-bottom:20px;">
                                                Terima kasih telah berlangganan ke aplikasi Tokotoko. Silahkan lakukan pembayaran ke rekening berikut ini:
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pb20" style="padding-bottom:20px;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td class="pb10" style="padding-bottom:10px;">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                {{-- <tr>
                                                                    <td valign="top" class="text2 white" style="font-family:'Arial'; font-size:24px; line-height:26px; text-align:center; color:black;">{{ $bank->nama_bank }} / {{ $bank->no_rek }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" class="text2 white" style="font-family:'Arial'; font-size:20px; line-height:26px; text-align:center; color:black;">{{ $bank->nama_pemilik }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" class="text2 white" style="font-family:'Arial'; font-size:26px; line-height:26px; text-align:center; color:red;">Rp. {{ number_format($data['total_payment']) }}</td>
                                                                </tr> --}}
                                                                <tr>
                                                                    <td valign="top" class="text2 white" style="font-family:'Arial'; font-size:26px; line-height:26px; text-align:center; color:red;">Url Login {{ 'https://webkamu.indonesiacore.com/login' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" class="text2 white" style="font-family:'Arial'; font-size:26px; line-height:26px; text-align:center; color:red;">Email :  {{ $data['email'] }} | Password : Password123</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text white pb20" style="font-family:Arial,sans-serif; font-size:14px; line-height:26px; text-align:left; color:black; padding-bottom:20px;">
                                                Demi alasan keamanan, <b>Jangan teruskan</b> atau <b>berikan</b> kode ini kepada siapa pun termasuk Archiloka.
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </th>
                    <th class="column" width="50" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"></th>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END Body / Grey -->
@stop