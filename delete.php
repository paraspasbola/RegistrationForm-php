<?php
if(isset($_POST['delete'])) {
    $a = $_POST['id'];
    $sql = mysqli_query($conn,"DELETE FROM `registration` WHERE id ='$a'");
    echo "<script>window.location.assign('registration_form.php')</script>";
}


?>