<?php

$file=glob("helper/*.php");
array_map(fn($filname)=>include "$filname",$file);
require_once("app/libs/Session.php");

spl_autoload_register(function($clname){
  if(file_exists("app/libs/$clname.php"))
       require_once("app/libs/$clname.php");
});
$obj=new Autoload();


