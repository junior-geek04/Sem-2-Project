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

        .cen {
            float: center;
            margin-left: 16%;
            margin-top: 12%;


        }

        .cen1 {
            float: center;
            margin-left: 56%;
            margin-top: -23%;


        }

        body {
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
            <div class="boxi">
                <h1 style="text-align: center; color:#18034e;">Your Order</h1>
                <?php
                $nam = $_POST['fname'];
                $di1 = $_POST['d1'];
                $di2 = $_POST['d2'];
                $di3 = $_POST['d3'];


                $con = new mysqli("localhost", "root", "", "online_order");



                $sql = "insert into online_food values('$nam','$di1','$di2','$di3');";
                $res = $con->query($sql);



                echo "<h3>" . "Order Owner: " . $nam . "</h3>";
                echo "<h4>" . "1. " . $di1 . "<br><br>" . "2. " . $di2 . "<br><br>" . "3. " . $di3 . "</h4>";



                $p = "Tea";
                $sql = "delete from online_food where name='dev';"; //DELETION
                $result = $con->query($sql); //DELETION
                ?>

                <br>
                <form>
                    <input type="submit" onclick="alert('Order Deleted')" value="Delete Order!" name="del">

                </form>

            </div>
        </div>


        <div class="cen1">
            <div class="boxi">
                <h1 style="text-align: center; color:#18034e;">Order Status</h1>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                    <p class="name"><b>
                            Enter Name of person whose order you want to see :</b></p>
                    <p>
                        <input type="text" name="fname" placeholder="Name" class="name-inp">&nbsp;&nbsp;
                        <input type="submit" value="submit" name="submit">
                    </p>
                </form>
                <?php

                if (isset($_POST['submit'])) {
                    $con = new mysqli("localhost", "root", "", "online_order");

                    $n = $_REQUEST['fname'];

                    $sql = "select dish1, dish2, dish3 from online_food where name='$n';";
                    $result = $con->query($sql);
                    $fin = $result->fetch_assoc();
                    echo "<h4>Customer whose name is  " . $n . " Has ordered" . "</h4>" . "<h3>" . "1. " . $fin['dish1'] . "<br>" . "2. " . $fin['dish2'] . "<br>" . "3. " . $fin['dish3'] . "</h3>";
                }
                ?>




            </div>
        </div>
    </div>
</body>

</html>