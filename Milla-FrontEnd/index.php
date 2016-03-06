<?php require_once('data/includes/header.php');?>
<body onload="initialize()" class="promo" ng-controller="mainpage">
<?php require_once('data/includes/found.php');?>
<div class="site-overlay"></div>
  <div id="container">
  <div class="container">
        <div class="row">
          <div class="col-md-12" style="height: 100px;">
            <div class="header_promo">
              <h1 style="float:left; color:white; font-weight:bold; position:absolute; top:0.4em;">Milla</h1>
                <?php if(!empty($_SESSION['logged'])==true){?>
                <a href="data/logout.php" class="log_btns" style="margin-right:0.4em;">Logout</a>
                <a href="#" class="log_found btn btn-success" style="margin-right:0.4em;">Found Something!</a>
                <a href="#" class="claim btn btn-success" style="margin-right:0.4em;">Claim</a>
                <?php }else{

                  echo '<a href="#" class="log_btn">Log in</a>&nbsp;';
                  echo '<a href="#" class="log_btns" style="margin-right:0.4em;">Signup</a>';
                  echo '<a href="#" class="log_btn" style="margin-right:0.4em;">Claim</a>';
                }?>
                <a href="#" style="border:none;" style="margin-right:0.4em;"><?php if(!empty($_SESSION['Username'])){echo $_SESSION['Username'];}?></a>
            </div>
          </div>
      </div>
  </div>
<!--Map block-->
<div class="map_block container-fluid">
  <div class="index_map" id="map"></div>
</div>

    <!--Features block-->
   <!--  <div class="fea_block container-fluid">
      <div class="fixed_w">
        <h2>Features My City</h2>
        <div class="row">
          <div class="col-md-4 fea_item wow bounceInUp">
            <h3><i class="fa fa-picture-o"></i>Slider Revolution included</h3>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</span>
          </div>
          <div class="col-md-4 fea_item wow bounceInUp">
            <h3><i class="fa fa-globe"></i>Google maps API support</h3>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</span>
          </div>
          <div class="col-md-4 fea_item wow bounceInUp">
            <h3><i class="fa fa-video-camera"></i>Simple animation css3 framework</h3>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</span>
          </div>
          <div class="col-md-4 fea_item wow bounceInUp">
            <h3><i class="fa fa-twitter"></i>Twitter bootstrap 3</h3>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</span>
          </div>
          <div class="col-md-4 fea_item wow bounceInUp">
            <h3><i class="fa fa-html5"></i>Valid HTML pages</h3>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</span>
          </div>
          <div class="col-md-4 fea_item wow bounceInUp">
            <h3><i class="fa fa-mobile"></i>Adaptive design</h3>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</span>
          </div>
        </div>
      </div>
    </div> -->
<!--
#################################
- Slider revolution -
#################################
-->
<!--Users blocks-->
<!-- <div class="user_block container-fluid">
  <div class="fixed_w">
    <h2>Citixens Of The Week</h2>
    <div class="row">
      <div class="col-md-3 user_cover wow bounceInLeft">
        <div class="user_item">
          <div class="user_item_cont">
            <img src="img/avatar/ava_1.jpg" alt="#">
            <a href="03.html" class="names">Mattew An</a>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur4.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInLeft">
        <div class="user_item">
          <div class="user_item_cont">
            <img src="img/avatar/ava_2.jpg" alt="#">
            <a href="03.html" class="names">John Doe</a>
            <div class="bottom_link">
             <ul>
                <li><a href="03.html"><i class="fa fa-thumbs-o-up"></i>123</a></li>
                <li><a href="03.html"><i class="fa fa-comment-o"></i>23</a></li>
                <li><a href="03.html"><i class="fa fa-users"></i>23</a></li>
                <li class="last"><a href="03.html"><i class="fa fa-map-marker"></i>23</a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur3.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInRight">
        <div class="user_item">
          <div class="user_item_cont">
            <img src="img/avatar/ava_3.jpg" alt="#">
            <a href="03.html" class="names">Nick richmond</a>
            <div class="bottom_link">
             <ul>
                <li><a href="03.html"><i class="fa fa-thumbs-o-up"></i>123</a></li>
                <li><a href="03.html"><i class="fa fa-comment-o"></i>23</a></li>
                <li><a href="03.html"><i class="fa fa-users"></i>23</a></li>
                <li class="last"><a href="03.html"><i class="fa fa-map-marker"></i>23</a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur1.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInRight">
        <div class="user_item">
          <div class="user_item_cont">
            <img src="img/avatar/ava_4.jpg" alt="#">
            <a href="03.html" class="names">Dmitry Kozlovsky</a>
            <div class="bottom_link">
              <ul>
                <li><a href="03.html"><i class="fa fa-thumbs-o-up"></i>123</a></li>
                <li><a href="03.html"><i class="fa fa-comment-o"></i>23</a></li>
                <li><a href="03.html"><i class="fa fa-users"></i>23</a></li>
                <li class="last"><a href="03.html"><i class="fa fa-map-marker"></i>23</a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur2.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
       <span class="user_num">5</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_1.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
        <span class="user_num">6</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_2.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
        <span class="user_num">7</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_3.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
      <span class="user_num">8</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_4.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
      <span class="user_num">9</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_5.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInLeft" onclick="location.href='03.html';">
         <span class="user_num">10</span> 
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_6.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
      <span class="user_num">11</span> 
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_7.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
       <span class="user_num">12</span>
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_8.jpg" alt="">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
       <span class="user_num">13</span> 
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_9.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
       <span class="user_num">14</span> 
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_10.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
       <span class="user_num">15</span> 
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_11.jpg" alt="#">
        </div>
      </div>
      <div class="user_sm col-md-1 wow bounceInRight" onclick="location.href='03.html';">
       <span class="user_num">16</span> 
        <div class="min_u_hover">
          <div class="user_go">
            <i class="fa fa-eye"></i>
          </div>
          <img src="img/avatar/ava_12.jpg" alt="#">
        </div>
      </div>
    </div>
  </div>
</div> -->

<!--promo block-->
<!-- <div class="promo_block container-fluid">
  <div class="fixed_w promka">
    <img src="img/start/logo.png" alt="#">
    <span>See and visit interesting places. Share experiences with your friends. Simply</span>
  </div>
  <div class="anim_bg"></div>
</div> -->
<!--Users blocks-->
<!-- <div class="user_block container-fluid">
  <div class="fixed_w">
    <h2>Our Team</h2>
    <div class="row">
      <div class="col-md-3 user_cover wow bounceInLeft">
        <div class="user_item">
          <div class="user_item_cont aaa">
            <img src="img/avatar/ava_1.jpg" alt="#">
            <a href="03.html" class="names">Allauddin Yousafxai <br>
              <span>Web  Designer</span>
            </a>
            <div class="bottom_link ">
              <ul>
                <li class="twitter"><a href="03.html"><i class="fa fa-twitter"></i></a></li>
                <li class="linkedin"><a href="03.html"><i class="fa fa-linkedin"></i></a></li>
                <li class="last google"><a href="03.html"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur4.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInLeft">
        <div class="user_item">
          <div class="user_item_cont aaa">
            <img src="img/avatar/ava_2.jpg" alt="#">
            <a href="03.html" class="names">John Doe</a>
            <div class="bottom_link">
              <ul>
                <li class="twitter"><a href="03.html"><i class="fa fa-twitter"></i></a></li>
                <li class="linkedin"><a href="03.html"><i class="fa fa-linkedin"></i></a></li>
                <li class="last google"><a href="03.html"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur3.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInRight">
        <div class="user_item">
          <div class="user_item_cont aaa">
            <img src="img/avatar/ava_3.jpg" alt="#">
            <a href="03.html" class="names">Nick richmond</a>
            <div class="bottom_link">
              <ul>
                <li class="twitter"><a href="03.html"><i class="fa fa-twitter"></i></a></li>
                <li class="linkedin"><a href="03.html"><i class="fa fa-linkedin"></i></a></li>
                <li class="last google"><a href="03.html"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur1.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInRight">
        <div class="user_item">
          <div class="user_item_cont aaa">
            <img src="img/avatar/ava_4.jpg" alt="#">
            <a href="03.html" class="names">Dmitry Kozlovsky</a>
            <div class="bottom_link">
              <ul>
                <li class="twitter"><a href="03.html"><i class="fa fa-twitter"></i></a></li>
                <li class="linkedin"><a href="03.html"><i class="fa fa-linkedin"></i></a></li>
                <li class="last google"><a href="03.html"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur2.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInRight">
        <div class="user_item">
          <div class="user_item_cont aaa">
            <img src="img/avatar/ava_4.jpg" alt="#">
            <a href="03.html" class="names">Dmitry Kozlovsky</a>
            <div class="bottom_link">
              <ul>
                <li class="twitter"><a href="03.html"><i class="fa fa-twitter"></i></a></li>
                <li class="linkedin"><a href="03.html"><i class="fa fa-linkedin"></i></a></li>
                <li class="last google"><a href="03.html"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur2.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInRight">
        <div class="user_item">
          <div class="user_item_cont aaa">
            <img src="img/avatar/ava_4.jpg" alt="#">
            <a href="03.html" class="names">Dmitry Kozlovsky</a>
            <div class="bottom_link">
              <ul>
                <li class="twitter"><a href="03.html"><i class="fa fa-twitter"></i></a></li>
                <li class="linkedin"><a href="03.html"><i class="fa fa-linkedin"></i></a></li>
                <li class="last google"><a href="03.html"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur2.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInRight">
        <div class="user_item">
          <div class="user_item_cont aaa">
            <img src="img/avatar/ava_4.jpg" alt="#">
            <a href="03.html" class="names">Dmitry Kozlovsky</a>
            <div class="bottom_link">
              <ul>
                <li class="twitter"><a href="03.html"><i class="fa fa-twitter"></i></a></li>
                <li class="linkedin"><a href="03.html"><i class="fa fa-linkedin"></i></a></li>
                <li class="last google"><a href="03.html"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur2.png" class="blurbg" alt="#">
        </div>
      </div>
      <div class="col-md-3 user_cover wow bounceInRight">
        <div class="user_item">
          <div class="user_item_cont aaa">
            <img src="img/avatar/ava_4.jpg" alt="#">
            <a href="03.html" class="names">Dmitry Kozlovsky</a>
            <div class="bottom_link">
              <ul>
                <li class="twitter"><a href="03.html"><i class="fa fa-twitter"></i></a></li>
                <li class="linkedin"><a href="03.html"><i class="fa fa-linkedin"></i></a></li>
                <li class="last google"><a href="03.html"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="fb_btn"><i class="fa fa-facebook-official"></i></a>
          <img src="img/bglur2.png" class="blurbg" alt="#">
        </div>
      </div>
    </div>
  </div>
</div> -->
</div>
<!--
#################################
- SCRIPT FILES -
#################################
-->
<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<script src="js/jquery.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/all_scr.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/map.js"></script>
<script type="text/javascript" src="js/infobox.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-0.2-min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<!--scroll animation-->
<script type="text/javascript">
"use strict";
setHeiHeight(); 
$(window).resize( setHeiHeight ); 
</script>
 <script src="js/locationpicker.jquery.js"></script><script>
   $('#us3').locationpicker({
        location: {latitude: 34.0167, longitude: 71.5833},
        radius: 100,
        inputBinding: {   
            latitudeInput: $('#us3-lat'),
            longitudeInput: $('#us3-lon'),
            locationNameInput: $('#us3-address')
        },
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            // Uncomment line below to show alert on each Location Changed event
            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
        }
    });
</script>
</body>
</html>