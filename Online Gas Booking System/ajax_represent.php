

<?php
//error_reporting(0);
require_once('./constant/connect');

 
?>

<?php
//include('connect.php');


    $users_arr = array();

      $sql1 = "SELECT * FROM tbl_client  
          WHERE id = '".$_POST['customer_id']."'";

        $result1 = $connect->query($sql1);
        $row = $result1->fetch_assoc();

      echo$mob_no = $row['mob_no'];
        ?>