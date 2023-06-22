<?php
namespace student;
class Student{
      public static int $counter=0;
      public readonly int $id;
      public String $name;
      public String $email;
      public  $Courses=[];

      public function __construct($name,$email,$courses)
      {
        $this->id=++self::$counter;
        $this->name=$name;
        $this->email=$email;
        $this->Courses=$courses;

      }

}

// var_dump(
//   new Student(name:'ali',email:"ali2",courses:["a","aa"]),
//   new Student(name:'ali2',email:"ali2",courses:["a","aa"])
// );



