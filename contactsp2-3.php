<!-- CONTACTS PAGE BY SAMIRA -->
<html>
    <head>
    <!-- Call the stylesheet for header and footer for conistency  -->
    <?php require "scripts/header.php" ?>
    <!-- Call the contacts stylesheet that I created for this page -->
    <link rel="stylesheet" href="styles/contacts.css">
</head>
<body>

<!--javascript enabling zoomin and zoomout of maps-->
<script>
function bigImg(x) {          // dimension of zoomed in image, shown upon hover
  x.style.height = "";
  x.style.width = "300px";
}

function normalImg(x) {       //dimension of normal image, shown as default
  x.style.height = "";
  x.style.width = "200px";
}
</script> <!-- close script -->

<!-- CREATE CONTENT -->
<!--Banner (from Dina) to add consistency across pages-->
<div class="packagebanner">
    <div class="container">
        <h1 class="bold">Contact us</h1>
        <p class="color">One agency many worlds</p>
    </div>
</div>

<div class="container" >
    <div >
        <table> <!-- create a table to arrange first elements of the page: welcome image and text.-->
            <TR><TD>
            <img width=800px  src="media/contacts/agentswithglobe5.jpg">
               </TD>
                <TD class = buttoncell ><!-- I used linebreaks to arrange the text and button within this cell -->
                   <h5> <br/><br/><br/>You can contact us with all your questions and booking needs and we will be happy to help.
                        You can reach any of our agents directly:
                        <br/><br/></h5>
                    <!-- create button to open the modal/window with agent contact details (preparation for project part2) -->
                         <button class='button' id="buttonCalgaryAgents">meet an agent</button>
                        <!-- Create text and a link that opens the users e-mail program to directly send an email--> 
                         <h5> <br/>Or you can contact us in one of our branches in Calgary or Okotoks
                         via <a ID = email href="mailto:info@travelexperts.com">email</a>, phone, or in person.
                        </h5>
               </TD>
            </TR>
        </table>
    </div><!-- close div table-->
</div> <!-- close container for top part-->

<!--Create another table to arange elements on the page:5 colums by 5 rows.Left and right columns
                will be space holders for now.-->
<div class= Calgary> <!--tag to separate Calgary information from Okotoks information.-->
<table class='table1' style='width:100%'>
  <!-- start to work with function  for agency-->

        <tr><!--First row of the table contains headline for Calgary. Middle three cells are merged and headline is centered. -->
            <td></td><!-- empty cell 'just in case'-->
            <td class=headlinecell colspan='3'> 
              <h5>Where to find us in...</h5>
            </td>
            <td></td>
</table>



             <!-- start to work with function for agents here.-->
<?php 
                 // Start by printing command that will generate the beginning or the table. Place table for
                 // Calgary in flex-container to organize page layout.
     print("<div class='flex-container'><table class=Calgarytable> 
            <tr>
                <td class=headlinecell> Locations in Calgary
                </td>
            </tr>");
// call the file with function that connects to database and pulls out the agency data
    include("contactspull.php");
    // agency data is in variable $result
















    
    $resultagent = getRows("SELECT AgtLastName, AgtFirstName, AgtBusphone, AgtEmail from agents  where AgencyId=1 order by AgtFirstName");
        if($resultagent != false) 
             {   
                 // use the while loop  to loop through all rows in SQL result table
                 while ($row=mysqli_fetch_assoc($resultagent))
                 {
                    
                     print("<tr><td class = Addresscell>Branch 1: ".$row["AgncyCity"]. "  ".$row["AgncyAddress"]."</td></tr>");
                 }//close while
             
                 //print("</table>");
            } //close if
            
    // end of agency pull
    //insert and call the function that connects to database for agents-->
        $result =getRows("SELECT AgtLastName, AgtFirstName, AgtBusphone, AgtEmail from agents  where AgencyId=1 order by AgtFirstName");//call the function
        if($result != false) //check return value
        {
        print("<tr><td class = modalheading> Travelagents in Branch 1: ");
        //step4, run the loop
             while ($row=mysqli_fetch_assoc($result))
            //step5, output html
            {
            print(" <tr><td><div class = modalagentname>".$row["AgtFirstName"]. " ".$row["AgtLastName"]."</div>Phone:".$row["AgtBusphone"]."<br/> e-mail:".$row["AgtEmail"]."</td></tr>");
            } //end hwile
        print("</table></div>");
        } //end if



 require "scripts/footer.php" ?> 

</body>
</html>