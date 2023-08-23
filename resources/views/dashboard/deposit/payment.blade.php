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
                                        <a class="nav-link active"  ><i class="fa fa-coins me-2"></i> Payment</a>
                                    </li>
                                </ul>
                                <div class="tab-content">

                                    <div class="tab-pane fade active show" id="home1">
                                        <div class="pt-4">
                                            <div class="col-xl-6 offset-xl-3 col-lg-12">
                                                <div class="basic-form">
                                                    <form action="{{ route('user.processPayment', $deposit->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="mb-3">
                                                            <h3>{{ $deposit->payment_method->name }}</h3>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"></span>
                                                                <input type="text" value="{{ $deposit->payment_method->value }}" readonly class="form-control input-rounded" >
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="visible-print text-center">
                                                                {!! QrCode::size(150)->generate($deposit->payment_method->value); !!}
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <h4>Upload Payment Proof</h4>
                                                        <div class="container mt-2">
                                                            @if(session()->has('success'))
                                                                <div class="alert alert-success">
                                                                    {{ session()->get('success') }}

                                                                </div>
                                                            @endif
                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div >
                                                            <input type="file" class="form-control" name="reference">
                                                        </div>
                                                        <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">
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
