<?php


include_once(ABSPATH."/env.php");
include_once(ABSPATH."/config/MysqliDb.php");
$db = new MysqliDb(SERVERNAME, USERNAME, PASSWORD, DBNAME);
