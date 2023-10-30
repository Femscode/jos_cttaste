<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<title>Price Confirmation</title>
	<meta charset="utf-8" />
	<meta name="description" content="Total price :{{ number_format($price) }}" />
	<meta name="keywords" content="Total price :{{ number_format($price) }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="assets/images/logo-01.png" />
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('homepage/style.css') }}">
	<link rel="stylesheet" href="{{ asset('cdn/bootstrap.min.css')}}">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
		  <div class="col-md-8">
			<div class="card text-center">
			  <div class="card-body">
				<h4 class="card-title">CT-Taste Price Confirmation</h4>
				<h6 class="card-subtitle mb-2 text-muted"></h6>
				<p class="btn btn-primary card-text">Total Price: NGN<span id="product-price">{{ number_format($price) }}</span></p>
				
			  </div>
			</div>
		  </div>
		</div>
	  </div>
   
</body>