<?php
  require 'db/connect.php';

  $userId = $_GET['clientId'];
  $sqlFetchTable = "DELETE FROM `tbl_users` WHERE `user_id` = '" . $userId . "'";
  $result = mysqli_query($databaseConnection, $sqlFetchTable);
  header('Location: http://localhost/presentSQLInjection/bankSystem.php');
  
?>