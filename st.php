<?php
$collagenm=$_Post['College'];
$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cassword'];


	$con=mysqli_connect('localhost','root','','event');

	$query="INSERT INTO `clgreg`(`College`, `email`, `username`, `password`, `cassword`) VALUES ('$collegenm','$email','$username','$password','cpassword');
	$run=mysqli_query($con,$query);

	if($run==true)
	{
		echo "<script>alert('Registration is Successfull');</script>";
	}
	else {
		
		echo "<script>alert('College not Registred');</script>";
	}



?>
<!DOCTYPE html>
<html>
<head>
<title>College Registration Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<style type="text/css">output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}
#header {
  height: 70px;
  padding: 25px 0;
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  background: rgba(6, 12, 34, 0.98);
  transition: all 0.5s;
  z-index: 997;
}

#header.header-scrolled,
#header.header-fixed {
  background: rgba(6, 12, 34, 0.98);
  height: 70px;
  padding: 15px 0;
  transition: all 0.5s;
}

#header #logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 6px 0;
  line-height: 1;
  font-family: "Raleway", sans-serif;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header #logo h1 span {
  color: #f82249;
}

#header #logo h1 a,
#header #logo h1 a:hover {
  color: #fff;
}

#header #logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}



article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
  display: block;
}

ol, ul {
  list-style: none;
  margin: 0px;
  padding: 0px;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after, q:before, q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

/*-- start editing from here --*/
a {
  text-decoration: none;
}

.txt-rt {
  text-align: right;
}

/* text align right */
.txt-lt {
  text-align: left;
}

/* text align left */
.txt-center {
  text-align: center;
}

/* text align center */
.float-rt {
  float: right;
}

/* float right */
.float-lt {
  float: left;
}

/* float left */
.clear {
  clear: both;
}

/* clear float */
.pos-relative {
  position: relative;
}

/* Position Relative */
.pos-absolute {
  position: absolute;
}

/* Position Absolute */
.vertical-base {
  vertical-align: baseline;
}

/* vertical align baseline */
.vertical-top {
  vertical-align: top;
}

/* vertical align top */
nav.vertical ul li {
  display: block;
}

/* vertical menu */
nav.horizontal ul li {
  display: inline-block;
}

/* horizontal menu */
img {
  max-width: 100%;
}

/*-- end reset --*/
body {
  background: url(img/44.jpg);
  /* fallback for old browsers */
  
  background-size: cover;
  background-attachment: fixed;
  font-family: 'Roboto', sans-serif;
}

h1 {
  font-size: 3em;
  text-align: center;
  color: black;
  font-weight: 100;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: 'Roboto', sans-serif;
  margin-top: 90px;
}

/*-- main --*/
.main-w3layouts {
  padding: 3em 0 1em;
}

.main-agileinfo {
  width: 35%;
  margin: 3em auto;
  background: rgb(11, 11, 53,0.80);
  background-size: cover;
}

.agileits-top {
  padding: 3em;
}

input[type="text"], input[type="email"], input[type="password"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 94.5%;
  display: block;
  border: none;
  padding: 0.8em;
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
  font-family: 'Roboto', sans-serif;
}

input.email, input.text.w3lpass {
  margin: 2em 0;
}

.text:focus, .text:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

.text:focus::-webkit-input-placeholder, .text:valid::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
  font-size: .9em;
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  -o-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  visibility: visible !important;
}

::-webkit-input-placeholder {
  color: #fff;
  font-weight: 100;
}

:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

:-ms-input-placeholder {
  color: #fff;
}

input[type="submit"] {
  font-size: .9em;
  color: #fff;
  background: #76b852;
  outline: none;
  border: 1px solid #76b852;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 100%;
  margin: 2em 0;
  letter-spacing: 4px;
}

input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #8DC26F;
}

.agileits-top p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
  font-weight: 300;
}

.agileits-top p a {
  color: #fff;
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  transition: .5s all;
  font-weight: 400;
}

.agileits-top p a:hover {
  color: #76b852;
}

/*-- //main --*/
/*-- checkbox --*/
.wthree-text label {
  font-size: 0.9em;
  color: #fff;
  font-weight: 200;
  cursor: pointer;
  position: relative;
}

input.checkbox {
  background: #8DC26F;
  cursor: pointer;
  width: 1.2em;
  height: 1.2em;
}

input.checkbox:before {
  content: "";
  position: absolute;
  width: 1.2em;
  height: 1.2em;
  background: inherit;
  cursor: pointer;
}

input.checkbox:after {
  content: "";
  position: absolute;
  top: 0px;
  left: 0;
  z-index: 1;
  width: 1.2em;
  height: 1.2em;
  border: 1px solid #fff;
  -webkit-transition: .4s ease-in-out;
  -moz-transition: .4s ease-in-out;
  -o-transition: .4s ease-in-out;
  transition: .4s ease-in-out;
}

input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: #fff;
  border-top-color: transparent;
  border-right-color: transparent;
}

.anim input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: transparent;
  border-right-color: transparent;
  animation: .4s rippling .4s ease;
  animation-fill-mode: forwards;
}

@keyframes rippling {
  50% {
    border-left-color: #fff;
  }

  100% {
    border-bottom-color: #fff;
    border-left-color: #fff;
  }
}

/*-- //checkbox --*/
/*-- copyright --*/
.colorlibcopy-agile {
  margin: 2em 0 1em;
  text-align: center;
}

.colorlibcopy-agile p {
  font-size: .9em;
  color: #fff;
  line-height: 1.8em;
  letter-spacing: 1px;
  font-weight: 100;
}

.colorlibcopy-agile p a {
  color: #fff;
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -ms-transition: 0.5s all;
}

.colorlibcopy-agile p a:hover {
  color: #000;
}

/*-- //copyright --*/
.wrapper {
  position: relative;
  overflow: hidden;
}

@-webkit-keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    -moz-transform: translateY(-700px) rotate(600deg);
    -o-transform: translateY(-700px) rotate(600deg);
    -ms-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
  }
}

@keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    -moz-transform: translateY(-700px) rotate(600deg);
    -o-transform: translateY(-700px) rotate(600deg);
    -ms-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
  }
}

/*-- responsive-design --*/
@media(max-width:1440px) {
  input[type="text"], input[type="email"], input[type="password"] {
    width: 94%;
  }
}

@media(max-width:1366px) {
  h1 {
    font-size: 2.6em;
  }

  .agileits-top {
    padding: 2.5em;
  }

  .main-agileinfo {
    margin: 2em auto;
  }

  .main-agileinfo {
    width: 36%;
  }
}

@media(max-width:1280px) {
  .main-agileinfo {
    width: 40%;
  }
}

@media(max-width:1080px) {
  .main-agileinfo {
    width: 46%;
  }
}

@media(max-width:1024px) {
  .main-agileinfo {
    width: 49%;
  }
}

@media(max-width:991px) {
  h1 {
    font-size: 2.4em;
  }

  .main-w3layouts {
    padding: 2em 0 1em;
  }
}

@media(max-width:900px) {
  .main-agileinfo {
    width: 58%;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 93%;
  }
}

@media(max-width:800px) {
  h1 {
    font-size: 2.2em;
  }
}

@media(max-width:736px) {
  .main-agileinfo {
    width: 62%;
  }
}

@media(max-width:667px) {
  .main-agileinfo {
    width: 67%;
  }
}

@media(max-width:600px) {
  .agileits-top {
    padding: 2.2em;
  }

  input.email, input.text.w3lpass {
    margin: 1.5em 0;
  }

  input[type="submit"] {
    margin: 2em 0;
  }

  h1 {
    font-size: 2em;
    letter-spacing: 3px;
  }
}

@media(max-width:568px) {
  .main-agileinfo {
    width: 75%;
  }

  .colorlibcopy-agile p {
    padding: 0 2em;
  }
}

@media(max-width:480px) {
  h1 {
    font-size: 1.8em;
    letter-spacing: 3px;
  }

  .agileits-top {
    padding: 1.8em;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 91%;
  }

  .agileits-top p {
    font-size: 0.9em;
  }
}

@media(max-width:414px) {
  h1 {
    font-size: 1.8em;
    letter-spacing: 2px;
  }

  .main-agileinfo {
    width: 85%;
    margin: 1.5em auto;
  }

  .text:focus, .text:valid {
    background-position: 0 0px;
  }

  .wthree-text ul li, .wthree-text ul li:nth-child(2) {
    display: block;
    float: none;
  }

  .wthree-text ul li:nth-child(2) {
    margin-top: 1.5em;
  }

  input[type="submit"] {
    margin: 2em 0 1.5em;
    letter-spacing: 3px;
  }

  input[type="submit"] {
    margin: 2em 0 1.5em;
  }

  .colorlibcopy-agile {
    margin: 1em 0 1em;
  }
}

@media(max-width:384px) {
  .main-agileinfo {
    width: 88%;
  }

  .colorlibcopy-agile p {
    padding: 0 1em;
  }
}

@media(max-width:375px) {
  .agileits-top p {
    letter-spacing: 0px;
  }
}

@media(max-width:320px) {
  .main-w3layouts {
    padding: 1.5em 0 0;
  }

  .agileits-top {
    padding: 1.2em;
  }

  .colorlibcopy-agile {
    margin: 0 0 1em;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 89.5%;
    font-size: 0.85em;
  }

  h1 {
    font-size: 1.7em;
    letter-spacing: 0px;
  }

  .main-agileinfo {
    width: 92%;
    margin: 1em auto;
  }

  .text:focus, .text:valid {
    background-position: 0 0px;
  }

  input[type="submit"] {
    margin: 1.5em 0;
    padding: 0.8em;
    font-size: .85em;
  }

  .colorlibcopy-agile p {
    font-size: .85em;
  }

  .wthree-text label {
    font-size: 0.85em;
  }

  .main-w3layouts {
    padding: 1em 0 0;
  }
}




	
</style>



<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>


	<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="index.html">About</a></li>
        
          <li><a href="index.html">Events</a></li>
          
          <li><a href="index.html">Gallery</a></li>
         <li><a href="collogin.html">College Login</a></li>
          <li><a href="index.html">Contact</a></li>
          <li class="buy-tickets"><a href="index.html">Register For Event</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1><b>College Registration form</h1></b>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="/TheEvent/TheEvent/create.html" method="post">
					<input class="text" type="text" name="college" placeholder="College name" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">				
					<input class="text" type="text" name="username" placeholder="Username" required=""><br>
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="cpassword" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<!--<a href="/TheEvent/TheEvent/create.html">-->
						<input type="submit" value="SIGNUP" method="post"></a>
				</form>
				<p> have an Account? <a href="collogin.html"> Login Now!</a></p>
			</div>
		</div>
		</body>
</html>