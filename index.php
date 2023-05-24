<?php
   $s = "truong dai hoc Quoc gia ha noi";
  echo strlen($s); // b1
  echo "\n";
  echo str_word_count($s); //b2
  echo "\n";
  echo strrev($s);//b3
  echo "\n";
  echo strpos($s,"dai hoc");//b4
  echo "\n";

  echo str_replace("truong","Truong",$s);//b5
  echo "\n";
    echo strncmp("test",$s,4);//b6
  echo "\n";
    echo  strtoupper($s);//b7
  echo "\n";
    echo ucwords($s);  //b8
    echo "\n";
  echo trim($s);//b9
  echo "\n";
  echo ltrim($s);//b10
  echo "\n";
  echo rtrim($s);//b11
  echo "\n";
  $arr =explode(" ",$s); //b12 
  for($i = 0;$i<count($arr);$i++){
    echo $arr[$i];
    echo "\n";
  }
  $s2 = "";
  echo implode($s2,$arr); // b13
  echo "\n";
  echo str_pad($s, 50, "_", STR_PAD_BOTH) ."\n";//b14
  echo strrchr($s,"hoc")."\n";
  echo strstr($s,"hoc")."\n";
?>