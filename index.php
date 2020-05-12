<?php
$str="abcdefgchikclm";
$char = "c";
$count =0;
for ($i=0;$i<strlen($str);$i++){
    if ($str[$i] ==$char){
        $count++;
    }
}
echo $count;