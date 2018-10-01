<?php

  class Curso {

    private $nombre;
    private $codCurso;
    private $profesorTitular;
    private $profesorAdjunto;
    private $maximoAlumnos;
    private $listaAlumnos = [];

    public function __construct(String $nombre, Int $codCurso, Int $maximoAlumnos) {

      $this->nombre = $nombre;
      $this->codCurso = $codCurso;
      $this->maximoAlumnos = $maximoAlumnos;

    }

    public function getNombre() {
      return $this->nombre;
    }

    public function setNombre(String $nombre) {
      $this->nombre = $nombre;
    }

    public function getCodCurso() {
      return $this->codCurso;
    }

    public function setCodCurso(Int $codCurso) {
      $this->codCurso = $codCurso;
    }

    public function getMaximoAlumnos() {
      return $this->maximoAlumnos;
    }

    public function setMaximoAlumnos(Int $maximoAlumnos) {
      $this->maximoAlumnos = $maximoAlumnos;
    }

    public function getProfesores() {
      return '<span style="text-decoration:underline">Profesores de '.$this->nombre.':</span><br><br>Profesor Titular: '.$this->profesorTitular->getNombre().' '.$this->profesorTitular->getApellido().' <br> Profesor Adjunto: '.$this->profesorAdjunto->getNombre().' '.$this->profesorAdjunto->getApellido().'<br>';
    }
    
    public function setProfesorTitular(Profesor $profesorTitular) {
      $this->profesorTitular = $profesorTitular;
    }

    public function setProfesorAdjunto(Profesor $profesorAdjunto) {
      $this->profesorAdjunto = $profesorAdjunto;
    }

    public function agregarUnAlumno(Alumno $nuevoAlumno) {

      if (count($this->listaAlumnos) < $this->maximoAlumnos) {
        $this->listaAlumnos[] = $nuevoAlumno;
        echo 'Alumno '.$nuevoAlumno->getNombre().' '.$nuevoAlumno->getApellido().' inscripto al curso '.$this->nombre.'!';
        echo '<br>';
        return true;
      } else {
        echo 'El curso '.$this->nombre.' está lleno, no fue posible agregar al alumno '.$nuevoAlumno->getNombre().' '.$nuevoAlumno->getApellido();
        echo '<br>';
        return false;
      }

    }

    public function eliminarAlumno(Int $codAlumno) {

      foreach ($this->listaAlumnos as $indice => $alumnos) {
        if ($alumnos->getCodAlumno() == $codAlumno) {
          $posicion = $indice;
          break;
        }
      }

      $mensajeAlumnoEliminado = 'Alumno '.$this->listaAlumnos[$posicion]->getNombre().' '.$this->listaAlumnos[$posicion]->getApellido().' eliminado del curso '.$this->nombre.'<br>';

      unset($this->listaAlumnos[$posicion]);

      echo $mensajeAlumnoEliminado;

    }

    public function listarAlumnos() {

      echo '<span style="text-decoration:underline">Lista de alumnos de '.$this->nombre.':</span>';
      echo '<br><br>';

      foreach ($this->listaAlumnos as $alumnos) {
        echo 'Código: '.$alumnos->getCodAlumno().' <br> Nombre y apellido: '.$alumnos->getNombre().' '.$alumnos->getApellido();

        echo '<br><br>';
      }

    }

  }
