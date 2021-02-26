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
            <form action="{{route('purchase-tally')}}" method="POST" name="myform" id="paynow">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="">How many tally votes?</label>
                    <select class="form-control" name="tally" id="tally" placeholder="how many tally votes" required>
                        <option value=""></option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                    </select>
                    <div id="tally_error" style="color: red"></div>
                </div>

                <div class="form-group">
                    <label for="">Your email</label>
                    <input type="text" class="form-control" name="email" id="email"  value="" required>
                    <div id="email_error" style="color: red"></div>
                </div>

                <div class="form-group">
                    <label for="contestId">Contest</label>
                    <input type="text" class="form-control" name="contest" id="contestid" value="" required>
                    <div id="contest_error" style="color: red"></div>
                </div>

                <div class="form-group">
                    <label for="smsCode">Contestant Code</label>
                    <input type="text" class="form-control" name="contestCode" id="contestantid" required>
                    <div id="contestCode_error" style="color: red"></div>
                </div>

                <div class="form-group">
                    <p>Hey there, you should know for each tally vote you will be charged <del>N</del>50. Thank you for patronizing our platform. Cheers.</p>
                    <p>By Clicking vote, you have agreed to user licence terms and conditions.</p>
                </div>

                <input type="hidden" name="ref" id="ref">
                <input type="hidden" name="amount" id="amount">
                {{-- <div class="form-group">
                    <label for="refcode">Ref Code</label>
                    <input type="text" class="form-control" name="refcode" id="refcode">
                </div>

                <div class="form-group">
                    <label for="votes">Votes</label>
                    <input type="text" class="form-control" name="votes" id="votes" value="">
                </div> --}}

                <div class="tally-btn-area" style="margin-top: 28px;">
                    <button type="button" onclick="paystackPay()" class="btn btn-primary vote-btn">Vote</button>
                </div>
            </form>
        </div>
    </div>




    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
        var tally = document.getElementById('tally');
        tally.addEventListener('change', myFunction);

        function myFunction(e){
            e.preventDefault();
            let amount = document.getElementById("tally").value * 50;
            document.getElementById('amount').value = amount;
        }

        function paystackPay(){
            if( document.myform.tally.value == "" ) {
            document.getElementById("tally_error").innerHTML = 'Tally is required, Kindly Provide.';
            return false;
            }
            if( document.myform.email.value == "" ) {
            document.getElementById("email_error").innerHTML = 'Email is required, Kindly Provide.';
            return false;
            }
            if( document.myform.contest.value == "" ) {
            document.getElementById("contest_error").innerHTML = 'Contest is required, Kindly Provide.';
            return false;
            }
            if( document.myform.contestCode.value == "" ) {
            document.getElementById("contestCode_error").innerHTML = 'Contest Code is required, Kindly Provide.';
            return false;
            }
            var handler = PaystackPop.setup({
                key: 'pk_test_8b5c0aeeac875fb820de39839ad121a93a82a055',
                email: document.getElementById("email").value,
                amount: document.getElementById("amount").value * 100,
                currency: "NGN",
                ref: 'BM-'+(Math.random().toString(36).substring(2, 16) + Math.random().toString(36).substring(2, 16)).toUpperCase(), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            
                callback: function(response){
                    localStorage.removeItem("products");
                    var reference = response.reference;
                    document.getElementById('ref').value = reference;
                    //alert('Payment complete! Reference: ' + reference);
                    $('#paynow').submit();
                },

                onClose: function(){
                    alert('Transaction was not completed, window closed.');
                }
            });
            handler.openIframe();
        }
    </script>
</body>
</html>
