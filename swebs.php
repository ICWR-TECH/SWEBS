<?php

error_reporting(0);

// SWEBS - Simple Web Security
// Basic Parameter Filter
// Copyright (c)2019 - Afrizal F.A - ICWR-TECH

if(!empty($_POST)) {
  foreach($_POST as $x => $v) {
    $_POST[$x]=str_replace(["'","\""],["",""],$_POST[$x]);
  }
}

if(!empty($_GET)) {
  foreach($_GET as $x => $v) {
    $_GET[$x]=str_replace(["<",">","'","\""],["","","",""],$_GET[$x]);
  }
}

?>
