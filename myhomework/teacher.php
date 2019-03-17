<?php


class teacher extends person
{

    function __construct($nombre=null, $apellido=null,$subject=null, $year=null)
    {
      $this->setfname($nombre);
      $this->setlname($apellido);
      $this->setyear($year);
      $this->subject=$subject;
    }
  
    private $subject;
  
      public function getsubject()
      {
          return $this->subject;
      }
  
      public function setsubject($subject)
      {
          $this->subject = $subject;
  
      }
  
      //cursitos...
private $courses=array();

public function getCourses()
    {
        return $this->courses;
    }
    public function setCourses($param)
    {
        array_push($this->courses,$param);
    }
  }
  
  ?>
  