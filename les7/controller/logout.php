<?php
  include_once("../model/auth.php");
  session_start();
  logout();
  header("Location:".ROOT);
?>