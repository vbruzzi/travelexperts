<!--Start of database intergrated packages page by Dina-->

<!--Header by Vitor-->
<?php require "scripts/header.php" ?>

<!--Database constants by Vitor-->
<?php require "scripts/serverdef.php" ?>

<!--Packages style sheet-->
<link rel="stylesheet" href="styles/packages.css">

<!--Function to change price properties-->
<div>
    <script type="text/javascript">
        //Function to make price large, purple and bold onmouseover
        function scaleUp(obj) {
            let x = obj.style;
            x.fontSize = "24px";
            x.color = "rgb(121, 0, 151)";
            x.fontWeight = "bolder";
        }
        //Function to revert price to normal onmouseout
        function scaleDown(obj){
            let x = obj.style;
            x.fontSize = "16px";
            x.color = "black";
            x.fontWeight = "normal";
        }
    </script> 
</div>

<!--Bootstrap Tooltip for pic descriptions when mouse is over image-->
<div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</div>

<!--Banner created to add consistency of feel between packages and main page-->
<div class="packagebanner">
    <div class="container">
        <h1 class="bold">Vacation Packages</h1>
        <p class="color">One agency many worlds</p>
    </div>
</div>

<!--Bootstrap Card Deck for clean formatting-->
<div class="container">
    <div class="card-deck">

<?php

// Create connection
$conn = mysqli_connect(dbHost, dbUser, dbPass, dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Today <= PkgEndDate then package is valid and Card can be displayed
$today = date("Y-m-d");
$sql = "SELECT PackageId, PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgImage, PkgImageDesc, PkgBasePrice 
        FROM packages
        WHERE '$today' <= PkgEndDate";
$result = $conn->query($sql);
$cardnum = 0;

//Generating Cards from database information
if ($result->num_rows > 0) {
    foreach($conn->query($sql)->fetch_all(MYSQLI_ASSOC) as $row){
        //PackageStartDate < Today then display Card with PkgStartDate as Bold and Red
        if ($row["PkgStartDate"] < $today){
            print(" 
                <div class='card mb-4'>
                    <img title= '". $row["PkgImageDesc"]."'  
                        class='card-img-top img-fluid' 
                        src='media\packageimg\\". $row["PkgImage"]."'>
                    <div class='card-body'>
                        <h4 class='packagetitle' class='card-title'>
                            ". $row["PkgName"]."
                        </h4>
                        <p class='card-text'>
                            ". $row["PkgDesc"]."
                        </p>
                        <h6 class = 'boldred'>
                            Depart: ". $row["PkgStartDate"]."
                        </h6>
                        <h6>
                            Return: ". $row["PkgEndDate"]."
                        </h6>
                        <p onmouseover='scaleUp(this)' onmouseout='scaleDown(this)'>
                            $".number_format($row["PkgBasePrice"], 0)."
                        </p>
                        <a href='order.php?order=".$row["PackageId"]."'>
                            <button type='button' class='btn btn-outline-dark'>
                                Order Now!
                            </button>
                        </a>
                    </div>              
                </div>
            ");
        }
            //All other Cards display normal
            else{
                print("
                    <div class='card mb-4'>
                        <img title= '". $row["PkgImageDesc"]."'
                            class='card-img-top img-fluid' 
                            src= 'media\packageimg\\". $row["PkgImage"]."'>
                        <div class='card-body'>
                            <h4 class='packagetitle' class='card-title'>
                                ". $row["PkgName"]."
                            </h4>
                            <p class='card-text'>
                                ". $row["PkgDesc"]."
                            </p>
                            <h6>
                                Depart: ". $row["PkgStartDate"]."
                            </h6>
                            <h6>
                                Return: ". $row["PkgEndDate"]."
                            </h6>
                            <p onmouseover='scaleUp(this)' onmouseout='scaleDown(this)'>
                                $".number_format($row["PkgBasePrice"], 0)."
                            </p>
                            <a href='order.php?order=".$row["PackageId"]."'>
                                <button type='button' class='btn btn-outline-dark'>
                                    Order Now!
                                </button>
                            </a>
                        </div>              
                    </div>
                ");
            } 

                $cardnum += 1;
            
                    if ($cardnum == 1){
                        //draw left most Card
                        //do nothing
                    }
                        if ($cardnum %2==0){
                            //draw middle Card
                            //Small window 2 Cards
                            print("
                                <div class='w-100 d-none d-sm-block d-md-none'></div>
                            ");
                        }
                            if ($cardnum %3==0){
                                //draw right Card
                                //Medium, large and extra large window 3 Cards
                                print("
                                    <div class='w-100 d-none d-md-block d-lg-none'></div>
                                    <div class='w-100 d-none d-lg-block d-xl-none'></div> 
                                    <div class='w-100 d-none d-xl-block'></div>
                                ");   
                            }      
    }
}

mysqli_close($conn);

?>

    </div>
</div>

<!--Footer by Vitor--> 
<?php require "scripts/footer.php" ?>

<!--End of database intergrated packages page by Dina--> 