<?php
echo $project_name;
foreach($comp as $co)
{
    echo "<br>";
    echo $co->comp_location;
    echo "<br>";
    echo $co->pro_city;
    echo "<br>";
    echo $co->comp_img;
    echo "<br>";
    echo $co->comp_name;
    echo "<br>";
}

?>