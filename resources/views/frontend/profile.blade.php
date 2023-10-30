<!DOCTYPE html>
<html>
    <head>
        <script src="{{asset('admin/cdn/sweetalert.min.js')}}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('admin/cdn/jquery-3.6.0.js')}}" crossorigin="anonymous"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
<body id="myCopyright">
    <div id="paid_me" onclick="paidNow()"><b><br>CTtaste</div>
    <div class="bg"></div>
    <div class="main" align="center">
        <!-- Change your profile -->
        @if($user->image !== null)
							<img src='{{ asset("profilePic/".$user->image) }}' class='pf'>
							@else
							<img src='{{ asset('profilePic/normal.jpg') }}' class='pf' />
							@endif
        <div class="contain">
            <div class="i_space"></div>
            <!-- Change your name -->
            <h2 class="title">{{ $user->name }}</h2>
            <!-- Change your bio -->
            <p class="summary"><tag>{{ $user->address }} - {{ $user->phone }}</p>
            <!-- Change your link maps -->
          
            <!-- Button trigger modal -->
<a href='/' class='btn btn-primary'>Back</a>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#review">
    Make Review
  </button>
  
<div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="reviewLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="reviewLabel">Drop a review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id='make_review'>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" id='name' class="form-control">
            <input type='hidden' id='rest_id' value="{{ $user->id }}"/>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Phone Number(Optional):</label>
            <input id='phone' class="form-control" />
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Review:</label>
            <textarea id='r_review' class="form-control" ></textarea>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
  </div>
</div>
           
        </div>
        <div class="contain_2">
            <div class="row">
                <!-- Button 1 - 2 -->
                <div class="column">
                    <div class="i_contain" onclick="button1()">
                        <div class="i_cards">
                            <img class="icon_logo" title="Facebook" alt="Facebook" src="https://icollector.000webhostapp.com/widget/profile/images/logo/facebook.png" />
                            <h2 class="i_title">Facebook</h2>
                            <!-- Change your username -->
                            <p class="i_summary">https://facebook.com/iexperimen</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="i_contain" onclick="button2()">
                        <div class="i_cards">
                            <img class="icon_logo" title="Twitter" alt="Twitter" src="https://icollector.000webhostapp.com/widget/profile/images/logo/twitter.png" />
                            <h2 class="i_title">Twitter</h2>
                            <!-- Change your username -->
                            <p class="i_summary">https://twitter.com/iexperimen</p>
                        </div>
                    </div>
                </div>
                <!-- Button 3 - 4 -->
                <div class="column">
                    <div class="i_contain" onclick="button3()">
                        <div class="i_cards">
                            <img class="icon_logo" title="Instagram" alt="Instagram" src="https://icollector.000webhostapp.com/widget/profile/images/logo/instagram.jpeg" />
                            <h2 class="i_title">Instagram</h2>
                            <!-- Change your username -->
                            <p class="i_summary">https://instagram.com/official.iexperiment</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="i_contain" onclick="button4()">
                        <div class="i_cards">
                            <img class="icon_logo" title="Github" alt="Github" src="https://icollector.000webhostapp.com/widget/profile/images/logo/github.png" />
                            <h2 class="i_title">Github</h2>
                            <!-- Change your username -->
                            <p class="i_summary">https://github.com/iexperimen</p>
                        </div>
                    </div>
                </div>
                <!-- Button 5 - 6 -->
                <div class="column">
                    <div class="i_contain" onclick="button5()">
                        <div class="i_cards">
                            <img class="icon_logo" title="Codepen" alt="Codepen" src="https://icollector.000webhostapp.com/widget/profile/images/logo/codepen.webp" />
                            <h2 class="i_title">Codepen</h2>
                            <!-- Change your username -->
                            <p class="i_summary">https://codepen.io/iexperimen</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="i_contain" onclick="button6()">
                        <div class="i_cards">
                            <img class="icon_logo" title="iCollector" alt="iCollector" src="https://icollector.000webhostapp.com/widget/profile/images/logo/browser.png" />
                            <h2 class="i_title">iCollector</h2>
                            <!-- Change your username -->
                            <p class="i_summary">https://bit.ly/iExperiment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>Powered by <a style="display:inline-block;" title="iExperiment" alt="iExperiment" href="https://iexperimen.github.io"><b>@iExperimen</b></a></p>
        </footer>
    </div>
</body>

<style>
* {
    box-sizing: border-box;
}

h1, h2, h3, h4, h5, p {
    padding: 0px;
    margin: 0px;
}
.bg {
    background-image: url('https://icollector.000webhostapp.com/widget/profile/images/mybg.png');
    background-position: center;
    background-size: 100% 360px;
    background-repeat: no-repeat;
    width: 100%;
    height: 360px;
}
.pf {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    z-index: 1;
}
.main {
    width: 100%;
    margin-top: -200px;
    margin-bottom: 10px;
}
.contain {
    width: 80%;
    background: white;
    border-radius: 20px;
    padding: 20px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    margin-top: -80px;
    margin-bottom: 20px;
}
.title {
    padding: 10px;
}
.summary {
    text-align: center;
    width: 60%;
    padding: 8px;
    margin-bottom: 10px;
}

.contain_2 {
    width: 80%;
    border-radius: 20px;
    margin-bottom: 20px;
}
.column {
    float: left;
    width: 50%;
    padding: 20px 5px 10px 15px;
}
.i_contain {
    width: 100%;
    transition-duration: 0.4s;
    cursor: pointer;
}
.icon_logo {
    width: 64px;
    height: 64px;
    border-radius: 10px;
    float: left;
    z-index: 1;
    margin-top: -22px;
    margin-left: -25px;
    transition-duration: 0.4s;
    border: 1px solid #ccc;
    background-color: black;
}
.i_cards {
    width: 100%;
    height: 90px;
    background: white;
    border-radius: 20px;
    padding: 8px 8px 8px 14px;
    text-align: left;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    float: left;
}
.i_title {
    margin-top: 10px;
    margin-left: 55px;
    margin-right: 4px;
}
.i_summary {
    margin-left: 55px;
    overflow: hidden;
    margin-right: 4px;
}
.i_contain:hover .icon_logo {
    margin-top: 4px;
}
footer {
    padding: 30px;
    color: block;
    background: white;
    border-top: 1px solid #ccc;
}
footer a {
    text-decoration: none;
    color: black;
}
.i_space {
    width: 100%;
    height: 70px;
}
@media only screen and (max-width: 600px) {
    .bg {
        height: 260px;
        background-size: cover;
    }
    .main {
        margin-top: -140px;
    }
    .pf {
        width: 120px;
        height: 120px;
    }
    .contain {
        width: 85%;
        margin-top: -60px;
    }
    .summary {
        width: 80%;
    }
    .contain_2 {
        width: 85%;
    }
    .column {
        width: 100%;
    }
    .i_space {
        height: 50px;
    }
}

#paid_me {
    position: fixed;
    top: -10px;
    right: -55px;
    background-image: linear-gradient(to bottom right, yellow, red);
    padding: 18px 55px;
    -ms-transform: rotate(40deg);
    transform: rotate(40deg);
    text-align: center;
    color: white;
    font-size: 20px;
    text-shadow: 1px 1px #000, -1px 1px #000, 1px -1px #000, -1px -1px #000, 1px 1px 5px #555;
    animation: blinking 2s infinite;
    cursor: pointer;
}

@keyframes blinking {
  0% {
    color: white;
  }
  47% {
    color: #ffdebb;
  }
  62% {
    color: #ffbb73;
  }
  97% {
    color: #fb9932;
  }
  100% {
    color: #fb8402;
  }
}

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="{{asset('admin/cdn/sweetalert.min.js')}}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
       
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("body").on('submit','#make_review', async function(e) {
          
            e.preventDefault()
       
        fd = new FormData
        fd.append('rest_id',$("#rest_id").val())
        fd.append('name', $("#name").val())
        fd.append('review', $("#r_review").val())
        $.ajax({
                type: 'POST',
                url: "{{route('createreview')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log('the data', data)
                  
                    swal('success', 'Review submitted successfully!', 'success')
                    window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                   
                    swal('Opps!', 'Something went wrong, review not updated', 'error')
                }
            })
        })
    })
</script>

</html>