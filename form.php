<?php 

$unameemp = "";
$pasemp = "";
$webemp = "";
$genemp = "";
$cremp = "";
$stgemp = "";
$cmtemp = "";
if(isset($_POST["sub"])){
    //echo "hello";
    if(!empty($_POST["uname"]) || !empty($_POST["pswd"]) || !empty($_POST["web"]) || !empty($_POST["gen"]) || !empty($_POST["course"]) || !empty($_POST["stage"]) || !empty($_POST["cmnt"])){
        if(!preg_match("/^[a-zA-Z0-9\.\@\_\-]{5,10}$/", $_POST["uname"])){
            echo "Enter username in correct format";
        }else if(!preg_match("/^[a-zA-Z0-9\%\$\#\!\@\^\&\*]{8,}$/", $_POST["pswd"])){
            echo "Enter password in correct format";
        }else if(!preg_match("/^(https|http|ftp)\:\/\/www\.[a-zA-Z0-9\.\+\=\?\/]+/", $_POST["web"])){
            echo "Enter website in correct format";
        }else{
            echo "Username: ".$_POST["uname"]."<br>";
            echo "Password: ".$_POST["pswd"]."<br>";
            echo "Website: ".$_POST["web"]."<br>";
            echo "Gender: ".$_POST["gen"]."<br>";
            $course = $_POST["course"];
            //print_r($course);
            echo "Course: ".$course[0]." ".$course[1]."<br>";
            echo "Stage: ".$_POST["stage"]."<br>";
            echo "Comment: ".$_POST["cmnt"]."<br>";
        }
    }else{
        echo "All fields are required";
    }
}


?>