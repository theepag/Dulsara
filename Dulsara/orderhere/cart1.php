<?php
session_start();
?>
<?php
if (empty($_SESSION['cus_id'])) {
    header('location: buriyani1.php');
}

$hostname = "localhost";
$user = "root";
$passwordC = "";
$database = "restaurant";
$conn = mysqli_connect($hostname, $user, $passwordC, $database)
        or die("Unable to connect MYSQL");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            foreach($_SESSION["shopping_cart"] as $keys => $values){
            
            $quantity = $_SESSION["item_quantity"];
            $itemid = $_SESSION["item_id"];
            $userid = $_SESSION['cus_id'];
            
            
            $sql = "INSERT INTO cart (cus_id,food_id,quantity,isActive) VALUES ('" . $userid . "','" . $itemid . "','" . $quantity . "','1')";
            
            $result = mysqli_query($conn, $sql);
          //  $row = mysqli_fetch_array($result);
            if ($result > 0) {
                echo 'Successfully added';
               // header('location: cart1.php');
            } else {
                echo 'There is an error to add';
            }
        }
        }
        ?>


    </body
    >
</html>
