<?php


class student extends person
{

    function __construct($nombre=null, $apellido=null,$creditos=null, $year=null)
    {
      $this->setfname($nombre);
      $this->setlname($apellido);
      $this->setyear($year);
      $this->creditos=$creditos;
    }
  
    private $creditos;
  
      public function getcreditos()
      {
          return $this->creditos;
      }
  
      public function setcreditos($creditos)
      {
          $this->creditos = $creditos;
  
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
  