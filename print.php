<!-- Invoice page by Kun Zhang -->
<!-- Team 2 Purple -->
<?php
session_start();
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
                <h3 class="pull-right" >Order # 12345</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-md-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					<?php
                        echo $_SESSION["FirstName"]." ".$_SESSION["LastName"]."<br>";
    					echo $_SESSION["Address"]."<br>";
                        echo $_SESSION["City"].", ". $_SESSION["Province"]." ".$_SESSION["Postal"]."<br>"; 
                        echo $_SESSION["Country"];
                        ?>
    				</address>
    			</div>
    			
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				<address>
    					<!-- <strong>Payment Method:</strong><br>
    					Visa ending **** 4242<br> -->
    					<?php echo $_SESSION["Email"];?>
    				</address>
    			</div>
    			<div class="col-md-12 text-left">
    				<address>
    					<strong>Order Date:</strong><br>
    					<script>
                        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                        document.write(today);
                        </script>
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
<?php require "scripts/footer.php";?>