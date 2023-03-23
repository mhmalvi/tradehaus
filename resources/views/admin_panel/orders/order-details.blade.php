@extends('admin_panel.layout.admin-master')

@section('admin')


<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
            <h1>Order Detail</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Orders
            </p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="ec-odr-dtl card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                        <h2 class="ec-odr">Order Detail<br>
                            <span class="small">Order ID: {{ $order->id }}</span>
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <address class="info-grid">
                                    <div class="info-title"><strong>Customer:</strong></div><br>
                                    <div class="info-content">
                                        {{ $order->address }}<br>
                                        {{ $order->city }}-{{ $order->post_code }}<br>
                                        {{-- San Francisco, CA 94107<br> --}}
                                        <abbr title="Phone">P:</abbr> {{ $order->phone }}
                                    </div>
                                </address>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <address class="info-grid">
                                    <div class="info-title"><strong>Shipped To:</strong></div><br>
                                    <div class="info-content">
                                        {{ $order->first_name }} {{ $order->last_name }}<br>

                                        {{ $order->address }},<br>

                                        {{ $order->city }}-{{ $order->post_code }}<br>

                                        <abbr title="Phone">P:</abbr> {{ $order->phone }}

                                    </div>
                                </address>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <address class="info-grid">
                                    <div class="info-title"><strong>Payment Method:</strong></div><br>
                                    <div class="info-content">
                                        Visa ending **** 1234<br>
                                        h.elaine@gmail.com<br>
                                    </div>
                                </address>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <address class="info-grid">
                                    <div class="info-title"><strong>Order Date:</strong></div><br>
                                    @php
                                        $date = date('d M Y', strtotime($order->created_at));

                                    @endphp
                                    <div class="info-content">
                                        {{-- 4:34PM,<br> --}}
                                        {{ $date }}


                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="tbl-title">PRODUCT SUMMARY</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped o-tbl">
                                        <thead>
                                            <tr class="line">
                                                <td><strong>#</strong></td>
                                                <td class="text-center"><strong>IMAGE</strong></td>
                                                <td class="text-center"><strong>PRODUCT</strong></td>
                                                <td class="text-center"><strong>PRICE/UNIT</strong></td>
                                                <td class="text-right"><strong>QUANTITY</strong></td>
                                                <td class="text-right"><strong>SUBTOTAL</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $products = App\Models\OrderedProducts::where('order_id',$order->id)->get();
                                           // @dump(json_encode($products));
                                        @endphp
                                        @foreach($products as $product)
                                            <tr>
                                                <td>1</td>
                                                <td><img class="product-img" src="{{ env('APP_URL').'/'.$product->product_image }} " alt="" /></td>
                                                <td><strong>{{ $product->product_name }}</strong></td>
                                                <td class="text-center">${{ $product->product_price }}</td>
                                                <td class="text-center">{{ $product->product_quantity }}</td>
                                                @php
                                                    $sub_total = $product->product_price*$product->product_quantity


                                                @endphp
                                                <td class="text-right">${{ $sub_total }}</td>
                                            </tr>
                                            @endforeach
                                            {{-- <tr>
                                                <td>2</td>
                                                <td><img class="product-img" src="assets/img/products/p2.jpg" alt="" /></td>
                                                <td><strong>Tee-Shirt For Men</strong><br>Classie and full
                                                    slive tee-shirt for boy or man.</td>
                                                <td class="text-center">15</td>
                                                <td class="text-center">$75</td>
                                                <td class="text-right">$1,125.00</td>
                                            </tr>
                                            <tr class="line">
                                                <td>3</td>
                                                <td><img class="product-img" src="assets/img/products/p4.jpg" alt="" /></td>
                                                <td><strong>Round Cap</strong><br>Comfertable round cut cap
                                                    for both.</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">$75</td>
                                                <td class="text-right">$150.00</td>
                                            </tr> --}}
                                            <tr>
                                                <td colspan="4"></td>
                                                <td class="text-right"><strong>Taxes</strong></td>
                                                <td class="text-right"><strong>N/A</strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                </td>
                                                <td class="text-right"><strong>Total</strong></td>
                                                <td class="text-right"><strong>${{ $order->sub_total }}</strong></td>
                                            </tr>

                                            <tr>
                                                <td colspan="4">
                                                </td>
                                                <td class="text-right"><strong>Payment Status</strong></td>
                                                <td class="text-right"><strong>PAID</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tracking Detail -->
                <div class="card mt-4 trk-order">
                    <div class="p-4 text-center text-white text-lg bg-dark rounded-top">
                        <span class="text-uppercase">Tracking Order No - </span>
                        <span class="text-medium">34VB5540K83</span>
                    </div>
                    <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
                        <div class="w-100 text-center py-1 px-2"><span class="text-medium">Shipped
                                Via:</span> UPS Ground</div>
                        <div class="w-100 text-center py-1 px-2"><span class="text-medium">Status:</span>
                            Checking Quality</div>
                        <div class="w-100 text-center py-1 px-2"><span class="text-medium">Expected
                                Date:</span> DEC 09, 2021</div>
                    </div>
                    <div class="card-body">
                        <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="mdi mdi-cart"></i></div>
                                </div>
                                <h4 class="step-title">Confirmed Order</h4>
                            </div>
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="mdi mdi-tumblr-reblog"></i></div>
                                </div>
                                <h4 class="step-title">Processing Order</h4>
                            </div>
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="mdi mdi-gift"></i></div>
                                </div>
                                <h4 class="step-title">Product Dispatched</h4>
                            </div>
                            <div class="step">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="mdi mdi-truck-delivery"></i></div>
                                </div>
                                <h4 class="step-title">On Delivery</h4>
                            </div>
                            <div class="step">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="mdi mdi-hail"></i></div>
                                </div>
                                <h4 class="step-title">Product Delivered</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->
@endsection