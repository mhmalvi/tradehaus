@extends('layout.inner-master')
@section('inner-content')

@php
//print_r($new);
@endphp
{{-- @foreach($new as $data) --}}
{{-- {{ $new->image }} --}}

<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ec_breadcrumb_inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="ec-breadcrumb-title">New Products Page</h2>

                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="ec-breadcrumb-item active">New Products Page</li>
                        </ul>
                        <!-- ec-breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ec breadcrumb end -->


<!-- Ec Blog page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-blogs-rightside col-lg-12 col-md-12">
                <h3 style="text-transform:uppercase" class="ec-breadcrumb-item active">{{ $new->title }}</h3>
                <!-- Blog content Start -->
                <div class="ec-blogs-content">
                    <div class="ec-blogs-inner">
                        <div class="ec-blog-main-img">
                            <img class="blog-image" src="{{ asset($new->image) }}" alt="Blog" />
                        </div>
                        <div class="ec-blog-date">
                            <p class="date">{{ date_format($new->updated_at,'d M Y') }} - </p><a href="javascript:void(0)">5 Comments</a>

                        </div>
                        <div class="ec-blog-detail">
                            <h3 class="ec-blog-title">20 Most awerded and trending items 2021-2022</h3>
                            {!! $new->full_details !!}

                            {{-- <div class="ec-blog-sub-imgs">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="blog-image" src="assets/images/blog-image/2.jpg" alt="Blog" />
                                    </div>
                                    <div class="col-md-6">
                                        <img class="blog-image" src="assets/images/blog-image/3.jpg" alt="Blog" />
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.</p> --}}
                        </div>
                        <div class="ec-blog-tags">
                            @php
                            $cat = App\Models\Category::where(function($query){
                            $query->whereNotNull('parent_category');
                            })->get();
                            @endphp
                            @foreach($cat as $category)
                            <a href="{{ route('product.category',[$category->id]) }}">{{ $category->category_name }} ,</a>
                            @endforeach
                        </div>
                        {{-- <div class="ec-blog-arrows">
                            <a href="blog-detail-left-sidebar.html"><i class="ecicon eci-angle-left"></i> Prev
                                Post</a>
                            <a href="blog-detail-left-sidebar.html">Next Post <i class="ecicon eci-angle-right"></i></a>
                        </div> --}}
                        <div class="ec-blog-comments">
                            {{-- <div class="ec-blog-cmt-preview">
                                <div class="ec-blog-comment-wrapper mt-55">
                                    <h4 class="ec-blog-dec-title">Comments : 05</h4>
                                    <div class="ec-single-comment-wrapper mt-35">
                                        <div class="ec-blog-user-img">
                                            <img src="assets/images/blog-image/9.jpg" alt="blog image">
                                        </div>
                                        <div class="ec-blog-comment-content">
                                            <h5>John Deo</h5>
                                            <span>October 14, 2018 </span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim
                                                ad minim veniam, </p>
                                            <div class="ec-blog-details-btn">
                                                <a href="blog-detail-left-sidebar.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-single-comment-wrapper mt-50 ml-150">
                                        <div class="ec-blog-user-img">
                                            <img src="assets/images/blog-image/10.jpg" alt="blog image">
                                        </div>
                                        <div class="ec-blog-comment-content">
                                            <h5>Jenifer lowes</h5>
                                            <span>October 14, 2018 </span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim
                                                ad minim veniam, </p>
                                            <div class="ec-blog-details-btn">
                                                <a href="blog-detail-left-sidebar.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="ec-blog-cmt-form">
                                <div class="ec-blog-reply-wrapper mt-50">
                                    <h4 class="ec-blog-dec-title">Leave A Reply</h4>
                                    <form class="ec-blog-form" action="{{ route('add.comment') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="ec-leave-form">
                                                    <input type="text" name="name" id="name" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="ec-leave-form">
                                                    <input type="email" name="email" id="email" placeholder="Email Address ">
                                                </div>
                                            </div>
                                            <input type="hidden" name="product_name" id="product_name" value="{{ $new->title }}">
                                            <input type="hidden" name="comment_from_page" id="comment_from_page" value="new_products">
                                            <input type="hidden" name="total" id="comment_from_page" value="{{ $new->price }}">

                                            <div class="col-md-12">
                                                <div class="ec-text-leave">
                                                    <textarea name="comment" id="comment" placeholder="Message"></textarea>
                                                    <button type="submit" href="" class="btn btn-lg btn-secondary">Order Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog content End -->
            </div>
        </div>
    </div>
</section>
@endsection
