<!-- Order page by Ken Zhang --------
---- Team 2 Purple -->
<?php 
    if(isset($_SERVER['QUERY_STRING'])){
    $url = $_SERVER['QUERY_STRING'];
//     echo "Package URL is ".$url."<br>";
}
 if($_SERVER['REQUEST_METHOD']=='GET')
{
    $pkg= $_GET['order'];
  //   echo "package GET selected $pkg";
}
    require_once "scripts/showuserguest.php";
    //require_once "scripts/userClass.php";
    //require_once "scripts/queries.php";
    require "scripts/header.php";
    require "scripts/queries.php";
    session_start();
    if(!isset($_SESSION["username"])){
        $user = "Guest";
     //   echo "----------------Package URL is ".$url."<br>";
        if(!isset($_SESSION["pkg"])){
        $_SESSION["pkg"]= $pkg ;
      //  echo "=============Package URL is ".$url."<br>";
            } 
       header("location: register.php");
    }
    else{
        $user = $_SESSION["username"];
        
        $billSql = "SELECT * FROM users us left join creditcards cc  on (cc.CustomerId = us.userId) having us.username='$user' ";
        $search = doQuery($billSql);

        $results = mysqli_fetch_array($search);
        
        }
 
    $price = pkgprice($pkg);
    $desc = pkgdesc($pkg);     
    $_SESSION["price"]=$price;
    $_SESSION["desc"]=$desc;
?>    

    <!-- STYLES -->
    <link rel="stylesheet" href="styles/home.css">
    <link href="form-validation.css" rel="stylesheet">

    <!-- BootStrap 4 DateRange Picker for travel package start and end date availabilities Starts Here -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />



 <!-- BootStrap 4 DateRange Picker for travel package start and end date availabilities Starts Here -->

<div class="container">
    <!-- CREATE CONTENT -->
    <!--Banner to add consistency across pages-->
    <div class="packagebanner">
        <div class="container" style="text-align: right;" id="welcome">
            <?php showUserGuest($user);  //show login infomation on this page
            if($user=="Guest"){
                echo "<a href='register.php?ref=".$ref."'><small>[login]</small></a>";
            }
        ?>
        </div>
    </div>
    <div class="py-5 text-center">
        <h2>Dear <?php echo $user; ?>'s Billing Information</h2>
    </div>
    
    <!-- ============================================================== -->
    <!-- Right side bar for package price information-->
    <!-- ============================================================== -->

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">Package #<?php echo  $pkg; ?></span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Package Price:</h6>
                <small class="text-muted">For single person</small>
            </div>
            <span class="text-muted">$<?php echo $price; ?></span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class="text-muted"></div>
            <div>
                <h6 class="my-0">Package brief description:</h6>
                <small class="text-muted"><?php echo $desc; ?></small>
            </div>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed">
            
            <div >
                Trip Start Date: <input id="startDate" />
                Trip End Date: <input id="endDate" />
                <script>
                var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                $('#startDate').datepicker({
                    uiLibrary: 'bootstrap4',
                    iconsLibrary: 'fontawesome',
                    minDate: today,
                    maxDate: function () {
                        return $('#endDate').val();
                    }
                });
                $('#endDate').datepicker({
                    uiLibrary: 'bootstrap4',
                    iconsLibrary: 'fontawesome',
                    minDate: function () {
                        return $('#startDate').val();
                    }
                });
                </script>
            </div>

            </li>

        
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class="my-0">Reward Program: </div>
            <div class="text-muted">
                <select  class="custom-select d-block w-100"  name="reward" id="reward">
                    <option value = "0">Please Select</option>
                    <option value = "AeroPlan">AeroPlan</option>
                    <option value = "AeroPlan Gold">AeroPlan Gold</option>
                    <option value = "Air Miles">Air Miles</option>
                    <option value = "Coast Rewards">Coast Rewards</option>
                    <option value = "Mariott Rewards">Mariott Rewards</option>

                </select>   
                
                <label for="rwdnum" > <small class="text-muted"> </small></label>
                <input type="text" class="form-control" id="rwdnum" placeholder="Program Number" title="Please enter your reward program number">
            </div>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Trip Type:</h6>
                <small class="text-muted">Please select:</small>
            </div>
            <span class="text-muted">
                <select  class="custom-select d-block w-100" required name="triptype" id="triptype" >
                    <option value = "Business">Business</option>
                    <option value = "Group">Group</option>
                    <option value = "Leisure">Leisure</option> 
                </select>    
            </span>
            </li>

            <li class="list-group-item d-flex justify-content-between bg-light">
            <div>
                <h6 class="my-0">Traveller Count:</h6>
                <small>
                </small>
            </div>
            <span class="text-success"><h6 class="my-0"><input type="number" form="billing"  class=" d-block w-100" name="traveller" id="traveller" value="1" min="1" max="10" 
                oninput="total.value=parseFloat(parseInt(traveller.value)*parseInt(<?php echo $price; ?>))"></h6>
                <small>
                               
                </small>
            </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
            <span>Total (CAD)</span>
            <strong>$<input type="text" size=8 id="total" step="0.01" form="billing" name="total" value="<?php echo $price; ?>" readonly style="border: none;">
            <!-- <span class="input-group-text">.00</span> -->
           </strong>
            
            </li>
        </ul>
       <!-- redeem promotion code function for later use -->
        <form class="card p-2" style="visibility: hidden;">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code soon">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary" disabled>Redeem</button>
            </div>
            </div>
        </form>
    </div>
<!-- ================================================================= -->
<!-- Left Zone for billing information  -->
<!-- ================================================================= -->
    <div class="col-md-8 order-md-1" >
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate id="billing" action="print.php" method="post" >
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Email <span class="text-muted"> </span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            </div>

            <div class="mb-3">
                <label for="address2">City<span class="text-muted"></span></label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City">
            </div>

            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <select class="custom-select d-block w-100" id="country" required>
                        <option value="">Choose...</option>
                        <option>Canada</option>
                        <option>United States</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="province">Province/State</label>
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
                </div>
                <div class="col-md-3 mb-3">
                    <label for="zip">Postal/Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required>
                </div>
            
            </div>
            <hr class="mb-4">
            <h4 class="mb-3">Payment</h4>
            <!-- <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div> -->
            <hr class="mb-4">

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="credit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="debit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debit card InterAc</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="paypal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PayPal</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                    Name on card is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                    Credit card number is required
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                    Expiration date required
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-cvv">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                    Security code required
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
    </div>
    
</div>
<?php
if(isset($results)){  
    $i = 0;  
    foreach ($results as $x=>$y){
        if(!is_numeric($x)) {
        $_SESSION[$x] = $y;
        }
    }
}
?>
<script>
document.getElementById("firstname").value = '<?php echo "$results[3]"; ?>';
document.getElementById('username').value = "<?php echo $results[1]; ?>";
document.getElementById('email').value = "<?php echo $results[11]; ?>"; 
document.getElementById('address').value = "<?php echo $results[6]; ?>";
document.getElementById('city').value = "<?php echo $results[7]; ?>";

document.getElementById('country').value = "<?php echo $results[9]; ?>";
document.getElementById('zip').value = "<?php echo $results[10]; ?>";
document.getElementById('lastName').value = "<?php echo $results[5]; ?>";
document.querySelector('#province [value="' + "<?php echo $results[8]; ?>" + '"]').selected = true;
</script>

<?php require "scripts/footer.php"?>
