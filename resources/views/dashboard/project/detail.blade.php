@extends('dashboard.layout.app')
@section('content')


<div class="content-body" style="min-height: 1061px;">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                <!-- Tab panes -->
                                <div class="tab-content">

                                    @if ($project->images->count() > 0)
                                        @foreach ($project->images as $image)
                                            @if($loop->first)
                                                <div role="tabpanel" class="tab-pane fade active show" id="{{ $image->id }}">
                                                    <img class="img-fluid" src="{{ asset($image->image_path) }}" alt="">
                                                </div>
                                            @else
                                                <div role="tabpanel" class="tab-pane fade" id="{{ $image->id }}">
                                                    <img class="img-fluid" src="{{ asset($image->image_path) }}" alt="">
                                                </div>
                                            @endif
                                        @endforeach
                                    @else
                                        <p>No images available for this property.</p>
                                    @endif

                                </div>
                                <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav slide-item-list mt-3" role="tablist">

                                        @foreach ($project->images as $image)
                                            @if($loop->first)
                                            <li role="presentation" class="show">
                                                <a href="#{{ $image->id }}" role="tab" data-bs-toggle="tab"  aria-selected="true">
                                                    <img class="img-fluid" src="{{ asset($image->image_path) }}" alt="" width="50"></a>
                                            </li>
                                            @else
                                                <li role="presentation" >
                                                    <a href="#{{ $image->id }}" role="tab" data-bs-toggle="tab" class="" >
                                                        <img class="img-fluid" src="{{ asset($image->image_path) }}" alt="" width="50"></a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!--Tab slider End-->
                            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                <div class="product-detail-content">
                                    <!--Product details-->
                                    <div class="new-arrival-content pr">
                                        <h4>{{ $project->name }}</h4>
                                        <div class="comment-review star-rating">
                                            @if($project->reviews > 3)
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-empty"></i></li>
                                                    <li><i class="fa fa-star-half-empty"></i></li>
                                                </ul>
                                            @else
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half"></i></li>
                                                    <li><i class="fa fa-star-half"></i></li>
                                                </ul>
                                            @endif
                                            <span class="review-text">({{ $project->reviews }} reviews)  </span>
                                        </div>
                                        <div class="d-table mb-2">
                                            <p class="price float-left d-block">$@money($project->price)</p>
                                        </div>
                                        <p>Type: <span class="item"> {{ $project->type }} </span></p>
                                        <p><i class="fa fa-location-arrow"></i> Location: <span class="item">{{ $project->building_location }}</span></p>

                                        <p class="text-content">{{ $project->description }}</p>
                                        <hr>
                                        <h4>Investment Details</h4>
                                        <table class="table" style="width:100%">
                                            <tr>
                                                <th>Min investment:</th>
                                                <td>{{ $project->min_price }}</td>
                                            </tr>
                                            <tr>
                                                <th>Return Rate:</th>
                                                <td>{{ $project->return_rate ? : "10" }}%</td>
                                            </tr>
                                            <tr>
                                                <th>Return Duration:</th>
                                                <td>{{ $project->return_for }} Month(s)</td>
                                            </tr>
                                            <tr>
                                                <th>Capital Return:</th>
                                                <td>{{ $project->capital_back }}</td>
                                            </tr>
                                            <tr>
                                                <th>Target Duration:</th>
                                                <td>{{ $project->target_duration }}</td>
                                            </tr>
                                        </table>
                                        <form action="{{ route('user.invest') }}" method="POST">
                                            @csrf
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
                                            <div class="d-flex align-items-end flex-wrap mt-4">
                                                <input type="hidden" name="properties_id" value="{{ $project->id }}">

                                                <div class="col-12">
                                                    <label for="">Enter Amount</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">$</span>
                                                        <input type="number" name="amount" required class="form-control input-rounded" placeholder="1000">

                                                    </div>
                                                    <small class="text-danger">Enter min investment or higher</small>
                                                </div>
                                                <br>
                                                <!--Quanatity End-->
                                                <div class="shopping-cart mb-3 me-3">
                                                    <button type="submit" class="btn btn-primary" ><i class="fa fa-arrow-right me-2"></i>
                                                        Proceed</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- review -->
            <div class="modal fade" id="reviewModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="text-center mb-4">
                                    <img class="img-fluid rounded" width="78" src="images/avatar/1.jpg" alt="DexignZone">
                                </div>
                                <div class="form-group">
                                    <div class="rating-widget mb-4 text-center">
                                        <!-- Rating Stars Box -->
                                        <div class="rating-stars">
                                            <ul id="stars">
                                                <li class="star" title="Poor" data-value="1">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Fair" data-value="2">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Good" data-value="3">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Excellent" data-value="4">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="WOW!!!" data-value="5">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                                </div>
                                <button class="btn btn-success btn-block">RATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
