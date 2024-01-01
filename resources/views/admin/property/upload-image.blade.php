@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">

                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.property.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                <a href="{{ route('admin.property.index') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->

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
                                    @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
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
                                        <h3 class="nk-block-title page-title">Upload Image</h3>
                                    </div><!-- .nk-block-head-content -->

                                </div><!-- .nk-block-between -->
                            </div>

                            <div class="card card-bordered card-preview">

                              <div class="card-body">
                                  <div class="container">
                                      <table class="table table-striped" style="width:100%">
                                          <tr>
                                              <th>Name:</th>
                                              <td>{{ $property->name }}</td>
                                          </tr>
                                          <tr>
                                              <th>Price:</th>
                                              <td>$@money($property->price)</td>
                                          </tr>
                                          <tr>
                                              <th>Location:</th>
                                              <td>{{ $property->building_location }}</td>
                                          </tr>
                                      </table>
                                      <hr>
                                      <form action="{{ route('admin.storeImage') }}" method="POST" enctype="multipart/form-data">
                                          @csrf


                                          <div class="mb-3">
                                              <div class="row">
                                                  <input type="hidden" name="properties_id" value="{{ $property->id }}">

                                                  <div class="col-4">
                                                      <div class="form-group">
                                                          <label class="form-label mt-2" for="full-name">Image</label>
                                                          <div class="form-control-wrap">
                                                              <input type="file" class="form-control" name="image[]" id="full-name" multiple required="">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>



                                          <div class="form-group">
                                              <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                          </div>
                                      </form>

                                      <br>
                                      <hr>


                                              <div class="row">
                                                  @if ($property->images->count() > 0)
                                                      @foreach ($property->images as $image)
                                                  <div class="col-3">
                                                      <img height="150" width="150" src="{{ asset($image->image_path) }}" alt="Product Image">

                                                      <form method="POST" class="mt-2" action="{!! route('admin.deleteImage', $image->id) !!}" accept-charset="UTF-8">
                                                          <input name="_method" value="DELETE" type="hidden">
                                                          {{ csrf_field() }}

                                                          <div class="btn-group btn-group-xs pull-right" role="group">
                                                              <button data-toggle="tooltip" data-placement="top" type="submit" class="btn btn-sm btn-danger" onclick="return confirm(&quot;Delete Item?&quot;)">
                                                                  <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                                              </button>
                                                          </div>
                                                      </form>
                                                  </div>
                                                      @endforeach
                                                  @else
                                                      <p>No images available for this product.</p>
                                                  @endif
                                              </div>




                                  </div>
                              </div>
                            </div><!-- .card-preview -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
