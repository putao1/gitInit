<?php 
var_dump(session_name());
$sessionId=$_GET[session_name()];
session_id($sessionId);
//echo 'hi';
session_start();
?>