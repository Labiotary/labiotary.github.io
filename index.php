<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'labiot';
$db_port = 3306;

$dbc = mysqli_connect($db_host, $db_user,$db_pass,$db_name,$db_port);

if(!$dbc)
  die('Connection failed. Terminating session.');

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $myi=mysqli_query($dbc,"INSERT INTO userlog(name,email) VALUES('$name','$email')");
}

mysqli_close($dbc);
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <!-- Pinterest verficn -->
    <meta name="p:domain_verify" content="1624e545582911134853d80849884db7"/> 
    <title>LabIOTary</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

    <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>

<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
    <![endif]-->

</head>
<body>
    <div style="overflow:hidden;">
        <header class="header" id="header"><!--header-start-->
           <div class="container">
               <figure class="logo animated fadeInDown delay-07s">
                   <a href="#"><img src="img/logo.png" alt="Labiotary logo"></a>	
               </figure>	
               <h1 class="animated fadeInDown delay-07s">Welcome to Lab<span style="font-size: 60px;font-weight:800;">ioT</span>ary</h1>
               <ul class="we-create animated fadeInUp delay-1s">
                   <li>We are a group of like minded people in the field of Internet of Things.</li>
               </ul>
               <a class="link animated fadeInUp delay-1s" href="#menuu">Scroll down</a>
           </div>
       </div>
   </header><!--header-end-->


   <nav class="main-nav-outer" id="menuu"><!--main-nav-start-->
       <div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Home</a></li>
        	<li><a href="https://medium.com/labiotary-blog">Blog</a></li>            
            <li><a href="#service">Services</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <!--<li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>-->
            <li><a href="#team">About us</a></li>
            <li><a href="#workshop">Event</a></li>
            <li><a href="#contact">Contact Us</a></li>

        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
       <h2>Services</h2>
       <h6>We offer exceptional service with complimentary hugs.</h6>
       <div class="row">
           <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
               <div class="service-list">
                   <div class="service-list-col1">
                       <i class="fa-paw"></i>
                   </div>
                   <div class="service-list-col2">
                    <h3>Project mentoring &amp; Funding</h3>
                </div>
            </div>
            <div class="service-list">
               <div class="service-list-col1">
                   <i class="fa-gear"></i>
               </div>
               <div class="service-list-col2">
                <h3>Training/Internship/Freelancing</h3>
            </div>
        </div>
        <div class="service-list">
           <div class="service-list-col1">
               <i class="fa-apple"></i>
           </div>
           <div class="service-list-col2">
            <h3>Research &amp; Patent Cell</h3>
        </div>
    </div>

</div>
<figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
   <img src="img/a.png" alt="">
</figure>

</div>
</div>
</section><!--main-section-end-->





<section class="main-section client-part" id="testimonials"><!--main-section client-part-start-->
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
        <div class="row">&nbsp;</div>
       <div class="row">
         <div class="col-lg-6">
             <p>It has always been and will be an enriching experience to discuss new ideas with like minded people. After a long tired day when you gather in an alloted lab space to share your thoughts. You get most valued critics and supporters for your ideas. The people in 'Labiotary' act as mirror to your thoughts. If you have the will to live your idea, every member of 'Labiotary' will stand by you. A sense of belonging to a team where you are encouraged to think and pitch your ideas is worth appreciating. <br>— Shubham Upadhyay</p>
         </div>
         <div class="col-lg-6">
            <p>Alone what I can do was so little, together what i did was so much. I learnt here that key to creativity is to begin with the end in mind, with a vision and a blue print of the desired result. Working long nights with a bunch of crazy and passionate people was not only great but also too much fun. All I would say is a Thank you for waking up the engineer in me. <br>— Jasmeet Chhabra</p>
        </div>
    </div>
    
    <div class="row">&nbsp;</div>
    <div class="row">
        <div class="col-lg-6">
            <p>Working for Labiotary has been an enriching experience. Every step I take with the amazing team here is a step forward towards challenges, fun and new learning curves. Although I been part of the team only for a couple of months now, but I have a lot to say when I ask myself, 'aaj kya ukhaada?' <br>— Kshitiz Arora</p>

            
        </div>

        <div class="col-lg-6">
            <p>I had a really good time working with these people. They are awesome at what they do. Looking forward to some great innovations from Labiotary team. <br>— Rahul Arora</p>

        </div>
    </div>
    
</div>

</section><!--main-section client-part-end-->
<!--c-logo-part-end-->
<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>team</h2>
        <h6>Take a closer look into our amazing team.</h6>
        <div class="team-leader-block clearfix">
        <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic0.jpg" alt="">
                    <ul>
                        <li><a href="https://www.facebook.com/prady786" class="fa-facebook"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Pardeep Garg</h3>
                <span class="wow fadeInDown delay-03s">Mentor</span>
            </div>


            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic1.jpg" alt="">
                    <ul>
                        <li><a href="https://twitter.com/bishops1101" class="fa-twitter"></a></li>
                        <li><a href="https://www.facebook.com/pushp.bajaj" class="fa-facebook"></a></li>
                        <li><a href="https://plus.google.com/+PushpBajaj/" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Pushp Bajaj</h3>
                <span class="wow fadeInDown delay-03s">Co-Founder</span>
            </div>
           
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic2.jpg" alt="">
                    <ul>
                        <li><a href="https://twitter.com/abhnvkmr" class="fa-twitter"></a></li>
                        <li><a href="https://www.facebook.com/abhnvkmr" class="fa-facebook"></a></li>
                        <li><a href="https://www.pinterest.com/abhnvkmr" class="fa-pinterest"></a></li>
                        <li><a href="https://plus.google.com/+AbhinavKumar1" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Abhinav Kumar</h3>
                <span class="wow fadeInDown delay-06s">Co-Founder</span>
                
            </div>

            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic3.jpg" alt="">
                    <ul>
                        <li><a href="https://twitter.com/abhi17shekhu" class="fa-twitter"></a></li>
                        <li><a href="https://www.facebook.com/rebel1709" class="fa-facebook"></a></li>
                        <li><a href="https://www.pinterest.com/abhi17official" class="fa-pinterest"></a></li>
                        <li><a href="google.com/+AbhimanyuSingh17" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Abhimanyu Singh</h3>
                <span class="wow fadeInDown delay-09s">Co-Founder</span>

            </div>
        </div>
</section><!--main-section team-end-->



<section class="business-talking" id="workshop"><!--business-talking-start-->
	<div class="container">
        <h2>Event</h2>
        <div class="row"><div class="col-lg-6 col-lg-offset-3" style="margin-bottom: 5px;margin-right:5px"><img src="img/poster.png"/></div></div>
        <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
        <div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/labiotary/posts/1681726635449987" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/labiotary/posts/1681726635449987">Posted by <a href="https://www.facebook.com/labiotary/">Labiotary</a> on&nbsp;<a href="https://www.facebook.com/labiotary/posts/1681726635449987">Monday, February 15, 2016</a></blockquote></div>
</div>
</div>
</div>
    </div>
</section><!--business-talking-end-->
<div class="container">
    <section class="main-section contact" id="contact">

        <div class="row">
        	<div class="col-lg-6 col-sm-7 wow fadeInLeft">
               <div class="contact-info-box address clearfix">
                   <h3><i class=" icon-map-marker"></i>Address:</h3>
                   <span>Internet of Things Lab, 3rd Floor, Vivekanand Bhawan, Jaypee University of Information Technology, Waknaghat, Himachal Pradesh</span>
               </div>
               <div class="contact-info-box phone clearfix">
                   <h3><i class="fa-phone"></i>Phone:</h3>
                   <span>+91-9736139202</span>
               </div>
               <div class="contact-info-box email clearfix">
                   <h3><i class="fa-pencil"></i>email:</h3>
                   <span>tinker@labiotary.com</span>
               </div>
               <div class="contact-info-box hours clearfix">
                   <h3><i class="fa-clock-o"></i>Hours:</h3>
                   <span><strong>24 hours, 7 days a week</strong></span>
               </div>
               <ul class="social-link">
                   <li class="twitter"><a href="https://twitter.com/labIoTary"><i class="fa-twitter"></i></a></li>
                   <li class="facebook"><a href="https://www.facebook.com/labiotary"><i class="fa-facebook"></i></a></li>
                   <li class="pinterest"><a href="https://www.pinterest.com/labiotary/"><i class="fa-pinterest"></i></a></li>
                   <!-- <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li> -->
               </ul>
           </div>
           <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                   <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:350px;width:340px;'><div id='gmap_canvas' style='height:350px;width:340px;'></div><div><small><a href="http://embedgooglemaps.com">                                    embed google map                            </a></small></div><div><small><a href="https://googlemapsgenerator.com">embed google maps</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(31.0120722,77.08737910000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.0120722,77.08737910000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Labiotary</strong><br>JUIT, Waknaghat, Solan, Himachal Pradesh<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                          </div>
       </div>
   </section>
</div>
<footer class="footer">
    <div class="container">

    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

<script>
    wow = new WOW(
    {
        animateClass: 'animated',
        offset:       100
    }
    );
    wow.init();

</script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

    $(window).load(function(){


      var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;


      $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
  }
});

      $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
      .isotope('reLayout');
  }

  }).smartresize(); // trigger resize to set container width
      $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

            filter: selector,
        });
        return false;
    });

  });

</script>
</body>
</html>