<?php
if($_GET['service']=='permissions'){
    $service = "the Permissions Console";
}else{
    $service = "Pigeon";
}
echo '"<html lang="en">

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

    <!--Font Awesome-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--Animate css-->
    <link href="../Frameworks/animate.css" rel="stylesheet">
    <!--Custom Stylesheet-->
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px|Oswald" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="supplementary-4.css"/>
</head>
<body>
    <div class="content" id="message">
        <img src="assets/icons/stop.png" class="content" id="main-icon">
        <p>You are unauthorized to access ' . $service .'. Contact the IT Admin @ housit1@mcmaster.ca for inquiries.</p>
    </div>
    <script src="../Frameworks/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>"'
?>
