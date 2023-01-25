@extends('admin_panel.layout.admin-master')

@section('content')

<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Add Product</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Product</p>
            </div>
            <div>
                <a href="product-list.html" class="btn btn-primary"> View All
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Add Product</h2>
                    </div>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <div class="card-body">
                        <div class="row ec-vendor-uploads">
                            <form action="{{ route('update.product',[$product->id]) }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="ec-vendor-img-upload">
                                            <div class="ec-vendor-main-img">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        {{-- {{ $product->id }} --}}

                                                        <input type='file' name="product_image" value="{{ $product->product_image }}" id="imageUpload" class="ec-image-upload" accept=".png, .jpg, .jpeg" />


                                                        <label for="imageUpload"><img src="{{ asset(env('APP_URL').'/'.$product->product_image) }}" class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="avatar-preview ec-preview">
                                                        <div class="imagePreview ec-div-preview">
                                                            <img class="ec-image-preview" name="product_image_1" src="{{ asset(env('APP_URL').'/'.$product->product_image) }}" alt="edit" />


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload-set colo-md-12">
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' name="product_image_2" id="thumbUpload01" class="ec-image-upload" accept=".png, .jpg, .jpeg" />

                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        @if(isset($product->product_image_1))

                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="{{ asset(env('APP_URL').'/'.$product->product_image_1) }}" alt="edit" />

                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                        @endif

                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload02" name="product_image_3" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        @if(isset($product->product_image_2))

                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="{{ asset(env('APP_URL').'/'.$product->product_image_2) }}" alt="edit" />

                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                        @endif

                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload03" name="product_image_4" class="ec-image-upload" accept=".png, .jpg, .jpeg" />

                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        @if(isset($product->product_image_3))

                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="{{ asset(env('APP_URL').'/'.$product->product_image_3) }}" alt="edit" />

                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                        @endif

                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload04" name="product_image_5" class="ec-image-upload" accept=".png, .jpg, .jpeg" />

                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        @if(isset($product->product_image_4))

                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="{{ asset(env('APP_URL').'/'.$product->product_image_4) }}" alt="edit" />

                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                        @endif

                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload05" name="product_image_6" class="ec-image-upload" accept=".png, .jpg, .jpeg" />

                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        @if(isset($product->product_image_5))

                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="{{ asset(env('APP_URL').'/'.$product->product_image_5) }}" alt="edit" />

                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                        @endif

                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload06" class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><img src="assets/img/icons/edit.svg" class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        @if(isset($product->product_image_6))

                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="{{ asset(env('APP_URL').'/'.$product->product_image_6) }}" alt="edit" />

                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview" src="assets/img/products/vender-upload-thumb-preview.jpg" alt="edit" />
                                                            </div>
                                                        </div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="ec-vendor-upload-detail">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Product name</label>
                                                    <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control slug-title" id="inputEmail4" required>
                                                </div>
                                                <div class="col-md-6">
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
                                                        {{-- <optgroup label="Furniture">
                                                            <option value="table">Table</option>
                                                            <option value="sofa">Sofa</option>
                                                        </optgroup>
                                                        <optgroup label="Electronic">
                                                            <option value="phone">I Phone</option>
                                                            <option value="laptop">Laptop</option>
                                                        </optgroup> --}}
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label">Product Code Name</label>
                                                    <input type="text" name="product_code_name" value="{{ $product->product_code_name }}" class="form-control" id="" required>

                                                </div>

                                                <div class="col-md-12">
                                                    <label for="" class="col-12 col-form-label">Slug</label>
                                                    <div class="col-12">
                                                        <input id="" name="slug" value="{{ $product->slug }}" class="form-control here set-slug" type="string">


                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="col-12 col-form-label">Status</label>
                                                    <div class="col-12">
                                                        <select name="status" class="form-control">
                                                            <option value="A" {{ $product->status=='A' ? 'selected' : '' }}</option>Active</option>
                                                            <option value="I" {{ $product->status=='I' ? 'selected' : '' }}>Inactive</option>


                                                        </select>


                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="" class="col-12 col-form-label">Discount</label>
                                                    <div class="col-12">
                                                        <input id="product_discount" value="{{ $product->product_discount }}" name="product_discount" class="form-control here " type="text">


                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label">Short Description</label>
                                                    <textarea class="form-control" name="product_short_description" rows="2">{{ $product->product_short_description }}</textarea>




                                                </div>
                                                <div class="col-md-4 mb-25">
                                                    <label class="form-label">Colors</label>
                                                    <input type="color" name="color_1" class="form-control form-control-color" id="exampleColorInput1" value="{{ $product->color_1 }}" title="Choose your color">
                                                    <input type="color" name="color_2" class="form-control form-control-color" id="exampleColorInput2" value="{{ $product->color_2 }}" title="Choose your color">
                                                    <input type="color" name="color_3" class="form-control form-control-color" id="exampleColorInput3" value="{{ $product->color_3 }}" title="Choose your color">
                                                    <input type="color" name="color_4" class="form-control form-control-color" id="exampleColorInput4" value="{{ $product->color_4 }}" title="Choose your color">
                                                </div>
                                                <div class="col-md-8 mb-25">
                                                    <label class="form-label">Size</label>
                                                    <div class="form-checkbox-box">
                                                        <div class="form-check form-check-inline">
                                                            <input type="checkbox" name="size1" value="{{ $product->size1 }}">
                                                            <label>S</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input type="checkbox" name="size2" value="{{ $product->size2 }}">

                                                            <label>M</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input type="checkbox" name="size3" value="{{ $product->size3 }}">

                                                            <label>L</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input type="checkbox" name="size4" value="{{ $product->size4 }}">

                                                            <label>XL</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input type="checkbox" name="size5" value="{{ $product->size5 }}">

                                                            <label>XXL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Price <span>( In USD
                                                            )</span></label>

                                                    <input type="number" value="{{ $product->product_price }}" name="product_price" class="form-control" id="price1" required>

                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Quantity</label>
                                                    <input type="number" value="{{ $product->product_quantity }}" name=" product_quantity" class="form-control" id="quantity1">


                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label">Full Detail</label>
                                                    {{-- <textarea class="form-control" name="product_details" rows="4"></textarea> --}}
                                                    <textarea class="ckeditor form-control" name="product_details">{{ $product->product_details }}</textarea>




                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label">Product Tags <span>( Type and
                                                            make comma to separate tags )</span></label>
                                                    <input type="text" class="form-control" id="group_tag" name="tags" value="{{ $product->tags }}" placeholder="" data-role="tagsinput" />

                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
