<?php

include_once "Student.php";

class StudentManager
{
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function displayStudent()
    {

    }
    public function addStudent()
    {
}

    public function Update()
    {
}

    public function deleteStudent()
    {

}

    public function saveData()
    {

}
//Chuyển dữ liệu về dạng chuỗi
    public function loadData()
    {
        $data = file_get_contents($this->filePath);
        //sau đó mã hóa các chuỗi về dạng json, vì json chỉ nhận dạng chuỗi
        return json_decode($data);
}
 public function save()
    {

}
}