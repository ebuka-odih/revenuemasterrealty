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
                                        <h3 class="nk-block-title page-title">Payment Method</h3>
                                    </div><!-- .nk-block-head-content -->

                                </div><!-- .nk-block-between -->
                            </div>

                            <div class="card card-bordered card-preview">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-bordered h-100">
                                            <div class="card-inner">
                                                <form action="{{ route('admin.payment-method.store') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="form-label" for="full-name">Select Method</label>
                                                        <div class="form-control-wrap">
                                                            <select name="name" class="form-control" id="full-name">
                                                                <option value="Bitcoin">Bitcoin</option>
                                                                <option value="Ethereum">Ethereum</option>
                                                                <option value="PayPal">PayPal</option>
                                                                <option value="Bank Transfer">Bank Transfer</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="email-address">Value</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" name="value" class="form-control" id="email-address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="card card-bordered h-100">
                                            <div class="card-inner">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Value</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($p_methods as $item)
                                                        <tr>
                                                            <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->value }}</td>
                                                            <td>
                                                               <div class="row">
                                                                   <div class="col-4">
                                                                       <a href=""><span style="font-size: 22px" class="icon ni ni-edit "></span></a>
                                                                   </div>
                                                                   <div class="col-8">
                                                                       <form method="POST" action="{!! route('admin.payment-method.destroy', $item->id) !!}" accept-charset="UTF-8">
                                                                           <input name="_method" value="DELETE" type="hidden">
                                                                           {{ csrf_field() }}
                                                                           <button  type="submit" class="btn btn-sm" onclick="return confirm(&quot;Delete Payment Method?&quot;)">
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


    <!-- Modal  -->
    <div class="modal fade" tabindex="-1" id="modalDefault">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Property</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.property.store') }}" method="POST">
                        @csrf


                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="full-name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Price</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="price" value="{{ old('price') }}" class="form-control" id="full-name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Rooms</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="rooms" value="{{ old('rooms') }}" id="full-name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Floor</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="floor" value="{{ old('floor') }}" id="full-name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Building Year</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="building_year" id="full-name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Square Meter</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="square_meter" id="full-name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Location</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="building_location" id="full-name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-2" for="full-name">Description</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="description"  id="" cols="30" rows="5">{{ old('description') }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Min Price</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" name="min_price" value="{{ old('min_price') }}" id="full-name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Return Rate</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="return_rate" value="{{ old('return_rate') }}" id="full-name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Return For</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="return_for" value="{{ old('return_for') }}" id="full-name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="cap">Capital Return</label>
                                    <div class="form-control-wrap">
                                        <select name="capital_back" id="cap" class="form-control">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Target Duration</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="target_duration" value="{{ old('target_duration') }}" id="full-name">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-2">
                            <div class="form-group">
                                <label class="form-label mt-2" for="full-name">Images</label>
                                <div class="form-control-wrap">
                                    <input type="file" class="form-control" name="target_duration" value="{{ old('target_duration') }}" id="full-name">
                                </div>
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
@endsection

