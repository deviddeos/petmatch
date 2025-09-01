<?php
include "session.php";   
?>
<?php
include"../inc/database.php";
if (isset($_GET["act"])) {
    $act=$_GET["act"];

    $actsql="update notice set statuss='1' where name='$act' ";

    $result=mysqli_query($conn,$actsql);
    if (!$result) {
        header("Location:rehomepets.php");
    }
        else {
            header("Location:rehomepets.php");
}
    }

?>