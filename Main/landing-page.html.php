<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Pigeon</title>
    <meta name="description" content="IT Help Desk App" />
    <meta name="author" content="Yash Gopal" />
	<link rel="icon" type="image/png" href="assets/icons/favicon.png">
    <!--mobile viewport optimization-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="../Frameworks/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--Web Fonts-->

    <!--Grid Forms-->
    <link rel="stylesheet" type="text/css" href="../Frameworks/gridforms-master/gridforms-master/gridforms/gridforms.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--Datedropper-->
    <link rel="stylesheet" type="text/css" href="../Frameworks/datedropper-master/datedropper-master/datedropper.css" />
    <!--Animate css-->
    <link href="../Frameworks/animate.css" rel="stylesheet">
    <!--noUiSlider-->
    <link href="../Frameworks/noUiSlider/jquery.nouislider.min.css" rel="stylesheet">
    <!--Custom Stylesheet-->
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px|Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="supplementary-2.css" />
</head>

<body>
    <div class="container-fluid main">
        <div class="col-md-2 col-sm-2 side-panel">
        </div>
        <div class="col-md-8 col-sm-8 main-panel-container">
            <h1 class="main-text center" id="product-title">Pigeon</h1>
            <div class="row">
                <div id="landing-buttons-wrapper">
                    <div class="col-md-4 center landing-buttons">
                        <button type="button" class="btn btn-danger" id="newReport_trigger">Report or Request</button>
                    </div>
                    <div class="col-md-4 center landing-buttons">
                        <button type="button" class="btn btn-primary" id="checkTicket_trigger">Check Ticket</button>
                    </div>
                    <div class="col-md-4 center landing-buttons">
                        <button type="button" class="btn btn-success" id="login_trigger">Login</button>
                    </div>
                </div>
                <div id="newReport-ticketNumber-wrapper">
                    <p class="body-text">Submission successful!
                        <p id="newReport_ticketNumber"></p>
                    </p>
                </div>
                <div id="login-wrapper">
                    <form>
                        <label class="loginForm loginTxt" id="label-username">Username</label>
                        <input class="loginForm" type="text" style="text-align:center;color:#301330;" id="user_name" />
                        <label class="loginForm loginTxt" id="label-pass">Password</label>
                        <input class="loginForm" type="password" style="text-align:center;color:#301330;" id="pass_word" />
                    </form>
                </div>
                <div id="checkStatus-input-wrapper">
                    <p class="body-text">What's your ticket number?<br/>
                    <input type="text" id="userQuery" style="text-align:center;color:#301330;"/></p>
                    <div id="checkStatus-display-wrapper">
                        <p id="checkStatus-statusText"></p>
                    </div>
                </div>
                <img src="assets/icons/smile.png" id="welcome-icon" />
                <p id="help-text"></p>
                <div id="sit-nav-btns">
                    <button class="btn btn-sm btn-default back">Back</button>
                    <button class="btn btn-sm btn-success proceed" id="login">Login</button>
                    <button class="btn btn-sm btn-success proceed" id="checkTicket">Check Ticket</button>
                </div>
				<!--<p id="stats"></p>-->
            </div>
        </div>
        <div class="col-md-2 col-sm-2 side-panel">
        </div>
    </div>
    <div id="footer_push"></div>
    <div id="info-bar">
        <p>&#169; 2015, Made with &#9829 by Yash Kadaru</p>
    </div>
    <!--New Report Filing modal-->
    <?php include 'forms/newReportForm.html'; ?>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../Frameworks/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Frameworks/datedropper-master/datedropper-master/datedropper.js"></script>
    <script src="script-2.js"></script>
</body>

</html>
