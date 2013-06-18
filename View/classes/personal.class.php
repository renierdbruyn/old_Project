<?php

Class Personal {

    public $flag;
    public $firstNameError = 0;
    public $lastNameError = 0;
    public $idError = 0;
    public $languagesError = 0;
    public $healthError = 0;
    public $nationError = 0;
    public $licenseError = 0;
    public $streetError = 0;
    public $suburbError = 0;
    public $codeError = 0;
    public $phoneError = 0;
    public $emailError = 0;
    public $firstName;
    public $lastName;
    public $nation;
    public $id;
    public $languages;
    public $health;
    public $license;
    public $street;
    public $suburb;
    public $code;
    public $phone;
    public $email;

    function validate() {

        $this->firstName = $_POST["txtName"];
        $this->lastName = $_POST["txtSurname"];
        $this->nation = $_POST["nationality"];
        $this->id = $_POST["txtId"];
        $this->languages = $_POST["slLanguages"];
        $this->health = $_POST["slHealth"];
        $this->license = $_POST["slLicense"];
        $this->street = $_POST["txtStreet"];
        $this->suburb = $_POST["txtTown"];
        $this->code = $_POST["txtCode"];
        $this->phone = $_POST["txtPhone"];
        $this->email = $_POST["txtEmail"];

        if (strlen($this->firstName) < 3)
            $this->firstNameError = 1;
        if (is_Numeric($this->firstName))
            $this->firstNameError = 1;
        if (strlen($this->lastName) < 3)
            $this->lastNameError = 1;
        if (is_Numeric($this->lastName))
            $this->lastNameError = 1;

        if (!is_Numeric($this->id))
            $this->idError = 1;

        if (!strlen($this->id) == 13)
            $this->idError = 1;

        if ($this->languages == null)
            $this->languagesError = 1;
        if (strlen($this->languages) < 4)
            $this->languagesError = 1;
        if (is_numeric($this->languages))
            $this->languagesError = 1;

        if ($this->health == null)
            $this->healthError = 1;
        if (is_numeric($this->health))
            $this->healthError = 1;
        if (strlen($this->health) < 4)
            $this->healthError = 1;


        if (is_numeric($this->nation))
            $this->nationError = 1;
        if (strlen($this->nation) < 4)
            $this->nationError = 1;

        if (empty($this->license))
            $this->licenseError = 1;

        if (is_numeric($this->street))
            $this->streetError = 1;
        if (strlen($this->street) < 6)
            $this->streetError = 1;

        if (strlen($this->suburb) < 4)
            $this->suburbError = 1;
        if (is_numeric($this->suburb))
            $this->suburbError = 1;

        if (!is_numeric($this->code))
            $this->codeError = 1;
        if (strlen($this->code) < 4)
            $this->codeError = 1;

        if (!strlen($this->phone) == 10)
            $this->phoneError = 1;

        if (!is_numeric($this->phone))
            $this->phoneError = 1;


        $atPosition = strpos($this->email, "@");
        $theAt = substr($this->email, $atPosition, 1);
        if (!substr($this->email, $atPosition, 1) == "@") {
            $this->emailError = 1;
        }
        if (is_numeric($this->email))
            $this->emailError = 1;

        $this->flag = $this->firstNameError + $this->lastNameError + $this->idError + $this->languagesError + $this->healthError + $this->nationError + $this->licenseError + $this->streetError + $this->suburbError + $this->codeError + $this->phoneError + $this->emailError;
    }

    function storeData() {
        if ($this->flag == 0) {
            require_once("../config/db.php");

            $address = $this->street . " " . $this->suburb . " " . $this->code;

            $insert = "INSERT INTO personal(name, lastname, id_number, phone, email, address, nationality, 
			languages, health, drivers_license) values('$this->firstName','$this->lastName','$this->id','$this->phone','$this->email','$address','$this->nation','$this->languages','$this->health','$this->license')";
            if (!mysql_query($insert, $con)) {
                echo"Error " . mysql_error() . "<br/>";
            } else {

                header("location:jobHistory.php");
            }
        } else {
            echo"<h3>Your data is not entered correctly</h3><br/>";
        }
    }

}

$person = new Personal;

if (isset($_POST["personal"])) {
    $person->validate();
    $person->storeData();
}
?>