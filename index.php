
<?php require "scripts/header.php"?>    
        <!-- INDEX STYLES -->
        <link rel="stylesheet" href="styles/home.css">

        <!-- Flash sales section -->
        <div class="jumbotron flashsales">
            <div class="container">
                <h1 class="jumbotext">Flash sale</h1>
                <h2 class="jumbotext">$300 Flight to Hong Kong</h2>
                <p class="jumbotext">
                    Affordable flights to Hong Kong now!!
                </p>
                <a href="#" class="mt-auto btn btn-default">Buy now</a>
            </div>
        </div>


        <!-- COMPANY BUSINESS STATEMENT/GREETER -->
        <div class="statement mx-auto text-center">
            <h1 class="display-4">Travel at the <span>best</span> rates</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis elementum elit id auctor. In dictum erat eu nisi tempor eleifend. Fusce laoreet purus at tempor hendrerit. Vestibulum pretium sagittis magna, ut dictum arcu aliquam quis. </p>
        </div>

        <!-- FEATURED PACKAGES -->
        <div class="container featured">
            <div class="featuredtitle row">
                <h1 class="salestitle">Featured Packages</h1>
            </div>

            <div class="row justify-content-center">
                <?php 
           //     require "scripts/serverdef.php";
                require "scripts/queries.php";
                require "scripts/featured.php";

                if(isset($_SESSION["pkg"])) {
                    unset($_SESSION["pkg"]);  
                }

                $dbh = mysqli_connect(dbHost, dbUser, dbPass, dbName);

                # ERROR CHECKING
                if(!$dbh) {
                    return false;
                }
                
            
                if(mysqli_connect_errno()) {
                    return false;
                }

                # Counter gives each card an id
                $counter = 1;
                # Grabs all packages tagged as featured from db
                foreach ($dbh->query(getFeatures()) as $package ) {
                    
                    $features = $dbh->query(packageFeature($package["PackageId"]))->fetch_all(MYSQLI_NUM);
                    $card = new Card($package["PkgName"], $features, $package["PkgBasePrice"], $package["PackageId"]);
                    $card->makeCard($counter);
                    $counter++;

                }
                mysqli_close($dbh);

                ?>
            </div>
        </div>

<?php require "scripts/footer.php"?>