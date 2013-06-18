<?php

/**
 * personal detail form..
 */
$redirect_form = "";
$valid = TRUE;

$firstNameVal = 0;
$lastNameVal = 0;
$raceVal = 0;
$dateOfBirthVal = 0;
$idVal = 0;
$citizenshipVal = 0;
$languagesVal = 0;
$healthVal = 0;
$transportVal = 0;
$licenseVal = 0;
$streetVal = 0;
$suburbVal = 0;
$codeVal = 0;
$phoneVal = 0;
$emailVal = 0;
if (isset($_POST["submit"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $race = $_POST["race"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $id = $_POST["idNumber"];
    $citizenship = $_POST["citizenship"];
    $languages = $_POST["languages"];
    $health = $_POST["health"];
    $transport = $_POST["transport"];
    $street = $_POST["street"];
    $suburb = $_POST["suburb"];
    $code = $_POST["code"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];


    if ($_POST["firstName"] == null) {
        $firstNameVal = 1;
        $valid = FALSE;
    }
    if ($_POST["lastName"] == null) {
        $lastNameVal = 1;
        $valid = FALSE;
    }
    if ($_POST["race"] == "Select One") {
        $raceVal = 1;
        $valid = FALSE;
    }
    if ($_POST["dateOfBirth"] == null) {
        $dateOfBirthVal = 1;
        $valid = FALSE;
    }
    if ($_POST["idNumber"] == null) {
        $idVal = 1;
        $valid = FALSE;
    }
    if ($_POST["citizenship"] == "Select One") {
        $citizenshipVal = 1;
        $valid = FALSE;
    }
    if ($_POST["languages"] == null) {
        $languagesVal = 1;
        $valid = FALSE;
    }
    if ($_POST["health"] == null) {
        $healthVal = 1;
        $valid = FALSE;
    }
    if ($_POST["transport"] == "Select One") {
        $transportVal = 1;
        $valid = FALSE;
    }
    if (empty($_POST["license"])) {
        $licenseVal = 1;
        $valid = FALSE;
    }
    if ($_POST["street"] == null) {
        $streetVal = 1;
        $valid = FALSE;
    }
    if ($_POST["suburb"] == null) {
        $suburbVal = 1;
        $valid = FALSE;
    }
    if ($_POST["code"] == null) {
        $codeVal = 1;
        $valid = FALSE;
    }
    if ($_POST["phone"] == null) {
        $phoneVal = 1;
        $valid = FALSE;
    }
    if ($_POST["email"] == null) {
        $emailVal = 1;
        $valid = FALSE;
    }
    

}
else
     if(isset($_POST['submit']) && $valid =TRUE )
{     
    header("location:qualifications.php");
    exit();
}
  
?>

<?php

/**
 * Qualifications page..
 */
$period1Val = 0;
$qualificationVal = 0;
$institutionVal = 0;
$tertiarySubject1Val = 0;
$tertiarySubject2Val = 0;
$tertiarySubject3Val = 0;
$tertiarySubject4Val = 0;

$period2Val = 0;
$schoolVal = 0;
$secondarySubject1Val = 0;
$secondarySubject2Val = 0;
$secondarySubject3Val = 0;
$secondarySubject4Val = 0;
$secondarySubject5Val = 0;
$secondarySubject6Val = 0;
$secondarySubject7Val = 0;

if (isset($_POST["submit"])) {
    if ($_POST["period1"] == null)
        $period1Val = 1;
    if ($_POST["qualification"] == null)
        $qualificationVal = 1;
    if ($_POST["institution"] == null)
        $institutionVal = 1;
    if ($_POST["tertiarySubject1"] == null)
        $tertiarySubject1Val = 1;
    if ($_POST["tertiarySubject2"] == null)
        $tertiarySubject2Val = 1;
    if ($_POST["tertiarySubject3"] == null)
        $tertiarySubject3Val = 1;

    if ($_POST["period2"] == null)
        $period2Val = 1;
    if ($_POST["school"] == null)
        $schoolVal = 1;
    if ($_POST["secondarySubject1"] == null)
        $secondarySubject1Val = 1;
    if ($_POST["secondarySubject2"] == null)
        $secondarySubject2Val = 1;
    if ($_POST["secondarySubject3"] == null)
        $secondarySubject3Val = 1;
    if ($_POST["secondarySubject4"] == null)
        $secondarySubject4Val = 1;
    if ($_POST["secondarySubject5"] == null)
        $secondarySubject5Val = 1;
    if ($_POST["secondarySubject6"] == null)
        $secondarySubject6Val = 1;
    if ($_POST["secondarySubject7"] == null)
        $secondarySubject7Val = 1;
}
?>