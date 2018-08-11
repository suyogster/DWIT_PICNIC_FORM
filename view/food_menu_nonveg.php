
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Choices</title>
    <link rel="stylesheet" type="text/css" href="../css/style1.css" />
</head>
<body>
<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1 align="middle">Food Choices</h1>
        <form id="msform" action="redirect.php" method="post">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">BreakFast</li>
                <li>Lunch and Dinner</li>
                <li>Desert</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">BreakFast</h2>
                <h3 class="fs-subtitle">Select any of the listed food items (Multiple choice are allowed) </h3>
                <input type="checkbox" name="breakfast[0]" value="Sandwich">Sandwich<br>
                <input type="checkbox" name="breakfast[1]" value="French Toast">French Toast<br>
                <input type="checkbox" name="breakfast[2]" value="Doughnut and Cake">Doughnut and Cake<br>
                <input type="checkbox" name="breakfast[3]" value="Crossant and French Fries">Crossant and French Fries<br>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Launch and Dinner</h2>
                <h3 class="fs-subtitle">Select any of the listed food items (Multiple choice are allowed)</h3>
                <input type="checkbox" name="lunchDinner[0]" value="Chicken Khana Set">Chicken Khana Set<br>
                <input type="checkbox" name="lunchDinner[1]" value="Fish Khana Set">Fish Khana Set<br>
                <input type="checkbox" name="lunchDinner[2]" value="Buff Fried Rice">Buff Fried Rice<br>
                <input type="checkbox" name="lunchDinner[3]" value="Egg Fried Rice">Egg Fried Rice<br>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Desert</h2>
                <h3 class="fs-subtitle">Select any of the listed food items (Multiple choice are allowed)</h3>
                <input type="checkbox" name="desert[0]" value="Vanilla IceCream">Vanilla IceCream<br>
                <input type="checkbox" name="desert[1]" value="Black Forest Cake">Black Forest Cakes<br>
                <input type="checkbox" name="desert[2]" value="Curd and Sweets">Curd and Sweets<br>
                <input type="checkbox" name="desert[3]" value="Jerry and Haluwa">Jerry and Haluwa<br>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit-nonveg" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
    </div>
</div>
<!-- /.MultiStep Form -->
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="http:///ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/jquery1.js" ></script>