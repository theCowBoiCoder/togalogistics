<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<body style="background-color: #e5e5e5!important;">

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="relative flex items-top justify-center mb-0 align-middle ">
                <img src="{{asset('Toga-Logistics-Logo.png')}}" alt="">
            </div>
            <a class="btn btn-primary" href="{{route('telemetry')}}">Telemetry Overlay</a>
        </div>
    </div>
</div>

</body>
</html>
