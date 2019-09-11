<!DOCTYPE>
<html>
<head>
<title>
Registration
</title>
<style>
body{background:url(aus2.jpg);
     background-size:100% 710px;
     padding-top:0px;}

#nav{padding-top:25px;
     padding-left:60px;
     font-size:20px;
     background:khaki;
     width:465px;
     height:555px;
     margin:auto;
     border-radius:10px;
     opacity:.8;
    }

#nav input{margin-top:35px;
           width:200px;
           height:40px;
           font-size:15px;
           border-radius:5px;
           color:blue;
           }
#nav input [name="email"]{width:400px;
                          }
#nav input[name="sex"]{margin-top:5px;
                       width:20px;}
#nav input[type="checkbox"]{margin-top:10px;
                       width:25px;}
#nav input[type="submit"]{margin-top:10px;
                       width:150px;
                       border-radius:50px;
                       margin-left:280px;
                       height:50px;
                       background:blue;
                       color:white;
                       font-size:bold;}
</style>


<body>
<table align="left" >
<tr>
<td><h1>Login-Id</h1></td><br><br>
</tr>
<tr>
<td><input type="text" placeholder="user name" name="uname"><br><br></td>
</tr>
<tr>

<td><input type="password" placeholder="Password" name="pass"><br><br></td>
</tr>
<tr>
<td><input type="submit" value="Submit" name="sub" ></td>
</tr>
</table>


<div id="nav">
Registration Form
<form id="form1" name="form1" method="post" action="registration.php">
<input type="text" placeholder="first Name" name="fname">
<input type="text" placeholder="Last Name" name="lname"><br>
<input type="text" placeholder="Email" name="email"><br>
<input type="text" placeholder="Mobile No" name="mob"><br>
<input type="password" placeholder="Enter Password" name="pass">
<input type="password" placeholder="Re-Enter" name="rpass"><br>
<input type="radio" value="male" name="sex">Male
<input type="radio" value="female" name="sex">Female<br>
<input type="checkbox" >Are you sure ?<br>
<input type="submit" value="Register" name="reg"><br>
</form>
</div>

</body>
</head>
</html>


<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('quiz_db',$con) or die(mysql_error());
if(isset($_POST['reg']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];

if($fname=='')
{
echo "<script>alert('Please Enter Your Name')</script>";
}

 else if($lname=='')
{
echo "<script>alert('Please Enter Your Last Name')</script>";
}

 else if($email=='')
{
echo "<script>alert('Please Enter Your Email')</script>";
}

 else if($mob=='')
{
echo "<script>alert('Please Enter Your Mobile no.')</script>";
}

else if($pass=='')
{
echo "<script>alert('Please Enter Your Password')</script>";
}

else if($rpass=='')
{
echo "<script>alert('Please Renter Your Password')</script> ";
}



else
{
$query="insert into registration(fname,lname,email,mob,pass,rpass) values('$fname','$lname','$email','$mob','$pass','$rpass')";

if(mysql_query($query))
{
 echo " You are Succesfully regestered";
 echo"<script>window.open('home.php','_self')</script>";
}

}
}
?>








































