@extends('admin_panel.layout.admin-master')
@section('content')


<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
            <h1>Sub Category</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Sub Category</p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="ec-cat-list card card-default mb-24px">
                    <div class="card-body">
                        @if(isset($category))

                        <div class="ec-cat-form">
                            <h4>Update Sub Category</h4>

                            <form action="{{ route('update.category') }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="slug" value="{{ $category->slug }}">


                                <div class="form-group row">
                                    <label for="text" class="col-12 col-form-label">Name</label>
                                    <div class="col-12">
                                        <input id="text" name="name" value="{{ $category->category_name }}" class="form-control here slug-title" type="text">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="text" class="col-12 col-form-label">Status</label>
                                    <div class="col-12">
                                        <select name="status" class="form-control">
                                            <option value="A" {{ $category->status=='A' ? 'selected' : '' }}</option>Active</option>

                                            <option value="I" {{ $category->status=='I' ? 'selected' : '' }}>Inactive</option>



                                        </select>

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="slug" class="col-12 col-form-label">Slug</label>
                                    <div class="col-12">
                                        <input id="slug" name="slug" value="{{ $category->slug }}" class="form-control here set-slug" type="text">


                                        <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Short Description</label>
                                    <div class="col-12">
                                        <textarea id="sortdescription" name="short_description" cols="40" rows="2" class="form-control">{{ $category->short_description }}</textarea>

                                    </div>
                                </div>
                                @if(isset($category->category_image))

                                <div class="form-group">
                                    <label>Sub Category Image</label>
                                    <input type="file" class="form-control" name="category_image" value="{{ $category->category_image }}" />

                                    <img style="width: 43%;" src="{{ asset(env('APP_URL')).'/'. $category->category_image}}" alt="">

                                </div>
                                @endif

                                {{-- <div class="form-group">
                                    <label>Category Image</label>
                                    <input type="file" class="form-control" name="category_image" />
                                </div> --}}


                                <div class="form-group row">
                                    <label for="parent-category" class="col-12 col-form-label">Parent Category</label>
                                    <div class="col-12">
                                        <select id="parent-category" name="parent_category" class="custom-select">
                                            @php

                                            $parent_category = \App\Models\Category::where(function($query){

                                            $query->whereNull('parent_category');
                                            })->get();


                                            @endphp
                                            @foreach($parent_category as $categories)

                                            <option value="{{ $categories->id }}" {{ $category->parent_category==$categories->id ? 'selected' : "" }}>{{ $categories->category_name }}</option>

                                            @endforeach
                                            {{-- <option value="uncategorized">Footwear</option>
                                            <option value="new category">Jewellry</option>
                                            <option value="new category">Perfume</option>
                                            <option value="new category">Cosmatics</option>
                                            <option value="new category">Glasses</option>
                                            <option value="new category">Bags</option> --}}
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Full Description</label>
                                    <div class="col-12">
                                        <textarea id="fulldescription" name="full_description" cols="40" rows="4" class="form-control">{{ $category->full_description }}</textarea>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Product Tags <span>( Type and
                                            make comma to separate tags )</span></label>
                                    <div class="col-12">
                                        <input type="text" value="{{ $category->tags }}" class="form-control" id="group_tag" name="tags" value="" placeholder="" data-role="tagsinput">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                        @else
                        <div class="ec-cat-form">
                            <h4>Add Sub Category</h4>

                            <form action="{{ route('add.category') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="text" class="col-12 col-form-label">Name</label>
                                    <div class="col-12">
                                        <input id="text" name="name" class="form-control here slug-title" type="text">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="slug" class="col-12 col-form-label">Slug</label>
                                    <div class="col-12">
                                        <input id="slug" name="slug" class="form-control here set-slug" type="text">
                                        <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Short Description</label>
                                    <div class="col-12">
                                        <textarea id="sortdescription" name="short_description" cols="40" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Category Image</label>
                                    <input type="file" class="form-control" name="category_image" />
                                </div>


                                <div class="form-group row">
                                    <label for="parent-category" class="col-12 col-form-label">Parent Category</label>

                                    <div class="col-12">
                                        <select id="parent-category" name="parent_category" class="custom-select">
                                            @php
                                            $categories = \App\Models\Category::where(function($query){
                                            $query->whereNull('parent_category');
                                            })->get();


                                            @endphp


                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                            {{-- <option value="uncategorized">Footwear</option>
                                            <option value="new category">Jewellry</option>
                                            <option value="new category">Perfume</option>
                                            <option value="new category">Cosmatics</option>
                                            <option value="new category">Glasses</option>
                                            <option value="new category">Bags</option> --}}
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Full Description</label>
                                    <div class="col-12">
                                        <textarea id="fulldescription" name="full_description" cols="40" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Product Tags <span>( Type and
                                            make comma to separate tags )</span></label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="group_tag" name="tags" value="" placeholder="" data-role="tagsinput">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                        @endif
                    </div>

                </div>
            </div>
            <div class="col-xl-8 col-lg-12">
                <div class="ec-cat-list card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table">
                                <thead>
                                    <tr>
                                        {{-- <th>Thumb</th> --}}
                                        <th>Name</th>
                                        <th>Parent Categories</th>
                                        <th>Product</th>
                                        <th>Total Sell</th>
                                        <th>Status</th>
                                        <th>Trending</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php

                                    $sub_categories=App\Models\Category::where(function($query){
                                    $query->whereNotNull('parent_category');

                                    })->get();


                                    @endphp
                                    @foreach($sub_categories as $categories)

                                    <tr>
                                        {{-- <td><img class="cat-thumb" src="assets/img/category/clothes.png" alt="Product Image" /></td> --}}
                                        <td>{{ $categories->category_name }}</td>



                                        <td>
                                            <span class="ec-sub-cat-list">
                                                @php
                                                $parent = App\Models\Category::where('id', $categories->parent_category)->first();


                                                @endphp
                                                <span class="ec-sub-cat-count" title="Parent Category"></span>
                                                <span class="ec-sub-cat-tag">{{ $parent->category_name }}</span>

                                                {{-- <span class="ec-sub-cat-tag">Shirt</span>
                                                <span class="ec-sub-cat-tag">Dress</span>
                                                <span class="ec-sub-cat-tag">Jeans</span>
                                                <span class="ec-sub-cat-tag">Top</span> --}}
                                            </span>
                                        </td>
                                        <td>28</td>
                                        <td>2161</td>
                                        @php
                                        if($categories->status=='A'){
                                        $status="Active";
                                        }else{
                                        $status="Inactive";
                                        }
                                        @endphp
                                        <td>{{ $status }}</td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('edit.sub-category',['slug'=>$categories->slug]) }}">Edit</a>

                                                    <a onclick="return confirm('Are you sure?')" class="dropdown-item" href="{{ route('delete.category',['id'=>$categories->id]) }}">Delete</a>



                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach
                                    {{-- <tr>
                                        <td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="Product Image" /></td>
                                        <td>Footwear</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                <span class="ec-sub-cat-tag">Sports</span>
                                                <span class="ec-sub-cat-tag">Casual</span>
                                                <span class="ec-sub-cat-tag">safety shoes </span>
                                                <span class="ec-sub-cat-tag">Sandal</span>
                                            </span>
                                        </td>
                                        <td>68</td>
                                        <td>5161</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="cat-thumb" src="assets/img/category/jewelry.png" alt="Product Image" /></td>
                                        <td>Jewelry</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                <span class="ec-sub-cat-tag">necklace</span>
                                                <span class="ec-sub-cat-tag">chain</span>
                                                <span class="ec-sub-cat-tag">rings</span>
                                                <span class="ec-sub-cat-tag">earings</span>
                                            </span>
                                        </td>
                                        <td>68</td>
                                        <td>5161</td>
                                        <td><span class="inactive">Inactive</span></td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="cat-thumb" src="assets/img/category/perfume.png" alt="Product Image" /></td>
                                        <td>Perfume</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                <span class="ec-sub-cat-tag">Clothes perfume</span>
                                                <span class="ec-sub-cat-tag">deodorant </span>
                                                <span class="ec-sub-cat-tag">Flower fragrance </span>
                                                <span class="ec-sub-cat-tag">Air Freshener</span>
                                            </span>
                                        </td>
                                        <td>38</td>
                                        <td>1561</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="cat-thumb" src="assets/img/category/cosmetics.png" alt="Product Image" /></td>
                                        <td>Cosmetics</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">10</span>
                                                <span class="ec-sub-cat-tag">Makeup kit</span>
                                                <span class="ec-sub-cat-tag">Hair gel</span>
                                                <span class="ec-sub-cat-tag">sunscreen</span>
                                                <span class="ec-sub-cat-tag">facewash</span>
                                                <span class="ec-sub-cat-tag">Body shop</span>
                                                <span class="ec-sub-cat-tag">Lipstick</span>
                                                <span class="ec-sub-cat-tag">eye liner</span>
                                                <span class="ec-sub-cat-tag">Hair Shampoo</span>
                                                <span class="ec-sub-cat-tag">Beauty Cream</span>
                                                <span class="ec-sub-cat-tag">Skin Serum</span>
                                            </span>
                                        </td>
                                        <td>18</td>
                                        <td>1061</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-danger">Low</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="cat-thumb" src="assets/img/category/glasses.png" alt="Product Image" /></td>
                                        <td>Glasses</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">2</span>
                                                <span class="ec-sub-cat-tag">Sunglasses </span>
                                                <span class="ec-sub-cat-tag">Lenses </span>
                                            </span>
                                        </td>
                                        <td>82</td>
                                        <td>10061</td>
                                        <td><span class="inactive">Inactive</span></td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="cat-thumb" src="assets/img/category/bag.png" alt="Product Image" /></td>
                                        <td>Bags</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                <span class="ec-sub-cat-tag">shopping bag</span>
                                                <span class="ec-sub-cat-tag">Gym backpack</span>
                                                <span class="ec-sub-cat-tag">purse </span>
                                                <span class="ec-sub-cat-tag">wallet </span>
                                            </span>
                                        </td>
                                        <td>18</td>
                                        <td>3061</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="Product Image" /></td>
                                        <td>Footwear</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                <span class="ec-sub-cat-tag">Sports</span>
                                                <span class="ec-sub-cat-tag">Casual</span>
                                                <span class="ec-sub-cat-tag">safety shoes </span>
                                                <span class="ec-sub-cat-tag">Sandal</span>
                                            </span>
                                        </td>
                                        <td>68</td>
                                        <td>5161</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="cat-thumb" src="assets/img/category/jewelry.png" alt="Product Image" /></td>
                                        <td>Jewelry</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                <span class="ec-sub-cat-tag">necklace</span>
                                                <span class="ec-sub-cat-tag">chain</span>
                                                <span class="ec-sub-cat-tag">rings</span>
                                                <span class="ec-sub-cat-tag">earings</span>
                                            </span>
                                        </td>
                                        <td>68</td>
                                        <td>5161</td>
                                        <td><span class="inactive">Inactive</span></td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="cat-thumb" src="assets/img/category/perfume.png" alt="Product Image" /></td>
                                        <td>Perfume</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                <span class="ec-sub-cat-tag">Clothes perfume</span>
                                                <span class="ec-sub-cat-tag">deodorant </span>
                                                <span class="ec-sub-cat-tag">Flower fragrance </span>
                                                <span class="ec-sub-cat-tag">Air Freshener</span>
                                            </span>
                                        </td>
                                        <td>38</td>
                                        <td>1561</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> --}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->
</div>
</div>


<!-- Footer -->
{{-- <footer class="footer mt-auto">
        <div class="copyright bg-white">
            <p>
                Copyright &copy; <span id="ec-year"></span><a class="text-primary" href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin Dashboard</a>. All Rights Reserved.
            </p>
        </div>
    </footer>

</div> <!-- End Page Wrapper --> --}}

@endsection
