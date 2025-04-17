<?php
$people = array(
    'person1'=>'Taro',
    'person2'=>'Jiro',
    'person3'=>'Suburo'
);

foreach($people as $person => $name){
    print $person ."は" . $name ."です" . "<br />";
}