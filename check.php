<html>
    <head>
        <title>check login</title>
    </head>
    <body>
        <?php
        $v1=$_POST['uname'];
        $v2=$_POST['password'];
        // echo "yes"."<br>";
      
        if($v1=="abc" && $v2==123)
{
    echo "yes"."<br>";
    header("Location:index.html");
}
else
{
   header("Location: wrong.php");
}
        ?>
    </body>
</html>