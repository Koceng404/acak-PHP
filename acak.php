<?php
 
function randomString($length)
{
    $str        = "";
    $characters = '1234567890';
    $max        = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}
 
for ($i= 1; $i <= 100000; $i++)
{
echo "".randomString(4)."
";
}
?>
