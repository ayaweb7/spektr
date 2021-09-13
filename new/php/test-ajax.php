<?php
if(!isset($_POST['name'])|| !isset($_POST['email']) || 
!isset($_POST['skills']) ) die('Нет нужных данных');

$res = '';
foreach($_POST as $key=>$value){
    if($key == 'name') $first = 'Имя (Логин)';
    if($key == 'email') $first = 'Email';
    if($key == 'skills') {
        $first = 'Знания:'; 
        if(is_array ($value))$value = implode(', ', $value);
    }
    $res .= "<tr><td>$first</td><td>$value</td></tr>";
}
echo $res;
die();
?>