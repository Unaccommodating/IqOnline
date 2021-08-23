<?php

$data = [
  "summn1" => $_POST['summn1'],
  "summadd" => $_POST['summadd'],
  "yearNum" => $_POST['yearNum'],
  "radio" => $_POST['radio']
];

// $summn1 = $_POST['sum'];
// $summadd = $_POST['pay'];
$daysy = 365;  
$daysn = 30; // не знаю, каким образом взять количество дней с помощью datepicker
// $yearNum = $_POST['year'];
// $radio = $_POST['radio'];
if($data['radio'] == 'no')
  $summadd = 0;
$summn = $data['summn1'] + ($data['summn1'] + $data['pay']) * $daysn * (0.1 / $daysy * $data['yearNum']);  
$result = substr($summn, 0, -6);
$message= array(
  'message' => '<span>Результат:</span> '. $result. " руб.",
);
print_r($message);

?>