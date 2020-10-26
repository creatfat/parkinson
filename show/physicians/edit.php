<?php
 require_once __DIR__ . '../../../connect/database.php';
if(isset($_GET['noteID']))
{
    $noteid=strval($_GET['noteId']);
    $notemessage=strval($_GET['message-text']);
    
    $sql = "UPDATE note SET note='$notemessage' WHERE noteid='$noteid'";
    $query = $connect->query($sql);
    if($query->execute())
    {
    
        header('location:http://plustor.ir/show/physicians/physician.php');
        exit();
        
    }
}
?>