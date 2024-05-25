<?php
//Associative array to json array encode

$person=[
    ["name"=>"Rakibul Hassan  Babo", "age"=>24,"City"=>"Cox's Bazar"],
    ["name"=>"Rakibul", "age"=>24,"City"=>"Cox's Bazar"],
    ["name"=>"Hassan", "age"=>24,"City"=>"Cox's Bazar"],
    ["name"=>"Babo", "age"=>24,"City"=>"Cox's Bazar"]
];

$JSON=json_encode($person);
echo $JSON;

//This example decodes JSON data into a PHP object:
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj,));

//This example decodes JSON data into a PHP associative array:
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj, true));

//This example shows how to access the values from a PHP object:
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;

//This example shows how to access the values from a PHP associative array:
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];


//This example shows how to loop through the values of a PHP object:
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}


//This example shows how to loop through the values of a PHP associative array:
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}