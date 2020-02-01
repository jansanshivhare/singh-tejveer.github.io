
<!DOCTYPE html >
<html>
     <head>
         
         <title>Admin Login</title>
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

     </head>
     <style>
body {margin:0;
}
.t {
  margin: 0;
  padding: 0;
  background-color: black;
  position: fixed;
  top: 0;
  width: 100%;
  height:50px;
}
li {
  float: right; 
}
li a {
  display:block;
  color: #00adb5;
  text-align: center;
  padding: 0px 20px;
  text-decoration: none;
  font-size: 40px;
}
.tvs{
    float:left;
    margin-left:15px;
    font-size:45px;
    color: #00adb5;
    
}
footer {
  background-color:black;
  padding: 5px;
  text-align:center;
  color:red;
  font-size: 25px;
}
</style>
     <body bgcolor="#393E46">
     <ul class="t">
  <li class="tvs"><i>DDB India</i>  <i class="fas fa-university"></i></li>
  <li><a href="aboutus.php">Contact Us</a></li>
  <li><a href="userlogin.php">Login</a></li>
  <li><a href="Home.php" >HOME</a></li>

</ul>
     <center> 
     <div style="margin-top:150px;   width:600px; height:600px;color: #00adb5">
    <h style="font-size: 50px">Admin Login</h>
    <form class="" action="" method="POST">
        <fieldset >
            <span style="font-size: 30px">UserName</span><br>
            <input type="text" name="username" placeholder="User Name" style="font-size: 30px"><br><br>

            <span style="font-size: 30px">Password</span><br>
            <input type="password" name="password" placeholder="Password" style="font-size: 30px"><br><br>

            <input type="submit" name="Submit" value="Submit" style="font-size: 30px"><center>
        </fieldset>
    </form>
    <?php
	if(isset($_POST['Submit'])){
        $username=$_POST["username"];
        $password=$_POST["password"];
          
        if($username==="admin" && $password==="password")
        {
            header("Location:validadmin.php");
        }
        else {
            echo '<i style="color:red;font-size:35px;"><b>Wrong Password or Invalid Username!!!</b></i>';
        }
    }
?>
</div>
</body>
</html>