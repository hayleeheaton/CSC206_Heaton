<?php
class layout
{
    /**
     * Creates the top part of the page.  This will usually be the HEAD area plus the nav bar and anything else that is
     * above the "content" of that page.
     *
     * @param $title
     */
    public static function pageTop($title)
    {
        // This builds the web path to the app.css file and is embedded in the header below
        echo <<<pagetop
    <!DOCTYPE html>
<html>
<head>
    <title>Connected</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/main.css">
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
            <img class="background-image" src="/assets/images/ChimneyRocks.jpg">
            <div class="w3-display-left w3-padding-xlarge">
                <h1 class="w3-text-white">Haylee's</h1>
                <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>PHOTOGRAPHY BLOG</b></h1>
                <h6><button class="w3-btn w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">SUBSCRIBE</button></h6>
            </div>
        </header>

pagetop;
    }
    /**
     * Creates the bottom part of the page.  This will usually be the footer area and anything else that comes below
     * the page content.
     */
    public static function pageBottom()
    {
        echo <<<pagebottom
         <!-- Footer -->
            <footer class="w3-container w3-dark-grey w3-padding-32 w3-padding-xlarge">
                <a href="#" class="w3-btn w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
                <p>Contact Information: 654.665.6499 | hayleeheaton@yahoo.com </p>
                 <p>&copy; 2015 Connected Bloglife | All Rights Resevered</p>
            </footer>

            <script>
                // Toggle between hiding and showing blog replies/comments
                document.getElementById("myBtn").click();
                function myFunction(id) {
                    var x = document.getElementById(id);
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                    } else {
                        x.className = x.className.replace(" w3-show", "");
                    }
                }

                function likeFunction(x) {
                    x.style.fontWeight = "bold";
                    x.innerHTML = "&#10003; Liked";
                }
            </script>

            <script type="text/javascript" src="//www.w3schools.com/utilcave_com/inc/ezf-min.php?a=a&amp;cb=3&amp;shcb=5" style="display:none;"></script>

</body>



</html>
pagebottom;
    }


}
