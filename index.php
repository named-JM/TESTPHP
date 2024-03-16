
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <form action="index.php" method="post">
    <label for="">username:</label> <br>
    <input type="text" name="username" id=""> <br>

    <label for="">password:</label> <br>
    <input type="password" name="password" id=""> <br>

    <input type="submit" value="Log in">
</form> -->


<!-- <form action="index.php" method="post">
    <label for="">x: </label> <br>
    <input type="text" name="x">

</form>

<br><br>

<form action="index.php" method="post">
    <label for="">enter a number to count to</label>
    <input type="text" name="counter" id="">
    <input type="submit" value="start"> -->
</form>
</body>
</html>




<?php

    //get hold more value it is techinicaly array just getting and displaying i think
    // echo "{$_GET["username"]} <br>";
    // echo "{$_GET["password"]} <br>";

    //post comes in when the password and username is in the url which is theres no security at all.
    // echo "{$_POST["username"]}";
    // echo "{$_POST["password"]}";
//     $item = "pizza";
// $price = 5.00;
// $total = null;

// if(isset($_POST["quantity"])) {
//     $quantity = $_POST["quantity"];
//     $total = $quantity * $price;
//     echo "You have ordered {$quantity} x {$item}/s <br>";
//     echo "Your total is \${$total}";
// } else {
//     echo "Please enter a quantity.";
// }

    // $x = $_POST["x"];
    // $total = null;

    //total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);

    // echo $total;


    // $age = 21;
    // if($age >= 18){
    //     echo "you may enter this sit";
    // }


    //for loop count to

    // $counter = $_POST["counter"];

    // if(isset($_POST["counter"])){
    //     $counter = $_POST["counter"];

        
    // for($i = 0; $i <= $counter; $i++){
    //     echo $i . "<br>";
    // }

//}


        //ARRAY!!!

        $foods = array("apple", "orange", "banana", "coconut");

        echo $foods[0] . "<br>";

        //array call the elemetns in array!!

        foreach($foods as $food){
            echo $food . "<br>";
        }

?>

