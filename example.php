<?php
/* * *************************************************************
 * Copyright notice
 *
 * (c) 2014 Chi Hoang (info@phpdevpad.de)
 *  All rights reserved
 *
 * **************************************************************/
   
  require_once("main.php");
  $mapWidth    = 500; 
  $mapHeight   = 500; 
  
  $geocoord = array ("8.6544487,50.1005233", 
                   "8.7839489,50.0907496", 
                   "8.1004734,50.2002273", 
                   "8.4117234,50.0951493", 
                   "8.3508367,49.4765982", 
                   "9.1828630,48.7827027", 
                   "9.1686483,48.7686426", 
                   "9.2118466,48.7829101", 
                   "8.9670738,48.9456327"); 

   $map = new mercator($mapWidth,$mapHeight);
   $test = $map->projection($geocoord);
   
   $png = new visualize("c:\\temp\\",$map);
   $png->genimage();
                   
?>
