<?php

function autoload($class) {
    require( $class . '.class.php');
}

// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
$person = new Personal;
$pc = new Computer;
if (isset($_POST["computer"])) {
    $pc->storeData();
}

Class Computer {

    public $word = 0;
    public $access = 0;
    public $excel = 0;
    public $powerpoint = 0;
    public $publisher = 0;
    public $outlook = 0;
    public $officeList = "";
    public $officeList;
    public $word;
    public $access;
    public $excel;
    public $outlook;
    public $powerpoint;
    public $publisher;

    function storeData() {
        if (isset($_POST["computerLiteracy"]) && is_Array($_POST["computerLiteracy"])) {
            foreach ($_POST["computerLiteracy"] as $office) {
                $this->officeList = $this->officeList . $office . ", ";

                if ($office == "MS Office Word")
                    $this->word = 1;
                if ($office == "MS Office Access")
                    $this->access = 1;
                if ($office == "MS Office Excel")
                    $this->excel = 1;
                if ($office == "MS Office Outlook")
                    $this->outlook = 1;
                if ($office == "MS Office Power Point")
                    $this->powerpoint = 1;
                if ($office == "MS Office Publisher")
                    $this->publisher = 1;
            }
            $this->officeList = substr($this->officeList, 0, (strlen($this->officeList) - 2));
        }

        require_once("../config/db.php");

        $insert = "INSERT INTO computer(skills, id_number) values('$this->officeList','$person->id')";

        if (!mysql_query($insert, $con)) {
            echo"Error " . mysql_error() . "<br/>";
        } else {

            echo"<script>alert(\"Computer literacy data inserted\")</script>";
            header("location:welcome.php");
        }
    }

}

?>