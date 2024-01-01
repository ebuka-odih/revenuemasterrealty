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
                                        <a class="nav-link"  href="{{ route('user.deposit') }}"><i class="fa fa-money-check me-2"></i> Bank Transfer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active"  href="{{ route('user.crypto') }}"><i class="fa fa-coins me-2"></i> Crypto</a>
                                    </li>
                                </ul>
                                <div class="tab-content">

                                    <div class="tab-pane fade active show" id="home1">
                                        <div class="pt-4">
                                            <div class="col-xl-6 offset-xl-3 col-lg-12">
                                                <div class="basic-form">
                                                    <form action="{{ route('user.cryptoDeposit') }}" method="POST">
                                                        @csrf
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                        <div class="mb-3">
                                                            <select name="payment_methods_id" class="has-arrow form-control" id="" required>
                                                                <option disabled selected>Select Wallet</option>
                                                                @foreach($p_method as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="">Enter Amount</label>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">$</span>
                                                                <input type="number" name="amount" required class="form-control input-rounded" placeholder="1000">
                                                            </div>
                                                        </div>
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
        </div>
    </div>

@endsection
