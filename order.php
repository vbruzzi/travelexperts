<?php 
    if(isset($_SERVER['QUERY_STRING'])){
    $url = $_SERVER['QUERY_STRING'];
    echo "Package URL is ".$url."<br>";
}
 if($_SERVER['REQUEST_METHOD']=='GET')
{
    $pkg= $_GET['order'];
    echo "package GET selected $pkg";
}
?>
<?php 
    require_once "scripts/showuserguest.php";
    //require_once "scripts/userClass.php";
    //require_once "scripts/queries.php";
    require "scripts/header.php";
    require "scripts/queries.php";
    session_start();
    if(!isset($_SESSION["username"])){
        $user = "Guest";
        if(!isset($_SESSION["ref"])){
        $ref = $_SESSION["ref"];
        }
    }
    else{
        $user = $_SESSION["username"];
        
        $billSql = "SELECT * FROM users us left join creditcards cc  on (cc.CustomerId = us.userId) having us.username='$user' ";
        $search = doQuery($billSql);

        $results = mysqli_fetch_array($search);
            print_r($results);
        echo "<scripts>";
        echo 'document.getElementById("firstname").value="'.$results['FirstName'].'";';
echo 'firstname.value="'.$results['FirstName'].'";';
        echo "</scripts>";
        }
 
    $price = pkgprice($pkg);
    $desc = pkgdesc($pkg);     
?>    
    <!-- STYLES -->
    <link rel="stylesheet" href="styles/home.css">
    <link href="form-validation.css" rel="stylesheet">

<div class="container">
    <!-- CREATE CONTENT -->
    <!--Banner to add consistency across pages-->
    <div class="packagebanner">
        <div class="container" style="text-align: right;">
            <?php showUserGuest($user);  //show login infomation on this page
            if($user=="Guest"){
                echo "<a href='register.php?ref=".$ref."'><small>[login]</small></a>";
            }
        ?>
        </div>
    </div>
    <div class="py-5 text-center">
        <h2><?php echo $user.": "; ?> check out</h2>
    </div>
    <!-- Right side bar for package price information-->
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">Package# <?php echo  $pkg; ?></span>
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
            <div class="my-0">Trip Start:</div>
            <div>
               
                <small class="text-muted"><input type="date" name="start"  class=" d-block w-100" id="start" required> </small>
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

                    <?php   
                    // $sq1= "select   `rwdname` from `rewards` order by `rwdname` asc";
                    // $select = doQuery($sq1);
                    // foreach ($select as $x){
                    //   // echo  '<option value = "'.gettype($x).'">'.$select->x.'</option>';
                    //   echo gettype($select->$x);
                    // }                    
                    ?>
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
            <span class="text-success"><h6 class="my-0"><input type="number"   class=" d-block w-100" name="traveller" id="traveller" value="1" min="1" max="10" 
                oninput="total.value=parseFloat(parseInt(traveller.value)*parseInt(<?php echo $price; ?>))"></h6>
                <small>
                               
                </small>
            </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
            <span>Total (CAD)</span>
            <strong>$<input type="text" size=8 id="total" step="0.01" name="total" value="<?php echo $price; ?>" readonly style="border: none;">
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
   <!-- Left Zone for billing information  -->
    <div class="col-md-8 order-md-1" >
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate>
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" required>
                <div class="invalid-feedback">
                Valid first name is required.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                Valid last name is required.
                </div>
            </div>
            </div>

            <div class="mb-3">
            <label for="username">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                Your username is required.
                </div>
            </div>
            </div>

            <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
            </div>
            </div>

            <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
                Please enter your shipping address.
            </div>
            </div>

            <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
            <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid country.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
                </select>
                <div class="invalid-feedback">
                Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                Zip code required.
                </div>
            </div>
            
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
            <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">PayPal</label>
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
<?php require "scripts/footer.php"?>
