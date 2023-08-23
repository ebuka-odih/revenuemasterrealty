
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="0tSYF3KNOd6EE5V8qUlCumQqUb7R55ISS0lEghoo">
    <meta name="description" content="{{ env('APP_NAME') }} is a leading investment platform allowing people to invest in real estate online in an easy and secure way.">
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ env('APP_NAME') }} -  Invest in Real Estate Online
    </title>
    <link rel="stylesheet" href="{{ asset('css/cookie.css') }}">
    <link href="https://crowdsq.com/asset/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awsome.min.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<h1> {{ env('APP_NAME') }} - Invest in real estate online </h1>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-B8D2BS69L8"></script>
<script>
    'use strict'
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "G-B8D2BS69L8");
</script>

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <div class="logo me-auto me-lg-0">
            <a href="{{ route('index') }}">
                <h2 style="font-weight: bolder; color: black" >RMR</h2>
            </a>
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li class="active">
                    <a class="nav-link"
                                      href="{{ route('index') }}">Home</a>
                </li>
                <li><a class="nav-link" href="{{ route('properties') }}">Properties</a>
                </li>

                <li><a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li><a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>

                <li class="d-md-block d-lg-none d-block ">
                    <a style="background-color: black" class="nav-link" href="{{ route('register') }}">Sign Up</a>
                </li>
                <li class="d-md-block d-lg-none d-block ">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
            <i class="fa fa-list mobile-nav-toggle"></i>
        </nav>
        <div class="header-right d-flex d-none  d-md-none d-lg-block">

            <a style="background-color: black" href="{{ route('register') }}" class="cmn-btn btn-sm ms-3">Sign Up</a>
            <a href="{{ route('login') }}" class="cmn-btn btn-sm ms-3">Login</a>
        </div>
    </div>
</header>
@yield('content')

<footer class="footer-section has-bg-img">
    <div class="footer-obj">
        <img src="https://crowdsq.com/asset/images/footer/63dd076d8bd311675429741.png" alt="">
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <div class="footer-box">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <span>
                                  <h2 style="font-weight: bolder; color: white" >RMR</h2>
{{--                                    <img class="img-fluid rounded sm-device-img text-align"--}}
{{--                                         src="https://crowdsq.com/asset/images/logo/secondary_logo.png" width="100%"--}}
{{--                                         alt="pp">--}}


                                </span>
                            </a>
                        </div>
                        <ul class="footer-info-list mt-4">
                            <li>
                                <span class="caption">Address</span>
                                <span class="description">15 Dadeland Boulevard, Miami,fl, 33156  United States</span>
                            </li>

                            <li>
                                <span class="caption">Email</span>
                                <span class="description">Info@realestatesharefund.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-box">
                        <h4 class="title">Useful Links</h4>
                        <ul class="footer-link-list">
                            <li> <a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-box">
                        <h4 class="title">Our Services</h4>
                        <ul class="footer-link-list">
                            <li><a
                                    href="{{ route('login') }}">Commercial Real Estate</a>
                            </li>
                            <li><a
                                    href="{{ route('login') }}">Residential Real Estate</a>
                            </li>
                            <li><a
                                    href="{{ route('login') }}">Step By Step Guide</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="text-center mb-0 text-white">
                Copyright © {{ Date('Y')}} {{ env('APP_NAME') }}. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>


<button type="button" class="cmn-btn btn-sm btn-floating" id="btn-back-to-top">
    <i class="fas fa-arrow-up text-light"></i>
</button>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/purecounter.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/glightbox.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/validate.js') }}"></script>
<script src="{{ asset('js/selectric.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/iziToast.min.js') }}"></script>
<script src="{{ asset('js/jquery.uploadPreview.min.js') }}"></script>

<script>
    $(function() {
        'use strict'

        $('.balance').on('click', function() {
            const modal = $('#invest');
            modal.find('input[name=plan_id]').val($(this).data('plan').id);
            modal.modal('show')
        })


        $('.featured-bookmark-btn').on('click', function() {

            let modal = $('#bookmark')

            if ($(this).data('bookmark') == 1) {
                modal = $('#bookmark-remove')
            }

            modal.find('form').attr('action', $(this).data('href'))
            modal.modal('show')
        })


        $('.invest-bookmark-btn').on('click', function() {

            let modal = $('#bookmark')

            if ($(this).data('bookmark') == 1) {
                modal = $('#bookmark-remove')
            }

            modal.find('form').attr('action', $(this).data('href'))
            modal.modal('show')
        })
    })
</script>
<script>
    'use strict';
    $(document).ready(function() {
        $(document).on('click', '.calculate-btn', function(e) {
            e.preventDefault();

            $('.invalid-feedback').addClass('d-none')
            $('#amount').removeClass('is-invalid').removeClass('is-valid')

            let modal = $('#calculateModal');

            $('.amount').val('');

            let plan = $(this).data('plan');

            $('input[name=id]').val(plan.id);

            if ($(this).data('plan').amount_type == 0) {


                $('.fixed-amount').addClass('d-none')
                $('.min-max').removeClass('d-none')

                $('.min').text(Number($(this).data('plan').minimum_amount).toFixed(2))

                $('.max').text(Number($(this).data('plan').maximum_amount).toFixed(2))
            } else {
                $('.fixed-amount').removeClass('d-none')
                $('.min-max').addClass('d-none')

                $('.fixed-amount .min').text(Number($(this).data('plan').amount).toFixed(2))
            }


            $('#profit').html(`


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

                 `);

            modal.modal('show')


        });


        $(document).on('keyup', '.amount', function() {
            let amount = $(this).val();

            let id = $('input[name=id]').val();

            if(amount == ''){
                $('.invalid-feedback').addClass('d-none')
                $('#amount').removeClass('is-invalid').removeClass('is-valid')

                return
            }

            var url = "https://crowdsq.com/investment/calculate/:id";

            url = url.replace(':id', id);

            $.ajax({
                type: 'GET',
                url: url,
                data: {
                    amount: amount,
                    selectplan: id
                },
                success: (data) => {
                    if (data.message) {

                        let message = data.message + ' ' + Number(data.amount).toFixed(2)

                        $('#amount').removeClass('is-valid').addClass('is-invalid')

                        $('.invalid-feedback').addClass('d-block')

                    } else {

                        $('#profit').html(data);

                        $('#amount').removeClass('is-invalid').addClass('is-valid')

                        $('.invalid-feedback').addClass('d-none').text('')

                        modal.modal('show');
                    }


                },
                error: (error) => {
                    if (typeof(error.responseJSON.errors.amount) !== "undefined") {
                        iziToast.error({
                            message: error.responseJSON.errors.amount,
                            position: 'topRight',
                        });
                    }
                    if (typeof(error.responseJSON.errors.selectplan) !== "undefined") {
                        iziToast.error({
                            message: error.responseJSON.errors.selectplan,
                            position: 'topRight',
                        });
                    }
                }
            })
        })



    });
</script>


<script>
    'use strict'
    $(document).on('submit', '#subscribe', function(e) {
        e.preventDefault();
        const email = $('.subscribe-email').val();
        var url = "https://crowdsq.com/subscribe";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: url,
            data: {
                email: email,
            },
            success: (data) => {
                iziToast.success({
                    message: data.message,
                    position: 'topRight',
                });
                $('.subscribe-email').val('');

            },
            error: (error) => {
                if (typeof(error.responseJSON.errors.email) !== "undefined") {
                    iziToast.error({
                        message: error.responseJSON.errors.email,
                        position: 'topRight',
                    });
                }

            }
        })

    });

    var url = "https://crowdsq.com/changeLang";


    $('.changeLang').val("EN")

    $(".changeLang").change(function() {
        if ($(this).val() == '') {
            return false;
        }
        window.location.href = url + "?lang=" + $(this).val();
    });
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


</body>


</html>
