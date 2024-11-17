@extends('layouts.app')

@section('title', 'Invoice')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Invoice</h1>
            <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Invoice</div>
            </div>
        </div>

        <div class="section-body">
            <div class="invoice">
            <div class="invoice-print">
                <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-title">
                    <h2>Invoice</h2>
                    <div class="invoice-number">{{ $order->invoice }}</div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-md-6">
                        <address>
                        <strong>Billed To:</strong><br>
                            RM Ayam Geprek Prothol<br>
                            Jln. Raya Maos-Adipala<br>
                            Desa Karangreja - Cilacap<br>
                            Jawa Tengah, Indonesia
                        </address>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <address>
                        <strong>Shipped To:</strong><br>
                        PT Developer Kreatif Nusantara<br>
                        1234 Main<br>
                        Apt. 4B<br>
                        Cilacap, Indonesia
                        </address>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <address>
                        <strong>Payment Method:</strong><br>
                        {{ $order->payment_method }}<br>
                        </address>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <address>
                        <strong>Order Date:</strong><br>
                        {{ $order->transaction_time }}<br><br>
                        </address>
                    </div>
                    </div>
                </div>
                </div>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="section-title">Order Summary</h2>
                                <p class="section-lead">
                            </div>


                            <p class="section-lead">
                                You cannot manage all orders, such as editing, deleting and others.
                            </p>

                            <div class="card-body">

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>

                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total Price</th>

                                        </tr>
                                        @foreach ($orderItems as $item)
                                            <tr>

                                                <td>{{ $item->product->name }}</td>
                                                </td>
                                                <td>
                                                    {{ $item->product->price }}
                                                </td>
                                                <td>
                                                    {{ $item->quantity }}
                                                </td>
                                                <td>
                                                    {{ $item->total_price }}

                                                </td>

                                            </tr>
                                        @endforeach
                                    </table>
                            </div>
                                            <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="section-title">Payment Method</div>
                        <p class="section-lead">The payment method that we provide is to make it easier for you to pay invoices.</p>
                        <div class="images">
                        <img src="{{ asset('/img/qris_logo.svg') }}" width="150" alt="qris">
                        </div>
                    </div>
                    <div class="col-lg-4 text-right">
                        <div class="invoice-detail-item">
                        <div class="invoice-detail-name">Total Item</div>
                        <div class="invoice-detail-value">{{ $order->total_item }}</div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <div class="invoice-detail-item">
                        <div class="invoice-detail-name">Total</div>
                        <div class="invoice-detail-value">{{ $order->total_price }}</div>
                        {{-- <div class="invoice-detail-value invoice-detail-value-lg">@currency($order->total_price)</div> --}}
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <hr>
        </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
