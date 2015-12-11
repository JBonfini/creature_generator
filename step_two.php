<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Creature Generator</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/uniform.default.css">
</head>
<body>

<div id="holder">

<h1>Seneca College</h1>
<h2>Webmaster Program</h2>
<h3>Creature Generator</h3>


<!-- PHP 1 -->
<?php
    $full_name = $_POST['full_name'];
    $creature = $_POST['creature_type'];

    if (isset ($_POST['full_name']) && !empty($_POST['full_name'])) {
        $full_name = $_POST['full_name'];
        $full_name = strip_tags($full_name);
        $full_name = htmlspecialchars($full_name);
        $full_name = strtolower($full_name);
        $full_name = ucwords($full_name);
    } else {
        $full_name = '';   
    }
?>


<p>Thanks <?php echo $full_name; ?></p>
<p>Today is <?php echo date('l F jS Y '); ?> and it’s been a busy day. But don’t worry! The Greys are always there to make sure youre sleeping safe and sound at night. Remember, when you see your T.V. acting funny- typically around midnight, that means theyre HUNGRY! Their favorite food are humans....Just kidding. The Greys obtain their meals through direct sunlight and the Earths air.</p>



<!-- PHP 2 -->
<?php

    //------- Array --------
    $aliens_description = array(' Hello. I am alien #1. I am coming to tickle you!',' Hello. I am alien #2. I am coming to give you a double-dose of tickling!',' Hello. I am alien #3. I am going to give you a triple dose of tickling!',' Hello. I am alien #456789. Run...');
    $robots_description = array(' Hello. I am robot #1. I am going to drive you to work!',' Hello. I am robot #2. I am going to fly you to Paris for a nice glass of wine!',' Hello. I am robot #3. I am going to teleport you to the Brasil!',' Hello. I am robot #4. INTERSTELLAR SPACE WE GO!');
    
    //echo $aliens_description[2];

    $aliens_random = $full_name.$aliens_description[mt_rand (0, 3)];
    $robots_random = $full_name.$robots_description[mt_rand (0, 3)];
    
    //echo $aliens_random;
    //echo $robots_random;
?>
   
<!-- PHP 3 -->
<?php
    if ($creature == 'alien') {
        $results_text = $aliens_random; 
        $results_img = "<img src='images/alien.png' alt='alien' height='228' width='158'>";
    } else {
        $results_text = $robots_random;
        $results_img = "<img src='images/robot.png' alt='alien' height='228' width='158'>";
    }
?>

<p>
	<input id="results_button" type="submit" value="See your results!">
</p>



<div id="scroll_down">
<?php
    echo $results_text; 
    echo $results_img;    
?>
</div>



</div><!-- END HOLDER -->

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script>
jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
</script>

<!-- SLIDE DOWN EFFECT -->
<script>
    
$('#scroll_down').hide();
    
$(document).ready(function () {
    $('#results_button').click(function () { 
        $('#scroll_down').slideDown(700);
    });
});
    
</script>
</body>
</html>
