<?php
$users=["anil","peter","sam","bruse","tony","anil","sam"];
// $users="abc";
$user=["name"=>"anil","age"=>30,"email"=>"abc@test.com"];

// if(is_array($users)){
// 	echo "this is an array";
// }else{
// 	echo "this is not am array";
// }

// echo count($users);
// unset($users);
// unset($users[3]);
// array_push($users,"sidhu");
// array_pop($users);
// print_r($users);
// print_r(array_keys($user));
// echo implode($users);
// $str="hello how are you prami";
// print_r(explode(" ",$str));
// print_r(explode(",",$str));

// print_r(array_merge($user,$users));
$data= array_unique($users);
print_r($users);




?>