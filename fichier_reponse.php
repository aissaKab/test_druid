<?php


  

function isPalindrom($word){
$reverse = strrev($word); // inverser lemot $word
if ($word == $reverse) // comparer lemot original si il est le meme que son mot inverse 
    echo ' This string is a palindrome';
else
  echo 'This is not a palindrome';}


function changeArray($arr){
  $t[current($arr)]=[];//ajouter la premiere clé de $arr a la table creé $t
foreach($arr as $i=>$value){
  if(array_key_exists($value,$t)){//verifier si la clé est deja ajoutée dans la nouvelle table $t
      $t[$value][]=$i;//ajouter la valeur de la clé dans la table des valeur
       
    }
  else 
      $t[$value]=[$i];//ajouter la clé et la table des valeur dans la table $t
    
 
}
  var_dump($t);
}




?>
