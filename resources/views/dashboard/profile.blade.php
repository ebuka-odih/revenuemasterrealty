@extends('dashboard.layout.app')
@section('content')

<div class="content-body" style="min-height: 1061px;">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo rounded"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="{{ asset($user->avatar) }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">{{ $user->name }}</h4>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">{{ $user->email }}</h4>
                                    <p>Email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center">
                                        <table class="table table-striped" style="width:100%">
                                            <tr>
                                                <th>Balance:</th>
                                                <td>$@money($user->balance)</td>
                                            </tr>
                                            <tr>
                                                <th>Profit:</th>
                                                <td>$@money($user->balance)</td>
                                            </tr>
                                        </table>
                                        <br>
                                        <table class="table table-striped" style="width:100%">
                                            <tr>
                                                <th>Title:</th>
                                                <td>{{ $user->title ? : "Not Set" }}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone:</th>
                                                <td>{{ $user->phone ? : "Not Set" }}</td>
                                            </tr>
                                            <tr>
                                                <th>Country:</th>
                                                <td>{{ $user->country ? : "Not Set" }}</td>
                                            </tr>
                                            <tr>
                                                <th>State:</th>
                                                <td>{{ $user->state ? : "Not Set" }}</td>
                                            </tr>
                                            <tr>
                                                <th>City:</th>
                                                <td>{{ $user->city ? : "Not Set" }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address:</th>
                                                <td>{{ $user->address ? : "Not Set" }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab" class="nav-link active show">Settings</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="col-xl-6 offset-xl-3 col-lg-12">
                                        <div class="basic-form">
                                            <form action="{{ route('user.updateProfile') }}" method="POST">
                                                @csrf
                                                @method('PATCH')
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
                                                <div class="mb-3">
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control form-control-sm" placeholder="col-form-label-sm">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" name="email" value="{{ old('email', $user->email ) }}" class="form-control form-control-sm" placeholder="col-form-label-sm">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">Phone</label>
                                                    <div class="col-sm-10">
                                                        <input type="tel" name="phone" value="{{ old('phone', $user->phone ) }}" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">Title</label>
                                                    <div class="col-sm-10">
                                                        <select name="title" id="" class="form-control">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">Address</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="address" value="{{ old('address', $user->address ) }}" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">City</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="city" value="{{ old('city', $user->city ) }}" class="form-control form-control-sm" >
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">State</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="state" value="{{ old('state', $user->state ) }}" class="form-control form-control-sm" >
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">Country</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="country" value="{{ old('country', $user->country ) }}" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="mt-2">
                                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="col-xl-6 offset-xl-3 col-lg-12">
                                        <div class="basic-form">
                                            <h4>Change Password</h4>
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
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">Current Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" name="current_password"  class="form-control form-control-sm" >
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">New Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" name="new_password"  class="form-control form-control-sm" >
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-sm-2 col-form-label col-form-label-sm">Confirm New Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" name="new_password_confirmation"  class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="mt-2">
                                                    <button type="submit" class="btn btn-sm btn-primary">Update Password</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
