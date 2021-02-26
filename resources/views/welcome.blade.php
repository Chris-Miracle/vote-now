<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vote Now</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bubblegum+Sans&family=Permanent+Marker&family=Potta+One&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <div class="full-body">
        <div class="left-section">
            <img src="{{asset('assets/img/g2.jpg')}}" alt="">
            <div class="details-section">
                <div class="profile">
                    <div class="profile-item">
                        <span class="item-title">Name</span>
                        <span>John Doe</span>
                    </div>

                    <div class="profile-item">
                        <span class="item-title">Code</span>
                        <span>FJ302001</span>
                    </div>

                    <div class="profile-item">
                        <span class="item-title">Birthday</span>
                        <span>15th June</span>
                    </div>

                    <div class="profile-item">
                        <span class="item-title">Location</span>
                        <span>Highway</span>
                    </div>
                </div>

                <div class="vote-counts">
                    <div class="count facebook">
                        <span class="count-title"><i class="fa fa-facebook-square"></i> facebook</span>
                        <span class="badge badge-primary">43</span>
                    </div>

                    <div class="count twitter">
                        <span class="count-title"><i class="fa fa-twitter-square"></i> twitter</span>
                        <span class="badge badge-primary">43</span>
                    </div>

                    <div class="count instagram">
                        <span class="count-title"><i class="fa fa-instagram"></i> Instagram</span>
                        <span class="badge badge-primary">43</span>
                    </div>

                    <div class="count">
                        <span class="count-title"><i class="fa fa-th"></i> Tally</span>
                        <span class="badge badge-primary">43</span>
                    </div>
                </div>
                <div class="tally-btn-area">
                    <button class="btn btn-primary tally-btn">Get Tally</button>
                </div>
            </div>
        </div>
        <div class="right-section">
            <h5>Purchase tally for John Doe</h5>
            <div class="close-btn"><i class="fa fa-close"></i></div>
            <form action="">
                <div class="form-group">
                    <label for="">How many tally votes?</label>
                    <select class="form-control" name="tally" id="" placeholder="how many tally votes">
                        <option value=""></option>
                        <option value="10">25</option>
                        <option value="20">50</option>
                        <option value="30">75</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Your email</label>
                    <input type="text" class="form-control" name="email" id="email"  value="">
                </div>

                <div class="form-group">
                    <label for="contestId">Contest</label>
                    <input type="text" class="form-control" name="contest" id="contestid" value="">
                </div>

                <div class="form-group">
                    <label for="smsCode">Contestant Code</label>
                    <input type="text" class="form-control" name="contestCode" id="contestantid">
                </div>

                <div class="form-group">
                    <p>Hey there, you should know for each tally vote you will be charged <del>N</del>50. Thank you for patronizing our platform. Cheers.</p>
                    <p>By Clicking vote, you have agreed to user licence terms and conditions.</p>
                </div>

                <input type="hidden" name="refcode" id="refcode">
                <input type="hidden" name="votes" id="votes" value="">
                {{-- <div class="form-group">
                    <label for="refcode">Ref Code</label>
                    <input type="text" class="form-control" name="refcode" id="refcode">
                </div>

                <div class="form-group">
                    <label for="votes">Votes</label>
                    <input type="text" class="form-control" name="votes" id="votes" value="">
                </div> --}}

                <div class="tally-btn-area" style="margin-top: 28px;">
                    <button class="btn btn-primary vote-btn">Vote</button>
                </div>
            </form>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
