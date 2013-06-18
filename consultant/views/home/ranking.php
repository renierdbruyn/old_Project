<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            .divList
            {
                width:30%;
                height:200px;
                background: #cccccc;
                position: relative;
                float: left;
                clear: right;
            }


            p
            {
                background: #33cc00;

            }
            .option
            {
                background: #33cc00;
                color: white;

                border-bottom: 1px solid #cccccc;

            }
            .formContainer
            {
                width: 60%;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <div class="divList">            
            <p class="option" ondblclick="age();">Age</p>
            <p class="option" ondblclick="gender();">Gender</p>
            <p class="option" ondblclick="race();">Race</p>
            <p class="option" ondblclick="nationality();">Nationality</p>
            <p class="option" ondblclick="religion();">Religion</p>
            <p class="option" ondblclick="place();">Location</p>
            <p class="option" ondblclick="qualification();">Qualification</p>
            <p class="option" ondblclick="industry();">Industry Type</p>
            <p class="option" ondblclick="position();">Work Position</p>
            <p class="option" ondblclick="experience();">Experience</p>  

        </div>
        <div class="formContainer">

            <p id="age"></p>
            <p id="gender"></p>
            <p id="race"></p>
            <p id="nationality"></p>
            <p id="religion"></p>
            <p id="location"></p>
            <p id="qualification"></p>
            <p id="industry"></p>
            <p id="position"></p>
            <p id="experience"></p>
            <button onclick="saveCriteria();">Save Criteria</button>
        </div>
        <script>

                function deleteCriteria() {
                    var child = document.getElementById("age");
                    child.parentNode.removeChild(child);
                     var child = document.getElementById("ageValue");
                    child.parentNode.removeChild(child);
                }

                function saveCriteria()
                {
                    var ageFlag = 0;
                    var genderFlag = 0;
                    var raceFlag = 0;
                    var nationalityFlag = 0;
                    var religionFlag = 0;
                    var locationFlag = 0;
                    var qualificationFlag = 0;
                    var industryFlag = 0;
                    var positionFlag = 0;
                    var experienceFlag = 0;

                    var criteria;

                    var age = document.getElementById("ageValue").value;
                    var gender = document.getElementById("genderValue").value;
                    var race = document.getElementById("raceValue").value;
                    var nationality = document.getElementById("nationalityValue").value;
                    var religion = document.getElementById("religionValue").value;
                    var location = document.getElementById("locationValue").value;
                    var qualification = document.getElementById("qualificationValue").value;
                    var industry = document.getElementById("industryValue").value;
                    var position = document.getElementById("positionValue").value;
                    var experience = document.getElementById("experienceValue").value;

                    /*
                     if(age===null)
                     ageFlag=1;
                     if(gender===null)
                     genderFlag=1;
                     if(race===null)
                     raceFlag=1;
                     if(nationality===null)
                     nationalityFlag=1;
                     if(religion===null)
                     religionFlag=1;
                     if(location===null)
                     locationFlag=1;
                     if(qualification===null)
                     qualificationFlag=1;
                     if(industry===null)
                     industryFlag=1;
                     if(position===null)
                     positionFlag=1;
                     if(experience===null)
                     experienceFlag=1;
                     */

                    if (age === null)
                        criteria += age;
                    if (gender === null)
                        criteria += gender;
                    if (race === null)
                        criteria += race;
                    if (nationality === null)
                        criteria += nationality;
                    if (religion === null)
                        criteria += religion;
                    if (location === null)
                        criteria += location;
                    if (qualification === null)
                        criteria += qualification;
                    if (industry === null)
                        criteria += industry;
                    if (position === null)
                        criteria += position;
                    if (experience === null)
                        criteria += experience;
                    alert(criteria);
                }
                function age()
                {
                    document.getElementById("age").innerHTML = "<label id='age'>Age : </label><input type='text' id='ageValue' /><button onclick='deleteCriteria();'>X</button>";
                }
                function gender()
                {
                    document.getElementById("gender").innerHTML = "<label>Gender : </label><input type='text' id='genderValue' /><button onclick='deleteCriteria()'>X</button>";
                }
                function race()
                {
                    document.getElementById("race").innerHTML = "<label>Race : </label><input type='text' id='raceValue' /><button>X</button>";
                }
                function nationality()
                {
                    document.getElementById("nationality").innerHTML = "<label>Nationality : </label><input type='text' id='nationalityValue' /><button>X</button>";
                }
                function religion()
                {
                    document.getElementById("religion").innerHTML = "<label>Religion : </label><input type='text' id='religionValue' /><button>X</button>";
                }
                function place()
                {
                    document.getElementById("location").innerHTML = "<label>Location : </label><input type='text' id='locationValue' /><button>X</button>";
                }
                function qualification()
                {
                    document.getElementById("qualification").innerHTML = "<label>Qualification : </label><input type='text' id='qualificationValue' /><button>X</button>";
                }
                function industry()
                {
                    document.getElementById("industry").innerHTML = "<label>Industry : </label><input type='text' id='industryValue' /><button>X</button>";
                }
                function experience()
                {
                    document.getElementById("experience").innerHTML = "<label>Experience : </label><input type='text' id='experienceValue' /><button>X</button>";
                }
                function position()
                {
                    document.getElementById("position").innerHTML = "<label>Position : </label><input type='text' id='positionValue' /><button>X</button>";
                }
        </script>
    </body>
</html>
