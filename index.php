<?php 
session_start();
if(isset($_POST['col']))
{
    $_SESSION['col']=$_POST['col'];
}
else if(empty($_SESSION['col']))
{
    $_SESSION['col']="green";
}
if(isset($_POST['submit']))
{
$to=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$subject=$_POST['sub'];
$message="hi Ankit,\n\nThis is a mail from the viewer of your portfolio website with some message.\n\n ".$_POST['message']."\n\nsent by ".$fname.$lname."\n\nEmail address: ".$to;
if(mail('ankitjain28may77@gmail.com', $subject, $message, 'From: noreply@ankitjain.esy.es'))
$_SESSION['mesg']="Email has been sent";
else
$_SESSION['mesg']="Error in sending the mail";
unset($_SESSION['submit']);
}

?>

<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Ankit Jain</title>
    </head>

    <body>

       


    <div class="navbar-fixed">
        <nav class="<?php echo $_SESSION['col']; ?> darken-2" role="navigation">
            <div class="nav-wrapper container">
                <a href="index.html" class="brand-logo">&nbsp;&nbsp;&nbsp;&nbsp;My Portfolio</a> 
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li style="color:black"><?php echo $_SESSION['mesg']; unset($_SESSION['mesg']); ?></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Resume</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#project">Project</a></li>
                    <li><a href="#footer">Contact</a></li>   
               </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Resume</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#project">Project</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
           </div>
       </nav>
    </div>
        
        <div class="container">

            
        <div class="fixed-action-btn vertical" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large <?php echo $_SESSION['col'];  ?>">
                <i class="large material-icons">mode_edit</i>
            </a>
        <form method="post" action="<?php echo $_SERVER['PHP_REFERER']; ?>">
            <ul>
            <li><button class="btn-floating btn-large green waves-effect waves-light" type="submit" name="col" value="green">
                <i class="material-icons right">surround_sound</i>
            </button></li>
            <li><button class="btn-floating btn-large blue waves-effect waves-light" type="submit" name="col" value="blue">
                <i class="material-icons right">surround_sound</i>
            </button></li>
            <li><button class="btn-floating btn-large red waves-effect waves-light" type="submit" name="col" value="red">
                <i class="material-icons right">surround_sound</i>
            </button></li>
            </ul>
        </form>
        </div>
        

            <br>
            <h2 class="content-item center" id="about">About</h2>
            <div class="deep <?php echo $_SESSION['col'];  ?>" id="lineo"></div><br>
            <div class="row">
                <div class="col s12 m12">
                    <div class="card white z-depth-0">
                        <div class="card-content white-text">
                            <span class="card-title"></span>
                            <div class="row">
                                <div class="col s12 m2"><br>
                                    <div class="card-image waves-effect">
                                        <img src="ankit.jpg">
                                    </div>
                                </div>
                                <div class="col s12 m10 offset-m0">
                                    <h4 style="color:<?php echo $_SESSION['col']; ?>">Ankit Jain</h4>
                                    
                                    <p style="color:<?php echo $_SESSION['col']; ?>">Hi! Presently I'm pursuing Computer Science and Engineering at JSS Academy Of Technical Education in Noida. Basically i am a tech-enthusiast and i love to solve algorithm problems. Apart from coding i used to play Badminton and Chess, Enjoying Parties with friends, listening music and Drawing as well.</p><br>
                                    <p style="color:<?php echo $_SESSION['col']; ?>">I am exploring my passion in the field of programming and i want to envolve myself in some projects so that i can improve my skills more.</p><br>
                                    <p style="color:black">Birth Date: 28 May 1996</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col s12 m7 offset-m5">
                                    <a href="https://www.linkedin.com/profile/pdf?id=AAEAABlQlhEBD_TTgCJzn5pzVKbcs7FlYm34uM8&locale=&authType=&authToken=&pdfFileName=AnkitJain&disablePdfCompression=true&trk=pdf_pro_full" style="color:white" ><div class="btn <?php echo $_SESSION['col']; ?> lighten-1 btn-large" >Download CV</div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    
        <div class="container">
            <br>
            <h2 class="content-item center" id="education">Education</h2><br>
            <div class="deep <?php echo $_SESSION['col'];  ?>" id="lineo"></div><br><br>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card white z-depth-1">
                        <div class="row">
                             <div class="col s12 m12 l3">
                                <button class="btn waves-effect waves-light <?php echo $_SESSION['col']; ?> lighten-1"><i class="material-icons left">code</i>2015-2019</button>
                            </div>
                            <div class="col s12 m12 l9 offset-l0">
                                <div class="card-content black-text">
                                    <span class="card-title">Computer Science & Engineering</span>
                                    <p>JSS Academy of Technical Education,Noida</p><br>
                                    <span class="card-title">Activities & Socities:</span>
                                    <p> Microsoft Mobile Innovation Labs, Noida and Codechef, Noida. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card white z-depth-1">
                        <div class="row">
                             <div class="col s12 m12 l6">
                                <button class="btn waves-effect waves-light <?php echo $_SESSION['col']; ?> lighten-1"><i class="material-icons left">code</i>2013-2015</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l9 offset-l3">
                                <div class="card-content black-text">
                                    <span class="card-title">INTERMEDIATE(10+2)</span>
                                    <p>Grace Convent Sr. Sec. School, Mathura</p><br>
                                    <p>92.25% in ISC Board(School Topper)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6 offset-l0">
                    <div class="card white z-depth-1">
                        <div class="row">
                             <div class="col s12 m12 l6">
                                <button class="btn waves-effect waves-light <?php echo $_SESSION['col']; ?> lighten-1"><i class="material-icons left">code</i>2001-2013</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l9 offset-l3">
                                <div class="card-content black-text">
                                    <span class="card-title">HIGH SCHOOL</span>
                                    <p>Grace Convent Sr. Sec. School, Mathura</p><br>
                                    <p>88.87% in ICSE Board</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <h2 class="content-item center">Experience</h2><br>
            <div class="deep <?php echo $_SESSION['col'];  ?>" id="lineo"></div><br><br>
            <div class="row">
                <div class="col s12 m6">
                    <div class="card white z-depth-1">
                        <div class="row">
                            <div class="col s12 m7">
                                <button class="btn waves-effect waves-light <?php echo $_SESSION['col']; ?> lighten-1"><i class="material-icons left">code</i>Jan'16-Feb'16</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m9 offset-m3">
                                <div class="card-content black-text">
                                    <span class="card-title">Tryst'16, IIT Delhi.</span>
                                    <p>Campus Ambassador</p><br>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 offset-m0">
                    <div class="card white z-depth-1">
                        <div class="row">
                            <div class="col s12 m7">
                                <button class="btn waves-effect waves-light <?php echo $_SESSION['col']; ?> lighten-1"><i class="material-icons left">code</i>Nov'16-Present</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m9 offset-m3">
                                <div class="card-content black-text">
                                    <span class="card-title">HackerEarth</span>
                                    <p>Campus Ambassador</p><br>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <div class="card white z-depth-1">
                        <div class="row">
                            <div class="col s12 m7">
                                <button class="btn waves-effect waves-light <?php echo $_SESSION['col']; ?> lighten-1"><i class="material-icons left">code</i>Sep'15-Present</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m9 offset-m3">
                                <div class="card-content black-text">
                                    <span class="card-title">Pennyful</span>
                                    <p>Campus Ambassador</p><br>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 offset-m0">
                    <div class="card white z-depth-1">
                        <div class="row">
                            <div class="col s12 m7">
                                <button class="btn waves-effect waves-light <?php echo $_SESSION['col']; ?> lighten-1"><i class="material-icons left">code</i>Sep'15-Present</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m9 offset-m3">
                                <div class="card-content black-text">
                                    <span class="card-title">Twenty19</span>
                                    <p>Campus Ambassador</p><br>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <h2 class="content-item center" id="skills">Skills</h2><br>
            <div class="deep <?php echo $_SESSION['col'];  ?>" id="lineo"></div><br><br>
            <div class="row">
                <div class="col s12 m2">
                    <div class="card white z-depth-1">
                        <div class="card-image waves-effect">
                            <img class="activator" src="c++.png" style="width:100%; height:100%">
                        </div>
                        <div class="card-content <?php echo $_SESSION['col']; ?> white-text">
                            <p class="center">C++</p>
                        </div>
                        <div class="card-reveal <?php echo $_SESSION['col']; ?> white-text">
                            <span class="card-title "><i class="material-icons right">close</i></span><br>
                            <h3 style="font-family: 'Open Sans', sans-serif;">70%</h3>
                            <h5 class="center">C++</h5>
                        </div>
                    </div>
                </div>
                <div class="col s12 m2 offset-m0">
                    <div class="card white z-depth-1">
                        <div class="card-image waves-effect">
                            <img class="activator" src="python.jpg" style="width:100%; height:100%">
                        </div>
                        <div class="card-content <?php echo $_SESSION['col']; ?> white-text">
                            <p class="center">Python</p>
                        </div>
                        <div class="card-reveal yellow white-text">
                            <span class="card-title "><i class="material-icons right">close</i></span><br>
                            <h3 style="font-family: 'Open Sans', sans-serif;">50%</h3>
                            <h5 class="center">Python</h5>
                        </div>
                    </div>
                </div>
                <div class="col s12 m2 offset-m0">
                    <div class="card white z-depth-1">
                        <div class="card-image waves-effect">
                            <img class="activator" src="html.png" style="width:100%; height:100%">
                            <br>
                        </div>
                        <div class="card-content <?php echo $_SESSION['col']; ?> white-text">
                            <p class="center">HTML</p>
                        </div>
                        <div class="card-reveal red white-text">
                            <span class="card-title "><i class="material-icons right">close</i></span><br>
                            <h3 style="font-family: 'Open Sans', sans-serif;">80%</h3>
                            <h5 class="center">HTML</h5>
                        </div>
                    </div>
                </div>
                <div class="col s12 m2 offset-m0">
                    <div class="card white z-depth-1">
                        <div class="card-image waves-effect">
                            <img class="activator " src="csss.jpg" style="border-radius:50%; padding:5%;width:100%; height:100%">
                        </div>
                        <div class="card-content <?php echo $_SESSION['col']; ?> white-text">
                            <p class="center">CSS</p>
                        </div>
                        <div class="card-reveal orange white-text">
                            <span class="card-title "><i class="material-icons right">close</i></span><br>
                            <h3 style="font-family: 'Open Sans', sans-serif;">80%</h3>
                            <h5 class="center">CSS</h5>
                        </div>
                    </div>
                </div>
                <div class="col s12 m2 offset-m0">
                    <div class="card white z-depth-1">
                        <div class="card-image waves-effect">
                            <img class="activator" src="Java.png" style="width:100%; height:100%">
                        </div>
                        <div class="card-content <?php echo $_SESSION['col']; ?> white-text">
                            <p class="center">Java</p>
                        </div>
                        <div class="card-reveal blue white-text">
                            <span class="card-title "><i class="material-icons right">close</i></span><br>
                            <h3 style="font-family: 'Open Sans', sans-serif;">80%</h3>
                            <h5 class="center">Java</h5>
                        </div>
                    </div>
                </div>
                <div class="col s12 m2 offset-m0">
                    <div class="card white z-depth-1">
                        <div class="card-image waves-effect">
                             <img class="activator" src="c.png" style="width:100%; height:100%">
                        </div>
                        <div class="card-content <?php echo $_SESSION['col']; ?> white-text">
                            <p class="center">C</p>
                        </div>
                        <div class="card-reveal teal white-text">
                            <span class="card-title "><i class="material-icons right">close</i></span><br>
                            <h3 style="font-family: 'Open Sans', sans-serif;">75%</h3>
                            <h5 class="center">C</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m3 offset-m2">
                    <div class="card white z-depth-1">
                        <div class="card-image waves-effect">
                             <img class="activator" src="php.png" style="width:100%; height:217px">
                        </div>

                        <div class="card-content <?php echo $_SESSION['col']; ?> white-text">
                            <p class="center">PHP</p>
                        </div>
                        <div class="card-reveal blue white-text">
                            <span class="card-title "><i class="material-icons right">close</i></span><br>
                            <h3 style="font-family: 'Open Sans', sans-serif;" class="center">55%</h3><br>
                            <h5 class="center">PHP</h5>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 offset-m2">
                    <div class="card white z-depth-1">
                        <div class="card-image waves-effect">
                             <img class="activator" src="sql.png" style="width:100%; height:100%">
                        </div>
                        <div class="card-content <?php echo $_SESSION['col']; ?> white-text">
                            <p class="center">SQL</p>
                        </div>
                        <div class="card-reveal teal white-text">
                            <span class="card-title "><i class="material-icons right">close</i></span><br>
                            <h3 style="font-family: 'Open Sans', sans-serif;" class="center">65%</h3><br>
                            <h5 class="center">SQL</h5>
                        </div>
                    </div>
                </div>
            </div>



            <br>
            <br>
            <h2 class="content-item center" id="project">Projects</h2><br>
            <div class="deep <?php echo $_SESSION['col'];  ?>" id="lineo"></div><br><br>
            <div class="row">
                <div class="col s12 m6">
                    <div class="card white z-depth-1"> 
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="btn waves-effect waves-light <?php echo $_SESSION['col']; ?> lighten-1"><i class="material-icons left">turned_in_not</i>My Portfolio</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card-content black-text">
                                    <img src="port.png" style="width:100%; height:100%">
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 offset-m0">
                    <div class="card white z-depth-1">
                        <div class="row">
                            <div class="col s12">
                                <div class="btn waves-effect waves-light <?php echo $_SESSION['col']; ?> lighten-1"><i class="material-icons left">turned_in_not</i>Hackathon 2k15</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card-content black-text">
                                    <img src="hack.png" style="width:100%; height:100%"></br>
                                    <p></p>
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    



    <footer class="page-footer <?php echo $_SESSION['col']; ?> lighten-1" id="footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h3 class="white-text">Contact Me</h3>
                    <h5 class="grey-text text-lighten-2">JSS College of Technical Education</h5>
                    <p>Email Id: ankitjain28may77@gmail.com</p>
                    <p>Mobile No. +918447269408</p>
                    <p>Whatsapp No. +918266857005</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">&nbsp;&nbsp;&nbsp;Find Me Here -</h5><br><br>
                    <a href="https://github.com/ankitjain28may"><img src="github.png" style="width:20%;height:20%;"></a>
                    <a href="https://in.linkedin.com/in/ankitjain28may"><img src="linkedin.png" style="width:20%;height:20%;"></a>
                    <a href="http:www.facebook.com/jain.ankit28"><img src="facebook.png" style="width:20%;height:20%;"></a>
                    <a href="https://www.hackerearth.com/@ankit441"><img src="hacker.png" style="width:20%;height:20%;"></a>
                </div>
            </div>
            <div class="deep <?php echo $_SESSION['col'];  ?>" id="lineo"></div><br><br>
            
            <form method="post" action="<?php echo $_SERVER['PHP_REFERER']; ?>">
                  <!--form fields-->
                <div class="row">
                    <div class="col l5 s12">

                        <div class="input-field">
                            <input id="icon_prefix" class="<?php echo $_SESSION['col']; ?> lighten-1 validate" type="text" name="fname" required>
                            <label for="icon_prefix" style="color:white;">First Name</label>
                        </div>
                        <div class="input-field">
                            <input id="icon_telephone" class="<?php echo $_SESSION['col']; ?> lighten-1 validate" type="email" name="email" required>
                            <label for="icon_telephone" style="color:white;">Email</label>
                        </div>
                        <br>
                        
                    </div>
                    <div class="col l5 offset-l1 s12">

                        <div class="input-field">
                            <input id="icon_prefix" class="<?php echo $_SESSION['col']; ?> lighten-1 validate" type="text" name="lname" required>
                            <label for="icon_prefix" style="color:white;">Last Name</label>
                        </div>
                        <div class="input-field">
                            <input id="icon_telephone" class="<?php echo $_SESSION['col']; ?> lighten-1 validate"  type="text" name="sub" required>
                            <label for="icon_telephone" style="color:white;">Subject</label>
                        </div>
                    </div>
                </div>
                    <div class="row input-field">
                        <div class="col l9 offset-l1 s10"> 
                            <textarea id="textarea1" class="<?php echo $_SESSION['col']; ?> lighten-1 materialize-textarea" name="message" required="" style="height: 22px;"></textarea>
                            <label for="textarea1" style="color:white;">Message</label>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" class="waves-effect waves-light btn <?php echo $_SESSION['col']; ?> darken-2 btn-large">
                    </div>
            </form>
        </div>
        <div class="footer-copyright <?php echo $_SESSION['col']; ?> darken-2">
            <div class="container center">
                Made by- Ankit Jain
            </div>
        </div>
    </footer>
    

    
    
    
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html> 