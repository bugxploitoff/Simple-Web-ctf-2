<?php
$flag = $_POST["flag"];
$components = $_GET["code"];
if(strcmp($components, 'show')==0){
  $source = show_source("flagmain.php", true);
  print $source;
}
elseif (strcmp($components, 'debug')==1) {
  echo "You are 1 step to get the flag";
}


if(strcmp(base64_encode($flag), 'Q1ZFe1lPVV9HT1RfTVlfUEhQX0JSQUlOfQ=='
          )==0){
   echo "You Have got the correct flag";
}
else  {
  echo "No the flag is still wrong but flag is present in the code find if you can" ;
}

?>