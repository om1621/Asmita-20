<?php
  include("header.php");
?>
  <nav class="navbar navbar-expand-lg navbar-light light fixed-top main-nav c25" id="mainNav">
    <div class="container-fluid" style="padding-right:0; padding-left:0%;">
      <!-- <a class="navbar-brand js-scroll-trigger navbar-title" href="#"><img src="images/Text-Logo.png" class="navbar-img"></a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
      aria-expanded="false" aria-label="Toggle navigation" style="padding: 5px 5px; margin: 0px 0px; border: none;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto navbar-list">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="events.php">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="sponsor.php">SPONSORS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="team.php">TEAM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="register.php">REGISTER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact">CONTACT</a>
        </li>
        
                      <!-- <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="projects.html">Projects</a>
                      </li> -->
                    </ul>
                  </div>
                </div>
              </nav>

    <div class="site-blocks-cover inner-page overlay" style="background-image: url(images/events.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center"> 
            <div class="slide-1">
            <h1 class="mb-5">Events</h1>
            </div>
            <!-- position relative, left 50% transform: translateX(-50%) -->
            <div class="slide-2">
            <p id="special-p1"><a href="docs/EventBrochure.pdf" target="_blank" id="special-button" class="btn btn-primary pill text-white px-4">Events Brochure</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>  

<div id="event-wrapper">
    <div class="border-bottom">
      <div class="row no-gutters">
        <div class="col-md-6 col-lg-3 toggle1" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 bg-light">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/swimming-pool.svg" alt="">
            </span>
            <h2>Aquatics</h2>
            <p>"The man who is swimming against the stream knows the strength of it." <br> ~ <em>Woodrow Wilson</em></p>
            <div id="target1">
                <p><strong>Boys and Girls event</strong></p>
                <ul style="padding-left: 1rem;">
                  <li>Racing events
                    <ul>
                      <li>Backstroke</li>
                      <li>Butterfly</li>
                      <li>Freestyle</li>
                      <li>Breaststroke</li>
                    </ul>
                  </li>
                  <li>Relay
                    <ul>
                      <li>Medley</li>
                      <li>Freestyle</li>
                    </ul>

                  </li>
                </ul>

                <p class="schedule" style="text-align: center; font-weight: 700;"><a href="Fixtures/Aquatics.pdf" style="color: black; text-decoration: underline">Schedule</a></p>
               
            </div>
           
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 toggle2">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/running.svg" alt="">
            </span>
            <h2>Track Athletics</h2>
            <p>"Don’t think about the start of the race, think about the ending." <br> ~ <em>Usain Bolt</em></p>
            <div id="target2">
                <p><strong>Boys and Girls event</strong></p>
                <ul style="padding-left: 1rem;">
                  <li>Racing events
                    <ul>
                      <li>100 meters</li>
                      <li>200 meters</li>
                      <li>300 meters</li>
                      <li>400 meters</li>
                      <li>800 meters</li>
                      <li>1500 meters</li>
                      <li>3000 meters</li>
                    </ul>
                  </li>
                  <li>Hurdles
                    <ul>
                      <li>110 meters</li>
                    </ul>
                  </li>
                  <li>Relay
                    <ul>
                      <li>4 x 100 meters</li>
                      <li>4 x 400 meters</li>
                    </ul>
                  </li>
                  <li>Mixed Relay (2 Boys, 2 Girls)
                    <ul>
                      <li>4 x 100 meters</li>
                    </ul>
                  </li>
                </ul>
                <p class="schedule" style="text-align: center; font-weight: 700;"><a href="https://docs.google.com/spreadsheets/d/1cYtTwTkxcyUOqe3Oy7me3Rl4cS4jLvCdSQugaZKXomo/edit?usp=sharing" style="color: black; text-decoration: underline">Schedule</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 bg-light toggle3">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/javelin.svg" alt="">
            </span>
            
            <h2>Field Athletics</h2>
            <p>“Those who don't jump will never fly.”  <br> ~ <em>Leena Ahmad Almashat</em></p>
            <div id="target3">
                <p><strong>Boys and Girls event</strong></p>
                <ul style="padding-left: 1rem;">
                  <li>High Jump</li>
                  <li>Long Jump</li>
                  <li>Triple Jump</li>
                  <li>Shotput</li>
                  <li>Javelin Throw</li>
                  <li>Discus Throw</li>
                </ul>
                <p class="schedule" style="text-align: center; font-weight: 700;"><a href="https://docs.google.com/spreadsheets/d/1cYtTwTkxcyUOqe3Oy7me3Rl4cS4jLvCdSQugaZKXomo/edit?usp=sharing" style="color: black; text-decoration: underline">Schedule</a></p>
            </div>            
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 toggle4">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/cricket.svg" alt="">
            </span>
            <h2>Cricket</h2>
            <p>“Leadership is the capacity to translate vision into reality.”  <br> ~ <em>Mahendra Singh Dhoni</em></p>
            <div id="target4">
            <p><strong>Boys team event</strong></p>
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="Fixtures/cricket.pdf" style="color: black; text-decoration: underline">Schedule</a></p>
            </div>
            
          </div>
        </div>


      </div>
    </div> <!-- .block-feature -->

    <div class="border-bottom">
      <div class="row no-gutters">
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 bg-light toggle5">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/football.svg" alt="">
            </span>
            <h2>Football</h2>
            <p>“Some people think football is a matter of life and death. I don’t like that attitude. I can assure them it is much more serious than that.”  <br> ~ <em>Bill Shankly</em></p>
            <div id="target5">
            <p><strong>Boys team event</strong></p>
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="Fixtures/football.pdf" style="color: black; text-decoration: underline">Schedule</a></p>
      
            </div>
                </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 toggle6">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/volleyball.svg" alt="">
            </span>
            <h2>Volleyball</h2>
            <p>“Before my eyes, it blocks my path. A high, high wall. What sort of scene is on the other side? What will I be able to see there? “The view from the top”. A scenery I will never be able to see on my own. But if I’m not alone, then… I might be able to see it.”  <br> ~ <em>Shoyo Hinata</em></p>
            <div id="target6">
            <p><strong>Boys and Girls team event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="Fixtures/Volleyball.pdf" style="color: black; text-decoration: underline">Schedule</a></p>       
            </div>
              
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 bg-light toggle7">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/basketball.svg" alt="">
            </span>
            
            <h2>Basketball</h2>
            <p>“No matter how good one individual is, it takes a whole team to win a championship.” <br> ~ <em>LeBron Raymone James Sr.</em></p>
            <div id="target7">
            <p ><strong>Boys and Girls team event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="Fixtures/Basketball.pdf" style="color: black; text-decoration: underline">Schedule</a></p></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 toggle8">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/badminton.svg" alt="">
            </span>
            <h2>Badminton</h2>
            <p>“You can't let the highs make you feel overconfident nor can you let the lows be a reason to dampen your soul.” <br> ~ <em>Saina Nehwal</em></p>
            <div id="target8">
            <p><strong>Boys and Girls team event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="Fixtures/Badminton.pdf" style="color: black; text-decoration: underline">Schedule</a></p></div>
          </div>
        </div>

        
      </div>
    </div>


    <div class="border-bottom">
      <div class="row no-gutters">
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 bg-light toggle9">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/chess.svg" alt="">
            </span>
            <h2>Chess</h2>
            <p>“Chess is the gymnasium of the mind.” <br> ~ <em>Blaise Pascal</em></p>
            <div id="target9">
            <p><strong>Boys and Girls, team and individual event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="Fixtures/chess.pdf" style="color: black; text-decoration: underline">Schedule</a></p></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 toggle10">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/ping-pong.svg" alt="">
            </span>
            <h2>Table Tennis</h2>
            <p>"Every ball counts!" <br> ~ <em>Sir Matt</em> </p>
            <div id="target10">
            <p><strong>Boys and Girls, team and individual event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="Fixtures/TT.pdf" style="color: black; text-decoration: underline">Schedule</a></p></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 bg-light toggle20">
            <span class="d-block mb-3">
              <img class="event-svg" src="images/futsal.png" alt="">
            </span>
            <h2>Futsal</h2>
            <p>"Come one , come all. Let's master the art of football"</p>
            <div id="target20">
            <p><strong>Informal event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="https://docs.google.com/spreadsheets/d/1cYtTwTkxcyUOqe3Oy7me3Rl4cS4jLvCdSQugaZKXomo/edit?usp=sharing" style="color: black; text-decoration: underline">Schedule</a></p></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 toggle12">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/lacrosse-1.svg" alt="">
            </span>
            <h2>Squash</h2>
            <p>"If you can't beat them, SQUASH them!" <br> ~ <em>Anonymous</em></p>
            <div id="target12">
            <p><strong>Boys and Girls team event</strong></p>
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="https://docs.google.com/spreadsheets/d/1cYtTwTkxcyUOqe3Oy7me3Rl4cS4jLvCdSQugaZKXomo/edit?usp=sharing" style="color: black; text-decoration: underline">Schedule</a></p> 
        </div>  
            </div>
        </div>

        
      </div>
    </div> 
    
    <div class="border-bottom">
      <div class="row no-gutters">
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 bg-light toggle13">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/pool.svg" alt="">
            </span>
            <h2>Snooker</h2>
            <p>"Snooker is just chess with balls." <br> ~ <em>Clive James</em></p>
           <div id="target13">
           <p><strong>Boys and Girls individual event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="https://docs.google.com/spreadsheets/d/1cYtTwTkxcyUOqe3Oy7me3Rl4cS4jLvCdSQugaZKXomo/edit?usp=sharing" style="color: black; text-decoration: underline">Schedule</a></p></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 toggle14">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/weightlifting.svg" alt="">
            </span>
            <h2>Power Lifting</h2>
            <p>"Chalk your hands, grab the bar and lift it." <br> ~ <em>Brooks Kubik</em></p>
            <div id="target14">
                <p><strong>Boys and Girls individual event</strong></p>
                <ul style="padding-left: 1rem;">
                  <li>Deadlift</li>
                  <li>Benchpress</li>
                  <li>Squats</li>
                </ul>
                <p class="schedule" style="text-align: center; font-weight: 700;"><a href="https://docs.google.com/spreadsheets/d/1cYtTwTkxcyUOqe3Oy7me3Rl4cS4jLvCdSQugaZKXomo/edit?usp=sharing" style="color: black; text-decoration: underline">Schedule</a></p>
            </div>            
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 bg-light toggle15">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/carrom.svg" alt="">
            </span>
            
            <h2>Carrom</h2>
            <p>"Play your life like a carrom, just simply aim and fire." <br> ~ <em>Kartik Somu</em></p>
            <div id="target15">
            <p><strong>Boys and Girls individual event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="Fixtures/Carrom14.pdf" style="color: black; text-decoration: underline">Schedule</a></p></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 toggle16">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/bullet.svg" alt="">
            </span>
            <h2>PUBG</h2>
            <p>"Winner winner, chicken dinner!" <br> ~ <em>Anonymous</em></p>
            <div id="target16">
            <p><strong>Informal event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="https://docs.google.com/spreadsheets/d/1cYtTwTkxcyUOqe3Oy7me3Rl4cS4jLvCdSQugaZKXomo/edit?usp=sharing" style="color: black; text-decoration: underline">Schedule</a></p></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 bg-light toggle17">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/kabbadi.svg" alt="">
            </span>
            <h2>Kabbadi</h2>
            <p>"Rules of life are same as that game of kabbadi , the moment you touch your success line people will start pulling your leg" <br> ~ <em>Anonymous</em></p>
            <div id="target17">
            <p><strong>Informal event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="https://docs.google.com/spreadsheets/d/1cYtTwTkxcyUOqe3Oy7me3Rl4cS4jLvCdSQugaZKXomo/edit?usp=sharing" style="color: black; text-decoration: underline">Schedule</a></p></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 toggle18">
            <span class="d-block mb-3">
              <img class="event-svg" src="svg/gully.svg" alt="">
            </span>
            <h2>Gully Cricket</h2>
            <p>"Bhai bat mera hain, to pahle meri batting hogi" <br> ~ <em>Anonymous</em></p>
            <div id="target18">
            <p><strong>Informal event</strong></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up">
          <div class="w-100 h-100 block-feature p-5 bg-light toggle19">
            <span class="d-block mb-3">
              <img class="event-svg" src="images/kho-kho.png" alt="">
            </span>
            <h2>Kho-Kho</h2>
            <p>"Making teams a day before the games period, defending and chasing on that sunny afternoon, <br> Nostalgic?? <br> its time the same kho kho- the tag game of traditional india comes to test teamwork and speech of mind and body" <br> ~ <em>Anonymous</em></p>
            <div id="target19">
            <p><strong>Informal event</strong></p> 
            <p class="schedule" style="text-align: center; font-weight: 700;"><a href="Fixtures/Kho.pdf" style="color: black; text-decoration: underline">Schedule</a></p></div>
          </div>
        </div>
        

        
      </div>
    </div> 
    
</div>    
    
<?php
  include("footer.php");
?>
