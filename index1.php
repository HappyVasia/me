<?php

  $text = $_POST["text"];
  $text1 = $_POST["text1"];
  
  $count = substr_count($text, $text1);
  echo $count;
  
