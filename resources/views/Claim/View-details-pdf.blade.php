<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style></style>
  </head>
  <body>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                @if ($claim->status == 0)
                <span class="badge badge-danger pt-3 pb-3 pl-5 pr-5 mb-3">NOT ACC</span>
                @elseif($claim->status == 1)
                <span class="badge badge-warning">ACC 50%</span>
                @else
                <span class="badge badge-success">ACC 100%</span>
                @endif
            </div>
        </div>
        <div class="col-sm-5">
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
        <div class="col-sm-5">
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
        <div class="col-sm-12">
            <h4 class="text-center font-weight-bold text-black">DAMAGE PHOTO</h4>
            <div class="row">
                <div class="col-sm-4">
                    <h6 class="text-center">PHOTO NO SERIES</h6>
                    <img src="{{ public_path('/claims-image/'.$claim->image_no_series) }}" class="img-fluid" alt="...">
                </div>
                <div class="col-sm-4">
                    <h6 class="text-center">PHOTO NO DOT</h6>
                    <img src="{{ public_path('/claims-image/'.$claim->image_no_dot) }}" class="img-fluid" alt="...">
                </div>
                <div class="col-sm-4">
                    <h6 class="text-center">PHOTO DAMAGE FROM NEAR</h6>
                    <img src="{{ public_path('/claims-image/'.$claim->image_damage_near) }}" class="img-fluid" alt="...">
                </div>
                <div class="col-sm-4">
                    <h6 class="text-center">PHOTO REMAINING FLOWER</h6>
                    <img src="{{ public_path('/claims-image/'.$claim->image_remaining_flower) }}" class="img-fluid"
                        alt="...">
                </div>
                <div class="col-sm-4">
                    <h6 class="text-center">PHOTO DAMAGE FROM AWAY</h6>
                    <img src="{{ public_path('/claims-image/'.$claim->image_damage_away) }}" class="img-fluid" alt="...">
                </div>
                <div class="col-sm-4">
                    <h6 class="text-center">PHOTO ENTIRE TIRE</h6>
                    <img src="{{ public_path('/claims-image/'.$claim->image_entire_tire) }}" class="img-fluid" alt="...">
                </div>
                <div class="col-sm-4">
                    <h6 class="text-center">PHOTO TIRE BRAND</h6>
                    <img src="{{ public_path('/claims-image/'.$claim->image_tire_brand) }}" class="img-fluid" alt="...">
                </div>
                <div class="col-sm-4">
                    <h6 class="text-center">PHOTO TIRE SIZE</h6>
                    <img src="{{ public_path('/claims-image/'.$claim->image_tire_size) }}" class="img-fluid" alt="...">
                </div>
                <div class="col-sm-4">
                    <h6 class="text-center">MORE PHOTO</h6>
                    <img src="{{ public_path('/claims-image/'.$claim->image_lainnya) }}" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
