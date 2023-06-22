<?php
include "./Manager.php";
include "./Course.php";
use course\Course;
use student\Student;
$courses=[
    new Course("java"),
    new Course("PHP"),
    new Course("C++"),
];
$manager=new Manager();
//add student
$result_add= $manager->addStudent(
    new Student(name:'ali',email:"ali@gmail.com",courses:$courses)
);
// get all student
$students=$manager->getAllStudents();
// get student by id
$student=$manager->getStudent(1);
//update student
$new_courses=[
    new Course("dart"),
    new Course("C#"),
    new Course("css"),
];
$result_update=$manager->updateStudent(1,new Student(name:'rami',email:"rami@gmail.com",courses:$new_courses));
// remove student by id
$result_remove=$manager->removeStudent(1);
