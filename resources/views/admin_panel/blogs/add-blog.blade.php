@extends('admin_panel.layout.admin-master')

@section('admin')


<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Add Blog</h1>
                {{-- @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
            </div>
            @endif --}}

            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Blog
            </p>
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
                    <h2>Add Blog</h2>

                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                <div class="card-body">
                    <div class="row ec-vendor-uploads">

                        <!-- <form action="{{ route('admin.update_arrival') }}" method="post" enctype="multipart/form-data"> -->

                        <form action="{{ route('create.blog') }}" method="post" enctype="multipart/form-data">

                            @csrf
                            <div class="col-lg-4">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img">
                                        <div class="form-group">
                                            <div class="avatar-edit">
                                                <input type="file" class="form-control" name="image" required />

                                                <img style="width: 43%;" src="" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ec-vendor-upload-detail">
                                    <div class="row g-3">


                                    </div>


                                    <div class="col-md-12">
                                        <label for="" class="form-label">Blog Title</label>
                                        <input type="text" name="title" class="form-control" id="" required>
                                    </div>

                                    <div class="col-md-12 my-2">
                                        <label for="" class="form-label">Blog Status</label>
                                        <select class="form-control" name="status" id="">
                                            <option style="display:none;">Select</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Short Description</label>
                                        <textarea class="form-control" name="short_description"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Full Details</label>
                                        <textarea class="ckeditor form-control" name="full_details"></textarea>
                                    </div>
                                    {{-- <div class="col-md-12">
                                                    <label class="form-label">Product Tags <span>( Type and
                                                            make comma to separate tags )</span></label>
                                                    <input type="text" class="form-control" id="group_tag" name="tags" value="" placeholder="" data-role="tagsinput" />
                                                </div> --}}
                                    <div class="col-md-12 mt-3">

                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="card card-default">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="responsive-data-table" class="table" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Short Description</th>
                                                        <th>Image</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                @php
                                                    $blog = App\Models\Blog::all();

                                                    @endphp
                                                    @foreach($blog as $blogs)
                                                    <tr>
                                                        <td>{{$blogs->title}}</td>
                                                        <td>{{$blogs->short_description}}</td>
                                                        <td style="width: 12%;"><img style="width: 44%;" src="{{env('APP_URL').'/'.$blogs->image}}" alt=""></td>
                                                        @if($blogs->status==1)
                                                        <td>Active</td>
                                                        @else
                                                        <td>Inactive</td>
                                                        @endif
                                                        <td></td>
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
    </div>
</div>
</div>
</div> <!-- End Content -->
</div> <!-- End Content Wrapper -->
</div>
</div>



<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

@endsection