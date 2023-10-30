<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aroba Animation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/countdowntime/flipclock.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--===============================================================================================-->
</head>

<body>


    <div class=""
        style="background-image: url('images/aroba1.png');background-repeat:no-repeat;background-size: cover;">
        <div class="flex-w flex-sb-m p-l-80 p-r-74 p-b-50 respon5">
            <div class="wrappic1 m-r-30 m-t-10 m-b-10">
                <a href="#"><img src="images/arobawhite.png" style='height:100px;width:150px' alt="LOGO"></a><br>
                <a href='/home' class='btn btn-success'>About Aroba Animation ➜</a>

            </div>

        </div>

        <div class="flex-w flex-sa p-r-200 respon1">
            <div class="p-t-34 p-b-60 respon3">
                <img src='./images/moremi.png' class="rounded" style='width:350px;height:200px'>




            </div>

            <div class="wsize1 bor1 p-l-45 p-r-45 p-t-50 p-b-18 p-lr-15-sm">
                <h6 class="l1-txt3 txt-center p-b-43" style='color:#eb5d1e'>
                    THE ANTICIPATED MOVIE IS NOW <span id='live' style='font-size:40px;color:red'>LIVE!!!</span>
                </h6>



            </div>
        </div>
        <div class="flex-w flex-sa p-r-200 respon1">
            <div class="p-t-34 p-b-60 respon3">
                <p class="l1-txt1 p-b-10 respon2">
                    Aroba Animation NFT Program
                </p>

                <h3 class="l1-txt2 p-b-45 respon2 respon4">
                    Coming Soon
                </h3>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" style="background-color:#eb5d1e">
                        To be part of this program follow the step below:
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Input your name</a>
                    <a href="#" class="list-group-item list-group-item-action">Input your email address</a>
                    <a href="#" class="list-group-item list-group-item-action">Input your Solana address</a>
                    <a href="#" class="list-group-item list-group-item-action">Follow us on twitter and input your twitter link address</a>
                </div><br>



                <div class="cd100"></div>

            </div>

            <div class="bg0 wsize1 bor1 p-l-45 p-r-45 p-t-50 p-b-18 p-lr-15-sm">
                <h3 class="l1-txt3 txt-center p-b-43">
                    Get free NFT here
                </h3>

                <form class="w-full validate-form" id="form_id">

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Name is required">
                        <input class="input100 placeholder0 s1-txt1" id='name' required type="text" name="name"
                            placeholder="Name">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-20"
                        data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 placeholder0 s1-txt1" id='phone' required type="number" name="phone"
                            placeholder="Phone Number">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-20"
                        data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 placeholder0 s1-txt1" id='email' required type="email" name="email"
                            placeholder="Email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-20"
                        data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 placeholder0 s1-txt1" id='wallet_address' required type="text" name="nft"
                            placeholder="Solana Address">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-20"
                        data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 placeholder0 s1-txt1" id='twitter_address' required type="text" name="nft"
                            placeholder="Twitter Link">
                        <span class="focus-input100"></span>
                    </div>


                    <p class="s1-txt3 txt-center p-l-15 p-r-15 p-b-25">

                        <a id='twitter' class='text-center'
                            href='https://twitter.com/aroba_animation?t=Bz1GGV2NvniTzejwu6vm6g&s=09'>Click here link to
                            follow us on twitter</a>
                    </p>
                    <input type='hidden' id='twitterconfirm'>
                    <p class="s1-txt3 txt-center p-l-15 p-r-15 p-b-25 text-danger">
                        Please note that you have to follow our twitter page to be qualified for this package.
                    </p>


                    <button class="flex-c-m size2 s1-txt2 how-btn1 trans-04" style="background-color:#eb5d1e">
                        Subscribe
                    </button>
                </form>


            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/flipclock.min.js"></script>
    <script src="vendor/countdowntime/moment.min.js"></script>
    <script src="vendor/countdowntime/moment-timezone.min.js"></script>
    <script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>

    <script>
        $(document).ready(function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
            var p = 0;
            var color = ["black", "blue", "brown", "green"];
            function change() {
  
  var color = ["black", "blue", "brown", "green"];
  $("#live").css("color",color[p])
  p = (p + 1) % color.length;
}

            setInterval(change, 500);
            $("#twitter").click(function() {
                $("#twitterconfirm").val(1)
            });
			
			$('#form_id').on('submit', async function(e) {
                swal('Subscribing, please wait...')
				e.preventDefault();
                if($("#twitterconfirm").val() == 1) {
				
				var fd = new FormData;
				fd.append('name', $('#name').val())
				fd.append('email', $('#email').val())
				fd.append('phone', $('#phone').val())
				fd.append('wallet_address', $('#wallet_address').val())
				fd.append('twitter_address', $('#twitter_address').val())
				console.log(fd,'the fd')
				$.ajax({
					type: 'POST',
					url: "save.php",
					data: fd,
					cache: false,
					contentType: false,
					processData: false,
					success: function($data) {
						console.log('the data', $data)
						swal.close()
						swal('Subscription successful!', "Thanks for subscribing, we'll get in touch with you soon!", 'success')
						// window.location.reload()

					},
					error: function(data) {
						console.log(data)
						swal.close()
						swal('Opps!', 'Not Successful', 'error')
					}
				}) }
                else {
                    swal.close()
                swal('Opps','Please make sure you follow our twitter page in order to subscribe','error')
            }
			}) 
          
			
		})
    </script>
    <script>
        $('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});

		
    </script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
			scale: 1.1
		})
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>