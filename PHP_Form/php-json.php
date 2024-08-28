<?php
// $user=["name"=>"anil","age"=>30,"email"=>"anil@abc.com"];
// $userJson=json_encode($user);
// print_r($user);
// echo $userJson;

$data='{"name":"anil","age":30,"email":"anil@abc.com"}';
$dataArray= json_decode($data,true);
print_r($dataArray)


?>