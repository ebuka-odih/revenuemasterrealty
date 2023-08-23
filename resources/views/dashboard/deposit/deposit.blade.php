@extends('dashboard.layout.app')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
                <div class="me-auto  d-lg-block">
                    <h2 class="text-black font-w600">Fund Account</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <!-- Nav tabs -->
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs col-lg-6 offset-lg-5">
                                    <li class="nav-item">
                                        <a class="nav-link active"  href="{{ route('user.deposit') }}"><i class="fa fa-money-check me-2"></i> Bank Transfer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"  href="{{ route('user.crypto') }}"><i class="fa fa-coins me-2"></i> Crypto</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="home1" role="tabpanel">
                                        <div class="pt-4">
                                            <h4>Request for bank transfer details</h4>
                                            <p>Our support will contact you via your email below for our bank transfer details</p>
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            <form action="{{ route('user.requestBankinfo') }}" method="POST">
                                                @csrf
                                                <input type="text" name="user_email" class="form-control col-lg-6" value="{{ auth()->user()->email }}" readonly>
                                                <div class="mt-2">
                                                    <button type="submit" class="btn btn-sm btn-primary">Send</button>
                                                </div>
                                            </form>
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

@endsection
