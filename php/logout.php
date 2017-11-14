<?php
 session_start();

  alert("Logout Successfully ");
  session_unset();   // function that Destroys Session 
  window.location.replace("index.html");
?>