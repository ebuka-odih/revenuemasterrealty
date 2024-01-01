@extends('dashboard.layout.app')
@section('content')


<div class="content-body" style="min-height: 1061px;">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6  col-md-12 col-xxl-5 ">
                                <!-- Tab panes -->
                                <div class="tab-content">

                                    <div class="container">
                                        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                                        <img id="expandedImg" style="width:100%">
                                        <div id="imgtext"></div>
                                    </div>

                                </div>
                                <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav slide-item-list mt-3" role="tablist">
                                      @foreach ($project->images as $image)
                                         <li role="presentation" >
                                            <div class="column">
                                                <img src="{{ asset($image->image_path) }}" style="width:100%" onclick="myFunction(this);">
                                            </div>
                                         </li>
                                      @endforeach

                                    </ul>
                                </div>
                            </div>
                            <!--Tab slider End-->
                            <div class="col-xl-8 col-lg-6  col-md-12 col-xxl-7 col-sm-12">
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
                                                <td>@@money($project->min_price)</td>
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
                                                <td>{{ $project->target_duration }} Month(s)</td>
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
                                                    <label for="">Enter Investment Amount</label>
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
        </div>
    </div>
</div>

<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>
@endsection
