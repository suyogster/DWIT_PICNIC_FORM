
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>DWIT Picnic Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />

</head>
<body>



<!-- multistep form -->
<form id="msform" action="redirect.php" method="post">

    <h1> DWIT PICNIC REGISTRATION FORM</h1><br>
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Food Preference</li>
        <li>Personal Details</li>
    </ul>

    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Food Preference</h2>
        <h3 class="fs-subtitle">Select any one from the dropbox</h3>

        <select name="food">
            <option value="Vegeterian">Vegeterian</option>
            <option value="Non-Vegeterian">Non-Vegeterian</option>
        </select><br>

        <input type="button" name="next" class="next action-button" value= "Next" />

    </fieldset>


<fieldset>
        <h2 class="fs-title">Personal Details</h2>
        <h3 class="fs-subtitle">DWIT PICNIC</h3>
        <input type="text" name="name" placeholder="Name" />
        <input type="text" name="batch" placeholder="Batch" />
        <input type="text" name="phone" placeholder="Phone" />
        <input type="text" name="email" placeholder="Email" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>

</form>


</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="http:///ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/jquery.js" ></script>