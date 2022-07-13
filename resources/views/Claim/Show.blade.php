@extends('layouts.master')

@section('title')
List Data Claim
@endsection

@section('css')

@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header">
        <div class="row d-flex align-items-center">
            <h1 class="h5 text-gray-800 col-11 mb-0">Claim Detail</h1>
            <a href="{{ route('claim.index') }}" class="btn btn-primary btn-sm col">&laquo; Back</a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 d-flex align-items-center flex-wrap">
                    @if ($claim->status == 0)
                    <span class="badge badge-danger py-3 px-5 mb-3 mr-3">NOT ACC</span>
                    @elseif($claim->status == 1)
                    <span class="badge badge-warning">ACC 50%</span>
                    @else
                    <span class="badge badge-success">ACC 100%</span>
                    @endif
                    <!-- <a href="" class="btn btn-info mb-3 mr-3">Export</a> -->
                    <a href="" class="btn btn-success mb-3 mr-3"><i class="fas fa-file-excel"></i></a>
                    <a href="{{ route('export.pdf', $claim->id) }}" class="btn btn-danger mb-3 mr-3"><i class="fas fa-file-pdf"></i></a>
                    <form action="{{ route('claim.update', $claim->id) }}" class="d-flex justify-content-start" method="post">

                            <div class="form-group mr-3 w-75">
                                <select id="inputState" class="form-control" name="status">
                                    <option selected>ACC Option</option>
                                    <option value="1">ACC 50%</option>
                                    <option value="2">ACC 100%</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="..."
                                    aria-label="..." aria-describedby="button-addon2">
                                <button class="shadow-none border-0 rounded-right btn-success px-3" type="button" id="button-addon2"><i class="fas fa-check"></i></button>
                            </div>
                    </form>
            </div>

            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th scope="row">Tire Brand</th>
                            <td>{{ $claim->tire_brand }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tire Size</th>
                            <td>{{ $claim->tire_size }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tire Type</th>
                            <td>{{ $claim->tire_type }}</td>
                        </tr>
                        <tr>
                            <th scope="row">No Series</th>
                            <td>{{ $claim->no_series }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Ply Rating</th>
                            <td>{{ $claim->ply_rating }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Early Flower</th>
                            <td>{{ $claim->early_flower }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Damage</th>
                            <td>{{ $claim->damage }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th scope="row">Consumer Name</th>
                            <td>{{ $claim->consumer_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Bid. Industry</th>
                            <td>{{ $claim->bid_industry }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Road Condition</th>
                            <td>{{ $claim->road_condition }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Vehicle Type</th>
                            <td>{{ $claim->vehicle_type }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Load Weight (KG)</th>
                            <td>{{ $claim->load_weight }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Purchase Date</th>
                            <td>{{ $claim->purchase_date }}</td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="2">Created On {{ $claim->created_at}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h4 class="text-center font-weight-bold text-black mb-5">DAMAGE PHOTO</h4>
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h6 class="text-center">PHOTO NO SERIES</h6>
                        <img src="{{ asset('claims-image/'.$claim->image_no_series) }}" class="img-fluid w-50 d-flex m-auto" alt="...">
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-center">PHOTO NO DOT</h6>
                        <img src="{{ asset('claims-image/'.$claim->image_no_dot) }}" class="img-fluid w-50 d-flex m-auto" alt="...">
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-center">PHOTO DAMAGE FROM NEAR</h6>
                        <img src="{{ asset('claims-image/'.$claim->image_damage_near) }}" class="img-fluid w-50 d-flex m-auto" alt="...">
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-center">PHOTO REMAINING FLOWER</h6>
                        <img src="{{ asset('claims-image/'.$claim->image_remaining_flower) }}" class="img-fluid w-50 d-flex m-auto"
                            alt="...">
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-center">PHOTO DAMAGE FROM AWAY</h6>
                        <img src="{{ asset('claims-image/'.$claim->image_damage_away) }}" class="img-fluid w-50 d-flex m-auto" alt="...">
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-center">PHOTO ENTIRE TIRE</h6>
                        <img src="{{ asset('claims-image/'.$claim->image_entire_tire) }}" class="img-fluid w-50 d-flex m-auto" alt="...">
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-center">PHOTO TIRE BRAND</h6>
                        <img src="{{ asset('claims-image/'.$claim->image_tire_brand) }}" class="img-fluid w-50 d-flex m-auto" alt="...">
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-center">PHOTO TIRE SIZE</h6>
                        <img src="{{ asset('claims-image/'.$claim->image_tire_size) }}" class="img-fluid w-50 d-flex m-auto" alt="...">
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-center">MORE PHOTO</h6>
                        <img src="{{ asset('claims-image/'.$claim->image_lainnya) }}" class="img-fluid w-50 d-flex m-auto" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection