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
                                        <h3 class="nk-block-title page-title">Listed Properties</h3>
                                    </div><!-- .nk-block-head-content -->

                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <div class="" data-content="pageMenu">
                                                <a href="{{ route('admin.property.create') }}" class=" btn btn-primary "><em class="icon ni ni-plus"></em><span>Add Property</span></a>

                                                <ul class="nk-block-tools g-3">

                                                    <li class="nk-block-tools-opt">
{{--                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalDefault" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>--}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div>

                            <div class="card card-bordered card-preview">

                                <table class="table table-orders">
                                    <thead class="tb-odr-head">
                                    <tr class="tb-odr-item">
                                        <th class="tb-odr-info">
                                            <span class="tb-odr-date d-none d-md-inline-block">Date</span>
                                        </th>
                                        <th class="tb-odr-item">
                                            <span class="tb-odr">Name</span>
                                        </th>
                                        <th class="tb-odr-item">
                                            <span class="tb-odr">Amount</span>
                                        </th>
                                        <th class="tb-odr-item">
                                            <span class="tb-odr">Location</span>
                                        </th>
                                        <th class="tb-odr-action">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="tb-odr-body">
                                    @foreach($properties as $item)
                                     <tr class="tb-odr-item">
                                        <td class="tb-odr">
                                            <span class="tb-odr-date">{{ date('d M, Y', strtotime($item->created_at)) }}</span>
                                        </td>
                                        <td class="tb-odr">
                                            <span class="tb-odr-total">
                                                <span class="amount">{{ $item->name }}</span>
                                            </span>
                                        </td>
                                         <td class="tb-odr">
                                            <span class="tb-odr-total">
                                                <span class="amount">@money($item->price)</span>
                                            </span>
                                        </td>
                                         <td class="tb-odr">
                                            <span class="tb-odr-total">
                                                <span class="amount">{{ $item->building_location }}</span>
                                            </span>
                                        </td>
                                        <td class="tb-odr-action">
                                            <div class="tb-odr-btns d-none d-md-inline">
                                                <a href="{{ route('admin.property.show', $item->id) }}" class="btn btn-sm btn-primary">View</a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                                                    <ul class="link-list-plain">
                                                        <li><a href="{{ route('admin.property.edit', $item->id) }}" class="text-primary">Edit</a></li>
                                                        <li><a href="{{ route('admin.image', $item->id) }}" class="text-primary">Upload Image</a></li>
                                                        <li><a href="{{ route('admin.property.show', $item->id) }}" class="text-primary">View</a></li>
                                                        <li class="m-2">
                                                            <form method="POST" action="{!! route('admin.property.destroy', $item->id) !!}" accept-charset="UTF-8">
                                                                <input name="_method" value="DELETE" type="hidden">
                                                                {{ csrf_field() }}

                                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                                    <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Property?&quot;)">
                                                                        <span class="fa flaticon-delete" aria-hidden="true"></span>Remove
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div><!-- .card-preview -->
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
                                        <input type="number" name="price" value="{{ old('price') }}" class="form-control" id="full-name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Rooms</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" name="rooms" value="{{ old('rooms') }}" id="full-name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Floor</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" name="floor" value="{{ old('floor') }}" id="full-name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Type</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="type" value="{{ old('type') }}" id="full-name">
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
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Money Invested</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" name="invested" value="{{ old('invested') }}" id="full-name">
                                        <small class="text-danger">How much has been invested already</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Reviews</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="reviews" value="{{ old('reviews') }}" id="full-name">
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
                                        <input type="number" class="form-control" name="return_rate" value="{{ old('return_rate') }}" id="full-name">
                                        <small class="text-danger">Number of percentage</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="form-label mt-2" for="full-name">Return For</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" name="return_for" value="{{ old('return_for') }}" id="full-name">
                                        <small class="text-danger">Number of months</small>
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
                                        <input type="number" class="form-control" name="target_duration" value="{{ old('target_duration') }}" id="full-name">
                                        <small class="text-danger">Number of months</small>
                                    </div>
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
