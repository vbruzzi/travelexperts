<!-- Register page by Ken Zhang -->

<?php 
require "scripts/header.php";
require "scripts/showuserguest.php";
// continue session after login
session_start();
if(!isset($_SESSION["username"])){
    $user = "Guest";
}
else{
    $user = $_SESSION["username"];
}
// if(isset($_SERVER['QUERY_STRING'])){
//     $url = $_SERVER['QUERY_STRING'];
   echo "Package URL is ".$_SESSION["pkg"]."<br>";

?>

<link rel="stylesheet" href="styles/packages.css">
<link rel="stylesheet" href="styles/home.css">
<!--Banner (from Dina) to add consistency across pages-->
<div class="packagebanner">
    <div class="container">
        <h1 class="bold">Sign in | Sign up</h1>
        <p class="color">One agency many worlds</p>
        <?php showUserGuest($user); ?>
    </div>
</div>
<!-- NAVBAR -->
<!-- Main -->
<main>
<div class="container"> 
    <!-- flashsales theme-->

    <div class="row">
        <!-- Customer login starts from here -->
        <div class="col-lg-4 text-primary" style="background-color: rgb(121, 102, 146);"><br />
            <h5 class="text-light">Return customers:<br /> Welcome back!<br /> Please login:</h5>
            <form name="signin" class="px-4 py-3" method="post" action="login.php">

                <div class="form-group  text-light ">
                    <label for="user"  title="Enter your username">Username</label>
                    <input type="text" class="form-control" id="user" name="username" placeholder="Enter your username">
                </div>

                <div class="form-group text-light">
                    <label for="Password1" title="Enter your password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <div class="form-group">
                    <div class="form-check  text-light">
                        <input type="checkbox" class="form-check-input" id="Check">
                        <label class="form-check-label" for="Check">
                            Remember me
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>

            <div class="dropdown">
                <div class="form-group">
                    <a class="dropdown-item text-warning" href="#">Forgot password? I can help!</a>
                </div>
            </div>
        </div>
        <!-- Registration section starts here -->
        <div class="col-lg-8 text-light " style= "background-color: rgb(129, 128, 122);" ><br />
            <h5 class="text-light">New around here? Please sign up:</h5>
            <form name="signup" class="px-4 py-3" method="post" action="userdata.php">
            
                <div class="form-row" class="text-light">
                    <div id="displayText" class="text-warning"><label>Instructions and Hints to fill the form</label></div>
                    <div id="hideText" class="text"> </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for='1'>Please enter your First name </label>
                        <input class="form-control" id='1' name='firstname' type='text' minlength='2' maxlength='25' required pattern='[A-Za-z]+' onfocus='toggle(this.id);this.form.firstname.placeholder="First name(2~25 characters)";' onblur='toggle(0)'>
                    </div>

                    <div class="form-group col-md-6">
                        <label for='2'>Please enter your Last name </label>

                        <input class="form-control" id="2" name="lastname" type="text" minlength="2" maxlength="25" required pattern="[A-Za-z]+" onfocus="toggle(this.id);this.form.lastname.placeholder='Last name(2~25 characters)';" onblur="toggle(0);" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for='3'>Email address: &nbsp;&nbsp; </label>
                        <input class="form-control" id='3' name='email' type='email' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$' required onfocus='toggle(this.id); this.form.email.placeholder="a valid email address";' onblur='toggle(0);'>
                    </div>
                    <div class="form-group col-md-6">
                        <label for='4'>Username with 2-20 chars: &nbsp;&nbsp; </label>
                        <input class="form-control" id='4' name='username' type='text' pattern='^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$' required onfocus='toggle(this.id); this.form.userid.placeholder="Username with 2~20 characters";' onblur='toggle(0);'>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for='5'>Please input your password:&nbsp;&nbsp;
                        </label>
                        <input class="form-control" id='5' name='passwd1' type='password' minlength='8' maxlength='15' required pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='Must contain at least one number and one uppercase and lowercase letter, and 8~15 characters' onfocus='toggle(this.id); this.form.passwd1.placeholder="8~15 characters";' onblur='toggle(0);' />
                    </div>

                    <div class="form-group col-md-6">
                        <label for='6'>Please verify your password:&nbsp;&nbsp; </label>
                        <input class="form-control" id='6' name='passwd2' type='password' minlength='8' maxlength='15' required pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='Must match the previous password settings' onfocus='toggle(this.id); this.form.passwd2.placeholder="Verify password"' onblur='toggle(0);' />
                    </div>
                </div>
                <div class="form-row">
                    <label>Please enter your address: </label>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for='7'>Your Steet number: </label>
                        <input class="form-control" id='7' name='address' type='text' onfocus='toggle(this.id);this.form.localaddress.placeholder="eg. 123-45 67th St., NE"' onblur='toggle(0);' />
                    </div>
                    <div class="form-group col-md-4">
                        <label for='8'>City/Town/County: </label>
                        <input class="form-control" id='8' name='city' type='text' onfocus='toggle(this.id);' onblur='toggle(0);' />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for='9'>Province/State: </label>
                        <label for="state">State</label>
                <select class="custom-select d-block w-100" id="province" required>
                <option value="">Choose...</option>
                <option value="AB">Alberta</option>
                <option value="BC">British Columbia</option>
                <option value="MB">Manitoba</option>
                <option value="NB">New Brunswick</option>
                <option value="NL">Newfoundland and Labrador</option>
                <option value="NS">Nova Scotia</option>
                <option value="ON">Ontario</option>
                <option value="PE">Prince Edward Island</option>
                <option value="QC">Quebec</option>
                <option value="SK">Saskatchewan</option>
                <option value="NT">Northwest Territories</option>
                <option value="NU">Nunavut</option>
                <option value="YT">Yukon</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
                </select>
                        <!-- <input class="form-control" id='9' name='province' type='text' onfocus='toggle(this.id);' onblur='toggle(0);' /> -->
                    </div>
                    <div class="form-group col-md-4">
                        <label for='10'>Country: </label>
                        <select class="custom-select d-block w-100" id="country" required>
                        <option value="">Choose...</option>
                        <option>Canada</option>
                        <option>United States</option>
                        </select>
                        <!-- <input class="form-control" id='10' name='country' type='text' onfocus='toggle(this.id);' onblur='toggle(0);' /> -->
                    </div>
                    <div class="form-group col-md-4">
                        <label for='11'>Post Code: </label>
                        <input class="form-control" id='11' name='postal' title='Format for Canadian postcode: A1B2C3'  type='text' onfocus='toggle(this.id); this.form.postcode.placeholder="A1B2C3";' onblur='toggle(0);' />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for='12'>Your personal contact number with area code: </label>
                        <input class="form-control" id='12' name='phone' type='text' title='Please enter your personal contact number follow the patten: 9874561234.' onfocus='toggle(this.id); this.form.contactno.placeholder="9874561234"' onblur='toggle(0);' />
                    </div>
                    <!-- <div class="form-group col-md-6">
                        <label for='13' class='jumbotext'>Your business contact number with area code: </label>
                        <input class="form-control" id='13' name='businessno' type='text' title='Please enter your business contact number follow the patten: 9874561234.' onfocus='toggle(this.id); this.form.businessno.placeholder="9874561234"' onblur='toggle(0);' />
                    </div> -->
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input id='reset' name='resetbutton' class='btn btn-primary' type='reset' onclick='return confirm("Are you sure to clear the form?")' />
                    </div>
                    <div class="form-group col-md-6">
                        <input id='submit' name='submitbutton' value="Submit" class='btn btn-primary' type='submit' onclick='return validateform(this.form);' />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</main>
<script>
    var hints = new Array;
    hints = [
        'Instructions and Hints to fill the form',
        'Please enter your First name, minimum 2 characters, maximum 25 characters.',
        'Please enter your Last name, minimum 2 characters, maximum 25 characters.',
        'Please enter your valid email address, contains @ and . symbols',
        'Username 2~20 characters start with a letter',
        'Must contain at least one number and one uppercase and lowercase letter, and 8~15 characters',
        'Verify your password, must match the previous password settings',
        'Please enter your local address, P.O.Box, Street No. etc.',
        'Please enter your city',
        'Please enter your province/state',
        'Please enter your country',
        'Format for Canadian postcode: A1B2C3, uppercase only, without space',
        'Please enter your personal contact number, follow the patten: 9874561234.',
        'Please enter your business contact number, follow the patten: 9874561234.'
    ];

    function toggle(id) {
        var i = parseInt(id);
        var hide = document.getElementById("hideText");
        var text = document.getElementById("displayText");
        text.style.display = "none";
        hide.style.display = "visable";
        hide.innerHTML = "<label class='text-warning'>" + hints[i] + "</label>";
    }

    function validateform(form) {
        var flag = true;
        var i, j;
        //Verify if all blanks are filled
		 
        for (i = 1; i <= 13; i++) {
            j = i.toString();
			
            if (document.getElementById(j).value === '') {
                alert("Please fill all blanks!");
                return false;
            }
        }
		 
        //verify PostCode(Canada) A1B2C3
        var zip = /^[A-Z]\d[A-Z]?\d[A-Z]\d$/;
		
        if (!zip.test(form.postcode.value)) {		//.toUpperCase()
			alert("Please check PostCode format, uppercase letter only, no space");
            return false;
        }
        //Verify if passwords match 

        if (form.passwd1.value != form.passwd2.value) {
            flag = false;
            alert("Please make your password settings match!");
            return flag;
        } else {
            return flag && confirm("Are you sure to submit the form?");
        }
		
        return flag;
    }
</script>
<?php require "scripts/footer.php" ?> 