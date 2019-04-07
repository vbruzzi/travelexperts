<?php
    # GET FUNCTIONS 
    require "serverdef.php";
    require "userClass.php";
    function getFeatures(){ 
        return
        "SELECT PkgName, PkgBasePrice, PackageId
        FROM packages
        WHERE Featured=1";
    }

    function getUsers() {
        return 
        "SELECT UserId, Username, FirstName, MiddleNameInitials, LastName, Address, City, Province, Country, Postal, Email, Phone, Role
        FROM users
        ORDER BY FirstName";
    }

    function getPwd($user){
        $q= 'select Password from users where Username = "'.$user.'"';
        $search=doQuery($q);
        $password=search_result($search, 0, "Password");
        return $password;     
    }

    function getPositions(){ 
        return
        "SELECT *
        FROM POSITIONS";
    }

    function getLocations(){
        return
        "SELECT AgencyId, AgncyCity
        FROM agencies";
    }

    function getAgentInfo($agentId) {
        return 
        "SELECT Title, agencies.AgncyCity
        FROM positions
        INNER JOIN agents ON agents.AgtPosition = positions.PositionId
        INNER JOIN agencies ON agents.AgencyId = agencies.AgencyId
        WHERE UserId=".(int)$agentId."";
    }

    function packageFeature($id) {
        return
        "SELECT packageoptions.Feature
        FROM featuredpackages
        INNER JOIN packageoptions ON featuredpackages.Feature = packageoptions.OptionId
        WHERE PackageId=$id";
    }

    # UPDATE FUNCTIONS
    function changeUser($id, $role) {
        return 
        "UPDATE users
        SET role=$role
        WHERE UserId=$id";
    }

    function updateAgentLocation($id, $newLocation){
        return 
        "UPDATE agents
        SET AgencyId=$newLocation
        WHERE UserId=$id";
    }

    function updateAgentPosition($id, $newPosition) {
        return 
        "UPDATE agents
        SET AgtPosition=$newPosition
        WHERE UserId=$id";
    }


    # CREATE/DELETE functions
    function removeAgent($id) {
        return
        "DELETE FROM Agents
        WHERE userId=$id";
    }
    function insertAgent($id) {
        return 
        "INSERT INTO agents (UserId)
        VALUES ($id)";
    }

    function doQuery($q){
        $error_flag = false; 
		//connect to database
		$dbh = mysqli_connect(dbHost, dbUser, dbPass , dbName);
		//check if it works.
		if(!$dbh){
            echo "connect db error";
			$errorflag =true;
		}
		if (mysqli_connect_errno()){
            $errorflag =true;
            echo "Query error";
        }
        if( $error_flag==false)
        {
        $result = mysqli_query($dbh, $q);
		mysqli_close($dbh);
        return $result;
        }
        else{
        return $error_flag;
        }
    }

    function search_result($search, $row, $field){
        $i=0; 
        while($results=mysqli_fetch_array($search)){
            if ($i==$row){
                $result=$results[$field];
            }
        $i++;
        }
        return $result;
    } 
    
    function pkgdesc($id){
        $q= 'select PkgDesc from packages where PackageId = "'.$id.'"';
        $search=doQuery($q);
        $desc=search_result($search, 0, "PkgDesc");
        return $desc;
    }

    function pkgprice($id){
        $q= 'select PkgBasePrice from packages where PackageId = "'.$id.'"';
        $search=doQuery($q);
        $price=search_result($search, 0, "PkgBasePrice");
        return $price;        
    }

    function sanitize($input)
    {
        $con= mysqli_connect(dbHost, dbUser, dbPass , dbName);
        $result = mysqli_real_escape_string($con,$input);
        mysqli_close($con);
        return $result;
    }

    function setPassword($pwd,$id){
        $q= "update `users` set `password` = '".password_hash($pwd, PASSWORD_DEFAULT)."' where `userId`=".$id;
        echo $q." <br>";
        $flag = doQUery($q);
        if($flag==true){
        echo "Flag is true";
        }else{
            echo "Flag is False";
        }
        return $flag;
    }
?>