
<html>
    <head>
        <style>

        </style>
    </head>

<?php



                


  

    // Step1: connect to database (already done baove)
$dbh = mysqli_connect("localhost","root","","team2travelexperts");
// step2: make a query with existing connection to ask database for agency info.



// NEEDS IF STATEMENTS HERE
// step3: get information about agencies from database.Create assoc. array in which each row is one agency.
    $resultagency1  = $dbh->query("SELECT AgencyId, AgncyCity, AgncyAddress,AgncyPhone, AgncyPostal,AgncyFax, AgncyProv, AgncyCountry from agencies ")->fetch_all(MYSQLI_ASSOC);
   print ("<table Id= Contacttable>"); 
    // Step3 First:Foreach-loop: queries all agent information for each row=agency
    foreach($resultagency1 as $item){
        //query agents of this $items id
        print("<tr><td class=headlinecell colspan='3'><br/> ");
        print($item['AgncyCity']);
        print("</td></tr><tr><td class =branchcell>Mon-Fri: 9am-5pm <br/>");
        print("<h5 class = phone>Phone: ");
        print $item['AgncyPhone'];//continue to print table
        print("   Fax: ");
        print $item['AgncyFax'];
        print("</h5>Postal address: ");
        print $item['AgncyAddress'].", ".$item['AgncyPostal'].", <br/>".$item['AgncyCity'].", ".$item['AgncyProv'].", ".$item['AgncyCountry']."<br/></td></tr>";
        print ("<tr><td><br/><h5 class= head>Our Travelexperts </h5></td></tr>");
        
        
    //step 4 make  new query for agent information. Agents are user with role 2.
    // Select only agents with agencyID same as current row=agency.
        $resultagent1  = $dbh->query("SELECT FirstName,LastName, Email,Phone FROM users INNER JOIN agents on users.UserId=agents.UserId 
        WHERE role=2 AND AgencyId= ".$item['AgencyId'])->fetch_all(MYSQLI_BOTH); // get agents for each agency in big array
    //  prints information for eah row+agency
        
  
    // Step4:Second Foreach-loop: prints all agent information (for each agency) 
            foreach  ($resultagent1 as $agent){
                print("<tr><td class=agentcell><div class= agentname>");
                print  $agent['FirstName']." ".$agent['LastName']."</div>".$agent['Phone'].
                "<br/><a class= agentemail href=\"mailto:".$agent['Email']."\">".$agent['Email']."</a></td></tr>";
               
    }//close foreach2
    }//close foreach1 <a ID = email href="mailto:info@travelexperts.com">email</a>
print("</table>");
    mysqli_close($dbh);





  
// CLOSE DATABSE CONNECTION

?>
</html>