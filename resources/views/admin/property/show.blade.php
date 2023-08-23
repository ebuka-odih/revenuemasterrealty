@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Product Details</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.property.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                <a href="{{ route('admin.property.index') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="row pb-5">
                                    <div class="col-lg-6">
                                        <div class="product-gallery me-xl-1 me-xxl-5">
                                            <div class="slider-init slick-initialized slick-slider" id="sliderFor" data-slick="{&quot;arrows&quot;: false, &quot;fade&quot;: true, &quot;asNavFor&quot;:&quot;#sliderNav&quot;, &quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}">
                                                <div class="slick-list draggable">
                                                    <div class="slick-track" style="opacity: 1; width: 3140px;">
                                                        @foreach ($property->images as $image)
                                                        <div class="slider-item rounded slick-slide" data-slick-index="{{ $image->id }}" aria-hidden="true" style="width: 628px; position: relative; left: -2512px; top: 0px; z-index: 998; opacity: 0;" tabindex="0">
                                                            <img src="{{ asset($image->image_path) }}" class="w-100" alt="">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div><!-- .slider-init -->
                                            <div class="slider-init slider-nav slick-initialized slick-slider" id="sliderNav" data-slick="{&quot;arrows&quot;: false, &quot;slidesToShow&quot;: 5, &quot;slidesToScroll&quot;: 1, &quot;asNavFor&quot;:&quot;#sliderFor&quot;, &quot;centerMode&quot;:true, &quot;focusOnSelect&quot;: true,
                                &quot;responsive&quot;:[ {&quot;breakpoint&quot;: 1539,&quot;settings&quot;:{&quot;slidesToShow&quot;: 4}}, {&quot;breakpoint&quot;: 768,&quot;settings&quot;:{&quot;slidesToShow&quot;: 3}}, {&quot;breakpoint&quot;: 420,&quot;settings&quot;:{&quot;slidesToShow&quot;: 2}} ]
                            }">
                                                <div class="slick-list draggable" style="padding: 0px 50px;">
                                                    <div class="slick-track" style="opacity: 1; width: 470px; transform: translate3d(-376px, 0px, 0px);">


                                                            @foreach ($property->images as $image)
                                                                <div class="slider-item slick-slide slick-current slick-center" data-slick-index="{{ $image->id }}" aria-hidden="true" style="width: 94px;" tabindex="0">
                                                                    <div class="thumb">
                                                                        <img src="{{ asset($image->image_path) }}" alt="">
                                                                    </div>
                                                                </div>
                                                            @endforeach


                                                    </div>
                                                </div>




                                            </div><!-- .slider-nav -->
                                        </div><!-- .product-gallery -->
                                    </div><!-- .col -->
                                    <div class="col-lg-6">
                                        <div class="product-info mt-5 me-xxl-5">
                                            <h4 class="product-price text-primary">$@money($property->price) </h4>
                                            <h2 class="product-title">{{ $property->name }}</h2>
                                            <div class="product-rating">
                                                <ul class="rating">
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                    <li><em class="icon ni ni-star-half"></em></li>
                                                </ul>
                                                <div class="amount">(2 Reviews)</div>
                                            </div><!-- .product-rating -->
                                            <div class="product-excrept text-soft">
                                                <p class="lead">{{ $property->description }}</p>
                                            </div>
                                            <div class="product-meta">
                                                <table class="table table-striped" style="width:100%">
                                                    <tr>
                                                        <th>Room:</th>
                                                        <td>{{ $property->rooms }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Floor:</th>
                                                        <td>{{ $property->floor }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Building Year:</th>
                                                        <td>{{ $property->building_year }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Square Meter:</th>
                                                        <td>{{ $property->square_meter }} Sqr</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Location:</th>
                                                        <td>{{ $property->building_location }}</td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="product-meta">
                                                <h6 class="title">Investment Detail</h6>
                                                <table class="table table-striped" style="width:100%">
                                                    <tr>
                                                        <th>Min Amount:</th>
                                                        <td>{{ $property->min_price }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Return Rate:</th>
                                                        <td>{{ $property->return_rate }}%</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Return for:</th>
                                                        <td>{{ $property->return_for }} Months</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Capital Back:</th>
                                                        <td>{{ $property->capital_back }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Target Duration:</th>
                                                        <td>{{ $property->target_duration }}</td>
                                                    </tr>
                                                </table>
                                            </div><!-- .product-meta -->

                                        </div><!-- .product-info -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div>
                        </div>
                    </div><!-- .nk-block -->

                </div>
            </div>
        </div>
    </div>

@endsection
