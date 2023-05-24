<?php
   $s = "truong dai hoc Thuong mai";
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
  $res = true;
  for($i = 0;$i<strlen($s);$i++){
    if(!($s[$i] > '0' && $s[$i] < '9')) {
        $res = false;
        break;
    }
  }
  if($res){
    echo "la so\n";
  }else echo "k phai so\n";
  $res = false;
  $res2 = false;
  for($i = 0;$i<strlen($s);$i++){
    if($res){
        if($s[$i] == '.'){
            $res2 = true;
            break;
        }
    }else $res = $s[$i] == '@';
  }
  if($res && $res2){
    echo "la email\n";
  }else echo "k phai la email\n";
?>
