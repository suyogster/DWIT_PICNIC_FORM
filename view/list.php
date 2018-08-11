<?php
require_once("session_start.php");
require("redirect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="bs-example container" data-example-id="striped-table">
    <table class="table table-striped table-bordered table-hover">
        <h2 align="middle">DWIT PICNIC RESULT</h2>
        <p><?php echo "Name: " . $_SESSION['name']?></p>
        <p><?php echo "Batch: " . $_SESSION['batch']?></p>
        <p><?php echo "Phone no: " . $_SESSION['phone']?></p>
        <p><?php echo "Email: " . $_SESSION['email']?></p>
        <caption>Congratulation! You're food preference with personal details are listed in this page</caption>
        <thead>
        <tr>
            <th>Number</th>
            <th>Food Type</th>
            <th>Breakfast</th>
            <th>Lunch and Dinner</th>
            <th>Desert</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td><?php echo $_SESSION['food']?></td>
            <td><?php if(isset($_SESSION["breakfast"])){
                    foreach ($_SESSION["breakfast"] as $value) {
                        echo $value . "<br>";
                }
                }
            ?></td>
            <td><?php if(isset($_SESSION["lunchDinner"])){
                foreach ($_SESSION["lunchDinner"] as $value){
                    echo $value . "<br>";
                }
                }

            ?></td>
            <td><?php if(isset($_SESSION["desert"])){
                foreach ($_SESSION["desert"] as $value){
                    echo $value . "<br>";
                }
                }

                ?></td>
        </tr>
        </tbody>
        <tfoot>
        <tr class="note"><th></th><td colspan=4><a href="#">For more info, Contact us</a></td></tr>
        </tfoot>
    </table>
</div>
</body>
</html>