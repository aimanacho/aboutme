<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href= "styleindex.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/circle.css">
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
<div class="container-fluid">
  <div class="row">
    <nav>
      <ul class="nav flex-column" id ="myScrollspy">
        <li class="nav-item">
          <a class="nav-link active" href="#section1">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section4">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section41" style="padding-left:42px;">Memories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section42" style="padding-left:42px;">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section5">Family</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section6">Friends</a>
        </li>
      </ul>
    </nav>
    <div class="right" style="float:right;width:100%;margin-left:15%;">
      <div id="section1">
        <div class="container py-5">
          <div class="output" id="output">
            <h1 class="cursor"></h1>
            <p></p>
          </div>
        </div>
      </div>
      <div id="section2" >
          <div class="main">
            <img class ="imageaiman" src="images/aiman.jpg">
            <div class="aboutme">
              <p style="color:blue;margin-left:20px;"><b>About Me</b></p>
              <p style="font-size:14px;color:grey;margin-left:20px;"> TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST</p>
              <table class="table table-borderless" style="margin-left:20px;">
                <tbody>
                  <tr>
                    <td><b>Name:</b></td>
                    <td style="color:grey;">Aiman Naim Bin Mohd Said</td>
                  </tr>
                  <tr>
                    <td><b>Date of birth:</b></td>
                    <td style="color:grey;">12 January 2000</td>
                  </tr>
                  <tr>
                    <td><b>Address:</b></td>
                    <td style="color:grey;">Wangsa Maju, Seksyen 5</td>
                  </tr>
                  <tr>
                    <td><b>Zip Code:</b></td>
                    <td style="color:grey;">53300</td>
                  </tr>
                  <tr>
                    <td><b>Email:</b></td>
                    <td style="color:grey;">aimanacho@hotmail.com</td>
                  </tr>
                  <tr>
                    <td><b>Phone:</b></td>
                    <td style="color:grey;">017-3621718</td>
                  </tr>
                </tbody>
              </table>
            <p style="color:blue;font-size:16px;margin-left:20px;"><b>5<span style="color:black;"> Mini Project completed </span></b></p>
            <form action="images/Resume.pdf" target="_blank">
              <input type="submit"  style= "margin-left:20px;"class="btn btn-primary" value="VIEW CV" </input>
            </form>
          </div>
        </div> <br><br>
        <div class="row">
          <div class="col-sm-3">
              <img class ="imageaiman" src="images/softwareq.png" style="width:230px;">
          </div>
          <div class="col-sm-3">
              <img class ="imageaiman" src="images/stagnotech.jpg" style="width:110px;height:100px;margin-top:25%;margin-left:60%;">
          </div>
          <div class="col-sm-3">
              <img class ="imageaiman" src="images/arsenal.png" style="width:180px;height:130px;margin-top:19%; margin-left:60%;">
          </div>
      </div>
      </div>
      <div id="section3" class="">
        <p style="font-size:35px;color:blue;"><b>Education</b></p>
      <span class="glyphicon glyphicon-globe"></span></p>
      <div style="border-bottom:0.5px solid black; width:95%;">
        <span style="color:blue;"><b>2004 - 2006</b></span> <br>
        <span><b>St. Ronan Kindergarten</b></span>
        <p><b>Age 4 - 6</b></p>
        <p style="color:grey;">I can't remember a single memory during these years except there's a swimming pool where everybody have to be semi-naked in order to swim...</p>
      </div>
      <div style="border-bottom:0.5px solid black; width:95%; padding-top:3%;">
        <span style="color:blue;"><b>2007 - 2012</b></span> <br>
        <span><b>SK Wangsa Jaya</b></span>
        <p><b>Age 7 - 12</b></p>
        <p style="color:grey;">As an intern at SoftwareQ, i've gained a lot of knowledge and experience. It was a memorable cause there's a lot of fun and friendly people there. </p>
      </div>
      <div style="border-bottom:0.5px solid black; width:95%; padding-top:3%;">
        <span style="color:blue;"><b>2013 - 2017</b></span> <br>
        <span><b>SMK Seksyen 5</b></span>
        <p><b>Age 13-17</b></p>
        <p style="color:grey;">As an intern at SoftwareQ, i've gained a lot of knowledge and experience. It was a memorable cause there's a lot of fun and friendly people there. </p>
      </div>
      <div style="border-bottom:0.5px solid black; width:95%; padding-top:3%;">
        <span style="color:blue;"><b>2018 - Current</b></span> <br>
        <span><b>Universiti Teknologi MARA Campus Raub</b></span>
        <p><b>Age 18 - Current (20)</b></p>
        <p style="color:grey;">As an intern at SoftwareQ, i've gained a lot of knowledge and experience. It was a memorable cause there's a lot of fun and friendly people there. </p>
      </div>
      </div>
      <div id="section4">
        <p style="font-size:35px;color:blue;"><b>Experience</b></p>
        <span class="glyphicon glyphicon-globe"></span></p>
        <div style="border-bottom:0.5px solid grey;width:95%">
          <span style="color:blue;"><b>2018</b></span> <br>
          <span><b>Technician Assistant</b></span>
          <p><b>Stagnotech Sdn. Bhd.</b></p>
          <p style="color:grey;">I've worked here as a full-time worker. I've had a lot of experience and fun with happy enviroment and funny people.</p>
        </div>
        <div style="border-bottom:0.5px solid grey;padding-top:3%;width:95%">
          <span style="color:blue;"><b>2020</b></span> <br>
          <span><b>Back-End Developer Internship</b></span>
          <p><b>SoftwareQ</b></p>
          <p style="color:grey;">As an intern at SoftwareQ, i've gained a lot of knowledge and experience. It was a memorable cause there's a lot of fun and friendly people there. </p>
        </div><br><br>
      </div>
      <div id="section41">
        <p style="font-size:30px;color:green;"><b>Memories</b></p>
        <div class="gallery" id="gallery" >
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sq.png">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sq1.png">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sq2.png">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sq3.png">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sq4.png">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sq5.png">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sq9.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sq10.png">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sq11.png">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sq12.png">
          </div>

          <!-- petrosains -->
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/pet.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/pet2.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/pet3.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/pet4.jpeg">
          </div>
        </div>
      </div>
      <div id="section42">
        <p style="color:green;font-size:30px;"><b>Skills</b></p>
        <div class="row">
          <div class="col-sm-3">
            <table class="table table-bordered" style="box-shadow: 0 0.1px 10px 0 rgba(0, 0, 0, 0.050), 0 2px 10px 0 rgba(0, 0, 0, 0.02);">
              <thead>
                <tr>
                  <th>
                    <p>C++</p>
                    <div class="c100 p83">
                      <span style="color:black;"><b>83%</b></span>
                      <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                      </div>
                    </div>
                  </th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="col-sm-3">
            <table class="table table-bordered" style="box-shadow: 0 0.1px 10px 0 rgba(0, 0, 0, 0.050), 0 2px 10px 0 rgba(0, 0, 0, 0.02);">
              <thead>
                <tr>
                  <th>
                    <p>Java</p>
                    <div class="c100 p87">
                      <span style="color:black;"><b>87%</b></span>
                      <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                      </div>
                    </div>
                  </th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="col-sm-3">
            <table class="table table-bordered" style="box-shadow: 0 0.1px 10px 0 rgba(0, 0, 0, 0.050), 0 2px 10px 0 rgba(0, 0, 0, 0.02);">
              <thead>
                <tr>
                  <th>
                    <p>PHP</p>
                    <div class="c100 p78">
                      <span style="color:black;"><b>78%</b></span>
                      <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                      </div>
                    </div>
                  </th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="col-sm-3">
            <table class="table table-bordered" style="box-shadow: 0 0.1px 10px 0 rgba(0, 0, 0, 0.050), 0 2px 10px 0 rgba(0, 0, 0, 0.02);">
              <thead>
                <tr>
                  <th>
                    <p>Java</p>
                    <div class="c100 p87">
                      <span style="color:black;"><b>87%</b></span>
                      <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                      </div>
                    </div>
                  </th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">
            <p><b>HTML</b> <span style="float:right;"> <b>65%</b> </span></p>
            <div class="progress" style="height:12px;">
              <div class="progress-bar" style="width:65%"></div>
            </div>
          </div>
          <div class="col-sm-5" style="margin-left:10%;">
            <p><b>C</b><span style="float:right;"> <b>72%</b> </span></p>
            <div class="progress" style="height:12px;">
              <div class="progress-bar" style="width:72%"></div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top:2%;">
          <div class="col-sm-5">
            <p><b>Bootstrap 4</b><span style="float:right;"> <b>61%</b> </span></p>
            <div class="progress" style="height:12px;">
              <div class="progress-bar" style="width:61%"></div>
            </div>
          </div>
          <div class="col-sm-5" style="margin-left:10%;">
            <p><b>JavaScript</b><span style="float:right;"> <b>57%</b> </span></p>
            <div class="progress" style="height:12px;">
              <div class="progress-bar" style="width:57%"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="section5" style="width:95%;">
        <p style="color:blue;font-size:30px;"><b>Family</b></p>
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
            <li data-target="#demo" data-slide-to="6"></li>
            <li data-target="#demo" data-slide-to="7"></li>
            <li data-target="#demo" data-slide-to="8"></li>
            <li data-target="#demo" data-slide-to="9"></li>
            <li data-target="#demo" data-slide-to="10"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/sib1.jpg">
              <div class="carousel-caption">
                <h3><b>Mohd Said Bin Maarof</b></h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/sib2.jpg">
              <div class="carousel-caption" >
                <h3><b>Noraliza Binti Abidin</b></h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/sib3.jpg">
              <div class="carousel-caption" >
                <h3><b>Siti Nadirah</b></h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/sib9.jpg">
              <div class="carousel-caption" >
                <h3><b>Muhammad Akmal Hakimi Bin Rahim</b></h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/sib4.jpg">
              <div class="carousel-caption" >
                <h3><b>Siti Syazana</b></h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/sib10.jpg">
              <div class="carousel-caption" >
                <h3><b>Nik Saufi Bin Nik Murad</b></h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/sib7.jpg">
              <div class="carousel-caption" >
                <h3><b>Muhamad Asyraf</b></h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/sib5.jpg">
              <div class="carousel-caption" >
                <h3><b>Sarah Qistina</b></h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/sib6.jpg">
              <div class="carousel-caption" >
                <h3><b>Muhammad Afiq Aminuddin</b></h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/sib8.jpg">
              <div class="carousel-caption" >
                <h3><b>Aiman Naim</b></h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/sib11.jpg">
              <div class="carousel-caption" >
                <h3><b>Khaira Humaira Binti Muhammad Akmal Hakimi</b></h3>
              </div>
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div><br>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Age</th>
              <th>Status</th>
              <th>Relationship</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mohd Said Maarof</td>
              <td>61</td>
              <td>Businessman</td>
              <td>Dad</td>
            </tr>
            <tr>
              <td>Noraliza Binti Abidin</td>
              <td>57</td>
              <td>Teacher</td>
              <td>Momma</td>
            </tr>
            <tr>
              <td>Siti Nadirah</td>
              <td>32</td>
              <td>Dentist</td>
              <td>Eldest sister</td>
            </tr>
            <tr>
              <td>Muhammad Akmal Hakimi Bin Rahim</td>
              <td>32</td>
              <td>Director</td>
              <td>Brother-in-law</td>
            </tr>
            <tr>
              <td>Siti Syazana</td>
              <td>31</td>
              <td>Accountant</td>
              <td>Second eldest sister</td>
            </tr>
            <tr>
              <td>Nik Saufi Bin Nik Murad</td>
              <td>31</td>
              <td>Accountant</td>
              <td>Brother-in-law</td>
            </tr>
            <tr>
              <td>Muhamad Asyraf</td>
              <td>25</td>
              <td>Manager</td>
              <td>Eldest brother</td>
            </tr>
            <tr>
              <td>Sarah Qistina</td>
              <td>24</td>
              <td>Student</td>
              <td>Youngest sister</td>
            </tr>
            <tr>
              <td>Muhammad Afiq Aminuddin</td>
              <td>22</td>
              <td>Student</td>
              <td>Second eldest brother</td>
            </tr>
            <tr>
              <td>Aiman Naim</td>
              <td>20</td>
              <td>Student</td>
              <td>Youngest brother</td>
            </tr>
            <tr>
              <td>Khaira Humaira Binti Muhammad Akmal Hakimi</td>
              <td>3</td>
              <td>None</td>
              <td>Niece</td>
            </tr>
          </tbody>
        </table>
        </div>
      <div id="section6">
        <p style="color:blue;font-size:30px;"><b>Friends</b></p>
        <div class="row">
          <div class="col-md-12 d-flex mb-5">
            <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
            <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">School</button>
            <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">University</button>
          </div>
        </div>
        <div class="gallery" id="gallery" >
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch1.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch2.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch3.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch4.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch5.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch6.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch7.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch8.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch9.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch10.jpg">
          </div>
          <div class="mb-3 pics animation all 1">
            <img class="img-fluid" src="images/sch11.jpg">
          </div>

          <!-- petrosains -->
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni1.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni2.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni3.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni4.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni5.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni6.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni7.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni8.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni9.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni10.jpg">
          </div>
          <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="images/uni11.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  // for memories buttons
  $(function() {
  var selectedClass = "";
  $(".filter").click(function(){
  selectedClass = $(this).attr("data-rel");
  $("#gallery").fadeTo(100, 0.1);
  $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
  setTimeout(function() {
  $("."+selectedClass).fadeIn().addClass('animation');
  $("#gallery").fadeTo(300, 1);
  }, 300);
  });
  });

  //text section 1
  // values to keep track of the number of letters typed, which quote to use. etc. Don't change these values.
  var i = 0,
      a = 0,
      isBackspacing = false,
      isParagraph = false;
  // Typerwrite text content. Use a pipe to indicate the start of the second line "|".
  var textArray = [
    "Name?|Aiman",
    "Favourite football team?|Arsenal #COYG #YaGunnersYa",
  ];
  // Speed (in milliseconds) of typing.
  var speedForward = 100, //Typing Speed
      speedWait = 1000, // Wait between typing and backspacing
      speedBetweenLines = 1000, //Wait between first and second lines
      speedBackspace = 25; //Backspace Speed
  //Run the loop
  typeWriter("output", textArray);
  function typeWriter(id, ar) {
    var element = $("#" + id),
        aString = ar[a],
        eHeader = element.children("h1"), //Header element
        eParagraph = element.children("p"); //Subheader element
    // Determine if animation should be typing or backspacing
    if (!isBackspacing) {
      // If full string hasn't yet been typed out, continue typing
      if (i < aString.length) {
        // If character about to be typed is a pipe, switch to second line and continue.
        if (aString.charAt(i) == "|") {
          isParagraph = true;
          eHeader.removeClass("cursor");
          eParagraph.addClass("cursor");
          i++;
          setTimeout(function(){ typeWriter(id, ar); }, speedBetweenLines);
        // If character isn't a pipe, continue typing.
        } else {
          // Type header or subheader depending on whether pipe has been detected
          if (!isParagraph) {
            eHeader.text(eHeader.text() + aString.charAt(i));
          } else {
            eParagraph.text(eParagraph.text() + aString.charAt(i));
          }
          i++;
          setTimeout(function(){ typeWriter(id, ar); }, speedForward);
        }
      // If full string has been typed, switch to backspace mode.
      } else if (i == aString.length) {
        isBackspacing = true;
        setTimeout(function(){ typeWriter(id, ar); }, speedWait)
      }
    // If backspacing is enabled
    } else {
      // If either the header or the paragraph still has text, continue backspacing
      if (eHeader.text().length > 0 || eParagraph.text().length > 0) {

        // If paragraph still has text, continue erasing, otherwise switch to the header.
        if (eParagraph.text().length > 0) {
          eParagraph.text(eParagraph.text().substring(0, eParagraph.text().length - 1));
        } else if (eHeader.text().length > 0) {
          eParagraph.removeClass("cursor");
          eHeader.addClass("cursor");
          eHeader.text(eHeader.text().substring(0, eHeader.text().length - 1));
        }
        setTimeout(function(){ typeWriter(id, ar); }, speedBackspace);


      }
      else { // If neither head or paragraph still has text, switch to next quote in array and start typing.
        isBackspacing = false;
        i = 0;
        isParagraph = false;
        a = (a + 1) % ar.length; //Moves to next position in array, always looping back to 0
        setTimeout(function(){ typeWriter(id, ar); }, 50);
      }
    }
  }
</script>
</body>
</html>
