@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Personal Information</h4>
                                        </div>
                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Basics</h6>
                                        </div>
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Full Name</span>
                                                <span class="data-value">{{ $user->name }}</span>
                                            </div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Email</span>
                                                <span class="data-value">{{ $user->email }}</span>
                                            </div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Phone Number</span>
                                                <span class="data-value text-soft">{{ $user->phone ? : "Not Set" }}</span>
                                            </div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Address</span>
                                                <span class="data-value">{{ $user->address ? : 'Not Set'}}, <br>{{ $user->state.', '.$user->country}}</span>
                                            </div>
                                        </div><!-- data-item -->
                                    </div><!-- data-list -->
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Preferences</h6>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Currency</span>
                                                <span class="data-value">USD</span>
                                            </div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Language</span>
                                                <span class="data-value">English (United State)</span>
                                            </div>
                                        </div><!-- data-item -->


                                    </div><!-- data-list -->
                                </div><!-- .nk-block -->
                            </div>
                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg toggle-screen-lg" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                                                        <div class="card-inner">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-primary">
                                                                    <span>AB</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="lead-text">{{ $user->name }}</span>
                                                                    <span class="sub-text">{{ $user->email }}</span>
                                                                </div>

                                                            </div><!-- .user-card -->
                                                        </div><!-- .card-inner -->
                                                        <div class="card-inner">
                                                            <div class="user-account-info py-0">
                                                                <h6 class="overline-title-alt">Wallet Account</h6>
                                                                <div class="user-balance">@money($user->balance) <small class="currency currency-btc">BTC</small></div>
                                                            </div>
                                                            <ul class="link-list-opt no-bdr">

                                                                @if($user->status == 1)
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-na"></em>
                                                                            <span>Suspend User</span>
                                                                        </a>
                                                                    </li>
                                                                @else
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-check"></em>
                                                                            <span>Approve User</span>
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                                <li>
                                                                    <a href="#">
                                                                        <em class="icon ni ni-cross"></em>
                                                                        <span>Delete User</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- .card-inner -->
                                                        <div class="card-inner p-0">
                                                            <ul class="link-list-menu">
                                                                <li><a class="active" href="{{ route('admin.userDetail', $user->id) }}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
{{--                                                                <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>--}}
                                                            </ul>
                                                        </div><!-- .card-inner -->
                                                    </div>
                                                </div></div></div><div class="simplebar-placeholder" style="width: auto; height: 504px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!-- .card-inner-group -->
                            </div><!-- card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@endsection
