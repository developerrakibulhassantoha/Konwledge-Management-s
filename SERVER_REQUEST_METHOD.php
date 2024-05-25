<?php
// What is $_SERVER["REQUEST_METHOD"]

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "This is Post Request";
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "This is Get Request";
}

if($_SERVER["REQUEST_METHOD"] == "PUT"){
    echo "This is Put Request";
}

if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    echo "This is Delete Request";
}

if($_SERVER["REQUEST_METHOD"] == "PATCH"){
    echo "This is Patch Request";
}

