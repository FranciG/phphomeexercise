<?php
/**
 *
 */
abstract class person
{
private $fname;
private $lname;
private $year;

public function setfname($value){
  $this->fname=$value;
}
public function setlname($value){
  $this->lname=$value;
}
public function setyear($value){
  $this->year=$value;
}

public function getfname(){
  return $this->fname;
}
public function getlname(){
  return $this->lname;
}
public function getyear(){
  return $this->year;
}
public function getage(){
  return 2019 - $this->year;
}
}

?>
