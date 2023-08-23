@extends('dashboard.layout.app')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="">
                <div class="me-auto  d-lg-block">
                    <h2 class="text-black font-w600 text-center">Make Withdrawal</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <!-- Nav tabs -->
                            <div class="custom-tab-1">
                                <div class="">
                                    <center>
                                        <div class="alert alert-info fade show" role="alert">
                                            To make a withdrawal, Enter amount and verify the address you wish for payment to be made into.
                                        </div>
                                    </center>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="home1" role="tabpanel">
                                        <div class="">
                                            <h4>Request for bank transfer details</h4>
                                            <p>Our support will contact you via your email below for our bank transfer details</p>
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            @if(session()->has('nop'))
                                                <div class="alert alert-danger">
                                                    {{ session()->get('nop') }}
                                                </div>
                                            @endif
                                            @if(session()->has('low_balance'))
                                                <div class="alert alert-danger">
                                                    {{ session()->get('low_balance') }}
                                                </div>
                                            @endif
                                            <form method="POST" action="{{ route('user.processWithdraw') }}">
                                                @csrf

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h3 class="text-white mb-2">Personal Information</h3>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Full Name</label>
                                                                    <input maxlength="100" type="text" required="" class="form-control" id="firstname" value="{{ $user->name }}" placeholder="Enter Full Name" readonly="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Email Address</label>
                                                                    <input maxlength="100" type="email" required="" class="form-control" id="email" value="{{ $user->email }}" placeholder="Enter Email Address" readonly="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Account Balance</label>
                                                                    <input maxlength="15" type="text" required="" class="form-control" id="phone" value="{{ auth()->user()->currency }} @money($user->balance)" placeholder="Enter Phone Number" readonly="">
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h3 class="text-white mb-2">Payment Details</h3>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label for="withdrawal_method">Select Withdrawal Method</label>
                                                                        <select name="withdrawal_method" class="form-control" id="withdrawalMethod" required="" onchange="toggleBeneficiaryFields()">
                                                                            <option value="">--Select Method--</option>
                                                                            <option value="Bank Transfer">Bank Transfer</option>
                                                                            <option value="Bitcoin">Bitcoin (Recommended)</option>
                                                                            <option value="ethereum">Ethereum</option>
                                                                            <option value="PayPal">PayPal</option>
                                                                        </select>
                                                                    </div>

                                                                    <div id="beneficiaryField1" class="form-group" style="display: none">
                                                                        <label for="bank">Bank Name</label>
                                                                        <input class="form-control border-primary" type="text" name="bank" placeholder="Enter Bank Name">
                                                                    </div>

                                                                    <div id="beneficiaryField2" class="form-group" style="display: none">
                                                                        <label for="acct_name">Account Name</label>
                                                                        <input class="form-control border-primary" type="text" name="acct_name" placeholder="Enter Account Name">
                                                                    </div>

                                                                    <div id="beneficiaryField3" class="form-group" style="display: none">
                                                                        <label for="acct_num">Account Number</label>
                                                                        <input class="form-control border-primary" type="text" name="acct_num" placeholder="Enter Account Number">
                                                                    </div>

                                                                    <div id="beneficiaryField4" class="form-group" style="display: none">
                                                                        <label for="swift_code">Swift Code</label>
                                                                        <input class="form-control border-primary" type="text" name="swift_code" placeholder="Enter Swift Code">
                                                                    </div>

                                                                    <div id="beneficiaryField5" class="form-group" style="display: none">
                                                                        <label for="paypal_email">PayPal Email</label>
                                                                        <input class="form-control border-primary" type="text" name="paypal_email" placeholder="Enter PayPal Email">
                                                                    </div>

                                                                    <div id="beneficiaryField6" class="form-group" style="display: none">
                                                                        <label for="btc_address">BTC Wallet</label>
                                                                        <input class="form-control border-primary" type="" name="btc_address" placeholder="Enter Bitcoin Wallet Address">
                                                                    </div>

                                                                    <div id="beneficiaryField9" class="form-group" style="display: none">
                                                                        <label for="eth_address">ETH Wallet</label>
                                                                        <input class="form-control border-primary" type="text" name="eth_address" placeholder="Enter Ethereum Wallet Address">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="amount">Enter Withdrawal Amount</label>
                                                                        <input class="form-control border-primary" type="number" name="amount" placeholder="0.00" min="" max="" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="wizard-footer">
                                                            <div class="col-12">
                                                                <button  class="btn btn-success btn-lg pull-right" type="submit">Request Withdrawal</button>
                                                                {{--                                                <button id="loader" style="display:none" class="btn btn-success btn-lg pull-right">Loading...</button>--}}
                                                            </div>
                                                        </div>
                                                    </div>
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

    <script>
        function toggleBeneficiaryFields() {
            const pairType = document.getElementById('withdrawalMethod').value;
            const beneficiaryField1 = document.getElementById('beneficiaryField1');
            const beneficiaryField2 = document.getElementById('beneficiaryField2');
            const beneficiaryField3 = document.getElementById('beneficiaryField3');
            const beneficiaryField4 = document.getElementById('beneficiaryField4');
            const beneficiaryField5 = document.getElementById('beneficiaryField5');
            const beneficiaryField6 = document.getElementById('beneficiaryField6');
            const beneficiaryField9 = document.getElementById('beneficiaryField9');

            if (pairType === 'Bank Transfer') {
                beneficiaryField1.style.display = 'block';
                beneficiaryField2.style.display = 'block';
                beneficiaryField3.style.display = 'block';
                beneficiaryField4.style.display = 'block';
                beneficiaryField5.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            } else if (pairType === 'PayPal') {
                beneficiaryField5.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            }else if (pairType === 'Bitcoin') {
                beneficiaryField6.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField5.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            }else if (pairType === 'ethereum') {
                beneficiaryField9.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField5.style.display = 'none';
                beneficiaryField6.style.display = 'none';
            }
        }
    </script>

@endsection
