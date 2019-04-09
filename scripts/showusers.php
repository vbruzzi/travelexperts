<?php 

    # Shows all users in the admin dashboard with options to change position, location and permissions on website

    function showUsers() {
        require "queries.php";
        require_once("serverdef.php");
        $dbh = mysqli_connect(dbHost, dbUser, dbPass, dbName);
        # Table head
        echo "<table class=\"table table-hover table-sm\">
        <thead>
            <th>UserId</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Postal</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Access</th>
            <th>Location</th>
            <th>Position</th>

        </thead>
        <tbody>";


        foreach($dbh->query(getUsers())->fetch_all(MYSQLI_ASSOC) as $user) {
            # Get table options
            $agencies = $dbh->query(getLocations())->fetch_all(MYSQLI_ASSOC);
            $positions =$dbh->query(getPositions())->fetch_all(MYSQLI_ASSOC);
            # Sets current agent role as a variable and then unsets it from the array
            # Having the $user role set makes it much harder to set it afterwards
            $userRole = $user["Role"];
            unset($user["Role"]);

            # Prints different row if the user is an agent, different styling
            if($userRole == 2) {
                echo "<tr class=\"agent\">";    
            } else {
                echo "<tr>";
            }

            # each cell that doesn't need to be modified
            foreach($user as $x) {  
                echo "<td>$x</td>";
            }

            # The next 3 fields are the fields that can be changed (respectively, location and position)
            echo "<td><select name=\"".$user["UserId"]."\" onchange=\"changeUser(this)\" class=\"role $userRole\">
            <option value=\"".$userRole."\">".$userRole."</option>
            <option value=\"1\">1</option>
            <option value=\"2\">2</option>
            <option value=\"3\">3</option>
            </select></td>";
                
            if($userRole == 2) {
                $row = $dbh->query(getAgentInfo($user["UserId"]));
                if(mysqli_num_rows($row)){
                    $row = $row->fetch_assoc();
                    echo "<td><select name=\"".$user["UserId"]."\" onchange=\"changeUser(this)\" class=\"city\">
                            <option>".$row["AgncyCity"]."</option>";
                    foreach($agencies as $agency) {
                        echo "<option value=\"".$agency['AgencyId']."\">".$agency['AgncyCity']."</option>";
                    }    
                    echo "</td><td><select name=\"".$user["UserId"]."\" onchange=\"changeUser(this)\" class=\"position\">
                    <option>".$row["Title"]."</option>";
                    foreach($positions as $position) {
                        echo "<option value=\"".$position['PositionId']."\">".$position['Title']."</option>";
                    }    

                } else {
                    echo "<td><select name=\"".$user["UserId"]."\" onchange=\"changeUser(this)\" class=\"city\">
                            <option></option>";
                    foreach($agencies as $agency) {
                        echo "<option value=\"".$agency['AgencyId']."\">".$agency['AgncyCity']."</option>";
                    }    
                    echo "</td><td><select name=\"".$user["UserId"]."\" onchange=\"changeUser(this)\" class=\"position\">
                    <option></option>";
                    foreach($positions as $position) {
                        echo "<option value=\"".$position['PositionId']."\">".$position['Title']."</option>";
                    }    
                }

            } else {
                echo "<td></td><td></td>";
            }
            echo "</tr>";
        }
        echo "</table></tbody>";
    
        mysqli_close($dbh);
    }



?>

<option></option>
</select>