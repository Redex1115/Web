@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <img src="{{ asset('image/2promotion_03.jpg')}}" alt="" class="img-fluid" width=100%  > 
            </div>                    
        </div>
                

        <div class="row" style="margin-top:20px;">
            <div class="col-sm-4" style="text-align: center;">
                <img src="{{ asset('image/samsungPhone.jpg')}}" width=50% alt="" class="img-fluid" > 
                <p>SAMSUNG</p>
            </div>
             <div class="col-sm-4" style="text-align: center">
                <img src="{{ asset('image/xiaomiPhone.jpg')}}" width=50% alt="" class="img-fluid"> 
                <p>XIAOMI</p>           
            </div>
            <div class="col-sm-4" style="text-align: center" >
                <img src="{{ asset('image/vivoPhone.jpg')}}" width=50% alt="" class="img-fluid" > 
                <p>VIVO</p>
            </div>                
        </div>
            
    </div>

    <div class="container-fluid">
            <div class="copyright text-center">
              &copy; Copyright <strong>ABC company</strong>. All Rights Reserved
            </div>
            <div class="credits text-center">
              Designed by <a href="https://ABC.com/">ABC Company</a>
            </div>
    </div>
</body>
</html>

@endsection