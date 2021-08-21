<html>
<head>
    <title>Your Order</title>
   
    <style rel="stylesheet">
        .boxi {
    background-color: lightgrey;
    width: 400px;
    height: 313px;
    border: 3px solid rgb(3, 3, 44);
    padding-top: 5px;
    margin: 15px;
    
   
  }
  .cen{
      float: center;
      margin-left: 36%;
      margin-top: 12%;
     
      
  }
  body{
    width: 96%;


    height: 74vh;
    background-image: url("https://png.pngtree.com/thumb_back/fh260/back_our/20190620/ourmid/pngtree-summer-atmosphere-restaurant-supermarket-vegetable-psd-layered-promotion-background-image_159939.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
</head>
<body>
    <div class="warpper fl">
    <div class="cen">
    <div class="boxi" >
        <h1 style="text-align: center; color:#18034e;">Your Order</h1>
<?php
$nam=$_POST['fname'];
$di1=$_POST['d1'];
$di2=$_POST['d2'];
$di3=$_POST['d3'];


$con=new mysqli("localhost","root","","online_order");

// if($con->connect_errno)
// {
//     echo "error";
// }
// else
// {
//     echo "no error";
// }
$sql="insert into online_food values('$nam','$di1','$di2','$di3');";
$res=$con->query($sql);
// if($res==true)
// {
//     echo "<br>success";
// }
// else{
//     echo "<br>fail";
// }


echo "<h3>"."Order Owner: ".$nam."</h3>";
echo "<h4>"."1. ".$di1."<br><br>"."2. ".$di2."<br><br>"."3. ".$di3."</h4>";

// echo "called";
$sql="delete from online_food where dish1='ras';"; //DELETION
$result=$con->query($sql);//DELETION
?>
<br>
<form>
<button type="button" onclick="alert('Hello world!')">Click Me!</button>
</form>

    </div>
    </div>
    </div>
</body>
</html>