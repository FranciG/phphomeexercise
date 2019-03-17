<?php

/**
 *
 */
class staff extends person
{

  function __construct($nombre=null, $apellido=null, $profesion=null, $year=null)
  {
    $this->setfname($nombre);
    $this->setlname($apellido);
    $this->setyear($year);
    $this->profesion=$profesion;
  }

  private $profesion;

    public function getprofesion()
    {
        return $this->profesion;
    }

    public function setprofesion($profesion)
    {
        $this->profesion = $profesion;

    }

}

?>
