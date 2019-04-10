<!-- Invoice page by Kun Zhang -->
<!-- Team 2 Purple -->
<!-- This file generate a printable invoice for the client,  -->
<!-- Also update the booking table for the Database  -->
<?php
if(isset($_SESSION["username"])){
    foreach($_SESSION as $k=>$v){
      //  echo $k."  :   ".$v."<br>";
    }
}
require "scripts/header.php";
 
foreach($_POST as $x=>$y){
   // echo $x."  :   ".$y."<br>";
}
?>
<style>
.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><br>
                <h3 class="pull-right" >Order # <?php echo $_SESSION["ordernum"]; ?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-md-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					<?php
                        // show customer's billing information
                        echo $_POST["firstname"]." ".$_POST["lastname"]."<br>";
    					echo $_POST["address"]."<br>";
                        echo $_POST["city"].", ". $_POST["province"]." ".$_POST["postal"]."<br>"; 
                         	 $_POST["country"];
                        ?>
    				</address>
    			</div>
    			
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				<address>
    
    					<?php echo $_SESSION["Email"];?>
    				</address>
    			</div>
    			<div class="col-md-12 text-left">
    				<address>
    					<strong>Order Date:</strong><br>
                        <?php
                        // show order date information on invoice
                            $date = date("Y-m-d G:i:s");
                            echo date($date);
                        ?>

                        <br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Travel Package Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Base Price</strong></td>
        							<td class="text-center"><strong>Traveller Count</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    						
    							<tr>
    								<td>Package #<?php echo  $_SESSION["pkg"]; ?></td>
    								<td class="text-center">$<?php echo  $_SESSION["price"]; ?></td>
    								<td class="text-center"><?php echo  $_POST['traveller']; ?> </td>
    								<td class="text-right">$<?php echo  $_POST['total']; ?> </td>
    							</tr>
                               
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">$<?php echo $subtotal= $_POST['total']; ?> </td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>sales tax</strong></td>
    								<td class="no-line text-right">$
                                    <?php $tax= $_POST['total']*($_SESSION['Province']=='AB'?0.05:0.12); 
                                    echo $tax;
                                    ?> </td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">$<?php echo $subtotal+$tax; ?></td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<?php 
$sql = "INSERT INTO bookings(BookingDate, BookingNo, TravelerCount, CustomerId, TripTypeId, PackageId) 
VALUES ('".$date."','".$_SESSION['ordernum']."','".$_POST['traveller']."','".$_SESSION['UserId']."','".$_POST['triptype']."','".$_SESSION['pkg']."')";
require "scripts/footer.php";
require "scripts/queries.php";
// update booking table in the database
//echo $sql;

unset($_SESSION["pkg"]);  
?>