<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/Aform.css">
</head>
    <body>
        <div class="container">
            <header>Consultant</header>

            <form action="Afromdata.php" method="POST">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Personal Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Specialization</label>
                                <input type="text" name="Specialization" placeholder="Enter your Specialization" required>
                            </div>


                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="Number" name="MobileNumber" placeholder="Enter your mobile number" required>
                            </div>
                            <div class="input-field">
                                <label>Gender</label>
                                    <select name="level" id="">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    </select> 
                            </div>
                        </div>
                    </div>


                    <div class="details ID">
                        <span class="title">Condition Details</span>

                        <div class="fields">
                            <div class="input-field1">
                                <label>Certification</label>
                                <input type="text" name="Certification" placeholder="Enter your certification" required>
                            </div>
                            <div class="input-field1">
                                <label>Experience</label>
                                <input type="text" name="Experience" placeholder="Years of evperience" required>
                            </div>
                            <div class="input-field1">
                                <label>Associated Facility</label>
                                <input type="text" name="AssociatedFacility" placeholder="Associated Facility" required>
                            </div>
                        </div>
                        
                        <button class="nextbtn" name="nextbtn">
                            <span class="btnText" name="nextbtn">Next</span>
                            <i class="uil uil navigator"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
</html>