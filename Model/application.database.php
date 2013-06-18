<?php
include_once 'mysql.php';

//mysql_connect("localhost", "root","");
//mysql_select_db("201308");

$db = new Mysql();
$db->connect();
class writeApplicant 
{
    public $name;
    public $id;
    public $positionApplied;
    public $consultant;
    public $recruitmentHistory;
    public $preferedCompany;
    public $contactNumber;
    public $alternateNumber;
    public $address;
    public $driversLicence;
    public $ownVehicle;
    public $emailAdderess;
    public $noticePeriod;
    public $qualifications;
    public $refereceContact1;
    public $referenceNumber1;
    public $refereceContact2;
    public $referenceNumber2;
    public $computerLitiracy;
    public $lastSalary;
    public $preferedSalary;
    public $minimumSalary;
    public $health;
    public $sellYourself;
    public $intrestHobbies;
    public $awardsAchievements;
    public $revenueAtCompany;
    public $futureEmployer;
    public $signature;
    public $date;
    
    public $query;
    public $result;
    
    public function add(){
        
        $this->name = $_POST['applicantName'];
        $this->positionApplied = $_POST['positionApplied'];
        $this->consultant = $_POST['consultant'];
        $this->recruitmentHistory = $_POST['recruitmentHistory'];
        $this->preferedCompany = $_POST['preferedCompany'];
        $this->contactNumber = $_POST['applicantContactNo'];
        $this->alternateNumber = $_POST['applicantEmergencyContact'];
        $this->address = $_POST['address'];
        $this->driversLicence = $_POST['driversLicence'];
        $this->ownVehicle = $_POST['ownVehicle'];
        $this->emailAdderess = $_POST['email'];
        $this->id = $_POST['id'];
        $this->qualifications = $_POST['qualifications'];
        $this->refereceContact1 = $_POST['ReferenceEmployer1'];
        $this->referenceNumber1 = $_POST['EmployerContact1'];
        $this->refereceContact2 = $_POST['ReferenceEmployer2'];
        $this->referenceNumber2 = $_POST['EmployerContact2'];
        $this->recruitmentHistory = $_POST['recruitmentHistory'];
        $this->recruitmentHistory = $_POST['recruitmentHistory'];
        $this->recruitmentHistory = $_POST['recruitmentHistory'];
        $this->computerLitiracy = $_POST['computerLiteracy'];
        $this->lastSalary = $_POST['lastSalary'];
        $this->preferedSalary = $_POST['preferedSalary'];
        $this->minimumSalary = $_POST['minimumSalary'];
        $this->health = $_POST['health'];
        $this->sellYourself = $_POST['sellYourself'];
        $this->intrestHobbies = $_POST['intrestsHobbies'];
        $this->awardsAchievements = $_POST['awardsAchievements'];
        $this->revenueAtCompany = $_POST['controbutionToCompany'];
        $this->futureEmployer = $_POST['antFromFutureEmployer'];
        $this->signature = $_POST['signiture'];
        $this->date = $_POST['date'];
        
        $this->query = "insert into applicant values('$this->id','$this->name','$this->positionApplied','$this->consultant','$this->recruitmentHistory','$this->preferedCompany','$this->contactNumber','$this->alternateNumber','$this->address','$this->driversLicence','$this->ownVehicle','$this->emailAdderess','$this->noticePeriod','$this->qualifications','$this->refereceContact1','$this->referenceNumber1','$this->refereceContact2','$this->referenceNumber2','$this->computerLitiracy','$this->lastSalary','$this->preferedSalary','$this->minimumSalary','$this->health','$this->sellYourself','$this->intrestHobbies','$this->awardsAchievements','$this->revenueAtCompany','$this->futureEmployer','$this->signature','$this->date')";
        
        $this->result = mysql_query($this->query) or die(mysql_error());
    }
    
    public function addResult(){
         $this->result = mysql_query($this->addQuery()) or die(mysql_error()); 
    }
         
                
    
}
?>
