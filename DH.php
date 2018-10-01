<?php

  include_once ('autoload.php');

  $DHM = new DigitalHouseManager();

  $DHM->altaProfesorTitular('Javier', 'Herrera', 901, 'FrontEnd');
  $DHM->altaProfesorTitular('Diego', 'Caplan', 902, 'BackEnd');

  $DHM->altaProfesorAdjunto('Matías', 'Ortega', 921, 8);
  $DHM->altaProfesorAdjunto('Sebastián', 'Rubio', 922, 10);

  $DHM->altaCurso('Full Stack', 20001, 3);
  $DHM->altaCurso('Android', 20002, 2);

  $DHM->asignarProfesores(20001, 901, 921);
  $DHM->asignarProfesores(20002, 902, 922);

  $DHM->altaAlumno('Ernesto', 'López', 101);
  $DHM->altaAlumno('Juan', 'Fernández', 102);
  $DHM->altaAlumno('Carlos', 'Rodríguez', 103);

  $DHM->inscribirAlumno(20001, 101);
  $DHM->inscribirAlumno(20001, 102);

  $DHM->inscribirAlumno(20002, 102);
  $DHM->inscribirAlumno(20002, 103);

  $DHM->inscribirAlumno(20002, 101);
  $DHM->inscribirAlumno(20002, 102);
  $DHM->inscribirAlumno(20002, 103);

?>
