@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Security</h3>
                            </div><!-- .nk-block-head-content -->

                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-lg-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h5 class="card-title">Customer Info</h5>
                                        </div>
                                        <form action="{{ route('admin.changePasswordSave') }}" method="POST">
                                            @method('PATCH')
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
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">Current Password</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control" name="current_password" id="full-name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="email-address">New Password</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control" name="new_password" id="email-address">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">Confirm New Password</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control" name="new_password_confirmation" id="phone-no">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
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

@endsection
