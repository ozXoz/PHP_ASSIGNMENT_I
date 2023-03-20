<?php
$plants = [];
if(isset($_POST['submit'])) {
    $plants = $_POST['kush'];
}
?>

// En onemli durum     $plants = $_POST['kush']; postun icindeki  yer ile form icindeki name ayni olmak zorunda


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>From-checkboxes</title>
    <meta name="description" content="Checking values of checkboxes/radio buttons">
    <meta name="author" content="Mak Nikooray">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<form method="post" action="">


    <input type="checkbox" name='kush[]' value="Ice Cream Gas"> Ice Cream Gas
    <input type="checkbox" name='kush[]' value="Blue Berry Gas"> Blue Berry Gas<br>
    <input type="checkbox" name='kush[]' value="OG Sundel Homegrown"> OG Sundel Homegrown
    <input type="checkbox" name='kush[]' value="Deaf Bubble"> Deaf Bubble

    <p><input type="submit" value="Submit" name="submit"></p>
</form>

<?php

if(!empty($plants)) {
    echo "<h2>You have choose :</h2>";

    foreach($plants as $display){
        echo "<li>$display</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>

<?php
echo "<hr>";
show_source(__FILE__);
?>