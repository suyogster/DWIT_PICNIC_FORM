
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
                <li class="active">Breakfast</li>
                <li>Lunch and Dinner</li>
                <li>Desert</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">BreakFast</h2>
                <h3 class="fs-subtitle">Select any of the listed food items (Multiple choice are  allowed) </h3>
                <input type="checkbox" name="breakfast[]" value="Veg Sandwich">Veg Sandwich<br>
                <input type="checkbox" name="breakfast[]" value="Toast and jam">Toast and Jam<br>
                <input type="checkbox" name="breakfast[]" value="Puri Tarkari">Puri Tarkari<br>
                <input type="checkbox" name="breakfast[]" value="Crossant and French Fries">Crossant and French Fries<br>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Lunch and Dinner</h2>
                <h3 class="fs-subtitle">Select any of the listed food items (Multiple choice are allowed)</h3>
                <input type="checkbox" name="lunchDinner[]" value="Veg Khana set">Veg Khana set<br>
                <input type="checkbox" name="lunchDinner[]" value="Chola Bhatura">Chola Bhatura<br>
                <input type="checkbox" name="lunchDinner[]" value="Roti and Curry">Roti and Curry<br>
                <input type="checkbox" name="lunchDinner[]" value="Naan and Curry">Naan and Curry<br>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Desert</h2>
                <h3 class="fs-subtitle">Select any of the listed food items (Multiple choice are allowed)</h3>
                <input type="checkbox" name="desert[]" value="Curd and Sweets">Vanilla Icecream<br>
                <input type="checkbox" name="desert[]" value="Rasbaurry">Curd and Sweets<br>
                <input type="checkbox" name="desert[]" value="Jerry and Puri">Black Forest Cake<br>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit-veg" class="submit action-button" value="Submit"/>
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