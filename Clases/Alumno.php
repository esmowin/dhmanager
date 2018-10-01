<?php

  class Alumno {

    private $nombre;
    private $apellido;
    private $codAlumno;

    public function __construct(String $nombre, String $apellido, Int $codAlumno) {

      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->codAlumno = $codAlumno;

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

    public function getCodAlumno() {
      return $this->codAlumno;
    }

    public function setCodAlumno(Int $codAlumno) {
      $this->codAlumno = $codAlumno;
    }

  }
