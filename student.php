<?php
require_once("./db.php");


class Students
{
    private $table = "students";
    private $name;
    private $age;
    private $field;

    function getTable()
    {
        return $this->table;
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function setAge($age)
    {
        $this->age = $age;
    }
    function setField($field)
    {
        $this->field = $field;
    }

    function insertData()
    {
        $sql = "INSERT INTO $this->table(name , age , field) VALUES(:name , :age , :field ) ";
        $stmt = Db::dbPrepare($sql);

        //$stmt->bindParam(":name" , $this->name);
        //$stmt->bindParam(":age" , $this->age);
        //$stmt->bindParam("field" , $this->field);

        return $stmt->execute(['name' =>   $this->name , 'age' =>  $this->age , 'field' => $this->field]);


    }
}

?>