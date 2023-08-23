@extends('pages.layout.app')
@section('content')

    <main id="main" class="main-img">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs" style="background-image: url(https://crowdsq.com/asset/images/breadcrumbs/breadcrumbs.jpg);">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center text-capitalize">
                    <h2>Contact</h2>
                    <ol>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section class="s-pt-120 s-pb-120">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.530496323877!2d-80.31598652417625!3d25.68685401169295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9c7a45e342881%3A0x10a159590d6fe9fc!2s8905%20Dadeland%20Blvd%2C%20Kendall%2C%20FL%2033156%2C%20USA!5e0!3m2!1sen!2sde!4v1692805861802!5m2!1sen!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="contact-area">
                        <h2 class="section-title mb-4">GET IN TOUCH WITH US</h2>

                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="contact-item">
                                    <h5 class="title">Address:</h5>
                                    <p>15 Dadeland Boulevard, Miami,fl, 33156  United States</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-item">
                                    <h5 class="title">Contact:</h5>
                                    <p class="mb-0">Info@realestateharefund.com</p>
                                </div>
                            </div>
                        </div>
                        <form action="#" method="post" role="form" class="php mt-5">
                            <input type="hidden" name="_token" value="r3peT7lVVBuQEaoWJtAWQYIyEcoWKkmLAdXNOYjV">                    <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="mt-3">
                                <button class="cmn-btn w-100" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>                </main>

@endsection
