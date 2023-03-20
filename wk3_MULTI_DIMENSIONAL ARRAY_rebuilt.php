<?php
/// Gross icinde iki tane earay actik
/// ikinci filtirledik arrray require yaptik ,
$gross= filter_input(INPUT_POST, 'gross', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if ($gross === NULL) {
    $gross= ['countries' => [], 'cities' =>[ ]];
}
// actigimiz arrayler bir daha loopladik , ic ic araylerde array filter kullaniliyor
$countries=array_filter($gross['countries']);
foreach ($countries as $display_countries) {
    echo "<p1> Countries :</p1>";
    echo "<li>$display_countries</li>";
}
echo "</ul>";

$cities=array_filter($gross['cities']);
foreach ($cities as $display_cities) {
    echo "<p2> Cities :</p2>";

    echo "<li>$display_cities</li>";
}
echo "</ul>";


?>





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
<form action="" method="post">

<label>Countries</label>
<input type="text" name='gross[countries][]' value="Russia">
<input type="text"name='gross[countries][]' value="Iran">
<input type="text" name='gross[countries][]'  required value="Turkey">

<br>


<label>Cities</label>
<input type="text" name="gross[cities][]"  required value="Toronto">
<input type="text" name="gross[cities][]" value="Istanbul">
<input type="text" name="gross[cities][]" value="California">


<p1><input type="submit" value="submit" name="submit" </p1>

</form>
</body>
</html>

<script src=https://my.gblearn.com/js/loadscript.js></script>


<hr><code><span style="color: #000000">
&lt;!DOCTYPE&nbsp;html&gt;<br />&lt;html&nbsp;lang="en"&gt;<br />&lt;head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;charset="UTF-8"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Template&lt;/title&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="description"&nbsp;content="Template"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="author"&nbsp;content="your&nbsp;name"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="viewport"&nbsp;content="width=device-width,&nbsp;initial-scale=1.0"&gt;<br /><br />&lt;/head&gt;<br />&lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;script&nbsp;src=https://my.gblearn.com/js/loadscript.js&gt;&lt;/script&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;<br /><br /><span style="color: #0000BB">&lt;?php&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"&lt;hr&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">show_source</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">);&nbsp;<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code>
<?php
echo "<hr>";
show_source(__FILE__);
?>