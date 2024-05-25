<?php
// Set Cookies Store
if($_SERVER['REQUEST_METHOD'] == "POST"){
  
    $PlainText= file_get_contents("php://input");
    $planArray= json_decode($PlainText,true);
    $username = $planArray['username'];
    setcookie("username", $username, ["expires"=>time()+3600]);

    echo "Cookies Success";
}

// Delete Cookies Store
if($_SERVER['REQUEST_METHOD'] == "DELETE"){

    setcookie("username", "", ["expires"=>time()-3600]);

    echo "Cookies Delete Success";
}
// Read Cookies Store
if($_SERVER['REQUEST_METHOD'] == "GET"){

    echo "$_COOKIE[username]";
}