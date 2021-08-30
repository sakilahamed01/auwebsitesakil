<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?>  welcome to Aliah University unofficial website<br>Previous Year Question Papers pdf</h1>
     <a style="color: #fff;" href="logout.php">Logout</a>
      <div>
          <ul>
                <li class="i1"><a style="color: whitesmoke; font-size: 20px;" href="abc.pdf">Electrical Engineering </a></li>
                <li class="i1"><a style="color: whitesmoke; font-size: 20px;" href="tarik.pdf">Mechanical Engineering</a></li>
                <li class="i1"><a style="color: whitesmoke; font-size: 20px;" href="xyz.pdf">Electronics & Communication Engineering</a></li>
          </ul>
     </div>

     <div>
          <ul>
                <li class="i3"><a style="color: whitesmoke; font-size: 20px;" href="abc.pdf">AU Admission Test </a></li>
                <li class="i3"><a style="color: whitesmoke; font-size: 20px;" href="tarik.pdf">Chemistry</a></li>
                <li class="i3"><a style="color: whitesmoke; font-size: 20px;" href="xyz.pdf">Bachelor of Computer Application</a></li>
          </ul>
     </div>
      
     <div>
          <ul>
                <li class="i2"><a style="color: whitesmoke; font-size: 20px;" href="abc.pdf">Civil Engineering </a></li>
                <li class="i2"><a style="color: whitesmoke; font-size: 20px;" href="tarik.pdf">Computer Science Engineering</a></li>
                <li class="i2"><a style="color: whitesmoke; font-size: 20px;" href="xyz.pdf">Master of Computer Application</a></li>
          </ul>
     </div>

     <div>
         <a style="color: black; font-size: 15px";  href="https://docs.google.com/forms/d/e/1FAIpQLSejQrScBWoy_K8Cv1Hd9jWw5ej3Lmevl5kCmIpb2rcoFwIDKA/viewform?usp=sf_link">Feedback</a>
     </div>

     <div>
        <a style="color: #fff; font-size: 13px" href="https://www.linkedin.com/in/sakil-ahamed-22a75b1a7">Developed by </a>
     </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>