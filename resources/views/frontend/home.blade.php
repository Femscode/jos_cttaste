<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<title>CTtaste</title>
	<meta charset="utf-8" />
	<meta name="description" content="No 1 Food Ordering Platform For Students" />
	<meta name="keywords" content="No 1 Food Ordering Platform For Students" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="https://jos.cttaste.com/assets/images/fav_01.png">

	<link rel="shortcut icon" href="assets/images/logo-01.png" />
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('homepage/style.css') }}">
	<link rel="stylesheet" href="{{ asset('cdn/bootstrap.min.css')}}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<style>
		.bg {
			animation: slide 1s ease-in-out infinite alternate;
			background-image: linear-gradient(-90deg, #ebab21 35%, #e9ebee 50%);
			bottom: 0;
			left: -50%;
			opacity: .5;
			position: fixed;
			right: -50%;
			top: 0;
			z-index: -1;
		}

		.card-name-sticker {
			position: absolute;
			top: 0;
			left: 0;
			background-color: #ebab21;
			color: #640f11;
			padding: 4px 8px;
			font-size: 12px;
			border-top-left-radius: 4px;
			border-bottom-right-radius: 4px;

		}

		.card-bottom-right-sticker {
			position: absolute;
			bottom: 0;
			right: 0;
			padding: 4px 8px;
			font-size: 12px;
			border-top-left-radius: 4px;
			border-bottom-right-radius: 4px;

		}


		.bg2 {
			animation-direction: alternate-reverse;
			animation-duration: 2s;
		}

		.bg3 {
			animation-duration: 2s;
		}

		@keyframes slide {
			0% {
				transform: translateX(-25%);
			}

			100% {
				transform: translateX(25%);
			}
		}
	</style>
</head>

<body id="kt_body" class="header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">

	<div id='pre_body'>
		<div class="card-design-anim">
			<div class="header-anim">
				<!-- <div class="img-anim"></div> -->

				<div style="margin-left:0px !important" class="message-content">
					<span class="content-1"></span>
					<span class="content-2"></span>
				</div>
				<!-- <div class="img-anim"></div> -->
			</div>
			<div class="sub-message-content">
				<div class="line line-1"></div>
				<div class="line line-2"></div>
			</div>
		</div>
		<div class="card-design-anim">
			<div class="header-anim">
				<div class="img-anim"></div>
				<div class="message-content">

					<span class="img-anim"></span>
				</div>
			</div>
			<div class="sub-message-content">
				<div class="line line-1"></div>
				<div class="line line-2"></div>
			</div>
		</div>

		<style>
			body {
				background-color: #e9ebee;
				color: #1d2129;
				direction: ltr;
				line-height: 1.34;
			}

			.card-design-anim {
				padding: 12px;
				/* max-width: 476px; */
				height: 300px;
				/* margin: 4rem auto; */
				background: #ffffff;
				border-radius: 10px;
				border: 1px solid #ffffff;
				margin-bottom: 16px;
			}

			.header-anim .message-content {
				width: 100%;
			}

			.card-design-anim .header-anim {
				display: flex;
				align-items: center;
			}

			.header-anim .img-anim {
				height: 200px;
				width: 100%;
				background: #f1f3f6;
				border-radius: 15px;
				display: inline-block;
				position: relative;

				overflow: hidden;
			}

			.header-anim .message-content {
				margin-left: 20px;
			}

			.message-content span {
				display: block;
				background: #f1f3f6;
				overflow: hidden;
				position: relative;
			}

			.message-content .content-1 {
				height: 250px;
			}

			.message-content .content-2 {
				height: 16px;
				margin-top: 6px;
			}

			.card-design-anim .sub-messsage-content {
				margin: 25px 0;
			}

			.sub-messsage-content .line {
				background: #f1f3f6;
				height: 13px;
				margin: 10px 0;
				overflow: hidden;
				position: relative;
			}

			.sub-messsage-content .line-1 {
				width: 107px;
				height: 16px;
				margin-left: 54px;
			}

			.sub-messsage-content .line-2 {
				width: 159px;
				height: 19px;
				margin-left: 54px;
			}

			.header-anim .img-anim::before,
			.message-content span::before,
			.sub-messsage-content .line::before {
				position: absolute;
				content: "";
				height: 300px;
				width: 476px;
				background-image: linear-gradient(to right,
						#f6f7f9 0%,
						#e9ebee 20%,
						#f6f7f9 40%,
						#f6f7f9 100%);
				background-repeat: no-repeat;
				background-size: 450px 400px;
				animation: shimmer 2s linear infinite;
			}

			.header-anim .img-anim::before {
				background-size: 650px 600px;
			}

			.details span::before {
				animation-delay: 0s;
			}

			.checkoutdesign2 {

				animation: blinking 1s infinite;
				cursor: pointer;
				font-size: 18px
			}

			@keyframes blinking {
				0% {
					color: white;
				}

				/* 47% {
	color: grey;
} */

				62% {
					color: #ffbb73;
				}

				/*97% {*/
				/*  color: #fb9932;*/
				/*}*/
				/*100% {*/
				/*  color: #fb8402;*/
				/*}*/
			}

			@keyframes shimmer {
				0% {
					background-position: -450px 0;
				}

				100% {
					background-position: 450px 0;
				}
			}
		</style>

	</div>
	<div style='display:none' id='post_body'>
		<div class="bg"></div>
		<div class="bg bg2"></div>
		<div class="bg bg3"></div>
		<header class="" style='background-repeat:repeat;background-image: url(assets/images/star-bg.svg)'>
			<div class="container">



				<nav>
					<div>
						<a href="#">
							{{-- <i class="fa fa-mobile-alt"></i> --}}
							<img src="assets/images/logo-br.png" width="100" height='30' alt='logo' class='lazyload'>
						</a>
					</div>
					<div class="right-menu">
						<a style='color:#640f11' class="bold-place" href="/register">Register/Login<br> as a vendor
							➜</a>
						<!--<a href="/register">Sign up</a>-->
					</div>
				</nav>
				<div class="animate__animated animate__swing rounded hero-text">
					{{-- <img src='assets/images/frontal.avif' style='width:200px;height:150px' /> --}}
					<h1 class="bold-place;"><span class="bold-place" style='font-family:cursive;color:black'>Jos Delicacies, Delivered to You😋💃🏻</span></h1>
					{{-- style='font-family:cursive'>Savor every bite, from the comfort of your own home.🎉, ...Where
					great taste meets convenience😋, Food to fit your mood, just a click away.!💃🏻</span></h1> --}}
					<div class='col-md-8'>
						<label style='background:#fff3cd;color:#856404;border-left-color:#856404;border-left-width:5px'
							{{--
							class="btn btn-outline btn-warning-dashed btn-outline-default p-7 d-flex align-items-center mb-0"
							--}} class="btn btn-outline btn-warning-dashed btn-outline-default align-items-center mb-0"
							for="kt_modal_two_factor_authentication_option_1">


							<span class="d-block text-start">
								<!--<span class="fw-bolder d-block fs-3" style='color:#721c24'>NOTICE !!!</span>-->
								<span class="fs-6" style='color:#856404'>
									Not in <span class='realschool'>Jos</span>? Change Location.
									<br>
									<div class='col-md-12'>
										<form action='{{ route("searchfood") }}' method='post'>@csrf

											<select required name='school' class="changeschool form-select"
												data-control="select2" data-placeholder="School"
												data-hide-search="true">



												<option value="JOS">JOS</option>
												<option value="KADUNA">KADUNA</option>
												<option value="NASSARAWA">NASSARAWA</option>
												


											</select>



											<div class="input-group mt-2">
												<input class='form-control shadow-none' id='search_changeschool'
													type="text" name='food' placeholder="Search for food">
												<div class="input-group-append">
													<button type='submit'
														style='border:0px solid #fff;background:#856404'
														class="btn btn-primary" type="button"><i
															class='fa fa-search text-white'></i></button>
												</div>
											</div>
										</form>
									</div>
								</span>
							</span>
						</label>
					</div>
					{{-- <img src='assets/images/frontal.avif' style='width:300px;height:200px' /> --}}

					{{-- <img style='width:100%;margin:0' src='/assets/images/cfonfetti.png' alt='playing emojis' />
					--}}

					</form>
				</div>
			</div>


		</header>
		<!--end::body-->
		<div style='background:#e9ebee'>
			<section class="container" style='margin-bottom:5px;background:#e9ebee'>

				@if($message)
				<div class="collections">
					<h1>Best in <span style='color:#ebab21'>{{ $food
							}}</span></h1>
					<a href="/" class='btn btn-danger btn-sm text-white'>Back</a>
				</div>
				@else
				<h2>Available <span style='color:#ebab21'>Restaurants</span> in <span class='realschool'>Jos</span>
				</h2>

				<div style='font-size:17px; border-top:2px solid #ffc107' class='alert alert-warning'> Enjoy 1GB of data
					for #200, 10GB for #2,200 for all networks only on <a style='color:blueviolet'
						href='https://fastpay.cttaste.com/register'>CT_Taste's Fastpay.</a></div>

				{{-- <marquee direction='right' class='animate__animated animate__bounce rounded m-0 p-2'
					style='background:black;color:white' width='100%' ;height='100px'>
					<a href='https://wa.me/2348184798413?text=*Hi,%20%20got%20your%20number%20from%20CTTASTE,%20I%20will%20like%20to%20know%20more%20about%20your%20services*'
						class='checkoutdesign2' style="color:white;font-family: 'Ubuntu', sans-serif;">
						Free Delivery Today!!! Sponsored By Miller Media(click to message)
					</a>
				</marquee> --}}


				<div id='successschool' class="collections">
					<!--<p>Explore curated lists of top restaurants, cafes, pubs, and bars in your institution, based on-->
					<!--	trends</p>-->
					<!--<a href="#">All collections in Funaab <i class="fa fa-caret-right"></i></a>-->
				</div>
				<div id='errorschool' style='display:none' class="collections">
					<p>Opps, no restaurants/food vendors found in the selected institution.</p>
					{{-- <a href="/">Back<i class="fa fa-caret-left"></i></a> --}}
					<a href="/register">Register as a vendor<i class="fa fa-caret-left"></i></a>
				</div>
				@endif
				<div id='allschools' class="order-cat">
					@foreach($restaurants as $rest)
				
					@if ($rest->isOpenNow(now()->format("H:i:s")) == 1)
					{{-- @if(Carbon\Carbon::now()->format('H:i') > $rest->opening_hour &&
					Carbon\Carbon::now()->format('H:i') < $rest->closing_hour ) --}}
						<div class="hover">
							<a href='/{{$rest->slug}}'>
								@if($rest->image !== null)
								{{-- <div class="card-name-sticker"><b>{{ $rest->name }}</b></div> --}}
								{{-- <img src='{{ asset("public/profilePic/".$rest->image) }}' class="lazyload"
									width='300px' height='150px' alt='vendor_image'> --}}
								@if(substr($rest->image,0,5) == 'https')
								<img src='{{$rest->image}}'
									class="lazyload" width='300px' height='150px' alt='vendor_pics'>
								@else
								<img src='https://jos.cttaste.com/jos_files/public/profilePic/{{$rest->image}}'
									class="lazyload" width='300px' height='150px' alt='vendor_pics'>
								@endif
								@else
								<img src='{{ asset(' profilePic/normal.webp') }}' class="lazyload" width='300px'
									height='150px' alt='vendor_image' />
								@endif
								{{-- <div class="card-bottom-right-sticker"
									style='text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);line-height: 1.5;color: #000000;font-size: 16px;'>
									{{ $rest->description }}</div> --}}



								<div class="order-title-bg">
									<p class="order-title" style="margin-bottom:0px !important;font-size:15px"><a
											style='text-decoration:none;' href='/{{$rest->slug}}'>{{ $rest->name }}</a>
									</p>
									<p class='order-title text-muted'
										style='margin-bottom:0px !important;font-size:12px'>
										{{$rest->description}}</p>
								</div>
							</a>
						</div>


						@else
						<div class="hover">
							<a data-name='{{ $rest->name }}' class='closed'>
								@if($rest->image !== null)
								{{-- <div class="card-name-sticker"><b>{{ $rest->name }}</b></div> --}}
								@if(substr($rest->image,0,5) == 'https')
								<img src='{{$rest->image}}'
									class="lazyload" width='300px' height='150px'
									style='opacity: 0.3;max-height:150px;background-color:rgb(255,255,255,0.5)'>
								@else
								<img src='https://jos.cttaste.com/jos_files/public/profilePic/{{$rest->image}}'
									class="lazyload" width='300px' height='150px'
									style='opacity: 0.3;max-height:150px;background-color:rgb(255,255,255,0.5)'>
								@endif
								<div class='order-title lazyload'
									style='color:#fff;font-size:30px;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);text-shadow:1px 1px 1px #856404'>
									CLOSED
								</div>
								@else
								<img src='{{ asset(' profilePic/normal.webp') }}' class="lazyload" width='300px'
									height='150px'
									style='opacity: 0.5;max-height:150px;background-color:rgb(255,255,255,0.5)' />
								<div class='order-title'
									style='color:white;font-size:30px;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);'>
									CLOSED
								</div>
								@endif
								{{-- <div class="card-bottom-right-sticker"
									style='text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);line-height: 1.5;color: #000000;font-size: 16px;'>
									{{ $rest->description }}</div> --}}


								<div class="order-title-bg">
									<p class="order-title" style="margin-bottom:0px !important;font-size:15px;"><a
											class='closed' data-name='{{ $rest->name }}'
											style='text-decoration:none;'>{{ $rest->name
											}}</a>
									</p>
									<p class='order-title text-muted'
										style='margin-bottom:0px !important;font-size:12px'>
										{{$rest->description}}</p>
								</div>
							</a>
						</div>
						@endif
						@endforeach

				</div>
				<div class='pagination justify-content-center'>
					{!! $restaurants->links('pagination::bootstrap-4') !!}
				</div>
			</section>
		</div>

		<div style='background:#e9ebee'>
			<!-- Collections -->
			<section class="container" style='margin-bottom:5px;background:#e9ebee'>
				<h1>Food Collections</h1>
				<div class="collections">
					<p>Explore your tastebuds with delicious foods from restaurants closer to you.</p>
					<!--<a href="#">All collections of food <i class="fa fa-caret-right"></i></a>-->
				</div>
				<div class="collection-grid">
					<a href='restaurant/best/all'>
						<div class="collection-box">
							<img src="https://jos.cttaste.com/public/homepage/images/order3.jpg" class="lazyload" width='400px' height='150px'>
							<div class="collection-title">
								<h3>Best of Jos</h3>
								<p>Top 10 <i class="fa fa-caret-right"></i></p>
							</div>
						</div>
					</a>
					<a href='restaurant/trending/all'>
						<div class="collection-box">
							<img src="https://jos.cttaste.com/public/homepage/images/collection2.jpg" class="lazyload" width='200px' height='150px'>
							<div class="collection-title">
								<h3>Trending This Week</h3>
								<p>30 Foods <i class="fa fa-caret-right"></i></p>
							</div>
						</div>
					</a>
					<a href='restaurant/new/all'>
						<div class="collection-box">
							<img src="https://jos.cttaste.com/public/homepage/images/collection3.jpg" class="lazyload" width='200px' height='150px'>
							<div class="collection-title">
								<h3>Newly Opened</h3>
								<p>7 Rest. <i class="fa fa-caret-right"></i></p>
							</div>
						</div>
					</a>
					<a href='restaurant/cheap/all'>
						<div class="collection-box">
							<img src="https://jos.cttaste.com/public/homepage/images/order4.webp" class="lazyload" width='400px' height='150px'>
							<div class="collection-title">
								<h3>Cheap and making sense!</h3>
								<p>19 Rest. <i class="fa fa-caret-right"></i></p>
							</div>
						</div>
					</a>
				</div>
			</section>
		</div>

		<div style='background:#e9ebee'>
			<!-- Localities -->
			<section class="container" style='background:#e9ebee'>
				<h1 class="local-title">Popular food categories around <span style='color:#ebab21'
						class="bold-place">Jos</span></h1>
				<div class="locals-grid">
					<a href='restaurant/all/food'>
						<div class="local-box">
							<p>Fried and Jollof Rice ({{
								count(App\Models\User::where('restaurant_category','food')->where('approve',1)->get())
								}}
								places)</p>
							<i class="fa fa-chevron-right"></i>
						</div>
					</a>
					<a href='restaurant/all/food'>
						<div class="local-box">
							<p>Bread And Beans ({{
								count(App\Models\User::where('restaurant_category','food')->where('approve',1)->get())
								}} places)</p>
							<i class="fa fa-chevron-right"></i>
						</div>
					</a>
					<a href='restaurant/all/cakes'>
						<div class="local-box">
							<p>Cakes and Pasteries ({{
								count(App\Models\User::where('restaurant_category','cakes')->where('approve',1)->get())
								}} places)</p>

							<i class="fa fa-chevron-right"></i>
						</div>
					</a>
					<a href='restaurant/all/shawarma'>
						<div class="local-box">
							<p>Shawarma and Pizza ({{
								count(App\Models\User::where('restaurant_category','shawarma')->where('approve',1)->orWhere('restaurant_category','pizza')->get())
								}} places)</p>
							<i class="fa fa-chevron-right"></i>
						</div>
					</a>
					<a href='restaurant/all/others'>
						<div class="local-box">
							<p>Swallows ({{
								count(App\Models\User::where('restaurant_category','others')->where('approve',1)->get())
								}} places)</p>

							<i class="fa fa-chevron-right"></i>
						</div>
					</a>
				</div>

			</section>
		</div>

		<section class="footer-bar" style='background:#ebab21'>
			<div class="container">
				<div class="footer-lang">
					<img class="footer-logo lazyload" src="assets/images/logo-wh.png" width='100' height='30'>

				</div>
				<div class="footer-last-links">
					<ul>
						<li>
							<h4 class="footer-list-title">OTHER PRODUCTS</h4>
						</li>
						<li><a href="/about-us">Who We Are</a></li>
						<li><a href="/about">Our Blog</a></li>
						<li><a href="https://cthostel.com">CTHostel</a></li>
						<!--<li><a href="#">CTFarms</a></li>-->
						<!--<li><a href="#">CTDogs</a></li>-->
						{{-- <li><a href="#">Financial Information</a></li> --}}
					</ul>
					<!--<ul>-->
					<!--	<li>-->
					<!--		<h4 class="footer-list-title">FOR FOODIES</h4>-->
					<!--	</li>-->
					<!--	<li><a href="#">Code of Conduct</a></li>-->
					<!--	<li><a href="#">Community</a></li>-->
					<!--	<li><a href="#">Blogger Help</a></li>-->
					<!--	<li><a href="#">Mobile Apps</a></li>-->
					<!--</ul>-->
					<ul>
						<li>
							<h4 class="footer-list-title">FOR RESTAURANTS</h4>
						</li>
						<li><a href="/register">Add Restaurant</a></li>
						<li><a href="/landing">Join the community</a></li>
						<li><a href="/invest">Partner/Invest</a></li>
						<li><a href="https://wa.me/2349058744473?">Contact Us</a></li>

					</ul>
					<ul>
						<div>
							<h4 class="footer-list-title">SOCIAL LINKS</h4>
							<div class="footer-social-icons">
								<a
									href="https://www.facebook.com/107641935325820/posts/pfbid02HNSTgXffyTr5iEeSqs1aiXhNmN9RDaLcfCZTJC63EsVRXz36y7aw8RfSNHqRRhncl/?sfnsn=scwspmo"><i
										class="fab fa-facebook"></i></a>
								<a href="https://twitter.com/ct_taste?s=20&t=izEI3zXAe5nU69qdNJINTA"><i
										class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ct_taste/?igshid=YmMyMTA2M2Y%3D"><i
										class="fab fa-instagram"></i></a>
							</div>

						</div>
				</div>
				</ul>

				<div class="footer-copyright" style='border-color:#fff'>
					<p><small>CTtaste is a tech brand dedicated to delivering top-notch food services to all, including students and working professionals within our city. We achieve this by tailoring our offerings to cater to the diverse needs of our community and enhancing the sales of local food vendors across the city.<br>
							<?php echo Date("Y");?> © CTtaste Ltd. All rights
							reserved.
						</small></p>
				</div>
			</div>

		</section>
	</div>

	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/index.html";
	</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>

	<script src="assets/js/custom/modals/select-location.html"></script>
	<script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/intro.js"></script>
	<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="assets/js/custom/utilities/modals/select-location.js"></script>
	<script src="assets/js/custom/utilities/modals/users-search.js"></script>
	<script src="assets/js/lazysizes.min.js" async></script>
	<script>
		function showImage(){
$("#pre_body").hide()
   $("#post_body").show()
}
$(document).ready(function(){ 
   
        $(this).text('loading...').delay(0).queue(function() {
            $(this).hide();
            showImage(); //calling showimage() function
            $(this).dequeue();
        });        
   
});
$('.closed').click(function() {
	var name = $(this).data('name')
	Swal.fire('Currently Closed','Opps, '+name+ ' is currently not available','info');
})
$("#changeschool").on('change', function() {
	school = $("#changeschool").val()
	$('#search_changeschool').attr('placeholder','Search food in '+school)
}) 
	
		$(".changeschool").on('change',function() {
			Swal.fire({
				type: 'info',
				title: 'Loading...',
				text: 'Changing institution, please wait...🙂',
				showConfirmButton: false,
			
            })
			var school = $(this).val()
			console.log(school,$(this).val())
		
			$.get("{{ route('changeschool') }}?school="+school,function(data) {
				console.log(data,'the schools');
				$(".realschool").text(school)
				if(data.length >= 1) {
					$("#successschool").show()
					$("#errorschool").hide()
					
				}
				else {
					$("#successschool").hide()
					$("#errorschool").show()
				
				}
				$("#allschools").empty()
				Swal.close()
                    $.each( data, function( key, value ) {
                        console.log(value, 'the values')
						var now = new Date();
						var opening = value.opening_hour.split(':');
						var closing = value.closing_hour.split(':');
						console.log(opening,closing,now,value.closing_hour)
						if (now.getHours() > opening[0] || (now.getHours() == opening[0] && now.getMinutes() >= opening[1])) {
  							if (now.getHours() < closing[0] || (now.getHours() == closing[0] && now.getMinutes() <= closing[1])) {

						    $('#allschools').append(`
						<div class="hover">
							<a href='/${value.slug}'>
							
								<img src="https://jos.cttaste.com/jos_files/public/profilePic/${value.image ?? 'normal.webp' }"
									 width='25%' height='150px' style='max-height:150px;max-width:100%;' class='lazyload'/>
							
								<div class="order-title-bg">
									<p class="order-title" style='margin-bottom:0px !important'><a href='/${value.slug}'>${value.name}</a></p>
									<p class='order-title text-muted' style='margin-bottom:0px !important;font-size:12px'>
								${value.description}</p>
								</div>
							</a>
							</div>
					
						`);
						} 
					else {
						  $('#allschools').append(`
						  <div class="hover">
							<a data-name='${value.name}' class='closed'>
								

								<img src='https://jos.cttaste.com/jos_files/public/profilePic/${value.image ?? 'normal.webp'}'
									class="lazyload" width='300px' height='150px'
									style='opacity: 0.3;max-height:150px;background-color:rgb(255,255,255,0.5)'>
								<div class='order-title lazyload'
									style='color:#fff;font-size:30px;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);text-shadow:1px 1px 1px #856404'>
									CLOSED
								</div>
								
								<div class="order-title-bg">
									<p class="order-title" style='margin-bottom:0px !important'><a class='closed'
											data-name='${value.name}' style='text-decoration:none;'>${value.name}</a>
									</p>
									<p class='order-title text-muted'
										style='margin-bottom:0px !important;font-size:12px'>
										${value.description}</p>
								</div>
							</a>
						</div>`);
						}
					}
					else {
						  $('#allschools').append(`
						 
						  <div class="hover">
							<a data-name='${value.name}' class='closed'>
								

								<img src='https://jos.cttaste.com/jos_files/public/profilePic/${value.image ?? 'normal.webp'}'
									class="lazyload" width='300px' height='150px'
									style='opacity: 0.3;max-height:150px;background-color:rgb(255,255,255,0.5)'>
								<div class='order-title lazyload'
									style='color:#fff;font-size:30px;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);text-shadow:1px 1px 1px #856404'>
									CLOSED
								</div>
								
								<div class="order-title-bg">
									<p class="order-title" style='margin-bottom:0px !important'><a class='closed'
											data-name='${value.name}' style='text-decoration:none;'>${value.name}</a>
									</p>
									<p class='order-title text-muted'
										style='margin-bottom:0px !important;font-size:12px'>
										${value.description}</p>
								</div>
							</a>
						</div>
						  `);
						}

						
                      
                   
                });
			})
		})
	</script>


	{{-- <script src='/assets/js/professionallocker.js'></script> --}}
</body>

</html>