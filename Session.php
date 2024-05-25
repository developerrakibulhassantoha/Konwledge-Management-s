<?php
// Set Session Store
if($_SERVER['REQUEST_METHOD'] == "POST"){
  
    $PlainText= file_get_contents("php://input");
    $planArray= json_decode($PlainText,true);
    $username = $planArray['username'];
    session_start();
    $_SESSION['username']=$username;
    echo "Success Login";
}
// Read From Session Store
if($_SERVER['REQUEST_METHOD'] == "GET"){
    session_start();
    echo $_SESSION['username'];

}

// Delete from Session Store
if($_SERVER['REQUEST_METHOD'] == "DELETE"){
    session_start();
    unset($_SESSION['username']);
    session_destroy();
    echo "Session Destroy";
}


