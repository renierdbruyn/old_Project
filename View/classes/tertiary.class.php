<?php

function autoload($class) {
    require( $class . '.class.php');
}

// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
$person = new Personal;
$tertiary = new Tertiary;
$tertiary->validate();
$tertiary->storeData();
?>

<?php

Class Tertiary {

    public $check = 0;
    public $statusVal = 0;
    public $nameVal = 0;
    public $subject1Val = 0;
    public $subject2Val = 0;
    public $subject3Val = 0;
    public $subject4Val = 0;
    public $status;
    public $year;
    public $name;
    public $institution;
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
        $this->status = $_POST["status"];
        $this->year = $_POST["txtYear"];
        $this->name = $_POST["txtName"];
        $this->institution = $_POST["txtInstitution"];
        $this->subject1 = $_POST["txtSubject1"];
        $this->subject2 = $_POST["txtSubject2"];
        $this->subject3 = $_POST["txtSubject3"];
        $this->subject4 = $_POST["txtSubject4"];
        $this->subject5 = $_POST["txtSubject5"];
        $this->subject6 = $_POST["txtSubject6"];
        $this->subject7 = $_POST["txtSubject7"];
        $this->subject8 = $_POST["txtSubject8"];
        $this->subject9 = $_POST["txtSubject9"];
        $this->subject10 = $_POST["txtSubject10"];

        if ($this->status == null)
            $this->statusError = 1;

        if (!is_numeric($this->year))
            $this->yearError = 1;
        if (strlen($this->year) < 4)
            $this->yearError = 1;

        if (is_numeric($this->subject1))
            $this->subject1Error = 1;
        if (strlen($this->subject1) < 4)
            $this->subject1Error = 1;

        if (is_numeric($this->subject2))
            $this->subject2Error = 1;
        if (strlen($this->subject2) < 4)
            $this->subject2Error = 1;

        if (is_numeric($this->subject3))
            $this->subject3Error = 1;
        if (strlen($this->subject3) < 4)
            $this->subject3Error = 1;

        if (is_numeric($this->subject4))
            $this->subject4Error = 1;
        if (strlen($this->subject4) < 4)
            $this->subject4Error = 1;

        $this->check = $this->statusVal + $this->nameVal + $this->subject1Val + $this->subject2Val + $this->subject3Val + $this->subject4Val;
    }

    function storeData() {
        if ($this->check == 0) {
            require_once("../config/db.php");

            $insert = "INSERT INTO tertiary(status, year, qualification_name, institution, tertiary_subject1,
			 tertiary_subject2, tertiary_subject3, tertiary_subject4, tertiary_subject5, tertiary_subject6, 
			 tertiary_subject7, tertiary_subject8, tertiary_subject9, tertiary_subject10, id_number) 
			 values('$this->status','$this->year',$this->name','$this->institution','$this->subject1','$this->subject2','$this->subject3','$subject4',
			 '$this->subject5','$this->subject6','$this->subject7','$this->subject8','$this->subject9','$this->subject10','$person->id')";

            if (!mysql_query($insert, $con)) {
                echo"Error " . mysql_error() . "<br/>";
            } else if ($tis->check == 1) {
                header("location:computerLiteracy.php");
            } else {
                echo"Your data is incorrect <br/>";
            }
        }
    }

}
?>