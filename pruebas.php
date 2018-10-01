<?php

  include_once ('autoload.php');

  $alumno1 = new Alumno ('Ernesto', 'López', 1);
  $alumno2 = new Alumno ('Juan', 'Fernández', 2);
  $alumno3 = new Alumno ('Carlos', 'Rodríguez', 3);
  $alumno4 = new Alumno ('Pedro', 'Ramírez', 4);
  $alumno5 = new Alumno ('Roberto', 'Gómez', 5);

  $cursoFullStack = new Curso ('Programación Web Full Stack', 555, 4);

  $profesorTitularJavier = new ProfesorTitular ('Javier', 'Herrera', 999, 'FrontEnd');
  $profesorAdjuntoDiego = new ProfesorAdjunto ('Diego', 'Caplan', 666, 10);

  $cursoFullStack->setProfesorTitular($profesorTitularJavier);
  $cursoFullStack->setProfesorAdjunto($profesorAdjuntoDiego);

  echo "<h2>Inscripción de alumnos:</h2>";

  $cursoFullStack->agregarUnAlumno($alumno1);
  $cursoFullStack->agregarUnAlumno($alumno2);
  $cursoFullStack->agregarUnAlumno($alumno3);
  $cursoFullStack->agregarUnAlumno($alumno4);
  $cursoFullStack->agregarUnAlumno($alumno5);

  echo '<br>';
  echo '<hr>';
  echo '<br>';

  echo '<pre>';
  var_dump($cursoFullStack);
  echo '</pre>';

  echo '<br>';
  echo '<hr>';

  echo "<h2>Listar profesores y alumnos:</h2>";

  echo $cursoFullStack->getProfesores();

  echo '<br>';
  echo '<hr>';
  echo '<br>';

  $cursoFullStack->listarAlumnos();

  echo '<br>';
  echo '<hr>';

  echo "<h2>Eliminar alumno y listar de nuevo:</h2>";

  $cursoFullStack->eliminarAlumno(2);

  echo '<br>';
  echo '<hr>';
  echo '<br>';

  $cursoFullStack->listarAlumnos();

  echo '<br>';
  echo '<hr>';

  echo "<h2>DigitalHouseManager: alta cursos, profesores y alumnos</h2>";

  $DHM = new DigitalHouseManager();

  $DHM->altaCurso('Programación Web Full Stack', 1, 4);
  $DHM->altaCurso('Programación Mobile Android', 2, 4);
  $DHM->altaCurso('Programación Mobile iOS', 3, 4);

  $DHM->altaProfesorTitular('Javier', 'Herrera', 901, 'FrontEnd');
  $DHM->altaProfesorAdjunto('Diego', 'Caplan', 902, 10);

  $DHM->altaAlumno('Ernesto', 'López', 101);
  $DHM->altaAlumno('Juan', 'Fernández', 102);
  $DHM->altaAlumno('Carlos', 'Rodríguez', 103);
  $DHM->altaAlumno('Pedro', 'Ramírez', 104);
  $DHM->altaAlumno('Roberto', 'Gómez', 105);

  echo '<pre>';
  var_dump($DHM);
  echo '</pre>';

  echo '<br>';
  echo '<hr>';

  echo "<h2>DigitalHouseManager: inscripción de alumnos y asignación de profesores</h2>";

  $DHM->inscribirAlumno(2, 101);
  $DHM->inscribirAlumno(2, 102);
  $DHM->inscribirAlumno(2, 103);

  echo '<br>';
  echo '<hr>';
  echo '<br>';

  $DHM->asignarProfesores(2, 901, 902);

  echo '<br>';
  echo '<hr>';
  echo '<br>';

  echo '<pre>';
  var_dump($DHM);
  echo '</pre>';

  echo '<br>';
  echo '<hr>';

  echo "<h2>DigitalHouseManager: baja de curso y baja de profesor</h2>";

  $DHM->bajaCurso(1);

  echo '<br>';
  echo '<hr>';
  echo '<br>';

  $DHM->bajaProfesor(902);

  echo '<br>';
  echo '<hr>';
  echo '<br>';

  echo '<pre>';
  var_dump($DHM);
  echo '</pre>';

?>
