<?php
$first_name="Onr";
$last_name="Korkmaz";
$student_id=101303363;

$courses=["COMP 1168"=>'Database Management',
            "COMP 1202"=>'Object-Oriented Programming',
            "COMP 1231"=>'Web Programming',
            "COMP 2130"=>'Application Development using Java',
            "COMP 2138"=>'Advanced Database Development',
            "COMP 3044"=>'Linux Essentials'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <meta name="description" content="Template">
    <meta name="author" content="your name">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    #font_style{

        <?php

        if (isset($_POST['strong']))
            echo 'font-weight: bold;';
        if (isset($_POST['uppercase']))
            echo 'text-decoration: underline;';
        if (isset($_POST['underline']))
            echo 'text-decoration: uppercase;';

        if (isset($_POST['fontsize1']))
            echo 'font-size: 12px;';
         if (isset($_POST['fontsize2']))
            echo 'font-size: 18px;';
          if (isset($_POST['fontsize3']))
            echo 'font-size: 24px;';

          // uzun yoldan yapmak istemessen hoca soyle yapmis

          // echo 'font-size' ($_POST[fontsize1] ?? '12pt'); ama bunu yaparken tum name ayni olmasi gerek html.de;



        ?>




    }




</style>
</head>



<body>
<h1> <? echo $first_name, "", $last_name, "", $student_id ;?></h1>
<form action="" method="post">

   First Name <input type="text" name="first_name" value="<?=$first_name;?>">
    Last Name<input type="text" name="last_name" value="<?=$last_name;?>">
     Student ID <input type="text" name="student_id" value="<?=$student_id;?>">

    <label for="courses">Choose your browser from the list:</label>

    <hr>

    <input list="courses" name="courses" id="courses">

    <datalist id="courses">
        <?php

        foreach ($courses as $course_name){
            $courses=$_POST['courses'];
            echo "<option value='$course_name'>";
        }

        ?>
    </datalist>

    Strong <input type="checkbox" name="strong" value="strong">
     Uppercase<input type="checkbox" name="underline" value="underline">
     Underline <input type="checkbox" name="uppercase" value="uppercase">
    <hr>

   12 PT<input type="radio" name="fontsize1" value="12pt">
    18 PT<input type="radio" name="fontsize2" value="18pt">
    24 PT<input type="radio" name="fontsize3" value="24pt">

    <hr>

    <input type="submit" name="submit" value="submit">

</form>

<?php

if (isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $student_id=$_POST['student_id'];
// sonucu buyuk yapmam gerekli sonra bakacam
    echo "<h2>$first_name $last_name $student_id</h2>";
    echo "<div id='font_style'>$first_name $last_name $student_id</div>";

    $display="";
    foreach ($_POST as $key=> $value){
        $display="$key=$value&";

    }
    echo "<p1><a href='rebuilt_assigment_sec_page.php'$display>Go to Second Page Please</p1>";





}


?>



</body>
</html>

<script src=https://my.gblearn.com/js/loadscript.js></script>


<hr><code><span style="color: #000000">
&lt;!DOCTYPE&nbsp;html&gt;<br />&lt;html&nbsp;lang="en"&gt;<br />&lt;head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;charset="UTF-8"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Template&lt;/title&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="description"&nbsp;content="Template"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="author"&nbsp;content="your&nbsp;name"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="viewport"&nbsp;content="width=device-width,&nbsp;initial-scale=1.0"&gt;<br /><br />&lt;/head&gt;<br />&lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;script&nbsp;src=https://my.gblearn.com/js/loadscript.js&gt;&lt;/script&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;<br /><br /><span style="color: #0000BB">&lt;?php&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"&lt;hr&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">show_source</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">);&nbsp;<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code>