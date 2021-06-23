<?php
require_once "dbms/class.db.php";
require_once "dbms/utils.php";
$db = DB::getInstance();

$user_types = $db->get_results( "SELECT * FROM user_types" );
foreach( $user_types as $user ) {
var_dump($user) . '<br />';
}
?>