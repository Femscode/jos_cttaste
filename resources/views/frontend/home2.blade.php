<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zomato | Mumbai</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="stylesheet" href="{{ asset('homepage/style.css') }}">
</head>
<body>
	<!-- Header showcase-->
	<header class="showcase" style='background-image: url(assets/images/banner3.jpeg);background-size: auto 100%'>
		<div class="container">
			<nav>
				<div>
					<a href="/register"><i class="fa fa-mobile-alt"></i>Register your restaurant</a>
				</div>
				<div class="right-menu">
					<a href="/login">Log in</a>
					<a href="/signup">Sign up</a>
				</div>
			</nav>
			<div class="hero-text">
				<img src="assets/images/logo-white.png">
				{{-- <h1>Never go hungry with <span class="bold-place">CTSpicy</span></h1> --}}
				<div class="search-bar">
					<div class="search-3">
						<i class="fa fa-map-marker-alt"></i>
						<input type="text" placeholder="Funaab">
                        <select name='cat'>
                            <option value=''> Select Restaurant</option>
                            @foreach($restaurants as $cat)
                            
                            <option value='{{ $cat->id }}'>{{ $cat->name }}</option>
                            @endforeach
						<i class="fa fa-caret-down"></i>
					</div>
					<div class="search-2">
						<i class="fas fa-search"></i>
						<input type="text" class="search-right" placeholder="Search for food or restaurant" >				
                       
                    </div>
                    <div class="search-1">
						
						
                        <button class='btn btn-success'>Search</button>
                    </div>
				</div>
			</div>
		</div>
	</header>

	<!-- Order section -->
	<section class="container">
		<div class="order-cat">
			@foreach($restaurants as $rest)
			<div class="hover">
                {{-- <img src="homepage/images/order1.webp"> --}}
                {{-- <img  src="profilePic/{{$rest->image ?? 'normal.jpg'}}" style='max-height:150px;max-width:300px'> --}}
                <img src="profilePic/{{$rest->image ?? 'normal.jpg'}}" >

				<div class="order-title-bg">
					<p class="order-title"><a href='/{{$rest->slug}}'>{{ $rest->name }}</a></p>
				</div>
			</div>
			@endforeach
		
		</div>
	</section>
	
	<!-- Collections -->
	<section class="container">
		<h1>Collections</h1>
		<div class="collections">
			<p>Explore curated lists of top restaurants, cafes, pubs, and bars in your institution, based on trends</p>
			<a href="#">All collections in Funaab <i class="fa fa-caret-right"></i></a>
		</div>
		<div class="collection-grid">
			<div class="collection-box">
				<img src="homepage/images/collection1.jpg">
				<div class="collection-title">
					<h3>Best of Funaab</h3>
					<p>220 Places <i class="fa fa-caret-right"></i></p>
				</div>
			</div>
			<div class="collection-box">
				<img src="homepage/images/collection2.jpg">
				<div class="collection-title">
					<h3>Trending This Week</h3>
					<p>30 Places <i class="fa fa-caret-right"></i></p>
				</div>
			</div>
			<div class="collection-box">
				<img src="homepage/images/collection3.jpg">
				<div class="collection-title">
					<h3>Newly Opened</h3>
					<p>7 Places <i class="fa fa-caret-right"></i></p>
				</div>
			</div>
			<div class="collection-box">
				<img src="homepage/images/collection4.webp">
				<div class="collection-title">
					<h3>Work Friendly Places!</h3>
					<p>19 Places <i class="fa fa-caret-right"></i></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Localities -->
	<section class="container">
		<h1 class="local-title">Popular food categories around <span class="bold-place">Funaab</span></h1>
		<div class="locals-grid">
			<div class="local-box">
				<p>Ofada Rice (608 places)</p>
				<i class="fa fa-chevron-right"></i>
			</div>
			<div class="local-box">
				<p>Porridge (766 places)</p>
				<i class="fa fa-chevron-right"></i>
			</div>
			<div class="local-box">
				<p>Cabioka (1371 places)</p>
				<i class="fa fa-chevron-right"></i>
			</div>
			<div class="local-box">
				<p>Nigerian Jollof (873 places)</p>
				<i class="fa fa-chevron-right"></i>
			</div>
			<div class="local-box">
				<p>Shawarma (14...</p>
				<i class="fa fa-chevron-right"></i>
			</div>
		</div>
	</section>

	<!-- Get zomato app -->
	{{-- <section class="zom-app">
		<img src="homepage/images/mobile-app.webp" alt="zomato-app">
		<div class="zom-app-right">
			<h1>Get the Zomato App</h1>
			<p>We will send you a link, open it on your phone to download the app</p>
			<div class="radio-btn">
				<label for="email"><input type="radio" id="email" name="app" value="email">Email</label>
				<label for="phone"><input type="radio" id="phone" name="app" value="phone">Phone</label>
			</div>
			<div class="email-phone">
				<input type="text" placeholder="Email">
				<a class="btn-share" href="#">Share App Link</a>
			</div>
			<p class="small-text"><small>Download app from</small></p>
			<div class="app-store">
				<div class="app-image">
					<img src="homepage/images/app-store1.webp">
				</div>
				<div class="app-image">
					<img src="homepage/images/app-store2.webp">
				</div>
			</div>
		</div>
	</section> --}}

	<!-- Explore -->
	{{-- <section class="container">
		<h1 class="explore-title">Explore other options for you here</h1>
		<h2 class="explore-title-2">Popular cuisines near me</h2>
		<div class="wrap-links">
			<a href="#">Bakery food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Beverages food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Biryani food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Burger food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Chinese food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Continental food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Desserts food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Ice Cream food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Italian food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Kebab food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Maharashtrian food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Bakery food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Beverages food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Biryani food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Burger food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Chinese food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Continental food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Desserts food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Ice Cream food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Italian food near me</a>
		</div>
		<h2 class="explore-title-2">Popular restaurant types near me</h2>
		<div class="wrap-links">
			<a href="#">Bakery food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Beverages food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Biryani food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Burger food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Chinese food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Continental food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Desserts food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Ice Cream food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Italian food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Kebab food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Maharashtrian food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Bakery food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Beverages food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Biryani food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Burger food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Chinese food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Continental food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Desserts food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Ice Cream food near me</a>
			<span class="dot-seperator"></span>
			<a href="#">Italian food near me</a>
		</div>
		<h2 class="explore-title-2">Top Restaurant Chains</h2>
		<div class="restraunt-chains">
			<a href="#">Bikanervala</a>
			<a href="#">Burger King</a>
			<a href="#">Domino's</a>
			<a href="#">Dunkin' Donuts</a>
			<a href="#">KFC</a>
			<a href="#">Krispy Kreme</a>
			<a href="#">McDonald's</a>
			<a href="#">Pizza Hut</a>
			<a href="#">WOW! Momo</a>
		</div>
		<h2 class="explore-title-2">Cities We Deliver To</h2>
		<div class="footer-links">
			<ul>
				<li><a href="#">Delhi NCR</a></li>
				<li><a href="#">Hyderabad</a></li>
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Bengaluru</a></li>
				<li><a href="#">Pune</a></li>
				<li><a href="#">Delhi NCR</a></li>
				<li><a href="#">Hyderabad</a></li>
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Bengaluru</a></li>
				<li><a href="#">Pune</a></li>
			</ul>
			<ul>
				<li><a href="#">Delhi NCR</a></li>
				<li><a href="#">Hyderabad</a></li>
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Bengaluru</a></li>
				<li><a href="#">Pune</a></li>
				<li><a href="#">Delhi NCR</a></li>
				<li><a href="#">Hyderabad</a></li>
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Bengaluru</a></li>
				<li><a href="#">Pune</a></li>
			</ul>
			<ul>
				<li><a href="#">Delhi NCR</a></li>
				<li><a href="#">Hyderabad</a></li>
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Bengaluru</a></li>
				<li><a href="#">Pune</a></li>
				<li><a href="#">Delhi NCR</a></li>
				<li><a href="#">Hyderabad</a></li>
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Bengaluru</a></li>
				<li><a href="#">Pune</a></li>
			</ul>
			<ul>
				<li><a href="#">Delhi NCR</a></li>
				<li><a href="#">Hyderabad</a></li>
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Bengaluru</a></li>
				<li><a href="#">Pune</a></li>
				<li><a href="#">Delhi NCR</a></li>
				<li><a href="#">Hyderabad</a></li>
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Bengaluru</a></li>
				<li><a href="#" class="last-link">See more</a></li>
			</ul>
			<ul>
				<li><a href="#">Delhi NCR</a></li>
				<li><a href="#">Hyderabad</a></li>
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Bengaluru</a></li>
				<li><a href="#">Pune</a></li>
				<li><a href="#">Delhi NCR</a></li>
				<li><a href="#">Hyderabad</a></li>
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Bengaluru</a></li>
			</ul>
		</div>
	</section> --}}
	<!-- Footer -->
	<section class="footer-bar">
		<div class="container">
			<div class="footer-lang">
				<img class="footer-logo" src="homepage/images/zomato-black-logo.webp">
				<div class="btn-lang-top">
					<a class="lang-btn" href="#"><img src="homepage/images/india-flag.jpg" height="13px"> India <small><i class="fa fa-chevron-down"></i></small></a>
					<a class="lang-btn" href="#"> <i class="fa fa-globe"></i> English <small><i class="fa fa-chevron-down"></i></small></a>
				</div>
			</div>
			<div class="footer-last-links">
				<ul>
					<li><h4 class="footer-list-title">COMPANY</h4></li>
					<li><a href="#">Who We Are</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Report Fraud</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Financial Information</a></li>
				</ul>
				<ul>
					<li><h4 class="footer-list-title">FOR FOODIES</h4></li>
					<li><a href="#">Code of Conduct</a></li>
					<li><a href="#">Community</a></li>
					<li><a href="#">Blogger Help</a></li>
					<li><a href="#">Mobile Apps</a></li>
				</ul>
				<ul>
					<li><h4 class="footer-list-title">FOR RESTAURANTS</h4></li>
					<li><a href="#">Add Restaurant</a></li>
					<li><a href="#">Claim your Listing</a></li>
					<li><a href="#">Business App</a></li>
					<li><a href="#">Restaurant Widgets</a></li>
					<li><a href="#">Product Businesses</a></li>
				</ul>
				<ul>
					<li><h4 class="footer-list-title">FOR YOU</h4></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Security</a></li>
					<li><a href="#">Sitemap</a></li>
				</ul>
				<div>
					<h4 class="footer-list-title">SOCIAL LINKS</h4>
					<div class="footer-social-icons">
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
					</div>
					<div>
						<img src="homepage/images/app-store1.webp" width="137px">
						<img src="homepage/images/app-store2.webp" width="137px">
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<p><small>By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies. All trademarks are properties of their respective owners. 2008-2021 © Zomato™ Ltd. All rights reserved.</small></p>
			</div>
		</div>
		
	</section>
</body>
</html>