@extends('frontend.layouts.app')

@section('content')

{{-- workstart  --}}
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Our blog</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">Our blog</li> --}}
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">

                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item box-bg-shape wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{url('blog').'/'.$post->slug}}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img  loading="lazy" src="{{ $post->image ?? 'images/post-1.jpg' }}" alt="">
                                </figure>    
                            </a>                            
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                            <span class="post-date"> {{ optional($post->category)->name ?? 'Uncategorized' }}</span> ||
                             {{ optional($post->user)->name ?? 'Admin' }}
                             <br>
                             <span class="post-date mt-10"> {{ $post->created_at?->format('M d, Y') }} </span>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Read More Button Start -->
                        <div class="readmore-btn">
                            <a href="{{url('blog').'/'.$post->slug}}"><img src="images/arrow-white.svg" alt="{{ $post->title }}"></a>

                        </div>
                        <!-- Post Read More Button End -->
                    </div>
                    <!-- Post Item End -->
                </div>
                @endforeach
                
                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->
{{-- next lable --}}


@endsection
