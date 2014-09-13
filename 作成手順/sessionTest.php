<?php
//
ob_start();
session_start();

//
var_dump(session_id());
//
var_dump($_SESSION);
var_dump($_COOKIE);
//
session_regenerate_id(true);
var_dump(session_id());

//
ob_end_flush();