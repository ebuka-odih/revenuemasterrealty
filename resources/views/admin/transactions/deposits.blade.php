@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="nk-block nk-block-lg">
                            <div class="container m-2">
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
                                @if(session()->has('updated'))
                                    <div class="alert alert-success">
                                        {{ session()->get('updated') }}
                                    </div>
                                @endif
                                @if(session()->has('deleted'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('deleted') }}
                                    </div>
                                @endif
                            </div>

                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Deposits</h3>
                                    </div><!-- .nk-block-head-content -->

                                </div><!-- .nk-block-between -->
                            </div>

                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                        <div class="datatable-wrap my-3">
                                            <div class="table-responsive">
                                                <table class="datatable-init nowrap table dataTable no-footer dtr-inline" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                                    <thead>
                                                    <tr>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Date</th>
                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">User</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Amount</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Payment Method</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Status</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($deposits as $item)
                                                        <tr class="odd">
                                                            <td>{{ date('Y, M d') }}</td>
                                                            <td class="dtr-control sorting_1" tabindex="0">{{ $item->user->name }}</td>
                                                            <td>@money($item->amount)</td>
                                                            <td>{{ $item->payment_method->name }}</td>
                                                            <td>{!! $item->adminStatus() !!}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
{{--                                                                            <li><a href="#">View</a></li>--}}
                                                                            <li><a href="{{ route('admin.acceptDeposit', $item->id) }}">Approve</a></li>
                                                                            <li>
                                                                                <form method="POST" action="{!! route('admin.deleteDeposit', $item->id) !!}" accept-charset="UTF-8">
                                                                                    <input name="_method" value="DELETE" type="hidden">
                                                                                    {{ csrf_field() }}

                                                                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                                                                        <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Deposit?&quot;)">
                                                                                            <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                                                                        </button>
                                                                                    </div>
                                                                                </form>


                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- .card-preview -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

