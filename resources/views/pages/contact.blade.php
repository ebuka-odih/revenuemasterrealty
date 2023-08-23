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
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.025320348499!2d23.347253314993587!3d42.66081882404823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa84317392061b%3A0xf59d528f0c3227b3!2z0YPQuy4g4oCe0JrRgNGD0Lwg0JrRjtC70Y_QstC60L7QsuKAnCAyNSwgMTE3MiDQti7Qui4g0JTQuNCw0L3QsNCx0LDQtCwg0KHQvtGE0LjRjw!5e0!3m2!1sen!2sen!4v1668940836873!5m2!1sen!2sen" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                    <div class="contact-area">
                        <h2 class="section-title mb-4">GET IN TOUCH WITH US</h2>

                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="contact-item">
                                    <h5 class="title">Address:</h5>
                                    <p>2128 Kovar Road, Massachusetts, USA</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-item">
                                    <h5 class="title">Contact:</h5>
                                    <p class="mb-1">+1359 896 84 72</p>
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
