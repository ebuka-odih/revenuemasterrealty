@extends('admin.layout.app')
@section('content')
    <div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">All Users</h4>
                        </div>
                    </div>
                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                <div class="datatable-wrap my-3">
                                    <table class="datatable-init nowrap nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                        <thead>
                                        <tr class="nk-tb-item nk-tb-head">
                                            <th class="nk-tb-col sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending">
                                                <span class="sub-text">User</span>
                                            </th>
                                            <th class="nk-tb-col tb-col-md sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Balance: activate to sort column ascending">
                                                <span class="sub-text">Balance</span>
                                            </th>
                                            <th class="nk-tb-col tb-col-md sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending">
                                                <span class="sub-text">Phone</span>
                                            </th>

                                            <th class="nk-tb-col tb-col-md sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">
                                                <span class="sub-text">Status</span>
                                            </th>
                                            <th class="nk-tb-col nk-tb-col-tools text-end sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="
                                                            : activate to sort column ascending">

                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- .nk-tb-item  -->
                                        @foreach($users as $item)
                                            <tr class="nk-tb-item odd">

                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                        <img src="{{ asset('files/'.$item->avatar) }}" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                          <span class="tb-lead">{{ $item->name }} <span class="dot dot-success d-md-none ms-1"></span>
                                                          </span>
                                                        <span>{{ $item->email }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-md" data-order="35040.34">
                                              <span class="tb-amount">@money($item->balance) <span class="currency">USD</span>
                                              </span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{ $item->phone ? : "null"}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                {!! $item->status() !!}

                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a href="{{ route('admin.userDetail', $item->id) }}">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>View Details</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    @if($item->status == 1)
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
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- .card-preview -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
