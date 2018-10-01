<?php

  abstract class Profesor {

    protected $nombre;
    protected $apellido;
    protected $antiguedad = 0;
    protected $codProfesor;

    public function __construct(String $nombre, String $apellido, Int $codProfesor) {

      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->codProfesor = $codProfesor;

    }

    public function getNombre() {
      return $this->nombre;
    }

    public function setNombre(String $nombre) {
      $this->nombre = $nombre;
    }

    public function getApellido() {
      return $this->apellido;
    }

    public function setApellido(String $apellido) {
      $this->apellido = $apellido;
    }

    public function getAntiguedad() {
      return $this->antiguedad;
    }

    public function setAntiguedad(Int $antiguedad) {
      $this->antiguedad = $antiguedad;
    }

    public function getCodProfesor() {
      return $this->codProfesor;
    }

    public function setCodProfesor(Int $codProfesor) {
      $this->codProfesor = $codProfesor;
    }

  }
