<?php
  include("header.php");
?>

<nav class="navbar navbar-expand-lg navbar-light light fixed-top main-nav c25" id="main-nav">
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


    <div class="ui container reg-div">
    <form class="ui form" action="registerlogic.php" method="post" style="width: 60%; margin: auto; margin-top: 50px;">

        <div class="field">
         <label>Institute</label>
         <select name="institute">
            <option value="">Institutes</option>
            <option value="ABV-IIITM, Gwalior">ABV-IIITM Gwalior</option>
            <option value="IIIT Allahabad">IIIT Allahabad</option>
            <option value="IIITDM Kancheepuram Chennai">IIITDM Kancheepuram, Chennai</option>
            <option value="IIITDM Jabalpur">IIITDM Jabalpur</option>
            <option value="IIITDM Kurnool Andhra Pradesh">IIITDM Kurnool, Andhra Pradesh</option>
            <option value="IIIT Chittoor">IIIT Chittoor</option>
            <option value="IIIT Guwahati">IIIT Guwahati</option>
            <option value="IIIT Kalyani">IIIT Kalyani</option>
            <option value="IIIT Una">IIIT Una</option>
            <option value="IIIT Vadodara">IIIT Vadodara</option>
            <option value="IIIT Kota">IIIT Kota</option>
            <option value="IIIT Tiruchirappalli">IIIT Tiruchirappalli</option>
            <option value="IIIT Sonepat">IIIT Sonepat</option>
            <option value="IIIT Manipur	">IIIT Manipur	</option>
            <option value="IIIT Lucknow">IIIT Lucknow</option>
            <option value="IIIT Kottayam, Kerala">IIIT Kottayam, Kerala</option>
            <option value="IIIT Dharward">IIIT Dharward</option>
            <option value="IIIT Pune">IIIT Pune</option>
            <option value="IIIT Bhopal">IIIT Bhopal</option>
            <option value="IIIT Agartala">IIIT Agartala</option>
            <option value="IIIT Nagpur">IIIT Nagpur</option>
            <option value="IIIT Ranchi">IIIT Ranchi</option>
            <option value="IIIT Surat">IIIT Surat</option>
            <option value="IIIT Bhagalpur">IIIT Bhagalpur</option>
        </select>
        </div>

        <div class="ui checkbox" style="padding-bottom: 10px;">
            <input type="checkbox" name="" id="other_institute">
            <label>My institute is not listed here.</label>
        </div>

        <div class="field hide" id="hide">
         <label>Institute</label>
         <input type="text" name="other_institute" placeholder="Institute">
        </div>

        <div class="field">
         <label>Name*</label>
         <input type="text" name="name" placeholder="Name" required>
        </div>

        <div class="field">
         <label>Designation</label>
         <input type="text" name="designation" placeholder="Designation">
        </div>

        <div class="field">
         <label>Academic Year</label>
         <input type="text" name="acad_year" placeholder="Academic Year">
        </div>

        <div class="field">
         <label>Email*</label>
         <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="field">
         <label>Phone*</label>
         <input type="number" name="phone" placeholder="Phone" required>
        </div>

        <div class="field">
         <label>Team Name / Captain Name / Contingent Leader*</label>
         <input type="text" name="team_name" placeholder="Team Name / Captain Name / Contingent Leader" required>
        </div>

        <div class="field">
         <label>Team Size*</label>
         <input type="text" name="team_size" placeholder="Team Size" required>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                <div class="grouped fields">
            <h3><label>Select events for boys*:</label></h3>
                <div class="field">
                    <div class="ui checked checkbox">
                        <input type="checkbox" id="event" name="athletics" value=1>
                        <label>Athletics</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="aquatics" value=1>
                        <label>Aquatics</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="cricket" value=1>
                        <label>Cricket</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="football" value=1>
                        <label>Football</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="volleyball" value=1>
                        <label>Volleyball</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="basketball" value=1>
                        <label>Basketball</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="badminton" value=1>
                        <label>Badminton</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="chess" value=1>
                        <label>Chess</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="carrom" value=1>
                        <label>Carrom</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="squash" value=1>
                        <label>Squash</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="table_tennis" value=1>
                        <label>Table Tennis</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="lawn_tennis" value=1>
                        <label>Lawn Tennis</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="snooker" value=1>
                        <label>Snooker</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="power_lifting" value=1>
                        <label>Power Lifting</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="pubg" value=1>
                        <label>PUBG</label>
                    </div>
                </div>

        </div> 
    </div>
            <div class="col-md-6 col-sm-12">
                <div class="grouped fields">
            <h3><label>Select events for girls*:</label></h3>
                <div class="field">
                    <div class="ui checked checkbox">
                        <input type="checkbox" id="event" name="athletics_girls" value=1>
                        <label>Athletics</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="aquatics_girls" value=1>
                        <label>Aquatics</label>
                    </div>
                </div>
                <!-- <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="cricket" value=1>
                        <label>Cricket</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="football" value=1>
                        <label>Football</label>
                    </div>
                </div> -->
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="volleyball_girls" value=1>
                        <label>Volleyball</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="basketball_girls" value=1>
                        <label>Basketball</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="badminton_girls" value=1>
                        <label>Badminton</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="chess_girls" value=1>
                        <label>Chess</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="carrom_girls" value=1>
                        <label>Carrom</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="squash_girls" value=1>
                        <label>Squash</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="table_tennis_girls" value=1>
                        <label>Table Tennis</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="lawn_tennis_girls" value=1>
                        <label>Lawn Tennis</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="snooker_girls" value=1>
                        <label>Snooker</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="power_lifting_girls" value=1>
                        <label>Power Lifting</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="event" name="pubg_girls" value=1>
                        <label>PUBG</label>
                    </div>
                </div>

        </div>
                </div>
            </div>
        </div>

      <button class="ui button" id="submit" type="submit" name="submit" value="Add" style="width:100%;">Submit</button>

     </form>
   </div>

   <?php
  include("footer.php");
?>
