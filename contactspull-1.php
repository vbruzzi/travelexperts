<!-- CODE FROM SAMIRA-->
<html>
    <head>
        <style>

        </style>
    </head>

<?php





// step1: Create an errorflag that I use to check the database connection. Set to false as default.
$errorflag =false;
//step2: connect to database. "connection value" is in variable $dbh
    $dbh = mysqli_connect("localhost","root","","team2travelexperts");
//step3: check if database exists. If not, set errorflag to true.
    if(!$dbh)
    {
        $errorflag=true;
       
    }
//step4: check if connection is ok. If not, set errorflag to true.
 
    if(mysqli_connect_errno())
    {$errorflag=true;}


//Step5:If no error, errorflag equals(== is equal to) false and we run the code.
    if($errorflag==false) 
    {
// step5.1 run the query:
//  get information about agencies from database.Create assoc. array in which each row is one agency.
    $resultagency1  = $dbh->query("SELECT AgencyId, AgncyCity, AgncyAddress,AgncyPhone, AgncyPostal,AgncyFax, AgncyProv, AgncyCountry from agencies ")->fetch_all(MYSQLI_ASSOC);
//step5.2: start to print a table  for database information. A table allows to add a column with additional info
//(e.g.headshot).if needed later.
    print ("<table Id= Contacttable>"); 
// Step5.3: First:Foreach-loop: queries all agency information for each row(=agency). Each item is a row and a agency.
     foreach($resultagency1 as $item){
// step5.4: print the "html" to print a table with rows and columns.
         print("<tr><td class=headlinecell colspan='3'><br/> ");
         print($item['AgncyCity']);
         print("</td></tr><tr><td class =branchcell>Mon-Fri: 9am-5pm <br/>");
         print("<h5 class = phone>Phone: ");
         print $item['AgncyPhone'];
         print("   Fax: ");
         print $item['AgncyFax'];
         print("</h5>Postal address: ");
         print $item['AgncyAddress'].", ".$item['AgncyPostal'].", <br/>".$item['AgncyCity'].", ".$item['AgncyProv'].", ".$item['AgncyCountry']."<br/></td></tr>";
         print ("<tr><td><br/><h5 class= head>Our Travelexperts </h5></td></tr>");
         
         
//step 5.4: make  new query for agent information. Agents are user with role 2.
// Select only agents with agencyID same as current row=agency=item, so that we select agents of one agency only.
         $resultagent1  = $dbh->query("SELECT FirstName,LastName, Email,Phone FROM users INNER JOIN agents on users.UserId=agents.UserId 
         WHERE role=2 AND AgencyId= ".$item['AgencyId'])->fetch_all(MYSQLI_BOTH); // get agents for each agency in big array

// Step5.5:Second Foreach-loop: Prints all agent information (for each agency) 
            foreach  ($resultagent1 as $agent){
                 print("<tr><td class=agentcell><div class= agentname>");
                 print  $agent['FirstName']." ".$agent['LastName']."</div>".$agent['Phone'].
                 "<br/><a class= agentemail href=\"mailto:".$agent['Email']."\">".$agent['Email']."</a></td></tr>";
                
            }//close foreach2
     }//close foreach1 
    print("</table>");
    // step5.6 Close the database
         mysqli_close($dbh);
    }
    // Step 6: If there was an error in connection or database,  nothing happens and we get an error.
    else
    {
 
        return false;
    }
?>
</html>