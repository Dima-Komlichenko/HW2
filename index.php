<?php

require_once("templates/header.php");

$openPage = "index.php";
if(isset($_GET['openPage']))$openPage = $_GET['openPage'];
if(isset($_POST['openPage']))$openPage = $_POST['openPage'];

if($openPage == "index.php") {
    require_once("pages/slider.php");
    require_once("pages/service.php");
    require_once("pages/latestProduct.php");
    require_once("pages/clients.php");
    require_once("pages/testimonials.php");
    require_once("pages/pricing.php");
    require_once("pages/promoSection.php");
    require_once("pages/work.php");
}
else if($openPage == "pricing.php") {
    require_once("pages/parallax.php");
    require_once("pages/pricing.php");
    require_once("pages/testimonials.php");
    require_once("pages/clients.php");
}
else if($openPage == "about.php") {
    require_once("pages/parallax.php");
    require_once("pages/features.php");
    require_once("pages/service.php");
    require_once("pages/testimonials.php");
    require_once("pages/team.php");
}
else if($openPage == "products.php") {
    require_once("pages/parallax.php");
    require_once("pages/ourExceptionalSolution.php");
    require_once("pages/clients.php");
    require_once("pages/promoSection.php");
}
else if($openPage == "faq.php") {
    require_once("pages/parallax.php");
    require_once("pages/service.php");
    require_once("pages/generalQuestion.php");
    require_once("pages/pricing.php");
}
else if($openPage == "contact.php") {
    require_once("pages/parallax.php");
    require_once("pages/contactList.php");
    require_once("pages/googleMap.php");
    require_once("pages/promoSection.php");
}

require_once ("templates/footer.php");