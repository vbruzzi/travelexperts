<!-- Register page by Ken Zhang -->

<?php require "scripts/header.php" ?>


<link rel="stylesheet" href="styles/packages.css">
<link rel="stylesheet" href="styles/home.css">
<!--Banner (from Dina) to add consistency across pages-->
<div class="packagebanner">
    <div class="container">
        <h1 class="bold">Sign in | Sign up</h1>
        <p class="color">One agency many worlds</p>
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
            <form name="signin" class="px-4 py-3" method="post" action="bouncer.php">

                <div class="form-group  text-light ">
                    <label for="user">Username</label>
                    <input type="text" class="form-control" id="user" placeholder="Enter your username">
                </div>

                <div class="form-group text-light">
                    <label for="Password1">Password</label>
                    <input type="password" class="form-control" name="Password1" placeholder="Password">
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
            <form name="signup" class="px-4 py-3" method="post" action="bouncer.php">
            
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
                        <input class="form-control" id='4' name='userid' type='text' pattern='^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$' required onfocus='toggle(this.id); this.form.userid.placeholder="Username with 2~20 characters";' onblur='toggle(0);'>
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
                        <input class="form-control" id='7' name='localaddress' type='text' onfocus='toggle(this.id);this.form.localaddress.placeholder="eg. 123-45 67th St., NE"' onblur='toggle(0);' />
                    </div>
                    <div class="form-group col-md-4">
                        <label for='8'>City/Town/County: </label>
                        <input class="form-control" id='8' name='city' type='text' onfocus='toggle(this.id);' onblur='toggle(0);' />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for='9'>Province/State: </label>
                        <input class="form-control" id='9' name='province' type='text' onfocus='toggle(this.id);' onblur='toggle(0);' />
                    </div>
                    <div class="form-group col-md-4">
                        <label for='10'>Country: </label>
                        <input class="form-control" id='10' name='country' type='text' onfocus='toggle(this.id);' onblur='toggle(0);' />
                    </div>
                    <div class="form-group col-md-4">
                        <label for='11'>Post Code: </label>
                        <input class="form-control" id='11' name='postcode' title='Format for Canadian postcode: A1B2C3'  type='text' onfocus='toggle(this.id); this.form.postcode.placeholder="A1B2C3";' onblur='toggle(0);' />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for='12'>Your personal contact number with area code: </label>
                        <input class="form-control" id='12' name='contactno' type='text' title='Please enter your personal contact number follow the patten: 9874561234.' onfocus='toggle(this.id); this.form.contactno.placeholder="9874561234"' onblur='toggle(0);' />
                    </div>
                    <div class="form-group col-md-6">
                        <label for='13' class='jumbotext'>Your business contact number with area code: </label>
                        <input class="form-control" id='13' name='businessno' type='text' title='Please enter your business contact number follow the patten: 9874561234.' onfocus='toggle(this.id); this.form.businessno.placeholder="9874561234"' onblur='toggle(0);' />
                    </div>
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