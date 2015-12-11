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



<p>
    <a href="step_one.php"><input id="button" type="submit" value="Back to first page"></a> <!-- Validation error on "a" attribute. Say's the element input must not appear as a descendant of the a element -->
</p>



<!--
==============================
=                            =
=         START PHP 1        =
=                            =
==============================
-->
<?php
    
    if (isset ($_POST['full_name']) && !empty($_POST['full_name']) && isset ($_POST['creature_type']) ) {
        $creature = $_POST['creature_type'];
        $full_name = $_POST['full_name'];
        $full_name = strip_tags($full_name);
        $full_name = htmlspecialchars($full_name);
        $full_name = strtolower($full_name);
        $full_name = ucwords($full_name);

?>

<div id="p2_content">

<p>Thanks, <?php echo $full_name; ?></p>
<p>Today is <?php echo date('l F jS Y '); ?> and it’s been a busy day. But don’t worry! The Greys are always there to make sure you're sleeping safe and sound at night. Remember, when you see your T.V. acting funny- typically around midnight, that means they're hungry. Their favorite food are humans....Just kidding. The Greys obtain their meals through direct sunlight and the Earths air.</p>



<!--
==============================
=                            =
=           PHP 2            =
=                            =
==============================
-->
<?php

    //------- Array --------
    $aliens_description = array(' I am alien #1. I am coming to tickle you!',' I am alien #2. Here comes a double-dose of tickling!',' I am alien #3. I am going to give you a triple dose of tickling!',' I am alien #4. Run!');
    $robots_description = array(' I am robot #1. I am going to drive you to work!',' I am robot #2. I am going to fly you to Paris for a nice glass of wine!',' I am robot #3. I am going to teleport you to the Brasil!',' I am robot #4. INTERSTELLAR SPACE WE GO!');
    
    //echo $aliens_description[2];

    $aliens_random = $aliens_description[mt_rand (0, 3)];
    $robots_random = $robots_description[mt_rand (0, 3)];
    
    //echo $aliens_random;
    //echo $robots_random;
?>
   
<!--
==============================
=                            =
=           PHP 3            =
=                            =
==============================
-->

<p>
	<input id="results_button" type="submit" value="See your results!">
</p>

<div id="scroll_down">
<?php
    if ($creature == 'alien') {
        echo $full_name . 'zula!';
        $results_text = $aliens_random;
        $results_img = "<img src='images/alien.png' alt='alien' height='300' width='200'>";
    } else {
        echo $full_name . 'bot!';
        $results_text = $robots_random;
        $results_img = "<img src='images/robot.png' alt='alien' height='300' width='200'>";
    }
        
    echo $results_text; 
    echo $results_img;
?>
</div>





<!--
==============================
=                            =
=           END PHP 4        =
=                            =
==============================
-->



</div><!-- END p2_content -->

<?php
        
    } else {

        $full_name = '';
        echo "<font color='red'><p>Please fill in ALL the required fields!</p></font>";
    } 

    //EMAIL FUNCTION
    //$to = "eric.chen@senecacollege.com";
    //$subject = "Creature Generator";
    //$message = 'Name: '.$first_name.', Creature Type: '.$creature.', Message:'.$results_text;
    //mail($to,$subject,$message);

?>





</div><!-- END HOLDER -->

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script>
jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
</script>

<!-- SLIDE DOWN EFFECT / RADIO BUTTON VALIDATION -->
<script>

//Slide down effect    
$('#scroll_down').hide();
    
$(document).ready(function () {
    $('#results_button').click(function () { 
        $('#scroll_down').slideDown(700);
    });
});
    

    
</script>
</body>
</html>
