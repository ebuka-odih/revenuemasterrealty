@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Edit Product</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.property.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                <a href="{{ route('admin.property.index') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">

                                <form action="{{ route('admin.property.update', $property->id) }}" method="POST">
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

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label mt-2" for="full-name">Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="name" value="{{ old('name', optional($property)->name) }}" class="form-control" id="full-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label mt-2" for="full-name">Price</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="price" value="{{ old('price', optional($property)->price) }}" class="form-control" id="full-name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label mt-2" for="full-name">Rooms</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="rooms" value="{{ old('rooms', optional($property)->rooms) }}" id="full-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label mt-2" for="full-name">Floor</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="floor" value="{{ old('floor', optional($property)->floor) }}" id="full-name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="form-label mt-2" for="full-name">Building Year</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="building_year" value="{{ old('building_year', optional($property)->building_year) }}" id="full-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="form-label mt-2" for="full-name">Square Meter</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="square_meter" value="{{ old('square_meter', optional($property)->square_meter) }}" id="full-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="form-label mt-2" for="full-name">Location</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="building_location" value="{{ old('building_location', optional($property)->building_location) }}" id="full-name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label mt-2" for="full-name">Description</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control" name="description"  id="" cols="30" rows="5">{{ old('description', optional($property)->description) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="form-label mt-2" for="full-name">Min Price</label>
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" name="min_price" value="{{ old('min_price', optional($property)->min_price) }}" id="full-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="form-label mt-2" for="full-name">Return Rate</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="return_rate" value="{{ old('return_rate', optional($property)->return_rate) }}" id="full-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="form-label mt-2" for="full-name">Return For</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="return_for" value="{{ old('return_for') }}" {{ old('return_for', optional($property)->return_for) }} id="full-name">
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
                                                    <input type="text" class="form-control" name="target_duration" value="{{ old('target_duration') }}" {{ old('target_duration', optional($property)->target_duration) }} id="full-name">
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
                    </div><!-- .nk-block -->

                </div>
            </div>
        </div>
    </div>

@endsection
