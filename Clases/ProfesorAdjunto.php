<?php

  class ProfesorAdjunto extends Profesor {

    private $horasConsulta;

    public function __construct(String $nombre, String $apellido, Int $codProfesor, Int $horasConsulta) {
      parent::__construct($nombre, $apellido, $codProfesor);
      $this->horasConsulta = $horasConsulta;
    }

    public function getHorasConsulta() {
      return $this->horasConsulta;
    }

    public function setHorasConsulta(Int $horasConsulta) {
      $this->horasConsulta = $horasConsulta;
    }

  }
