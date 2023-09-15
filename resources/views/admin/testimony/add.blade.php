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
                                        <h3 class="nk-block-title page-title">Testimonies</h3>
                                    </div><!-- .nk-block-head-content -->

                                </div><!-- .nk-block-between -->
                            </div>

                            <div class="card card-bordered card-preview">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-bordered h-100">
                                            <div class="card-inner">
                                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalDefault">Add Testimony</button>
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Country</th>
                                                        <th>Message</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($testimonies as $item)
                                                        <tr>
                                                            <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                                            <td>{{ $item->username }}</td>
                                                            <td>{{ $item->country }}</td>
                                                            <td>{{ $item->message }}</td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <a href=""><span style="font-size: 22px" class="icon ni ni-edit "></span></a>
                                                                    </div>
                                                                    <div class="col-10">
                                                                        <form method="POST" action="{!! route('admin.testimony.destroy', $item->id) !!}" accept-charset="UTF-8">
                                                                            <input name="_method" value="DELETE" type="hidden">
                                                                            {{ csrf_field() }}
                                                                            <button  type="submit" class="btn btn-sm" onclick="return confirm(&quot;Delete Data?&quot;)">
                                                                                <span style="font-size: 22px" class="icon ni ni-cross-c text-danger"></span>
                                                                            </button>
                                                                        </form>
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

    <div class="modal fade" tabindex="-1" id="modalDefault">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Testimony</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.testimony.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="email-address">Picture</label>
                            <div class="form-control-wrap">
                                <input type="file" name="avatar" class="form-control" id="email-address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Username</label>
                            <div class="form-control-wrap">
                                <input type="text" name="username" class="form-control" id="email-address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Country</label>
                            <div class="form-control-wrap">
                                <input type="text" name="country" class="form-control" id="email-address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Message</label>
                            <div class="form-control-wrap">
                                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Modal Footer Text</span>
                </div>
            </div>
        </div>
    </div>
@endsection

