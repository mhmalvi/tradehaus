@extends('admin_panel.layout.admin-master')
@section('content')


<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
            <h1>Main Category</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Main Category</p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="ec-cat-list card card-default mb-24px">
                    <div class="card-body">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif

                        <div class="ec-cat-form">
                            @if(isset($category))
                            <h4>Update Category</h4>
                            <form action="{{ route('update.category') }}" method="post" enctype="multipart/form-data">

                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $category->id }}">
                                @else
                                <h4>Add New Category</h4>
                                <form action="{{ route('store.category') }}" method="post" enctype="multipart/form-data">

                                    @endif


                                    @csrf
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Name</label>
                                        <div class="col-12">
                                            @if(isset($category))

                                            <input id="text" name="name" value="<?=$category->category_name;?>" class="form-control here slug-title" type="text">
                                            @else
                                            <input id="text" name="name" class="form-control here slug-title" type="text">
                                            @endif
                                        </div>
                                    </div>
                                    @if(isset($category))

                                    <div class="form-group row">
                                        <label for="slug" class="col-12 col-form-label">Slug</label>
                                        <div class="col-12">

                                            <input id="slug" name="slug" value="<?=$category->slug;?>" class="form-control here set-slug" type="text">
                                            <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>
                                        </div>
                                    </div>
                                    @if(isset($category->category_image))

                                    <div class="form-group">
                                        <label>Category Image</label>
                                        <input type="file" class="form-control" name="category_image" value="{{ $category->category_image }}" />
                                        <img style="width: 43%;" src="{{ asset(env('APP_URL')).'/'. $category->category_image}}" alt="">
                                    </div>
                                    @endif
                                    @if(isset($category->status))

                                    <div class="form-group row">
                                        <label for="slug" class="col-12 col-form-label">Status</label>
                                        <div class="col-12">

                                            <select name="status">
                                                <option value="A" {{ $category->status=='A' ? 'selected' : "" }}>Active</option>


                                                <option value="I" {{ $category->status=='I' ? 'selected' : "" }}>Inactive</option>



                                            </select>
                                        </div>
                                    </div>
                                    @endif
                                    @else
                                    <div class="form-group row">
                                        <label for="slug" class="col-12 col-form-label">Slug</label>
                                        <div class="col-12">

                                            <input id="slug" name="slug" class="form-control here set-slug" type="text">
                                            <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Category Image</label>
                                        <input type="file" class="form-control" name="category_image" />
                                    </div>

                                    @endif
                                    @if(isset($category))

                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Short Description</label>
                                        <div class="col-12">
                                            <textarea id="sortdescription" name="short_description" cols="40" rows="2" class="form-control">{{ $category->short_description }}</textarea>

                                        </div>
                                    </div>
                                    @else
                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Short Description</label>
                                        <div class="col-12">
                                            <textarea id="sortdescription" name="short_description" cols="40" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($category))

                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Full Description</label>
                                        <div class="col-12">
                                            <textarea id="fulldescription" name="full_description" cols="40" rows="4" class="form-control">{{ $category->full_description }}</textarea>


                                        </div>
                                    </div>
                                    @else
                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Full Description</label>
                                        <div class="col-12">
                                            <textarea id="fulldescription" name="full_description" cols="40" rows="4" class="form-control"></textarea>

                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($category))

                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Product Tags <span>( Type and
                                                make comma to separate tags )</span></label>
                                        <div class="col-12">
                                            <input type="text" value="<?=$category->tags;?>" class="form-control" id="group_tag" name="tags" value="" placeholder="" data-role="tagsinput">

                                        </div>
                                    </div>
                                    @else
                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Product Tags <span>( Type and
                                                make comma to separate tags )</span></label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="group_tag" name="tags" value="" placeholder="" data-role="tagsinput">

                                        </div>
                                    </div>
                                    @endif


                                    <div class="row">
                                        <div class="col-12">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>

                        </div>
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
                                        <th>Thumb</th>
                                        <th>Name</th>
                                        <th>Sub Categories</th>
                                        <th>Product</th>
                                        <th>Total Sell</th>
                                        <th>Status</th>
                                        <th>Trending</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $categories = App\Models\Category::orderBy('id', 'desc')->where(function($query){
                                    $query->whereNull('parent_category');
                                    })->get();


                                    @endphp
                                    @foreach($categories as $category)
                                    <tr>
                                        <td><img class="cat-thumb" src="assets/img/category/clothes.png" alt="Product Image" /></td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">5</span>
                                                <span class="ec-sub-cat-tag">T-shirt</span>
                                                <span class="ec-sub-cat-tag">Shirt</span>
                                                <span class="ec-sub-cat-tag">Dress</span>
                                                <span class="ec-sub-cat-tag">Jeans</span>
                                                <span class="ec-sub-cat-tag">Top</span>
                                            </span>
                                        </td>
                                        <td>28</td>
                                        <td>2161</td>
                                        @php
                                        if($category->status=='A'){
                                        $status='Active';
                                        }else{
                                        $status='Inactive';

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
                                                    <a class="dropdown-item" href="{{ route('edit.category',['slug'=>$category->slug]) }}">Edit</a>

                                                    <a onclick="return confirm('Are you sure?')" class="dropdown-item" href="{{ route('delete.category',['id'=>$category->id]) }}">Delete</a>

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
