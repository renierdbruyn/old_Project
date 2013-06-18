<?php

function autoload($class) {
    require( $class . '.class.php');
}

// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
$person = new Personal;


if (isset($_POST["secondary"])) {
    $matric = new Matric;
    $matric->validate();
    $matric->storeData();
}

Class Matric {

    public $check = 0;
    public $schoolError = 0;
    public $subject1Error = 0;
    public $subject2Error = 0;
    public $subject3Error = 0;
    public $subject4Error = 0;
    public $subject5Error = 0;
    public $subject6Error = 0;
    public $subject7Error = 0;
    public $qualified = 0;
    public $school;
    public $subject1;
    public $subject2;
    public $subject3;
    public $subject4;
    public $subject5;
    public $subject6;
    public $subject7;
    public $subject8;
    public $subject9;
    public $subject10;

    function validate() {
        $this->school = $_POST["txtSchool"];
        $this->subject1 = $_POST["Subject1"];
        $this->subject2 = $_POST["Subject2"];
        $this->subject3 = $_POST["Subject3"];
        $this->subject4 = $_POST["Subject4"];
        $this->subject5 = $_POST["Subject5"];
        $this->subject6 = $_POST["Subject6"];
        $this->subject7 = $_POST["Subject7"];
        $this->subject8 = $_POST["Subject8"];
        $this->subject9 = $_POST["Subject9"];
        $this->subject10 = $_POST["Subject10"];


        if ($this->school == null)
            $this->schoolError = 1;
        if (strlen($this->school) < 5)
            if ($this->subject1 == null)
                $this->subject1Error = 1;

        if ($this->subject2 == null)
            $this->subject2Error = 1;

        if ($this->subject3 == null)
            $this->subject3Error = 1;

        if ($this->subject4 == null)
            $this->subject4Error = 1;

        if ($this->subject5 == null)
            $this->subject5Error = 1;

        if ($this->subject6 == null)
            $this->subject6Error = 1;

        if ($this->subject7 == null)
            $this->subject7Error = 1;

        $this->check = $this->schoolError + $this->subject1Error + $this->subject2Error + $this->subject3Error + $this->subject4Error + $this->subject5Error + $this->subject6Error + $this->subject7Error;
    }

    function storeData() {

        if ($this->check == 0) {
            require_once("../config/db.php");

            $insert = "INSERT INTO matric(school_name, secondary_subject1, secondary_subject2, secondary_subject3, secondary_subject4, secondary_subject5, secondary_subject6, secondary_subject7, secondary_subject8, secondary_subject9, secondary_subject10, id_number) values('$this->school','$this->subject1','$this->subject2','$this->subject3','$his->subject4','$this->subject5','$this->subject6','$this->subject7','$this->subject8','$this->subject9','$this->subject10','$person->id')";

            if (!mysql_query($insert, $con)) {
                echo"Error " . mysql_error() . "<br/>";
            } else {
                echo"<script>alert(\"Data inserted\")</script>";
            }

            if ($this->qualified == 1) {
                echo"<script>main.location.replace('tertiary.php')</script>";
            }
        } else {
            echo"Your data is incorrect<br/>";
        }
    }

}

?>