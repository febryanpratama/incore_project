@extends('layouts.back')

@section('content')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Data Table</h6>
                    <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                    <div class="table-responsive">
                        <div id="dataTableExample_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table  class="table dataTable no-footer" aria-describedby="dataTableExample_info">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="sorting sorting_asc"
                                                    tabindex="0"
                                                    aria-controls="dataTableExample"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 262.875px;"
                                                >
                                                    Nama Lengkap
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 408.781px;">Invoice</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 199.031px;">Domain</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 96.6406px;">Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 192.016px;">Url Pembayaran</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 142.094px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 142.094px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaction as $item)
                                            {{-- {{ dd($item) }} --}}
                                                <tr class="odd">
                                                    <td class="sorting_1">{{ $item->customer_name }}</td>
                                                    <td>{{ $item->merchant_ref }}</td>
                                                    <td>
                                                        @php
                                                            $data = json_decode($item->order_items);
                                                            // dd($data);
                                                            $domain = $data[2]->name;
                                                            $fixed = str_replace('Biaya Domain', '', $domain);
                                                        @endphp
                                                        {{ $fixed }}
                                                    </td>
                                                    <td>{{ number_format($item->amount) }}</td>
                                                    <td>{{ $item->checkout_url }}</td>
                                                    <td>
                                                        @switch($item->status)
                                                            @case('UNPAID')
                                                                <div class="text-danger">Belum Dibayar</div>
                                                                @break
                                                            @case('PAID')
                                                                <div class="text-danger">Dibayar</div>
                                                                
                                                                @break
                                                            @case('EXPIRED')
                                                                <div class="text-info">KADALUARSA</div>
                                                                
                                                                @break
                                                            @default
                                                                
                                                        @endswitch
                                                    </td>
                                                    <td class="d-flex">
                                                        <a href="#" class="btn btn-sm btn-primary mx-1">Detail</a>
                                                        <form action="#" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                        </form>
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
        </div>
    </div>
</div>

@endsection
