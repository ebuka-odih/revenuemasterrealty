@extends('pages.layout.app')
@section('content')

    <main id="main" class="main-img">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="background-image: url(https://crowdsq.com/asset/images/breadcrumbs/breadcrumbs.jpg);">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-capitalize">
                <h2>About</h2>
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>About</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->


    <meta name="title" content="About Us">
    <meta name="description" content="CrowdSquare is an innovative crowdfunding platform that is revolutionizing the way investors access real estate.">


    <section class="about-section s-pt-120 s-pb-120">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <img src="https://crowdsq.com/asset/images/about/6320306917a431663053929.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="section-title">About Us</h2>
                    <p class="mt-3 mb-5">
                        Our Mission Is To Make Property Investing Easy And Accessible To Everyone. In The Past, Real Estate Was A Very Illiquid Investment Class Reserved For Wealthy Individuals But CrowdSquare Strives To Change That. Our CEO Studied Finance, Management And Economics At The Best Academic Institutions In The World And Has Nearly A Decade Of Experience In Investing. He Holds A BSc. In International Economics And Finance From Bocconi University (Milan, Italy) And A Master In International Management From LSE (London, UK), The University Of Sydney (Sydney, Australia) And FGV (São Paulo, Brazil). He Also Obtained Qualifications At Peking University (Beijing, China), Fudan University (Shanghai, China) And Tecnológico De Monterrey (Monterrey, Mexico). Dimitar Gained Valuable Experience At Leading Financial Services Firms Like HSBC, Credit Suisse And BNP Paribas. He Has Done Consulting Projects For Leading Companies Like Mercedes Benz, SoFi Technologies And KKR. Moreover, Dimitar Has Invested In Hundreds Of Companies From Dozens Of Countries And Won Prestigious Investment Competitions Organized By Yale, Pictet Asset Management And Others. Finally, He Speaks 6 Languages And Has Lived On 5 Continents.
                    </p>

                    <div class="about-item mt-4">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Low Cost</h5>
                            <p>Most Of Our Operations Are In Developing Countries. This Allows Us To Limit Our Costs And Offer A Great Service At A Competitive Price.</p>
                        </div>
                    </div>

                    <div class="about-item mt-4">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Alignment Of Interests</h5>
                            <p>We Do All That We Can To Identify And Offer To You The Best Properties On The Market. W Understand That If You Obtain A Good Return On Your Investment And Are Satisfied, You Are More Likely To Continue Using Revenue Master Realty And Pay For Our Services.</p>
                        </div>
                    </div>

                    <div class="about-item mt-4">
                        <div class="icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Top-tier Service</h5>
                            <p>We Can Help You To Create A Diversified Portfolio Of Institutional-quality Real Estate. We Offer State-of-the-art Technology And Top In-house Professionals.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>                    <section class="s-pt-120 s-pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-top">
                        <h2 class="section-title">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapseSix">
                                    Can I Use The Platform If I Am Not From USA?
                                </button>
                            </h4>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Yes, We Serve Customers From Most Countries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseSix">
                                    What Are The Fees?
                                </button>
                            </h4>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> We Charge An Annual Property Management Fee Of 1.5%.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseSix">
                                    How Much Rental Income Will I Get?
                                </button>
                            </h4>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Currently, The Rental Yield On Residential Real Estate In Miami Is Around 4% And 7 % On Commercial (in EUR).</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseSix">
                                    How Can I Get Back My Initial Investment?
                                </button>
                            </h4>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> You Can Sell Your Ownership Anytime If You Find A Person To Buy Your Property Share. Alternatively, We Provide You The Option To Sell Your Share At The Market Price After A Fixed Number Of Years (different For Every Property). In That Case, We Will Sell The Whole Property Or Only Your Share To Another Person.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseSix">
                                    What Annual Return Can I Expect?
                                </button>
                            </h4>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Real Estate Prices In Sofia Have Increased 8.5% Per Year Over The Last 8 Years. In Addition To That, Properties Have Generated Around 4.5% Of Rental Yield. Owners Of Rented Properties Have Obtained A Return On Investment Of ~13% Per Year Since 2015 (in EUR). The Future Returns Of Property Investments Are Unknown, They Can Be The Same, Higher, Lower Or Negative.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="heading-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseSix">
                                    Do You Guarantee That I Will Get Back The Money That I Invest In The Future?
                                </button>
                            </h4>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> We Cannot Guarantee That You Will Get Back The Amount That You Originally Invested. You Will Get Back The Money That You Invested And The Profit If The Value Of The Property In Which You Invested Increases Or Remains The Same. However, You Will Get Back Less Than The Amount Originally Invested If The Value Of The Property Decreases.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="heading-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseSix">
                                    What Happens If The Property Is Sold Before The Campaign Is Completed?
                                </button>
                            </h4>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading-7" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> If You Transfer Money For The Purchase Of A Share In A Property Listed On Our Platform But It Becomes Unavailable Before The Transaction Is Completed, There Are Two Possible Solutions. 1) We Transfer The Money Back To You 2) We Offer To You Other Similar Properties.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-lg-block d-none text-end">
                    <div class="faq-thumb w-100">
                        <img src="https://crowdsq.com/asset/images/faq/6321705b4b4ec1663135835.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
