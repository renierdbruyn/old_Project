<?php

function autoload($class) {
    require( $class . '.class.php');
}

// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
$person = new Personal;
if (isset($_POST["history"])) {
    $history = new History;
    $history->validate();
    $history->storeData();
}

Class History {

    public $flag = 0;
    public $numberError = 0;
    public $unitError = 0;
    public $industryError = 0;
    public $positionError = 0;
    public $nameError = 0;
    public $phoneError = 0;
    public $descriptionError = 0;
    public $number;
    public $unit;
    public $company;
    public $industry;
    public $position;
    public $duties;
    public $name;
    public $phone;
    public $description;

    function validate() {

        $this->number = $_POST["slNumber"];
        $this->unit = $_POST["slUnit"];
        $this->company = $_POST["txtCompany"];
        $this->industry = $_POST["txtIndustry"];
        $this->position = $_POST["txtPosition"];
        $this->duties = $_POST["taDuties"];
        $this->name = $_POST["txtName"];
        $this->phone = $_POST["txtPhone"];
        $this->description = $_POST["taDescription"];

        if ($this->number == 0)
            $this->numberError = 1;

        if ($this->unit == null)
            $this->unitError = 1;

        if (is_numeric($this->industry))
            $this->industryError = 1;
        if (strlen($this->industry) < 4)
            $this->industryError = 1;

        if (is_numeric($this->position))
            $this->positionError = 1;
        if (strlen($this->position) < 4)
            $this->positionError = 1;

        if (is_numeric($this->name))
            $this->nameError = 1;
        if (strlen($this->name) < 3)
            $this->nameError = 1;

        if (!is_numeric($this->phone))
            $this->nameError = 1;
        if (strlen($this->phone) != 10)
            $this->nameError = 1;

        if (is_numeric($this->description))
            $this->descriptionError = 1;
        if (strlen($this->description) < 10)
            $this->descriptionError = 1;

        $this->flag = $this->numberError + $this->unitError + $this->industryError + $this->positionError + $this->nameError + $this->phoneError + $this->descriptionError;

        return $this->flag;
    }

    function storeData() {
        $person = new Personal;
        if ($this->flag == 0) {
            require_once("../config/db.php");

            $insert = "INSERT INTO job_history(duration_number, duration_unit, company,industry,  position, duties, reference_name, reference_phone, self_description, id_number) values('$this->number','$this->unit','$this->company','$this->industry','$this->position','$this->duties','$this->name','$this->phone','$this->description','$person->id')";

            if (!mysql_query($insert, $con)) {
                echo"Error " . mysql_error() . "<br/>";
            } else {
                header("location:matric.php");
            }
        }
    }

}

?>