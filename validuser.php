<?php
session_start();
include_once 'DB.php';
$id = addslashes($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html>
<head><title>User DDB INDIA</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<style>
    nav {margin-top:30px;
  float: left;
  width:400px;
  height: 600px;
  background:black;
  padding:40px;
  margin-right:30px;
}
.lid{
    float:left;
}
body {margin:0;
}
.ula {
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
.lia{
    float:left;
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
</head>
<body bgcolor="#393E46">

<ul class="ula">
  <li class="tvs"><i>DDB India</i>  <i class="fas fa-university"></i></li>
  <li><a href="logout.php">Logout</a></li>
     
      <li><i style="display:block;
  color: #00adb5;
  text-align: center;
  padding: 0px 20px;
  text-decoration: none;
  font-size: 40px;" > <?php echo $_SESSION['user_id']; ?></i></li>
  <li><i style="display:block;
  color: #00adb5;
  text-align: center;
  padding: 0px 20px;
  text-decoration: none;
  font-size: 40px;" ><?php echo $_SESSION['user_name']; ?></i></li>

</ul>
<section>
<nav>
<div>
          <ul style="height: 650px;font-size:60px">
          <li class="lia"><a href="validuser.php"><b>User</b></span></a></li>
            <li class="lia"><a href="viewaccount.php"><b>Your Profile</b></span></a></li>
            <li class="lia"><a href="transfer.php"><b>Transfer Money</b></span></a></li>
            <li class="lia"><a href="Mytransaction.php"><b>My Transactions</b></span></a></li>
            <li class="lia"><a href="loan.php"><b>About Loan</b></span></a></li>
            <li class="lia"><a href="userupdate.php"><b>Update Profile</b></span></a></li>
            <li class="lia"><a href="userpassword.php"><b>Change Password</b></span></a></li>
        </ul>
            </div>
  </nav>
  <article>
  <br><br><br><div >
  <i style="font-size:30px;color:#00adb5;;margin-left:10px">&nbsp;&nbsp;&nbsp;<br><br><br><b>DEAR  <?php echo $_SESSION['user_name']; ?>,</b><br><br>DDB India is India's largest bank with a network of over 25000 branches located even in the remotest parts of India. DDB India offers a wide range of banking products and services to corporate and retail customers.

OnlineDDB is the Internet banking portal for Dokha Dhadi Bank of India. The portal provides anywhere, anytime, online access to accounts for DD Bank's Retail and Corporate customers. The application is developed using the latest cutting edge technology and tools. The infrastructure supports unified, secure access to banking services for accounts in over 25,000 branches across India.

The Retail banking application is an integration of several functional areas, and enables customers to:
<ul>
<li class="lid">Issue Demand Drafts online</li>
<li class="lid">Credit beneficiary accounts using the VISA Money Transfer, RTGS/NEFT feature</li>
<li class="lid">Setup Standing Instructions</li>
<li class="lid">Interface with merchants for railway and airline reservations</li>
<li class="lid">Avail DEMAT and IPO services</li></ul><i></div>
     </article>
</section>

</body>
</html>
