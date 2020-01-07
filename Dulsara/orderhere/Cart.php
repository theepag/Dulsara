<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <body>

        <h2>Welcome</h2>
        <?php
        $name = $_SESSION['cus_fname'];
        $userid = $_SESSION['cus_id'];

        echo "Username :" . $name . "<br> <br>";
        //echo $ID;

        if (empty($_SESSION['cus_fname'])) {
            header("location:view.php");
        }
        $con = mysqli_connect("Localhost", "root", "", "restaurant");
        mysqli_select_db($con, "restaurant");
        $QT = $_SESSION["Quantity"];

       $ID = $_SESSION["order_id"];
 //$ID=$_GET["Item"];
        $Q3 = "select * from orders where order_id='$ID'   ";
        $result = mysqli_query($con, $Q3);
        //$row= mysqli_fetch_assoc($result);
        while ($row = mysqli_fetch_assoc($result)) {
            $Item = $row['food_name'];
            $UP = $row['unit_price1'];
            $Amt = $QT * $UP;
        }

        $Q4 = "insert into orders(cus_id,food_id,Quantity,total,food_name) values ('$userid','$ID','$QT','$Amt','$Item')";
        if (mysqli_query($con, $Q4)) {
            
        }
        echo "<table>";
        echo "<tr>";
        echo "<th>No";
        echo "<th>Item Name";
        echo "<th>Quantity";
        echo "<th>Amount";
        echo "</tr>";
        $No=1;
        $Q6 = "select * from orders where user_id='$userid'   ";
        $result3 = mysqli_query($con, $Q6);
        while ($row = mysqli_fetch_assoc($result3)) {
            echo "<tr>";
            echo "<td>" . $No++. "</td>";
            echo "<td>" . $row['food_name'] . "</td>";
            echo "<td>" . $row['Quantity'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $TP = 0;
        $Q5 = "select * from orders where cus_id='$userid'   ";
        $result1 = mysqli_query($con, $Q5);
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $tp = $row1['total'];

            $TP = $TP + $tp;
        }
        echo "<br> <br>";
        echo "Total Price :<b> RS." . $TP . "<br> <br>";
        ?>
    </body>
</html>

