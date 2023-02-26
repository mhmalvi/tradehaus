@extends('admin_panel.layout.admin-master')

@section('admin')


<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>New Arrival Product</h1>
                {{-- @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
            </div>
            @endif --}}

            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Product</p>
        </div>
        {{-- <div>
            <a href="product-list.html" class="btn btn-primary"> View All
            </a>
        </div> --}}
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>New Arrival Product</h2>

                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        @if(isset($product))

                        <form action="{{ route('admin.update_arrival') }}" method="post" enctype="multipart/form-data">
                            @method('PUT')

                            @else
                            <form action="{{ route('store.arrival') }}" method="post" enctype="multipart/form-data">
                                @endif
                                @csrf
                                @if(isset($product))
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                @endif
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="ec-vendor-img-upload">
                                            <div class="ec-vendor-main-img">
                                                <div class="form-group">
                                                    @if(isset($product))
                                                    <div class="avatar-edit">
                                                        <input type="file" class="form-control" name="image" value="{{ $product->image }}" />

                                                        <img style=" width: 43%;margin-top:5px;" src="{{ asset(env('APP_URL').'/'. $product->image)}}" alt="">
                                                    </div>
                                                    @else
                                                    <div class="avatar-edit">
                                                        <input type="file" class="form-control" name="image" />
                                                        <img style="width: 43%;" src="" alt="">
                                                    </div>

                                                    @endif
                                                </div>
                                                {{-- <div class="thumb-upload-set colo-md-12">
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' name="product_image_2" id="thumbUpload01" class="ec-image-upload" accept=".png, .jpg, .jpeg" />

                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload02" name="product_image_3" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload03" name="product_image_4" class="ec-image-upload" accept=".png, .jpg, .jpeg" />

                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload04" name="product_image_5" class="ec-image-upload" accept=".png, .jpg, .jpeg" />

                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload05" name="product_image_6" class="ec-image-upload" accept=".png, .jpg, .jpeg" />

                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload06" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="ec-vendor-upload-detail">
                                            <div class="row g-3">

                                                @if(isset($product))
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Product name</label>
                                                    <input type="text" name="title" class="form-control slug-title" id="inputEmail4" value="{{ $product->title }}">
                                                </div>
                                                @else
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Product name</label>
                                                    <input type="text" name="title" class="form-control slug-title" id="inputEmail4" required>
                                                </div>

                                                @endif
                                                {{-- <div class="col-md-6">
                                                    <label class="form-label">Select Categories</label>
                                                    <select name="category_id" id="Categories" class="form-select">
                                                        @php
                                                        $parent_categories = App\Models\Category::where(function($query){
                                                        $query->whereNull('parent_category');
                                                        })->get();

                                                        @endphp
                                                        @foreach($parent_categories as $categories)

                                                        <optgroup label="{{ $categories->category_name }}">
                                                @php
                                                $child_categories = App\Models\Category::where('parent_category',$categories->id)->get();

                                                @endphp
                                                @foreach($child_categories as $child)

                                                <option value="{{ $child->id }}">{{ $child->category_name }}</option>


                                                @endforeach
                                                </optgroup>
                                                @endforeach
                                                </select>
                                            </div> --}}
                                            {{-- <div class="col-md-8 mb-25 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <label>Is special</label>

                                                        <input type="checkbox" name="isSpecial" value="" class="">




                                                    </div>

                                                </div>
                                                <div class="col-md-8 mb-25">
                                                    <div class="form-check form-check-inline">
                                                        <label>Is exclusive</label>

                                                        <input type="checkbox" name="isSpecial" value="">





                                                    </div>

                                                </div>

                                                <div class="col-md-8 mb-25">
                                                    <div class="form-check form-check-inline">
                                                        <label>Is deals of the days</label>

                                                        <input type="checkbox" name="isSpecial" value="">




                                                    </div>

                                                </div> --}}

                                            @if(isset($product))

                                            <div class="col-md-12">
                                                <label for="" class="form-label">Product Code Name</label>
                                                <input type="text" name="code_name" class="form-control" id="" value="{{ $product->code_name }}">
                                            </div>
                                            @else
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Product Code Name</label>
                                                <input type="text" name="code_name" class="form-control" id="" required>
                                            </div>
                                            @endif
                                            @if(isset($product))

                                            <div class="col-md-12">
                                                <label for="" class="col-12 col-form-label">Slug</label>
                                                <div class="col-12">
                                                    <input id="" name="slug" class="form-control here set-slug" value="{{ $product->slug }}" type="string">

                                                </div>
                                            </div>
                                            @else
                                            <div class="col-md-12">
                                                <label for="" class="col-12 col-form-label">Slug</label>
                                                <div class="col-12">
                                                    <input id="" name="slug" class="form-control here set-slug" type="string" required>

                                                </div>
                                            </div>
                                            @endif
                                            {{-- <div class="col-md-12">
                                                    <label for="" class="col-12 col-form-label">Discount</label>
                                                    <div class="col-12">
                                                        <input id="product_discount" name="product_discount" class="form-control here " type="text">

                                                    </div>
                                                </div> --}}
                                            @if(isset($product))
                                            <div class="col-md-12">
                                                <label class="form-label">Short Description</label>
                                                <textarea class="form-control" name="short_description" rows="2" value="{{ $product->short_description }}"></textarea>


                                            </div>
                                            @else
                                            <div class="col-md-12">
                                                <label class="form-label">Short Description</label>
                                                <textarea class="form-control" name="short_description" rows="2" required></textarea>


                                            </div>
                                            @endif
                                            {{-- <div class="col-md-4 mb-25">
                                                    <label class="form-label">Colors</label>
                                                    <input type="color" name="color_1" class="form-control form-control-color" id="exampleColorInput1" value="#ff6191" title="Choose your color">
                                                    <input type="color" name="color_2" class="form-control form-control-color" id="exampleColorInput2" value="#33317d" title="Choose your color">
                                                    <input type="color" name="color_3" class="form-control form-control-color" id="exampleColorInput3" value="#56d4b7" title="Choose your color">
                                                    <input type="color" name="color_4" class="form-control form-control-color" id="exampleColorInput4" value="#009688" title="Choose your color">
                                                </div> --}}
                                            {{-- <div class="col-md-8 mb-25">
                                                <label class="form-label">Size</label>
                                                <div class="form-checkbox-box">
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" name="size1" value="S">
                                                        <label>S</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" name="size2" value="M">
                                                        <label>M</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" name="size3" value="L">
                                                        <label>L</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" name="size4" value="XL">
                                                        <label>XL</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" name="size5" value="XXL">
                                                        <label>XXL</label>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            @if(isset($product))
                                            <div class="col-md-6">
                                                <label class="form-label">Price <span>( In USD
                                                        )</span></label>
                                                <input type="number" name="price" class="form-control" id="price1" value="{{ $product->price }}" required>

                                            </div>
                                            @else
                                            <div class="col-md-6">
                                                <label class="form-label">Price <span>( In USD
                                                        )</span></label>
                                                <input type="number" name="price" class="form-control" id="price1" required>

                                            </div>
                                            @endif
                                            @if(isset($product))
                                            <div class="col-md-6">
                                                <label class="form-label">Quantity</label>
                                                <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}" id="quantity1">

                                            </div>
                                            @else
                                            <div class="col-md-6">
                                                <label class="form-label">Quantity</label>
                                                <input type="number" name="quantity" class="form-control" id="quantity1">

                                            </div>
                                            @endif
                                            @if(isset($product))

                                            <div class="col-md-12">
                                                <label class="form-label">Full Details</label>
                                                {{-- <textarea class="form-control" name="product_details" rows="4"></textarea> --}}
                                                <textarea class="ckeditor form-control" name="full_details">{{ $product->full_details }}</textarea>





                                            </div>
                                            @else
                                            <div class="col-md-12">
                                                <label class="form-label">Full Details</label>
                                                {{-- <textarea class="form-control" name="product_details" rows="4"></textarea> --}}
                                                <textarea class="ckeditor form-control" name="full_details"></textarea>




                                            </div>
                                            @endif
                                            {{-- <div class="col-md-12">
                                                    <label class="form-label">Product Tags <span>( Type and
                                                            make comma to separate tags )</span></label>
                                                    <input type="text" class="form-control" id="group_tag" name="tags" value="" placeholder="" data-role="tagsinput" />
                                                </div> --}}
                                            @if(isset($product))

                                            <div class="col-md-12 mt-3">
                                                <button type="submit" name="submit" class="btn btn-primary">Update</button>

                                            </div>
                                            @else
                                            <div class="col-md-12 mt-3">

                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <div class="card card-default">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="responsive-data-table" class="table" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    {{-- <th>Product</th> --}}
                                                                    <th>Title</th>
                                                                    <th>Price</th>
                                                                    {{-- @if(isset($products->product_discount)) --}}
                                                                    <th>Offer</th>
                                                                    {{-- @endif --}}
                                                                    <th>Purchased</th>
                                                                    <th>Stock</th>
                                                                    <th>Status</th>
                                                                    {{-- <th>Date</th> --}}
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                @php
                                                                $products = App\Models\NewArrival::all();

                                                                @endphp
                                                                @foreach($products as $product)
                                                                <tr>
                                                                    @php
                                                                    $base = env('APP_URL');
                                                                    @endphp
                                                                    <td>{{ $product->title }}</td>
                                                                    <td>{{ $product->price }}</td>

                                                                    <td></td>
                                                                    {{-- @if(isset($products->product_discount)) --}}

                                                                    <td></td>

                                                                    {{-- @endif --}}
                                                                    <td>{{ $product->quantity }}</td>

                                                                    <td></td>
                                                                    <td></td>

                                                                    {{-- <td>2021-10-30</td> --}}
                                                                    <td>
                                                                        <div class="btn-group mb-1">
                                                                            <button type="button" class="btn btn-outline-success">Info</button>
                                                                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                                                <span class="sr-only">Info</span>
                                                                            </button>

                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="{{ route('admin.edit_arrival',['slug'=>$product->slug]) }}">Edit</a>
                                                                                <a class="dropdown-item" href="{{ route('admin.delete_arrival',['id'=>$product->id]) }}">Delete</a>

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

                                </div>
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- End Content -->
</div> <!-- End Content Wrapper -->
</div>
</div>



<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

@endsection
