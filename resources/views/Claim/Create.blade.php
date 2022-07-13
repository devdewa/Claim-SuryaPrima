@extends('layouts.master')

@section('title')
    List Data Claim
@endsection

@section('css')
    
@endsection

@section('content')
<h1 class="h3 mb-2 text-gray-800">Add Claim</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('claim.index') }}" class="btn btn-danger btn-sm mb-2">&laquo; Back</a>
    </div>
    <div class="card-body">
        <form action="{{ route('claim.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Tire Brand</strong>
                        <input type="text" name="tire_brand" value="{{ old('tire_brand') }}" class="form-control mt-2" placeholder="">
                       @error('tire_brand')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Tire Size</strong>
                        <input type="text" class="form-control mt-2" value="{{ old('tire_size') }}" name="tire_size" placeholder="">
                        @error('tire_size')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Tire Type</strong>
                        <input type="text" class="form-control mt-2" value="{{ old('tire_type') }}" name="tire_type" placeholder="">
                        @error('tire_type')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>No Series</strong>
                        <input type="text" class="form-control mt-2" value="{{ old('no_series') }}" name="no_series" placeholder="">
                        @error('no_series')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Ply Rating</strong>
                        <input type="text" class="form-control mt-2" value="{{ old('ply_rating') }}" name="ply_rating" placeholder="">
                        @error('ply_rating')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Early Flower (mm)</strong>
                        <input type="text" class="form-control mt-2" value="{{ old('early_flower') }}" name="early_flower" placeholder="">
                        @error('early_flower')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Remaining Flower (mm)</strong>
                        <input type="text" class="form-control mt-2" value="{{ old('remaining_flower') }}" name="remaining_flower" placeholder="">
                        @error('remaining_flower')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Damage</strong>
                        <input type="text" class="form-control mt-2" value="{{ old('damage') }}" name="damage" placeholder="">
                        @error('damage')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Consumer Name</strong>
                        <input type="text" class="form-control mt-2" value="{{ old('consumer_name') }}" name="consumer_name" placeholder="">
                        @error('consumer_name')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Bid Industry</strong>
                        <input type="text" class="form-control mt-2" value="{{ old('bid_industry') }}" name="bid_industry" placeholder="">
                        @error('bid_industry')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Road Condition</strong>
                        <select class="form-control" name="road_condition" id="exampleFormControlSelect2">
                            <option>Asphalt Road</option>
                            <option>Mix Road</option>
                            <option>Mud Road</option>
                            <option>Mining Road</option>
                            <option>Concrete Road</option>
                        </select>
                        @error('road_condition')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Vechile Type</strong>
                        <input type="text" class="form-control mt-2" name="vehicle_type" placeholder="">
                        @error('vehicle_type')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 my-2">
                    <div class="form-group">
                        <strong>Load Weight (Kg)</strong>
                        <input type="text" class="form-control mt-2" name="load_weight" placeholder="">
                        @error('load_weight')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 my-2">
                    <div class="form-group">
                        <strong>Purchase Date</strong>
                        <input type="date" class="form-control mt-2" name="purchase_date" placeholder="">
                        @error('purchase_date')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Foto No Series</strong>
                         <input type="file" name="image_no_series" class="form-control" placeholder="">
                        @error('image_no_series')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Foto No Dot </strong>
                         <input type="file" name="image_no_dot" class="form-control" placeholder="">
                        @error('image_no_dot')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Foto Damage Near </strong>
                         <input type="file" name="image_damage_near" class="form-control" placeholder="">
                        @error('image_damage_near')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Foto Damage Away </strong>
                         <input type="file" name="image_damage_away" class="form-control" placeholder="">
                        @error('image_damage_away')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Foto Remaining Flower </strong>
                         <input type="file" name="image_remaining_flower" class="form-control" placeholder="">
                        @error('image_remaining_flower')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Foto Entire Tire </strong>
                         <input type="file" name="image_entire_tire" class="form-control " placeholder="">
                        @error('image_entire_tire')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Foto Tire Brand </strong>
                         <input type="file" name="image_tire_brand" class="form-control" placeholder="">
                        @error('image_tire_brand')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-2">
                    <div class="form-group">
                        <strong>Foto Tire Size </strong>
                         <input type="file" name="image_tire_size" class="form-control" placeholder="">
                        @error('image_tire_size')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 my-2">
                    <div class="form-group">
                        <strong>Foto Lainnya </strong>
                         <input type="file" name="image_lainnya" class="form-control" placeholder="">
                        @error('image_lainnya')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="invisible col-xs-6 col-sm-6 col-md-6 my-2">
                </div>
                <button type="submit" class="btn btn-success btn-block ml-3">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
    
@endsection