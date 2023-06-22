<?php
namespace course;
class Course{
    public static int $counter=0;
    public readonly int $id;
    public String $name;
    public function __construct($name)
      {
        $this->id=++self::$counter;
        $this->name=$name;

      }
}