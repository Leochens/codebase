<?php 
function smarty_function_area($arr)
{
    $width = $arr['width'];
    $height = $arr['height'];

    $area = $width * $height;

    return $area;

}


 ?>