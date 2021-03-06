<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once("inc/class.McAuth.inc.php");
require_once('init.php');

$token = $_GET['token'];
$authz = $_GET['authz']; //get good token param from successful macid login

//echo $_GET['token'];
//echo $_GET['authz'];

$private_key = "VL2PMKB0jyo2O88gkgF3vEFg";

$unencrypt = McAuth::getMcAuthParameters($authz, $private_key);//decrypt token
//First Name: ["authz"]["fgivenameName"]
//Last Name: ["authz"]["surnameName"]
//mail: ["authz"]["mail"]
$unencrypt_2 = McAuth::getMcAuthParameters($token, $private_key);//decrypt token
//macid: 4th

//echo "<pre>";
//var_dump($unencrypt);
//var_dump($unencrypt_2);
//echo "</pre>";

//if user macid is on my list, send them over
$attemptingUser = $unencrypt_2[4];
$userMail = $unencrypt["authz"]["mail"];
$firstName = $unencrypt["authz"]["fgivenameName"];
//$validAdmins = array("prancho","jdickso");
//$validStaff = array("kurucr","gopalay","resadm","beattyk","beanc","beaudes","greenj11","lightd","reifenb","rezlife","rohrer","simondw","treleavm","wilmos1","walkta","baumgjo","burkep","dansjoe","gacesag","sharris","richlor","otterse","housing","lombard","sumstaf","cr_conf2","cr_conf3","cr_conf1","haml","adamarl","marcosn");
$dbAction = new Db();
$access = $dbAction->get_user($attemptingUser);

//NOTE: Validation changed. Now checks with users database. Old system was using in_array($attemptingUser,$validAdmins) which returns 1 or 0
if($access==2){
    //Create session cookie
    session_start();
    $_SESSION['pigeon_admin'] = time('now') + 25000;
    $_SESSION['user_name'] = $attemptingUser;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['userMail'] = $userMail;
    //Redirect to main app
    header("Location: http://hcs.mcmaster.ca/apps/pigeon/Main/index.html.php");
}else if($access==1){
    //Create session cookie
    session_start();
    $_SESSION['pigeon_staff'] = time('now') + 25000;
    $_SESSION['user_name'] = $attemptingUser;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['userMail'] = $userMail;
    //Redirect to the staff portal
    header("Location: http://hcs.mcmaster.ca/apps/pigeon/Main/staffPortal.html.php");
}else{
    //Redirect to unauth page indicating reason for login denial
    header("Location: http://hcs.mcmaster.ca/apps/pigeon/Main/unauth.php");
    die();
}
?>
