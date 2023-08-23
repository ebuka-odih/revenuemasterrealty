@extends('pages.layout.app')
@section('content')

<main id="main" class="main-img">
    <section class="banner-section has-bg-img" style="background-image: url(img/banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-7 col-lg-8 text-md-start text-center">
                    <h2 class="banner-title"> Real Estate Investing Made Easy</h2>
                    <p class="banner-description mt-3">Earn Passive Income And Gain From Capital Appreciation</p>
                    <div class="banner-btn-group justify-content-md-start justify-content-center mt-4">
                        <a href="{{ route('login') }}" class="cmn-btn">Get Started</a>
                    </div>
                    <div class="row gy-4 mt-2 overview-wrapper">

                        <div class="col-sm-4">
                            <div class="overview-item">
                                <div class="content">
                                    <h3 class="overview-amount">15%</h3>
                                    <p class="mb-0">Average Rental Income - Commercial Property</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="overview-item">
                                <div class="content">
                                    <h3 class="overview-amount">10%</h3>
                                    <p class="mb-0">Average Rental Income - Residential Property</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="overview-item">
                                <div class="content">
                                    <h3 class="overview-amount">25%</h3>
                                    <p class="mb-0">Average Annual Return = Rent + Appreciation (since 2015)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="s-pt-120 s-pb-120">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-top">
                        <h2 class="section-title">Our Latest Properties</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gy-4">
                @foreach($property as $item)
                    <div class="col-xl-4 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-thumb">
                            <a href="" class="plan-link"></a>

                            @foreach ($item->images as $image)
                                @if($loop->first)
                                <img  src="{{ asset($image->image_path) }}" alt="Property Image">
                                @endif
                            @endforeach

                            <div class="thumb-bottom">
                                <h4 class="title"><a href="https://crowdsq.com/investment/plan/details/7">
                                    {{ $item->name }}</a></h4>
                                <p class="location"><i class="bi bi-geo-alt"></i> {{ $item->building_location }}
                                </p>
                                <div class="property-ratings">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="text-white">({{ $item->reviews }} Reviews)</span>
                                </div>
                            </div>
                        </div>
                        <div class="invest-card-content">
                            <div class="return-rate">
                                <div>
                                    <p>Expected Rental Income</p>
                                    <h4 class="return-amount">
                                        {{ $item->return_rate }}
                                        %
                                    </h4>
                                </div>
                                <a href="#0" class="calculate-btn" data-plan="{&quot;id&quot;:7,&quot;plan_name&quot;:&quot;One-bedroom apartment close to a mountain&quot;,&quot;views&quot;:&quot;175&quot;,&quot;amount_type&quot;:&quot;0&quot;,&quot;minimum_amount&quot;:&quot;5000.00000000&quot;,&quot;maximum_amount&quot;:&quot;86000.00000000&quot;,&quot;amount&quot;:null,&quot;return_interest&quot;:&quot;5.00000000&quot;,&quot;interest_status&quot;:&quot;percentage&quot;,&quot;return_for&quot;:&quot;1&quot;,&quot;how_many_time&quot;:&quot;3&quot;,&quot;every_time&quot;:&quot;7&quot;,&quot;capital_back&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;property&quot;:{&quot;amnities&quot;:{&quot;Price&quot;:&quot;86000&quot;,&quot;Square meters&quot;:&quot;55&quot;,&quot;Rooms&quot;:&quot;2&quot;,&quot;Floor&quot;:&quot;2&quot;,&quot;Year of building&quot;:&quot;2017&quot;},&quot;address&quot;:&quot;Vitosha&quot;,&quot;details&quot;:&quot;This apartment consists of two rooms and a bathroom. The area is very peaceful and quiet but at the same time it is linked to good public transport. There are many stores, restaurants, pharmacies, gyms and other service providers near by. It is possible to purchase a parking lot in the same building.&quot;,&quot;icons&quot;:[&quot;fas fa-tag&quot;,&quot;fas fa-ruler&quot;,&quot;as fa-booth-curtain&quot;,&quot;fas fa-sort-circle&quot;,&quot;fas fa-sort-calendar&quot;]},&quot;image&quot;:&quot;648324d2ed7e61686316242.jpg&quot;,&quot;gallery&quot;:[{&quot;id&quot;:1,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2b798a1686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2b798a1686316242.jpg&quot;},{&quot;id&quot;:2,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2c95551686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2c95551686316242.jpg&quot;},{&quot;id&quot;:3,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2d28691686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2d28691686316242.jpg&quot;},{&quot;id&quot;:4,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2dc2be1686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2dc2be1686316242.jpg&quot;},{&quot;id&quot;:5,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2e57c81686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2e57c81686316242.jpg&quot;}],&quot;is_featured&quot;:&quot;1&quot;,&quot;map&quot;:null,&quot;created_at&quot;:&quot;2023-06-09T13:10:43.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-11T13:54:37.000000Z&quot;,&quot;reviews&quot;:[]}"><i class="fas fa-calculator"></i>Investment Calculator</a>
                            </div>

                            <div class="other-options">
                                <div class="single-option">
                                    <p>Target Duration</p>
                                    <h6>{{ $item->target_duration }} Mo</h6>
                                </div>
                                <div class="single-option">
                                    <p>Minimum Amount</p>
                                    <h6>
                                                                                    <span>
                                      {{ $item->min_price }} EUR</span>
                                    </h6>
                                </div>
                                <div class="single-option">
                                    <p>Return For</p>
                                    <h6>
                                        {{ $item->return_for }}
                                    </h6>
                                </div>
                                <div class="single-option">
                                    <p>Capital Back</p>
                                    <h6>
                                        {{ $item->capital_back }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="invest-card-footer">
                            <div>
                                <a href="{{ route('user.projects') }}"
                                   class="cmn-btn2 w-100 btn-sm">Invest Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('properties') }}" class="border-btn2 btn-sm"
               id="load">View All Properties</a>
        </div>
    </section>


    <!-- Claculate modal -->
    <div class="modal fade" id="calculateModal" tabindex="-1" aria-labelledby="calculateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title"><i class="bi bi-calculator"></i> Calculate Invest Amount</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="invest-cal-wrapper">

                        <input type="hidden" name="id" value="">

                        <div class="mb-4 has-validation">
                            <label>Invest Amount</label>
                            <div class="icon-field ">
                                <input type="text" name="amount" class="form-control amount"
                                       placeholder="Enter Amount" id="amount">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div class="invalid-feedback">

                            </div>
                            <small class="text-secondary min-max">
                                <i class="bi bi-info-circle"></i>
                                Min-Max Invest Amount
                                <span class="min"></span> -
                                <span class="max"></span>
                            </small>


                            <small class="text-secondary fixed-amount d-none">
                                <i class="bi bi-info-circle"></i>
                                Fixed Amount
                                <span class="min"></span>
                            </small>
                        </div>

                        <div class="cal-details-list" id="profit">
                            <ul class="cal-list">
                                <li>
                                    <span class="caption">Plan</span>
                                    <span class="value">-</span>
                                </li>
                                <li>
                                    <span class="caption">Amount</span>
                                    <span class="value">-</span>
                                </li>
                                <li>
                                    <span class="caption">Payout Period</span>
                                    <span class="value">-</span>
                                </li>
                                <li>
                                    <span class="caption">Profit</span>
                                    <span class="value">-</span>
                                </li>
                                <li>
                                    <span class="caption">Capital Back</span>
                                    <span class="value">-</span>
                                </li>
                                <li>
                                    <span class="caption">Total</span>
                                    <span class="value">-</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="invest" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="https://crowdsq.com/investmentplan/invest" method="post">
                <input type="hidden" name="_token" value="0tSYF3KNOd6EE5V8qUlCumQqUb7R55ISS0lEghoo">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Invest Now</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="">Invest Amount</label>
                                <input type="text" name="amount" class="form-control">
                                <input type="hidden" name="plan_id" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn cmn-btn">Invest Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="bookmark" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                <input type="hidden" name="_token" value="0tSYF3KNOd6EE5V8qUlCumQqUb7R55ISS0lEghoo">            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bookmarked Plan</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="bookmark-text">Are You Sure To Bookmark This Plan For Future Invest ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Bookmark</button>
                        <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <div class="modal fade" id="bookmark-remove" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                <input type="hidden" name="_token" value="0tSYF3KNOd6EE5V8qUlCumQqUb7R55ISS0lEghoo">            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bookmarked Remove</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="bookmark-text">Are You Sure To Remove Bookmark ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Remove</button>
                        <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <section class="choose-section s-pt-120 s-pb-120 has-bg-img section-bg">
        <div class="line-obj">
            <img src="{{ asset('img/63207e773eb8a1663073911.png') }}" alt="line">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-top">
                        <h2 class="section-title">Why Choose US</h2>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="choose-box">
                        <div class="top">
                            <i class="fab fa-internet-explorer"></i>
                            <h4 class="title">Online Process</h4>
                        </div>
                        <p class="mb-0 mt-2">No Need To Visit Offices, Obtain Documents, Conduct Due Diligence Or Negotiate Deals</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="choose-box">
                        <div class="top">
                            <i class="fas fa-money-bill"></i>
                            <h4 class="title">Obtain Good Income</h4>
                        </div>
                        <p class="mb-0 mt-2">We Find The Properties That Offer The Highest Yield And Have The Highest Potential For Increase In Value</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="choose-box">
                        <div class="top">
                            <i class="fas fa-laptop"></i>
                            <h4 class="title">Easy To Use Platform</h4>
                        </div>
                        <p class="mb-0 mt-2">You Can Easily Track Your Past Investments And Explore New Investment Opportunities On Our Platform.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="choose-box">
                        <div class="top">
                            <i class="fas fa-euro-sign"></i>
                            <h4 class="title">Low Minimum Investment</h4>
                        </div>
                        <p class="mb-0 mt-2">You Can Purchase A Share Of Property From As Low As 5 000 USD</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="work-section s-pt-120 s-pb-120 section-bg">
        <div class="line-obj">
            <img src="{{ asset('img/63dd07fe0ca651675429886.png') }}" alt="image">
        </div>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <div class="section-top">
                        <h2 class="section-title">How It Works</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-md-6">
                    <div class="work-box">
                        <div class="icon">
                            <img src="{{ asset('img/632074cf6a3641663071439.png') }}" alt="image">
                        </div>
                        <div class="content">
                            <h4 class="title">Create An Account</h4>
                            <p class="mb-0 mt-2">Register And Provide Your Personal Details</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-box">
                        <div class="icon">
                            <img src="{{ asset('img/632074d55e1b71663071445.png') }}" alt="image">
                        </div>
                        <div class="content">
                            <h4 class="title">Invest In A Property</h4>
                            <p class="mb-0 mt-2">Make A Payment, Sign The Contract And Complete The Investment Process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-box">
                        <div class="icon">
                            <img src="{{ asset('img/632074dac9af71663071450.png') }}" alt="image">
                        </div>
                        <div class="content">
                            <h4 class="title">Receive Rental Income</h4>
                            <p class="mb-0 mt-2">Receive Periodic Rental Payments</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-box">
                        <div class="icon">
                            <img src="{{ asset('img/632074e1a05fa1663071457.png') }}" alt="image">
                        </div>
                        <div class="content">
                            <h4 class="title">Exit Your Investment</h4>
                            <p class="mb-0 mt-2">Get Back The Initial Investment With A Realized Profit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-pt-120 s-pb-120">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 text-lg-start text-center">
                    <span class="section-top-title ">TESTIMONIAL</span>
                    <h2 class="section-title ">What Our Clients Say</h2>
                    <p class=" mt-3">We Put Our Customers First.</p>

                    <div class="testi-slider-buttons">
                        <button type="button" class="testi-prev"><i class="bi bi-arrow-left"></i></button>
                        <button type="button" class="testi-next"><i class="bi bi-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-lg-8 ps-xl-5">
                    <div class="testimonial-slider">
                        <div class="single-slide">
                            <div class="testimonial-box">
                                <div class="content">
                                    <p>
                                        I Am Getting A Good Rental Income. I Am Very Glad That I Saved Money And Invested In Real Estate
                                    </p>
                                </div>
                                <div class="client">
                                    <div class="thumb">
                                        <img src="{{ asset('img/61fd4de828e951643990504.jpg') }}"
                                             class="testimonial-img" alt="">
                                    </div>
                                    <div class="client-content">
                                        <h3 class="title">Lihua Wang</h3>
                                        <span class="designation">Taiwan</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-box">
                                <div class="content">
                                    <p>
                                        The Value Of My Property Doubled In 8 Years
                                    </p>
                                </div>
                                <div class="client">
                                    <div class="thumb">
                                        <img src="{{ asset('img/61fd4e4f859dd1643990607.jpg')}}"
                                             class="testimonial-img" alt="">
                                    </div>
                                    <div class="client-content">
                                        <h3 class="title">David Williams</h3>
                                        <span class="designation">South Africa</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="testimonial-box">
                                <div class="content">
                                    <p>
                                        Real Estate Crowdfunding Is Great. I Don&#039;t Have The Money To Purchase A Whole Property And The Time To Manage It.
                                    </p>
                                </div>
                                <div class="client">
                                    <div class="thumb">
                                        <img src="{{ asset('img/6253da0b3e71e1649662475.jpg') }}"
                                             class="testimonial-img" alt="">
                                    </div>
                                    <div class="client-content">
                                        <h3 class="title">Pedro Oliveira</h3>
                                        <span class="designation">Brazil</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
