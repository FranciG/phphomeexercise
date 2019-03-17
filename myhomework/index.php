<?php
//this function will inlude all the files which will need
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

echo '<h2>Cleaner</h2>';
$cleaner = new staff();
$cleaner->setfname('Pepe');
$cleaner->setlname('Guijarro');
$cleaner->setprofesion('Limpiador');
$cleaner->setyear(1980);

echo '<br>El nombre del limpiador es: <br>'.$cleaner->getfname();
echo '<br>El apellido del limpiador es: <br> '.$cleaner->getlname();
echo '<br>Su profesion es: <br>'.$cleaner->getprofesion();
echo '<br>Su año de nacimiento: <br>'.$cleaner->getyear();
echo '<br>Su edad: <br>'.$cleaner->getage();


echo '<h2>Caretaker</h2>';
$caretaker = new staff();
$caretaker->setfname('Homer');
$caretaker->setlname('Simpson');
$caretaker->setprofesion('Cuidador');
$caretaker->setyear(1990);
echo '<br>El nombre del cuidador es : <br>'.$caretaker->getfname();
echo '<br>El apellido del cuidador es : <br>'.$caretaker->getlname();
echo '<br>Su profesion es : <br>'.$caretaker->getprofesion();
echo '<br>Su año de nacimiento: <br>'.$caretaker->getyear();
echo '<br>Su edad: <br>'.$caretaker->getage();

echo '<h2>Student</h2>';
//Passing the values as parameters, less code.
$bart = new student('Bart','Simpson',5,2008);
echo '<br>El nombre del estudiante es : <br>'.$bart->getfname();
echo '<br>El apellido del estudiante es : <br>'.$bart->getlname();
echo '<br>Numero de creditos : <br>'.$bart->getcreditos();
echo '<br>Su año de nacimiento: <br>'.$bart->getyear();
echo '<br>Su edad: <br>'.$bart->getage();

$bart->setCourses('Español');
$bart->setCourses('Math');

$coursesOfbart=$bart->getCourses();
echo '<br>Asignaturas:';
echo('<pre>');
print_r($coursesOfbart);
echo('</pre>');
//Teacher
echo '<h2>Teacher</h2>';
//Passing the values as parameters, less code.
$pedro = new teacher('Edna','K','second grade',1974);
echo '<br>El nombre del profesor es : <br>'.$pedro->getfname();
echo '<br>El apellido del profesor es : <br>'.$pedro->getlname();
echo '<br>Asignatura : <br>'.$pedro->getsubject();
echo '<br>Su año de nacimiento: <br>'.$pedro->getyear();
echo '<br>Su edad: <br>'.$pedro->getage();

$pedro->setCourses('English');
$pedro->setCourses('Math');
$pedro->setCourses('History');

$coursesOfedna=$pedro->getCourses();
echo '<br>Asignaturas:';
echo('<pre>');
print_r($coursesOfedna);
echo('</pre>');


?>
