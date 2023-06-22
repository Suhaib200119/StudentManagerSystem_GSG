<?php
include "./Student.php";
include "./Loggable.php";
use student\Student;
use loggable\Loggable as MyLog;
class Manager{
    public $students=array();

    public function addStudent(Student $stdObject){
            MyLog::log("Add student , name : ".$stdObject->name);
       return array_push($this->students,$stdObject);
    }

    public function getAllStudents(){
        MyLog::log("get all students");
        return $this->students;
    }

    public function removeStudent(int $id):int{
        $status=0;
        foreach ($this->students as $key => $value) {
            if($value->id==$id){
                unset($this->students[$key]);
                $status=1;
                MyLog::log("remove student , name : ".$value->name);
                return $status;
            }
        }
    }

    public function getStudent(int $id){
        foreach ($this->students as $key => $value) {
            if($value->id==$id){
                MyLog::log("retrieve student , name : ".$value->name);
                return $value;
            }
        }
    }

    public function updateStudent(int $id,Student $data):int{
        $status=0;
        foreach ($this->students as $key => $value) {
            if($value->id==$id){
                $this->students[$key]->name=$data->name;
                $this->students[$key]->email=$data->email;
                $this->students[$key]->Courses=$data->Courses;
                MyLog::log("update student , name : ".$value->name);
                $status=1;
                return $status;
            }
        }
    }


}

