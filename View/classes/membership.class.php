<?php

Class Membership {

    public $name;
    public $surname;
    public $phone;
    public $idNumber;
    public $password;
    public $confirmPass;
    public $comparison;

    function validate() {
        $nameError = 0;
        $surnameError = 0;
        $phoneError = 0;
        $idNumberError = 0;
        $passwordError = 0;
        $confirmPassError = 0;
        $comparison = 0;
        $valid = 0;

        $this->name = $_POST["name"];
        $this->surname = $_POST["surname"];
        $this->phone = $_POST["phone"];
        $this->idNumber = $_POST["idNumber"];
        $this->password = $_POST["password"];
        $this->confirmPass = $_POST["confirmPass"];

        if (strlen($this->name) < 3)
            $nameError = 1;
        if (is_numeric($this->name))
            $nameError = 1;

        if (strlen($this->surname) < 3)
            $surnameError = 1;
        if (is_numeric($this->name))
            $surnameError = 1;

        if (!is_numeric($this->idNumber))
            $idNumberError = 1;
        if (strlen($this->idNumber) != 13)
            $idNumberError = 1;

        if (!is_numeric($this->phone))
            $phoneError = 1;
        if (strlen($this->phone) != 10)
            $phoneError = 1;

        if (strlen($this->password) < 8)
            $passwordError = 1;
        if (is_numeric($this->password))
            $passwordError = 1;

        if (strlen($this->confirmPass) < 3)
            $confirmPassError = 1;
        if (is_numeric($this->confirmPass))
            $confirmPassError = 1;

        if ($this->password != $this->confirmPass)
            $comparison = 1;

        if ($comparison == 1)
            echo"Your password is not the same<br/>";


        $check = $nameError + $surnameError + $phoneError + $idNumberError + $comparison;

        return $check;
    }

    function getName() {

        $name = $_POST["name"];

        return $name;
    }

    function storeData() {

        $this->password = md5($this->password);

        require_once("../config/db.php");

        $sql = "INSERT INTO member(name, surname, phone, password, id_number) VALUES('$this->name','$this->surname','$this->phone','$this->password','$this->idNumber') ";
        if (mysql_query($sql, $con)) {
            echo"<script>alert(\"You are now a member, remember your username and password. We take you to your profile now\");</script>";
        } else {
            echo"Error storing data " . mysql_error() . "<br/>";
        }
    }

}

$result = new Membership;
if (isset($_POST["membership"])) {
    $checkBit = $result->validate();
    $result->storeData();
    $name = $_POST["name"];
    $id = $_POST["idNumber"];
    header("location:profile.php");
}
;
?>