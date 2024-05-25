<?php
// What is file_get_content()
// JSON Request -> Response
// json_decode()

if($_SERVER['REQUEST_METHOD'] == "POST"){
  
    // plainText to plaintext
    $PlainText = file_get_contents("php://input");
    echo $PlainText;

    //Plaintext to Array
    $PlainText = file_get_contents("php://input");
    $planArray= json_decode($PlainText,true);
    echo $PlainText;
   

    //Associative array to object encode
    $PlainText = file_get_contents("php://input");
    $planArray= json_decode($PlainText,true);
    $sum=$planArray['num1']+$planArray['num2'];
    $sub=$planArray['num1']-$planArray['num2'];
    $multi=$planArray['num1']*$planArray['num2'];
    $div=$planArray['num1']/$planArray['num2'];

    $result=["sum"=>$sum, "sub"=>$sub, "multi"=>$multi, "div"=>$div];
    $JSON=json_encode($result);
    echo $JSON;
}



