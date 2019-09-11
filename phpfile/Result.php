<html>
<head>
<style>

h3{

margin-left:400px;



}

</style>
</head>
</html>


<?php
$aq=0;
$ra=0;
$wa=0;
$na=0;
$result=0;
if(isset($_POST['j']))
{
if(isset($_POST['q1']))
{
$aq=$aq+1;
        
$a=$_POST['q1'];
if(strcmp($a,"1")<0)
 {

  $wa=$wa+1;
}
else
{
  $ra=$ra+1;
}
}

else
{
  $na=$na+1;
}
 


if(isset($_POST['q2']))
{
$aq=$aq+1;

        
$a=$_POST['q2'];
if(strcmp($a,"1")<0)
 {

  $wa=$wa+1;

}
else
{
  $ra=$ra+1;

}
}

else
{
  $na=$na+1;

}  



if(isset($_POST['q3']))
{
$aq=$aq+1;


        
$a=$_POST['q3'];
if(strcmp($a,"1")<0)
 {

  $wa=$wa+1;
}
else
{
  $ra=$ra+1;

}
}

else
{
  $na=$na+1;

}


if(isset($_POST['q4']))
{
$aq=$aq+1;


        
$a=$_POST['q4'];
if(strcmp($a,"1")<0)
 {

  $wa=$wa+1;

}
else
{
  $ra=$ra+1;

}
}

else
{
  $na=$na+1;

}


if(isset($_POST['q5']))
{
$aq=$aq+1;


        
$a=$_POST['q5'];
if(strcmp($a,"1")<0)
 {

  $wa=$wa+1;

}
else
{
  $ra=$ra+1;

}
}

else
{
  $na=$na+1;

}

if(isset($_POST['q6']))
{
$aq=$aq+1;


        
$a=$_POST['q6'];
if(strcmp($a,"1")<0)
 {

  $wa=$wa+1;

}
else
{
  $ra=$ra+1;
}
}

else
{
  $na=$na+1;

}


if(isset($_POST['q7']))
{
$aq=$aq+1;


        
$a=$_POST['q7'];
if(strcmp($a,"1")<0)
 {

  $wa=$wa+1;

}
else
{
  $ra=$ra+1;

}
}

else
{
  $na=$na+1;

}


if(isset($_POST['q8']))
{
$aq=$aq+1;


        
$a=$_POST['q8'];
if(strcmp($a,"1")<0)
 {

  $wa=$wa+1;

}
else
{
  $ra=$ra+1;

}
}

else
{
  $na=$na+1;

}

if(isset($_POST['q9']))
{
$aq=$aq+1;


        
$a=$_POST['q9'];
if(strcmp($a,"1")<0)
 {

  $wa=$wa+1;

}
else
{
  $ra=$ra+1;

}
}

else
{
  $na=$na+1;

}


if(isset($_POST['q10']))
{
$aq=$aq+1;


        
$a=$_POST['q10'];
if(strcmp($a,"1")<0)
 {

  $wa=$wa+1;

}
else
{
  $ra=$ra+1;

}
}

else
{
  $na=$na+1;

}                                                                                         

}

$result=$ra*2;

echo"<h1 align=center>your online quiz result </h1>";

echo"<h2 align=center > Total Number of Question: 10</h2>"."<br>";

echo"<h3> Attempt Question:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$aq."</h3>"."<br>";

echo"<h3 > Right Answer: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$ra."</h3>"."<br>";

echo"<h3 >Wrong Answer : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$wa."</h3>"."<br>";

echo"<h3 >Not Attempt :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ".$na."</h3>"."<br>";

echo"<h3 >Your Result :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$result."</h3>"."<br>";

?>

 