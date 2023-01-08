<?php
const db_server = 'localhost';
const db_name='phpdb';
const db_user='root';
const db_pass='';
function connectDB(){
    $link = mysqli_connect(db_server,db_user,db_pass,db_name ) or die ("connect database fail!!.");
    return $link;

}
function closeDB($link){
    mysqli_close($link);
}
function insertDb($name ,$author ,$price){
    $link = connectDB();
    $sql= "insert into tbbook (name , author , price) values (?,?,?)";
    if ($stmt = mysqli_prepare($link , $sql))
    {
    	mysqli_stmt_bind_param($stmt,'ssi' , $name,$author,$price);
        mysqli_stmt_execute($stmt);
    }
    

}

        

