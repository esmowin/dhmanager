<?php

  class DigitalHouseManager {

    private $listaCursos = [];
    private $listaProfesores = [];
    private $listaAlumnos = [];



    public function altaCurso(String $nombre, Int $codCurso, Int $maximoAlumnos) {

      $nuevoCurso = new Curso ($nombre, $codCurso, $maximoAlumnos);
      $this->listaCursos[] = $nuevoCurso;

    }

    public function bajaCurso(Int $codCurso) {

      foreach ($this->listaCursos as $indice => $cursos) {
        if ($cursos->getCodCurso() == $codCurso) {
          $posicion = $indice;
          break;
        }
      }

      $mensajeCursoEliminado = 'El curso '.$this->listaCursos[$posicion]->getNombre().' fue eliminado<br>';

      unset ($this->listaCursos[$posicion]);

      echo $mensajeCursoEliminado;
    }

    public function altaProfesorTitular(String $nombre, String $apellido, Int $codProfesor, String $especialidad) {

      $nuevoProfesorTitular = new ProfesorTitular ($nombre, $apellido, $codProfesor, $especialidad);
      $this->listaProfesores[] = $nuevoProfesorTitular;

    }

    public function altaProfesorAdjunto(String $nombre, String $apellido, Int $codProfesor, Int $horasConsulta) {

      $nuevoProfesorAdjunto = new ProfesorAdjunto ($nombre, $apellido, $codProfesor, $horasConsulta);
      $this->listaProfesores[] = $nuevoProfesorAdjunto;

    }

    public function bajaProfesor(Int $codProfesor) {

      foreach ($this->listaProfesores as $indice => $profesores) {
        if ($profesores->getCodProfesor() == $codProfesor) {
          $posicion = $indice;
          break;
        }
      }

      $mensajeProfesorEliminado = 'El profesor '.$this->listaProfesores[$posicion]->getNombre().' '.$this->listaProfesores[$posicion]->getApellido().' fue eliminado <br>';

      unset($this->listaProfesores[$posicion]);

      echo $mensajeProfesorEliminado;
    }

    public function asignarProfesores(Int $codCurso, Int $codProfesorTitular, Int $codProfesorAdjunto) {

      foreach ($this->listaCursos as $indice => $cursos) {
        if ($cursos->getCodCurso() == $codCurso) {
          $indiceCurso = $indice;
          break;
        }
      }

      foreach ($this->listaProfesores as $indice => $profesores) {
        if ($profesores->getCodProfesor() == $codProfesorTitular) {
          $indiceProfesorTitular = $indice;
          break;
        }
      }

      foreach ($this->listaProfesores as $indice => $profesores) {
        if ($profesores->getCodProfesor() == $codProfesorAdjunto) {
          $indiceProfesorAdjunto = $indice;
          break;
        }
      }

      $this->listaCursos[$indiceCurso]->setProfesorTitular($this->listaProfesores[$indiceProfesorTitular]);
      echo $this->listaProfesores[$indiceProfesorTitular]->getNombre().' '.$this->listaProfesores[$indiceProfesorTitular]->getApellido().' fue asignado como Profesor Titular del curso '.$this->listaCursos[$indiceCurso]->getNombre().'<br>';

      $this->listaCursos[$indiceCurso]->setProfesorAdjunto($this->listaProfesores[$indiceProfesorAdjunto]);
      echo $this->listaProfesores[$indiceProfesorAdjunto]->getNombre().' '.$this->listaProfesores[$indiceProfesorAdjunto]->getApellido().' fue asignado como Profesor Adjunto del curso '.$this->listaCursos[$indiceCurso]->getNombre().'<br>';

    }

    public function altaAlumno(String $nombre, String $apellido, Int $codAlumno) {

      $nuevoAlumno = new Alumno ($nombre, $apellido, $codAlumno);
      $this->listaAlumnos[] = $nuevoAlumno;

    }

    public function inscribirAlumno(Int $codCurso, Int $codAlumno) {

      foreach ($this->listaCursos as $indice => $cursos) {
        if ($cursos->getCodCurso() == $codCurso) {
          $indiceCurso = $indice;
          break;
        }
      }

      foreach ($this->listaAlumnos as $indice => $alumnos) {
        if ($alumnos->getCodAlumno() == $codAlumno) {
          $indiceAlumno = $indice;
          break;
        }
      }

      $this->listaCursos[$indiceCurso]->agregarUnAlumno($this->listaAlumnos[$indiceAlumno]);

    }

  }
