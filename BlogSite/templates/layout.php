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
        <h7 align="left"><a href = "index.php">Home | </h7>
        <li><a href="/CreatePost.php"><img src="../assets/images/plussign.png"></li>
        <h7 align="left"><a href = "GetPosts.php"> All Posts</h7>
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

    public static function rightSide()
    {
        echo <<<rightside
  <!-- About/Information menu -->
                    <div class=".w3-col m6">
                        <!-- About Card -->
                        <div class="w3-white w3-margin">
                            <img src="../assets/images/TrainTracks.jpg" alt="Haylee" style="width:100%" class="w3-grayscale">
                            <div class="w3-container w3-black">
                                <h4>Haylee</h4>
                                <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of photography.
I'm excited to share the world with you through my eyes.</p>
                            </div>
                        </div>
                        <hr>

                        <!-- Posts -->
                        <div class="w3-white w3-margin">
                            <div class="w3-container w3-padding w3-black">
                                <h4>Popular Posts</h4>
                            </div>
                            <ul class="w3-ul w3-hoverable w3-white">
                                <li class="w3-padding-16">
                                    <img src="../assets/images/Phantom 3.jpg" alt="Drone" class="w3-left w3-margin-right" style="width:50px">
                                    <span class="w3-large">Phantom 3 Drone</span>
                                    <br>
                                    <span>Christmas Present</span>
                                </li>
                                <li class="w3-padding-16">
                                    <img src="../assets/images/Gabi2.jpg" alt="Center of Campus" class="w3-left w3-margin-right" style="width:50px">
                                    <span class="w3-large">Photoshoot!</span>
                                    <br>
                                    <span>Center of Campus</span>
                                </li>
                                <li class="w3-padding-16">
                                    <img src="../assets/images/Flying the Drone.jpg" alt="Dad Hunter and Vlad" class="w3-left w3-margin-right" style="width:50px">
                                    <span class="w3-large">High in the Sky</span>
                                    <br>
                                    <span>Dad, Hunter and Vlad flying the drone.</span>
                                </li>
                                <li class="w3-padding-16">
                                    <img src="../assets/images/Kari2.jpg" alt="Old Main" class="w3-left w3-margin-right w3-sepia" style="width:50px">
                                    <span class="w3-large">Photoshoot!</span>
                                    <br>
                                    <span>Old Main</span>
                                </li>
                            </ul>
                        </div>
                        <hr>

                        <!-- Advertising -->
                        <div class="w3-white w3-margin">
                            <div class="w3-container w3-padding w3-black">
                                <h4>Advertise</h4>
                            </div>
                            <div class="w3-container w3-white">
                                <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
                                    <span class="w3-display-middle"><img src="../assets/images/Ad.png" /></span>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <!-- Tags -->
                        <div class="w3-white w3-margin">
                            <div class="w3-container w3-padding w3-black">
                                <h4>Tags</h4>
                            </div>
                            <div class="w3-container w3-white">
                                <p>
                                    <span class="w3-tag w3-black w3-margin-bottom">Fashion</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Christmas</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Vacation</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Chincoteague Island</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Prom</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Hunter</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Hollidaysburg</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Downtown</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Friends</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Photoshoots</span>
                                    <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">YMCA</span>
                                </p>
                            </div>
                        </div>
                        <hr>


                        <hr>

                        <div class="w3-white w3-margin">
                            <div class="w3-container w3-padding w3-black">
                                <h4>Follow Me</h4>
                            </div>
                            <div class="w3-container w3-xlarge w3-padding">
                                <i class="fa fa-facebook-official w3-hover-text-indigo"></i>
                                <i class="fa fa-instagram w3-hover-text-purple"></i>
                                <i class="fa fa-snapchat w3-hover-text-yellow"></i>
                                <i class="fa fa-pinterest-p w3-hover-text-red"></i>
                                <i class="fa fa-twitter w3-hover-text-light-blue"></i>
                                <i class="fa fa-linkedin w3-hover-text-indigo"></i>
                            </div>
                        </div>
                        <hr>

                        <!-- Subscribe -->
                        <div class="w3-white w3-margin">
                            <div class="w3-container w3-padding w3-black">
                                <h4>Subscribe</h4>
                            </div>
                            <div class="w3-container w3-white">
                                <p>Enter your e-mail below and get notified on the latest blog posts.</p>
                                <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
                                <p><button type="button" class="w3-btn-block w3-padding w3-red w3-opacity w3-hover-opacity-off">Subscribe</button></p>
                            </div>
                        </div>

                        <!-- END About/Intro Menu -->
                    </div>

                    <!-- END GRID -->
                </div>

                <!-- END w3-content -->
            </div>

            <!-- Subscribe Modal -->
            <div id="subscribe" class="w3-modal w3-animate-opacity">
                <div class="w3-modal-content w3-padding-jumbo">
                    <div class="w3-container w3-white">
                        <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-xlarge w3-closebtn w3-hover-text-grey w3-margin"></i>
                        <h2 class="w3-wide">SUBSCRIBE</h2>
                        <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
                        <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
                        <button type="button" class="w3-btn-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
                    </div>
                </div>
            </div>
rightside;
    }
        /**
     * Creates the bottom part of the page.  This will usually be the footer area and anything else that comes below
     * the page content.
         *






         */
    public static function pageBottom()
    {
        echo <<<pagebottom
         <!-- Footer -->
            <footer class="w3-bottom-stretched w3-dark-grey w3-padding-32 w3-padding-xlarge">
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