<?php
//这个类的一个对象实例，表示一条用户记录
class Emp{
    private $id;
    private $name;
    private $grade;
    private $email;
 /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

 /**
     * @return the $grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

 /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

 /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

 /**
     * @param field_type $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

 /**
     * @param field_type $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    
}