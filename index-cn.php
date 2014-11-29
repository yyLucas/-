<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>龙腾装饰</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        
          <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDSnVDLe2i_3BLBrY3lxBPtoKGR-AG6tlo&sensor=false">
    </script>
        
        <script>
            function initialize() {
                var mapOptions = {
                    center: { lat: -36.955838, lng:174.890511},
                    zoom: 17,
                    scrollwheel: false,
                    navigationControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    draggable: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    disableDefaultUI: false
                };
                var map = new google.maps.Map(document.getElementById('map'),
                    mapOptions);
//                var image = '/images/marker.png';
                var myLatLng = new google.maps.LatLng(-36.955838, 174.890511);
                var beachMarker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
//                  icon: image
                });
                
                
                }
            

      google.maps.event.addDomListener(window, 'load', initialize);  
          
        </script>
      </head>
      <body id="top">
        <header id="home">
          <nav>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <nav class="pull">
                    <ul class="top-nav">
                      <li><a href="#intro">介绍 <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#features">服务 <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
<!--                      <li><a href="#responsive">Responsive Design <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>-->
                      <li><a href="#portfolio">产品 <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
<!--                      <li><a href="#team">Team <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>-->
                      <li><a href="#contact">联系 <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </nav>
          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
               <div class="col-md-6 text-left"><a href="index.php" >English </a> / <a style="color:#c7b78d"> 中文</a></div>
                <div class="col-md-6 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                  <h1 class="animated fadeInDown" style="font-family:'lishu';font-size:10.2em;"><span >龙腾</span>装饰</h1>
                  <p class="animated fadeInUp delay-05s">专业营销及安装PVC屋顶装饰板</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#intro" class="learn-more-btn">更多内容</a>
                </div>
              </div>
            </div>
          </section>
        </header>
        <section class="intro text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">产品美观时尚，防潮防霉，安全免漆，特别适用于厨房、卫浴</h1>
                <p>Sed a lorem quis neque interdum <a href="#">consequat ut sed sem</a>. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent id tempor ipsum. Fusce at massa ac nunc porta fringilla sed eget neque. Quisque quis pretium nulla. Fusce eget bibendum neque, vel volutpat augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">我们的服务</h1>
                <div class="features-wrapper">
                  <div class="col-md-4 wp2">
                    <div class="icon">
                      <img src="img/marketing.jpg" alt="">
                    </div>
                    <h2>经销PVC屋顶装饰板</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                    primis in faucibus.</p>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <div class="icon">
                     <img src="img/assembling.jpg" alt="">
                    </div>
                    <h2>安装PVC屋顶装饰板</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                    primis in faucibus.</p>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon">
                     <img src="img/maintainance.jpg" alt="">
                    </div>
                    <h2>装修与维修工程</h2>
                    <p>旧房翻新，厨房卫浴安装，室内外油漆等各种装修及维修工程</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!--
        <section class="text-center" id="responsive">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="iphone">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <h1 class="arrow">Responsive Design Specialists</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero. </p>
                        <p>
                        Mauris ultrices odio vitae nulla ultrices iaculis. Nulla rhoncus odio eu lectus faucibus facilisis. Maecenas ornare augue vitae sollicitudin accumsan. </p>
                        <p>Etiam eget libero et erat eleifend consectetur a nec lectus. Sed id tellus lorem. Suspendisse sed venenatis odio, quis lobortis eros.</p>
                      </li>
                      <li>
                        <h1 class="arrow">Bootstrap Professionals</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero. </p>
                        <p>
                        Mauris ultrices odio vitae nulla ultrices iaculis. Nulla rhoncus odio eu lectus faucibus facilisis. Maecenas ornare augue vitae sollicitudin accumsan. </p>
                        <p>Etiam eget libero et erat eleifend consectetur a nec lectus. Sed id tellus lorem. Suspendisse sed venenatis odio, quis lobortis eros.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
-->
        <section class="swag text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>专业团队，价格公道合理<br><span>免费上门报价</span></h1>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <ul class="slides">
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/slider3.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>查看更多</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>产品1</h2>
                      
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/slider3.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>查看更多</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2> 产品2</h2>
                    
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/slider3.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>查看更多</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2> 产品3</h2>
                     
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                         <img src="img/slider3.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>查看更多</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>产品4</h2>
                      
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                         <img src="img/slider3.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>查看更多</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>产品5</h2>
                     
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/slider3.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>查看更多</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>产品6</h2>
                     
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
<!--
        <div class="ignite-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="#" class="ignite-btn">Ignite Your Passion</a>
              </div>
            </div>
          </div>
        </div>
-->
<!--
        <section class="team text-center section-padding" id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">We're a team that adore what we do</h1>
              </div>
            </div>
            <div class="row">
              <div class="team-wrapper">
                <div id="teamSlider">
                  <ul class="slides">
                    <li>
                      <div class="col-md-4 wp5">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-md-4 wp5 delay-05s">
                        <img src="img/team-02.png" alt="Team Member">
                        <h2>Cersei Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-1s">
                        <img src="img/team-03.png" alt="Team Member">
                        <h2>Jamie Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="col-md-4 wp5">
                        <img src="img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-05s">
                        <img src="img/team-02.png" alt="Team Member">
                        <h2>Cersei Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-1s">
                        <img src="img/team-03.png" alt="Team Member">
                        <h2>Jamie Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
-->
        <section class="subscribe text-center">
          <div class="container">
            <h1><i class="fa fa-paper-plane"></i><span>和我们保持联系</span></h1>
            <form action="#">
              <input style="margin-bottom:10px;" type="text" name="" value="" placeholder="您的姓名" required><br>
              <input style="margin-bottom:10px;" type="text" name="" value="" placeholder="您的邮箱地址" required><br>
              <textarea style="margin-bottom:10px;" type="text" name="" value="" placeholder="Your Message" required>
                </textarea><br>
              <input style="margin-bottom:10px;" type="submit" name="" value="发送">
            </form>
          </div>
        </section>
        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">联系我们</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>地址</span></h2>
                  <p>1A Birmingham Road, East Tamaki, Aucklnad <br>
                      P.O.Box 258070. Botany 2163, Auckland
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>电话</span></h2>
                  <p>+64 022 657 2944 (手机) <br>
                  +64 (09)274 3344 (座机) <br>
                 </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <p><a href="mailto:toddzzq@hotmail.com">toddzzq@hotmail.com</a>
                 <br>  +64 (09)274 6677 (传真)</p>
                </div>
              </div>
            </div>
           
          </div>
        </section>
        
        
        <section>
            <div id="map" style="width:100%; height:400px;">
                
                
            </div>
            
            
        </section>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">龙腾装饰&copy;2014</a></li>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p>site by <em><a href="http://som2y.com">sOm2y</a></em></p>
              </div>
            </div>
          </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/modernizr.js"></script>
      
      </body>
    </html>