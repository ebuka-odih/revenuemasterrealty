@extends('pages.layout.app')
@section('content')

    <div class="lp-villagecreek">
        <div class="hero-block">
            <div class="bg"
                 style="background-image:url(../../wp-content/themes/diversyfund2.0/images/landingpages/villagecreek/herobg.jpg);"></div>
            <div class="container">
                <div class="main"><p class="label">Premier Offering</p>
                    <p class="title"><span>The</span> Independent</p>
                    <ul class="stats">
                        <li><img src="../../wp-content/uploads/2023/01/return.svg" class="style-svg">15% Projected
                            Investor Return*
                        </li>
                        <li><img src="../../wp-content/uploads/2023/01/calendar.svg" class="style-svg">5 Yr. Projected
                            Hold Period
                        </li>
                    </ul>
                    <p class="disclaimer">*Projections are not guarantees and any investment carries risk. Investors are
                        encouraged to consult their financial advisor before making any investment*</p></div>
                <div class="side"><p class="subtitle">Status</p>
                    <p class="title">Active!</p>
                    <div class="progress-bar">
                        <div class="circle-wrap">
                            <div class="circle">
                                <div class="mask half">
                                    <div class="fill" style="transform: rotate(306deg);"></div>
                                </div>
                            </div>
                            <p class="number"><span>85%</span><br>Funded</p></div>
                    </div>
                    <p class="desc">Minimum $50,000 Investments</p><a href="https://portal.diversyfund.com/"
                                                                      class="btn fullWidth">Start Investing</a></div>
            </div>
        </div>
        <div class="offerings-block container">
            <div class="content"><p class="title">Investment Overview</p>
                <p class="subtitle">Objective</p>
                <p class="features">Long-term growth</p>
                <ul class="prices">
                    <li><p class="price">$20.0 M</p>
                        <p class="subtext">Purchase Price</p></li>
                    <li><p class="price">$35.0 M</p>
                        <p class="subtext">Projected Exit Price</p></li>
                </ul>
            </div>
            <table class="data" cellspacing="0">
                <tbody>
                <tr>
                    <th>Price Per Unit</th>
                    <td>$327K</td>
                </tr>
                <tr>
                    <th>Going in Cap Rate</th>
                    <td>5.1%</td>
                </tr>
                <tr>
                    <th>Projected Hold Period</th>
                    <td>5 yrs.</td>
                </tr>
                <tr>
                    <th>Projected Price Per Unit</th>
                    <td>$575K</td>
                </tr>
                <tr>
                    <th>Projected Investor Return</th>
                    <td>15%</td>
                </tr>
                <tr>
                    <th>Projected Investor Multiple</th>
                    <td>1.9x</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="intro-gallery-block container"><p class="title">The Property</p>
            <div class="description"><p>Located less than a mile from the coast, the Independent is a 61-unit midrise
                    multifamily asset. Floor plans are evenly spread among studio, 1-bedroom, and 2-bedroom
                    configurations in a four-story concrete and steel construction. The building went through extensive
                    renovations in 2014 to convert previous office and commercial space into apartments on the 1st and
                    2nd floors. A single commercial tenant and 11,000 s.f. of vacant commercial space remain on the 1st
                    floor. Unit amenities include washer/dryers, stainless steel appliances, floor-to-ceiling windows,
                    and outstanding views.</p>
                </div>
            <ul class="imgs">
                <li><img src="../../wp-content/uploads/2023/01/independent3.jpg" alt=""></li>
                <li><img src="../../wp-content/uploads/2023/01/independent2.jpg" alt=""></li>
                <li><img src="../../wp-content/uploads/2023/01/independent1.jpg" alt=""></li>
            </ul>
        </div>
        <div class="video-block container">
            <div class="section-title"><p class="title">Why Independent</p>

            </div>
            <a href="{{ route('user.projects') }}" class="cta"><img
                    src="{{ asset('wp-content/uploads/2023/01/explainer.jpg') }}" alt="">
                <svg width="122" height="123" viewBox="0 0 122 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="61.0815" cy="61.5774" r="60.6313" fill="#F0F3FF"></circle>
                    <path d="M89.3781 61.5773L46.9362 86.0811L46.9362 37.0734L89.3781 61.5773Z" fill="#1B3BE4"></path>
                </svg>
            </a></div>
        <div class="stats-block container">
            <div class="section-title"><p class="title">Property Stats</p>
                <p class="subtitle"><span>Location:</span> Sand City, CA (Monterey)</p></div>
            <ul class="stats">
                <li><span>2008</span> Year Built</li>
                <li><span>2014</span> Year Renovated</li>
                <li><span>1</span> Number of Buildings</li>
                <li><span>61</span> Number of Units</li>
                <li><span>95%</span> Occupancy</li>
                <li><span>11</span> Available Floor Plans</li>
                <li><span>$3.13</span> Avg. Rent sq. ft.</li>
            </ul>
        </div>
        <div class="article-block container style-bold ratio-1-1 content-image">
            <div class="col image"><img src="{{ asset('wp-content/uploads/2023/01/img_monterey_peninsula.jpg') }}" alt=""></div>
            <div class="col content typo-rules"><h2>The Location</h2>
                <p>The Independent – located just outside the Monterey Peninsula – presents an incredible value-add
                    investment opportunity in the burgeoning Sand City submarket. The building was originally conceived
                    as a mixed-use property, with offices, commercial space, and multifamily units, and built in 2008.
                    The Independent is ideally positioned to make the most of the market in an area where multifamily
                    housing is in limited supply. A prime location near the stunning California coast – including quick
                    access to Big Sur and Pebble Beach golf course – makes this an exciting investment opportunity.</p>
            </div>
        </div>
        <div class="article-block  style-default ratio-1-3 image-content">
            <div class="container">
                <div class="col image"><img src="../../wp-content/uploads/2023/01/independent.jpg" alt=""></div>
                <div class="col content typo-rules"><h2><strong>Investment Strategy</strong></h2>
                    <p>Originally constructed as a mixed-use property, the Independent is well-priced for its location
                        in a market with limited supply to meet a growing demand. A value-add strategy that includes the
                        potential for increased revenue through lease of existing vacant commercial space or conversion
                        to additional multifamily units creates a dynamic opportunity for single-asset investors.</p>
                    <h2><strong>Investment Details</strong></h2>
                    <p>Strong rental demand in an affluent location positions the Independent to set the market for
                        multifamily rents in the Salinas/Monterey submarket. There is high potential to realize the
                        expected submarket rent growth projection of 15.6% (through 2027).</p>
                </div>
            </div>
        </div>

        <div class="cta-banner">
            <div class="container"><img
                    src="{{ asset('wp-content/themes/diversyfund2.0/images/landingpages/villagecreek/ctabuilding.png') }}">
                <p class="title">Still not sure if this offering is right for you or need additional information?</p>
                <p class="subtitle">Speak with a member of our investor relations team.</p><a
                    href="" class="btn white">Chat with us</a></div>
        </div>
    </div>
@endsection

