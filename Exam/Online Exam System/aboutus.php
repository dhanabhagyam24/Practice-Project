<html>
<head>
<body>
<style>
body {
  background-image:url("image/bg.jpg");
  
  background-size: cover;
  font-family: sans-serif;
}
</style>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>
<div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/exam.jpg" width=200 height=150 alt="Online Examination system" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="#" style="color:#40ff00; font-family:'typo' ; font-size:45px " title="Find on Examination" align="center" cellpadding = "10">Online Examination system</a>
		<h1><font color="white">OBJECTIVE</font color></h1>
		<h4 style="color:white; font-family:'typo' ;font-size:25px" class="title1">Online examination system is a non removable examination pattern of today’s life. We need more time saving and more accurate examination system as the number of applicants is increasing day by day. For all IT students and professionals, it is very important to have some basic understanding about the online examination system. On this site you will get source code with the running project. It will help you to understand the concept of the project. Here you find project in php free download.</h4>
		<h1><font color="white">FEATURES</font color></h1>
		<h4 style="color:white; font-family:'typo' ;font-size:25px">Login system must be present and secured by password.
Ability to save the answer given by the candidate along with the question.
Answer checking system should be available.
Could Update Profile
Log out after the over.
Admin Panel.</h4></div></div>
		</p>
      </div>
	  
</body>	     
</html>
</head>