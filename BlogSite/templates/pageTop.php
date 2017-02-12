<!DOCTYPE html>
<html>
<head>
    <title>Connected</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
h1, h2, h3, h4, h5, h6 {
    font-family: "Oswald";
        }

        body {
    font-family: "Open Sans";
        }
    </style>
</head>


<body class="w3-light-grey">

    <!-- Navigation bar with social media icons -->
    <ul class="w3-navbar w3-black w3-hide-small">
        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-snapchat"></i></a></li>
        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li class="w3-right"><a href="#"><i class="fa fa-search"></i></a></li>
    </ul>

    <!-- w3-content defines a container for fixed size centered content,
    and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1600px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-48 w3-white">
            <h1 class="w3-xxxlarge"><b>CONNECTED BLOGLIFE</b></h1>
            <h6>Welcome to the blog of <span class="w3-tag">Haylee's world</span></h6>
        </header>

        <!-- Image header -->
        <header class="w3-display-container w3-wide" id="home">
            <img class="background-image" src="Images\Sunset.jpg">
            <div class="w3-display-left w3-padding-xlarge">
                <h1 class="w3-text-white">Haylee's</h1>
                <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>PHOTOGRAPHY BLOG</b></h1>
                <h6><button class="w3-btn w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">SUBSCRIBE</button></h6>
            </div>
        </header>
