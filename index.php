<?php
// include("user_tracking.php") ;
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>

</head>



<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Nav -->
       <nav id="nav" class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="100"> 
        <div class="container">  
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarNav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a class="navbar-brand navlink" href="#index"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul id="ul-nav" class="nav navbar-nav navbar-right">
                <li><a class="navlink" href="#about"><span>ABOUT ME</span></a></li>
                <li><a class="navlink" href="#skill"><span>SKILL</span></a></li>
                <li><a class="navlink" href="#background"><span>BACKGROUND</span></a></li>
                <li><a class="navlink" href="#portfolio"><span>PORTFOLIO</span></a></li>
                <li><a class="navlink" href="#contact"><span>CONTACT</span></a></li>
              </ul>
            </div>
        </div> 
      </nav>




  <header id="index" class="v-header container">
    <div class="fullscreen-video-wrap">
  <!--     <video src="asset/bgvideo.mp4" autoplay loop muted>
    </video> -->
    <img src="asset/home1.jpg">
    </div>
     <div class="header-overlay"></div>
          <div class="header-content wow fadeInUp">
               <h1>Hey,I'm Phatcharapol</h1>
                <h3>Web Developer</h3> 
          <a href="cv/resume.pdf" download><button type="button" class="btn">DOWNLOAD RESUME-CV</button></a>
          </div>
          <div class="header-bottom wow fadeInUp">
              <a class="navlink" href="#about"><img class="arrow-down"src="asset/arrow-down.gif" alt=""></a>
          </div>

      
  </header>



<section id="about">
     <div class="container about">
        <h2>ABOUT ME</h2>
         <br>
          <div class="col-md-7 wow fadeInLeft delay-05s" style="text-align: left">
            <p>My name is Bernard Shelly. I am 32 years old. Lorem ipsum dolor sit amet, consectetur ascing elits, sed do eiusmod tempor incidunt ut labore et dolore mafgna aliqua. Ut enim ad mini vniam quis nerci, tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autes irure dolor in reprehenderit in etrs voluptate velit esse cillum dolore eu fugiat nulla pariatur. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
          </div>
          <div class="col-md-5 wow fadeInRight delay-05s">                         
                  <img class="img-responsive" src="asset/about.jpg" alt="">                                                         
          </div>
    </div>        
    
</section>

<section id="social-profile" style="padding: 3em 0px 3em;align-items: center;">
     <div class="container social-profile">        
          <div class="col-md-8 col-sm-7">
              <a id="link" target="_blank" href="https://www.facebook.com/phatcharapol.nut/"><img class="social-img" src="asset/fb.png"></a>
             <a id="link" target="_blank" href="https://www.instagram.com/nnnnut.pt/"><img class="social-img" src="asset/ig.png"></a>
             <a id="link" target="_blank" href="https://www.facebook.com/phatcharapol.nut/"><img class="social-img" src="asset/twitter.png"> </a> 
             <a id="link" target="_blank" href="https://github.com/phatcharapol"><img class="social-img" src="asset/github.png"></a>
             <a id="link" target="_blank" href="http://line.me/ti/p/~nuttsna"><img class="social-img" src="asset/line.png"></a>
         </div>
         <div class="col-md-4 col-sm-5">
          <p style="font-size:3em;text-align:right;line-height: 1.5em">My Social Profiles</p>
          </div>
    </div>
</section>


<section id="skill">
     <div class="container skill">
        <h2>MY SKILL</h2>
        <br>
           <div class="col-md-6 col-xs-12">
                   <div class="skill_text">
                                <h4>Web Development Skill</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text.</p>
                   </div>
                    <div class="skill_item_inner">
                                <div class="single_skill">
                                    <h4>Wordpress</h4>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft delay-05s" role="progressbar" style="width: 50%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">50</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>PHP(Laravel) & MySQL</h4>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft delay-05s" role="progressbar" style="width: 80%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">75</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>HTML5 & CSS3 & Boostrap</h4>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft delay-05s" role="progressbar" style="width: 80%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">75</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>JavaScript & jQuery</h4>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft delay-05s" role="progressbar" style="width: 70%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">95</span>%</div>
                                        </div>
                                    </div>
                                </div>
                      </div>
             
            </div>
            <div class="col-md-6 col-xs-12">
                    <div class="skill_text">
                                <h4>Back-End Skill</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text.</p>
                   </div>
                    <div class="skill_item_inner">
                                <div class="single_skill">
                                    <h4>Wordpress</h4>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft delay-05s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">85</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>Php & MySQL</h4>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft delay-05s" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">65</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>Html & Css</h4>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft delay-05s" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">75</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h4>JavaScript</h4>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft delay-05s" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress_parcent"><span class="counter">95</span>%</div>
                                        </div>
                                    </div>
                                </div>
                      </div>                      
                                                                      
            </div>
      </div>
</section>

<section id="background">
     <div class="container background">
        <h2>EDUCATION</h2>
        <br>
        <div class="education-box wow fadeInRight delay-05s">
            <p>2013-2017 </p>
            <p>Bachelor of Science Program in Computer Science (B.Sc.Computer Science)</p>
            <p>King Mongkut's University of Technology North Bangkok</p>
        </div>
        <div class="education-box  wow fadeInLeft delay-05s">
            <p>2010-2013 </p>
            <p>High School Science-Mathematics</p>
            <p>Satriwittaya 2</p>
        </div>
     
        <h2>WORK EXPERIENCE</h2>
        <br>
        <div class="education-box wow fadeInRight delay-05s">
            <p>2017-Present </p>
            <p>Web Developer[Back-End]</p>
            <p>IT Element Co.,Ltd</p>
        </div>
    
       
        
      </div>
</section>


<section id="portfolio">
     <div class="container portfolio">
        <h2>My PORTFOLIO</h2>
        <br><br>
                      <div class="portfolio-col wow fadeIn delay-05s">

                          <div class="item-portfolio">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                              <a id="link" target="_blank" href="https://www.facebook.com/phatcharapol.nut/">
                                <img class="img-fluid img-thumbnail" src="asset/tpmlp.jpg" alt=""> 
                                <div class="overlay">
                                    <div class="text-overlay"><p>Visit Site</p></div>
                                </div>  
                                </a>                                      
                            </div>
                          </div>

                          <div class="item-portfolio">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                               <a id="link" target="_blank" href="https://www.facebook.com/phatcharapol.nut/">
                                <img class="img-fluid img-thumbnail" src="asset/tpmlp.jpg" alt="">
                                 <div class="overlay">
                                    <div class="text-overlay"><p>Visit Site</p></div>
                                </div> 
                                </a>                                            
                            </div>
                          </div>

                          <div class="item-portfolio">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                               <a id="link" target="_blank" href="https://www.facebook.com/phatcharapol.nut/">
                                <img class="img-fluid img-thumbnail" src="asset/tpmlp.jpg" alt=""> 
                                <div class="overlay">
                                    <div class="text-overlay"><p>Visit Site</p></div>
                                </div> 
                                </a>                                         
                            </div>
                          </div>
                   
                     </div>
      </div>
</section>




   <!-- Section Contact US -->
   <section id="contact">
        <div class="container contact">
          <h2>CONTACT US</h2>
              <div class="contact-info col-md-6 wow fadeIn delay-05s">
                <h3>Contact Info </h3>
                     <iframe id="map" frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/place?q=%E0%B8%AB%E0%B8%88%E0%B8%81.%20%E0%B8%97%E0%B8%AD%E0%B8%87%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%B5%E0%B8%9B%20%E0%B9%81%E0%B8%A1%E0%B8%8A%E0%B8%8A%E0%B8%B5%E0%B8%99%E0%B9%80%E0%B8%99%E0%B8%AD%E0%B8%A3%E0%B8%B5%E0%B9%88%20Phahon%20Yothin%2048%20Alley%2C%20Lane%2060%2C%20Tha%20Raeng%2C%20Bang%20Khen%2C%20Bangkok&key=AIzaSyAiOaOaOqtypn-v_8FVNIoh2fFsUNYJ4_4" allowfullscreen></iframe>
                    <div class="location">
                        <div class="location1 col-md-2 col-sm-2 col-xs-3">
                            <span><i class="fas fa-map-marker-alt fa-lg"></i></span>
                        </div>
                        <div class="location2 col-md-10 col-sm-10 col-xs-9">
                            <p class="header-locate">ADDRESS</p>
                            <p>43 Soi Paholyothin 48 Tharang Bangkhen Bangkok 10220</p> 
                        </div> 
                   
                        <div class="location1 col-md-2 col-sm-2 col-xs-3"> 
                           <span><i class="fas fa-mobile-alt fa-lg"></i></span>
                        </div>
                       <div class="location2 col-md-10 col-sm-10 col-xs-9">
                           <p class="header-locate">CALL ME</p>
                           <p>089-407-7868</p>
                       </div>
              
                       <div class="location1 col-md-2 col-sm-2 col-xs-3"> 
                           <span><i class="fas fa-envelope fa-lg"></i></span>
                       </div>
                       <div class="location2 col-md-10 col-sm-10 col-xs-9">
                           <p class="header-locate">EMAIL</p>
                           <p>nuttt.x3@gmail.com</p> 
                       </div>             
                    </div>   
            </div>
            
            <div class="contact-form col-md-6 wow fadeIn delay-05s" >
                <h3>Send Messages </h3>
                  
                    <form id="contactForm">
                   
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>

                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" required>
                      </div>

                      <div class="form-group">
                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Phone" required>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                      </div>

                      <div class="form-group">
                          <textarea class="form-control" type="textarea" id="messages" name="messages" placeholder="Messages" maxlength="500" rows="5"></textarea>                         
                      </div>
                      <div align="center">
                      <div class="g-recaptcha" data-sitekey="6LdX-m0UAAAAAJ_8P99WgXfSYuZKIv7G-wn8jyQv" ></div>
                      </div>

                        <br>
                    <center><button type="submit" name="submit" class="btn">Send Messages</button></center>

                    </form>
                     <!--  <span class="help-block"><p id="characterLeft" class="help-block ">***I'll get back soon !!</p></span>  -->
                      <div id="msgerr"></div>       
            </div>
          
        </div>
   </section>


   <!-- Footer -->
<footer class="page-footer">

 
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
          
            <div class="text-footer">
                <p>PHATCHARAPOL-CV ©2018 All rights reserved | Powered by<a href="https://www.facebook.com/phatcharapol.nut"> PHATCHARAPOL T.</a></p>
            </div>
       
          </div>
        </div>
      </div>

 
</footer>
<!-- Footer -->


<script type="text/javascript">



  $("#contactForm").submit(function(event){

    event.preventDefault(); 
    form = $(this);
     $.ajax({
        type: "POST",
        url: "process_mail.php",
        data: form.serialize(),
        success : function(text){
                  if(text === 'Success'){ 
                       swal({
                              type: 'success',
                              title: 'Successful',
                              text: 'I\'ve received a message from you. I will reply to your email as soon as possible.'
                            }) ;
                 }else{
                      swal({
                            type: 'error',
                            title: 'Error',
                            text: text
                          });
                 }
  
        }
      });
    });
    $(document).ajaxStart(function(){
        swal({
          title: 'Sending Data...',
        }) ;
         swal.showLoading() ;
    });
    $(document).ajaxComplete(function(){
        $(".swal2").css("display", "none");
    });
</script>




</body>

</html>