<?php

  class ProfesorTitular extends Profesor {

    private $especialidad;

    public function __construct(String $nombre, String $apellido, Int $codProfesor, String $especialidad) {
      parent::__construct($nombre, $apellido, $codProfesor);
      $this->especialidad = $especialidad;
    }

    public function getEspecialidad() {
      return $this->especialidad;
    }

    public function setEspecialidad(String $especialidad) {
      $this->especialidad = $especialidad;
    }

  }
