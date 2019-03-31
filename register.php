<!-- Register page by Ken Zhang -->

<?php require "scripts/header.php" ?>

<link rel="stylesheet" href="styles/home.css">

<!-- NAVBAR -->
<div class="container flashsales">

    <div class="row">
        <!-- Customer login starts from here -->
        <div class="col-lg-4 text-light" style="background-color: rgba(91,91,1,0.85)"><br />
            <h5 class="text-light">Return customers:<br /> Welcome back to Travel Experts!<br /> Please login:</h5>
            <form name="signin" class="px-4 py-3" method="post" action="bouncer.php">

                <div class="form-group">
                    <label for="Email1">Email address</label>
                    <input type="email" class="form-control" id="Email1" placeholder="email@example.com">
                </div>

                <div class="form-group">
                    <label for="Password1">Password</label>
                    <input type="password" class="form-control" name="Password1" placeholder="Password">
                </div>

                <div class="form-group">
                    <div class="form-check">
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
        <div class="col-lg-8 text-light" style="background-color:  rgba(91,0,114,0.75)"><br />
            <h5 class="text-light">New around here? Please sign up:</h5>
            <form name="signup" class="px-4 py-3" method="post" action="bouncer.php">
            <!--form name="signup" action='bouncer.php' method="post" enctype='text/plain' class='px-4 py-3'-->
                <div class="form-row" class="text-light">
                    <div id="displayText" class="text-warning"><label>Instructions and Hints to fill the form</label></div>
                    <div id="hideText" class="text"> </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for='1'>Please enter your First name </label></td>
                        <input class="form-control" id='1' name='firstname' type='text' minlength='2' maxlength='25' required pattern='[A-Za-z]+' onfocus='toggle(this.id);this.form.firstname.placeholder="First name(2~25 characters)";' onblur='toggle(0)'>
                    </div>

                    <div class="form-group col-md-6">
                        <label for='2'>Please enter your Last name </label></td>

                        <input class="form-control" id="2" name="lastname" type="text" minlength="2" maxlength="25" required pattern="[A-Za-z]+" onfocus="toggle(this.id);this.form.lastname.placeholder='Last name(2~25 characters)';" onblur="toggle(0);" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for='3'>Email address as login ID: &nbsp;&nbsp; </label>
                        <input class="form-control" id='3' name='email' type='email' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$' required onfocus='toggle(this.id); this.form.email.placeholder="a valid email address";' onblur='toggle(0);'>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for='4'>Please input your password:&nbsp;&nbsp;
                        </label>
                        <input class="form-control" id='4' name='passwd1' type='password' minlength='8' maxlength='15' required pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='Must contain at least one number and one uppercase and lowercase letter, and 8~15 characters' onfocus='toggle(this.id); this.form.passwd1.placeholder="8~15 characters";' onblur='toggle(0);' />
                    </div>

                    <div class="form-group col-md-6">
                        <label for='5'>Please verify your password:&nbsp;&nbsp; </label>
                        <input class="form-control" id='5' name='passwd2' type='password' minlength='8' maxlength='15' required pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='Must match the previous password settings' onfocus='toggle(this.id); this.form.passwd2.placeholder="Verify password"' onblur='toggle(0);' />
                    </div>
                </div>
                <div class="form-row">
                    <label>Please enter your address: </label>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for='6'>Your Steet number: </label>
                        <input class="form-control" id='6' name='localaddress' type='text' onfocus='toggle(this.id);this.form.address.placeholder="eg. 123-45 67th St., NE"' onblur='toggle(0);' />
                    </div>
                    <div class="form-group col-md-4">
                        <label for='7'>City/Town/County: </label>
                        <input class="form-control" id='7' name='city' type='text' onfocus='toggle(this.id);' onblur='toggle(0);' />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for='8'>Province/State: </label>
                        <input class="form-control" id='8' name='province' type='text' onfocus='toggle(this.id);' onblur='toggle(0);' />
                    </div>
                    <div class="form-group col-md-4">
                        <label for='9'>Country: </label>
                        <input class="form-control" id='9' name='country' type='text' onfocus='toggle(this.id);' onblur='toggle(0);' />
                    </div>
                    <div class="form-group col-md-4">
                        <label for='10'>Post Code: </label>
                        <input class="form-control" id='10' name='postcode' type='text' onfocus='toggle(this.id); this.form.zip.placeholder="A1B 2C3";' onblur='toggle(0);' />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for='11'>Your personal contact number with area code: </label></td>
                        <input class="form-control" id='11' name='contactno' type='text' title='Please enter your personal contact number follow the patten: 9874561234.' onfocus='toggle(this.id); this.form.contactno.placeholder="9874561234"' onblur='toggle(0);' />
                    </div>
                    <div class="form-group col-md-6">
                        <label for='12' class='jumbotext'>Your business contact number with area code: </label>
                        <input class="form-control" id='12' name='businessno' type='text' title='Please enter your business contact number follow the patten: 9874561234.' onfocus='toggle(this.id); this.form.businessno.placeholder="9874561234"' onblur='toggle(0);' />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input id='reset' name='resetbutton' class='btn btn-primary' type='reset' onclick='return confirm("Are you sure to clear the form?")' />
                    </div>
                    <div class="form-group col-md-6">
                        <input id='submit' name='submitbutton' class='btn btn-primary' type='submit' onclick='return validateform(this.form);' />
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
        'Please enter your First name, minimum 2 characters, maxmum 25 characters.',
        'Please enter your Last name, minimum 2 characters, maxmum 25 characters.',
        'Please enter your valid email address, contains @ and . symbals',
        'Must contain at least one number and one uppercase and lowercase letter, and 8~15 characters',
        'Verify your password, must match the previous password settings',
        'Please enter your local address, P.O.Box, Street No. etc.',
        'Please enter your city',
        'Please enter your province/state',
        'Please enter your country',
        'Please enter your post code, format for Canadian postcode: A1B 2C3',
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
        for (i = 1; i < 13; i++) {
            j = i.toString();
            if (document.getElementById(j).value == '') {
                alert("Please fill all blanks!");
                return false;
            }
        }
        //verify PostCode(Canada)
        var zip = "/^[A-Z]\d[A-Z]?\d[A-Z]\d$";
        if (zip.test(form.postcode.value)) {
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


        //return true;
    }
</script>

<?php require "scripts/footer.php" ?> 