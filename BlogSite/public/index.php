<?php
include("../templates/layout.php");
require_once '../templates/layout.php';
Layout::pageTop('../templates/layout.php');
?>

        <!-- Grid -->
        <div class="w3-row w3-padding w3-border">

            <!-- Blog entries -->
            <div class="w3-col l8 s12">

                <!-- Blog entry -->
                <div class="w3-container w3-white w3-margin w3-padding-large">
                    <div class="w3-center">
                        <h3>CHIMNEY ROCKS</h3>
                        <h5>Hollidaysburg PA, <span class="w3-opacity"> January 1, 2017</span></h5>
                    </div>

                    <div class="w3-justify">
                        <img src="../assets/images/HollidaysburgOverlook.jpg" alt="Hollidaysburg" style="width:100%" class="w3-padding-12">
                        <p>
                            <strong>Downtown!</strong> I grew up a mile away from the downtown area.  I have grown to love and care for the town.
                            It is always a blessing to go home and be a part of the little town.
                        </p>
                        <p class="w3-left"><button class="w3-btn w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
                        <p class="w3-right"><button class="w3-btn" onclick="myFunction('demo1')" id="myBtn"><b>Replies &nbsp;</b> <span class="w3-tag w3-white">1</span></button></p>
                        <p class="w3-clear"></p>
                        <div class="w3-row w3-padding-bottom w3-show" id="demo1" style="display:none">
                            <hr>
                            <div class="w3-col l2 m3">
                                <img src="/w3images/avatar_smoke.jpg" style="width:90px;">
                            </div>
                            <div class="w3-col l10 m9">
                                <h4>George <span class="w3-opacity w3-medium">January 1, 2017, 6:32 PM</span></h4>
                                <p>Great blog post! Following</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- Blog entry -->
                <div class="w3-container w3-white w3-margin w3-padding-large">
                    <div class="w3-center">
                        <h3>FAMILY</h3>
                        <h5>The Family, <span class="w3-opacity">August 20, 2016</span></h5>
                    </div>

                    <div class="w3-justify">
                        <img src="../assets/images/Chincoteague.jpg" alt="Vacation" style="width:100%" class="w3-padding-12">
                        <p>
                            <strong>Bay!</strong> Loved spending the last few days with my family before I go off to
                            college!  I'm going to miss them so much.
                        </p>
                        <p>
                            In four days I have to walk away from my family.  I don't
                            know what I would do without them! I'm looking forward to fall break
                            so I can be back with them again!!
                        </p>
                        <p class="w3-left"><button class="w3-btn w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
                        <p class="w3-right"><button class="w3-btn" onclick="myFunction('demo2')"><b>Replies &nbsp;</b> <span class="w3-tag w3-white">2</span></button></p>
                        <p class="w3-clear"></p>

                        <!-- Example of comment field -->
                        <div id="demo2" style="display:none">
                                    <div class="w3-row">
                                        <hr>
                                        <div class="w3-col l2 m3">
                                            <img src="/w3images/girl_train.jpg" style="width:90px;">
                                        </div>
                                        <div class="w3-col l10 m9">
                                            <h4>Amber <span class="w3-opacity w3-medium">April 26, 2015, 10:52 PM</span></h4>
                                            <p>You'll have fun in college! Your family is the best!</p><br>
                                        </div>
                                    </div>
                                    <div class="w3-row w3-padding-bottom">
                                        <div class="w3-col l2 m3">
                                            <img src="/w3images/girl.jpg" style="width:90px;">
                                        </div>
                                        <div class="w3-col l10 m9">
                                            <h4>Angie <span class="w3-opacity w3-medium">April 23, 2015, 9:12 PM</span></h4>
                                            <p>Love your family!!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog entry -->
                        <div class="w3-container w3-white w3-margin w3-padding-large">
                            <div class="w3-center">
                                <h3>PROM</h3>
                                <h5>Senior Prom, <span class="w3-opacity">May 23, 2016</span></h5>
                            </div>

                            <div class="w3-justify">
                                <img src="../assets/images/PromDad.jpg" alt="Dad before Prom" style="width:100%" class="w3-padding-12">
                                <p><strong>Dress Up!</strong> My dad just got me a Dodge Charger!</p>
                                <p>
My dad tried to finish his black 69 camaro for me to drive to prom.
After he realized that he wasn't going to make the deadline, he told me
                                    that he rented a car for me to use for a week to make up for it.  I was
                                    so suprised because I told him that I was okay just driving the car to
                                    prom and it wouldn't be that big of a deal.
                                </p>
                                <p class="w3-left"><button class="w3-btn w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
                                <p class="w3-right"><button class="w3-btn" onclick="myFunction('demo3')"><b>Replies &nbsp;</b> <span class="w3-tag w3-white">3</span></button></p>
                                <p class="w3-clear"></p>

                                <!-- Example of comment field -->
                                <div id="demo3" style="display:none">
                                    <hr>
                                    <div class="w3-row w3-margin-bottom">
                                        <div class="w3-col l2 m3">
                                            <img src="/w3images/girl_mountain.jpg" style="width:90px;">
                                        </div>
                                        <div class="w3-col l10 m9">
                                            <h4>Jane <span class="w3-opacity w3-medium">April 10, 2015, 7:22 PM</span></h4>
                                            <p>This picture is so pretty. You look gorgeous!</p>
                                        </div>
                                    </div>
                                    <div class="w3-row w3-margin-bottom">
                                        <div class="w3-col l2 m3">
                                            <img src="/w3images/boy.jpg" style="width:90px;">
                                        </div>
                                        <div class="w3-col l10 m9">
                                            <h4>John <span class="w3-opacity w3-medium">April 8, 2015, 10:32 PM</span></h4>
                                            <p>Like Father, Like Daughter</p>
                                        </div>
                                    </div>
                                    <div class="w3-row w3-padding-bottom">
                                        <div class="w3-col l2 m3">
                                            <img src="/w3images/girl_hood.jpg" style="width:90px;">
                                        </div>
                                        <div class="w3-col l10 m9">
                                            <h4>Anja <span class="w3-opacity w3-medium">April 7, 2015, 9:12 PM</span></h4>
                                            <p>Beautiful Picture!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END BLOG ENTRIES -->
                    </div>

                    <!-- About/Information menu -->
                    <div class="w3-col l4">
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