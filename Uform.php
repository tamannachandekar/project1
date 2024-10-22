<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/Uform.css">
</head>
    <body>
        <div class="container">
            <header>Patient Registration</header>

            <form action="Uformdata.php" method="post">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Personal Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" name="dob" placeholder="Enter your DOB" required>
                            </div>


                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="Number" name="number" placeholder="Enter your mobile number" required>
                            </div>
                            <div class="input-field">
                                <label>Gender</label>
                                    <select name="level" id="">
                                    <option value="1">Male</option>
                                    <option value="">Female</option>
                                    </select> 
                            </div>
                            <div class="input-field">
                                <label>Occupation</label>
                                <input type="text" name="occupation" placeholder="Enter your Occupation" required>
                            </div>
                        </div>
                    </div>


                    <div class="details ID">
                        <span class="title">Condition Details</span>

                        <div class="fields">
                            <div class="input-field1">
                                <label>Condition</label>
                                <input type="text" name="condition" placeholder="Condition of paitent" required>
                            </div>
                            <div class="input-field1">
                                <label>Body-part</label>
                                <input type="text" name="bpart" placeholder="Which Body-part" required>
                            </div>
                            <div class="input-field1">
                                <label>Severity</label>
                                <input type="number" name="severity" placeholder="Percentage of Severity" required>
                            </div>
                        </div>
                        
                        <button class="nextbtn">
                            <span class="btnText" name="nextbtn">Next</span>
                            <i class="uil uil navigator"></i>
                        </button>
                    </div>
                </div>
    
            </form>
        </div>
    </body>
</html>