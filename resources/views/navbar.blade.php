<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'PT Sans', sans-serif;
            letter-spacing: 1px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2" style="background-color: #0086cb!important;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Current Stats</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Current Truck -
                                    <strong>{{$response->truck->make}} {{$response->truck->model}}</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Truck Mileage:
                                    <strong>{{number_format($response->truck->odometer,0)}}miles</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Fuel Remaining:
                                    <strong>{{number_format($percent * 100, 0)}}%</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Income:
                                    <strong>&pound;{{$response->job->income}}</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Last Updated:
                                    <strong>{{\Carbon\Carbon::now()->toDayDateTimeString()}}</strong></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->


</body>
</html>
