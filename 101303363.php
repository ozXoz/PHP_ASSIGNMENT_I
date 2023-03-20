<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <meta name="description" content="Template">
    <meta name="author" content="your name">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Onur Korkmaz 101303363</h1>

<style class="size">

    .font_size{

        font-size: 12px;


    }



</style>


<?php

    $course_list= array ("COMP1223"=>"Web Development Fundamentals","COMP1168"=>"Database Management",
    "COMP1202"=>"Object-Oriented Programming","COMP3044"=>"Linux Essentials","COMP1230"=>"Advanced Web Programming",
    "COMP2130"=>"Application Development using Java");
    $output="";
    $submit="";
    $first_name="";
    $last_name="";
    $student_id="";
    $font_size="";
    $font_style="";
?>



    <form action="101303363.php" method="post">
<label for="fname">First name</label>
    <input type="text" name="f_name" id="f_name" placeholder="Onur" value=""><br>
        <?php
        if (isset($_POST['f_name'])){
            $first_name=$_POST['f_name'];
            $output="$first_name";



        }
        ?>


<label for="lname">Last name</label>
<input type="text" name="l_name" id="l_name" placeholder="Korkmaz" value=""><br>
        <?php
        if (isset($_POST['l_name'])){
            $last_name=$_POST['l_name'];
        }
        $output= "<h2>$last_name</h2>";
        ?>


    <label for="student_id">Student ID</label>
    <input type="text" name="id_student" id="id_student" placeholder="101303363" value=""><br>

        <?php
        if (isset($_POST['id_student'])){
            $student_id=$_POST['id_student'];
            $output="<h2>$student_id</h2>";
        }
        ?>
    <label for="courses>">Choose Courses</label>


    <select id="courses" name="all_courses">

        <option value="<?php echo "COMP1168=" .$course_list['COMP1168']?>">COMP1168</option>
        <option value="<?php echo "COMP1202 =". $course_list['COMP1202']?>">COMP1202</option>
        <option value="<?php echo "COMP3044 =". $course_list['COMP3044']?>">COMP3044</option>
        <option value="<?php echo "COMP1202 =". $course_list['COMP1202']?>">COMP1202</option>
        <option value="<?php echo "COMP1230 =". $course_list['COMP1230']?>">COMP1230</option>
        <option value="<?php echo "COMP2130 =". $course_list['COMP2130']?>">COMP2130</option>
    </select>
        <?php
        if (isset($_POST['all_courses'])) {
            $course_list = $_POST['all_courses'];
            $output= "$course_list";
        }

        ?>



            <br>
        <span>Please choice font style</span><br/>
        <input type="checkbox" name='font_style[]' value="strong"> Strong <br/>
        <input type="checkbox" name='font_style[]' value="uppercase"> Uppercase <br/>
        <input type="checkbox" name='font_style[]' value="underline"> Underline <br/>
        <?php
        if(isset($_POST['submit'])){

            if(!empty($_POST['font_style'])) {

                foreach($_POST['font_style'] as $value){
                    echo "Chosen font style :"."<h3>$value<h3>".'<br/>';
                }

            }

        }
        ?>

        <br>




        <input type="radio" name="font_size" value="12 size">12 size
        <input type="radio" name="font_size" value="18 size">18 size
        <input type="radio" name="font_size" value="24 size">24 size
        <?php
        if (isset($_POST['font_size'])){
            $font_size=$_POST['font_size'];
            if($_POST['font_size']==="12"){



            }
            echo "<h1>$font_size</h1>";


        }


        ?>

        <input type="submit" name="submit" value="submit">
            <br> <br><br> <br>
        <?php
        if (isset($_POST['submit'])){

            $submit=$_POST['submit'];


        }


        ?>

        <?php
        echo strtoupper("<h1>$first_name $last_name $student_id</h1> ");


        ?>
</form>

<a href="onur.php">Click Here For The Next Step</a>


<script src=https://my.gblearn.com/js/loadscript.js></script>

</body>
</html>

<hr><code><span style="color: #000000">
&lt;!DOCTYPE&nbsp;html&gt;<br />&lt;html&nbsp;lang="en"&gt;<br />&lt;head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;charset="UTF-8"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Template&lt;/title&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="description"&nbsp;content="Template"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="author"&nbsp;content="your&nbsp;name"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="viewport"&nbsp;content="width=device-width,&nbsp;initial-scale=1.0"&gt;<br /><br />&lt;/head&gt;<br />&lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;script&nbsp;src=https://my.gblearn.com/js/loadscript.js&gt;&lt;/script&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;<br /><br /><span style="color: #0000BB">&lt;?php&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"&lt;hr&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">show_source</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">);&nbsp;<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code>