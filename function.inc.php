<?php 

function post($txt){
    $t = $_POST[$txt];
    return $t;
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}