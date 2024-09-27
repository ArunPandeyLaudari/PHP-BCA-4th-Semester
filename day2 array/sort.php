

<?php
// sorting of an array;

// sort()->ascending array  order ma 
// rsort()->descending array order ma 
// asort()->sorts associsative array in ascemding order according to value;
// ksort()->ascending array order ma of assopciative array  order according to key
// arsort()->sorts associsative array in descemding order according to value;
// asort()->descending array order ma of assopciative array  descending order according to key


$names=array("frun","zinishaf","sita");

 sort($names);
 
  foreach( $names as $i){
    echo $i,"<br>";
  }

  ?>