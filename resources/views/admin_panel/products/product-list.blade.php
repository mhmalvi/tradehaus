@extends('admin_panel.layout.admin-master')

@section('admin')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Product</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Product</p>
            </div>
            <div>
                <a href="{{ route('add.product') }}" class="btn btn-primary"> Add Porduct</a>
            </div>
        </div>
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        @if(isset($products->product_discount))
                                        <th>Offer</th>
                                        @endif
                                        <th>Purchased</th>
                                        <th>Stock</th>
                                        <th>Status</th>
                                        {{-- <th>Date</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($product as $products)
                                    <tr>
                                        @php
                                        $base = env('APP_URL');
                                        @endphp
                                        <td><img class="tbl-thumb" src="{{ asset($base.'/'. $products->product_image ) }}" alt="Product Image" /></td>
                                        <td>{{ $products->product_name }}</td>
                                        <td>${{ $products->product_price }}</td>
                                        @if(isset($products->product_discount))

                                        <td>{{ $products->product_discount }}% OFF</td>

                                        @endif
                                        <td>80</td>
                                        <td>{{ $products->product_quantity }}</td>
                                        <td>{{ $products->status }}</td>

                                        {{-- <td>2021-10-30</td> --}}
                                        <td>
                                            <div class="btn-group mb-1">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('edit.product',['id'=>$products->id]) }}">Edit</a>

                                                    <a class="dropdown-item" href="{{ route('delete.product',['id'=>$products->id]) }}">Delete</a>

                                                </div>
                                            </div>
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
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->
@endsection
