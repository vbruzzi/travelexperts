<!-- CONTACTS PAGE BY SAMIRA 
Needs contactspull.php and contacts.css and header.php and footer.php to work-->
<html>
    <head>
    <!-- Call the stylesheet for header and footer for conistency  -->
    <?php require "scripts/header.php" ?>
    <!-- Call the contacts stylesheet that I created for this page -->
    <link rel="stylesheet" href="styles/contacts.css">
</head>
<body>
<!-- CREATE CONTENT -->
<!--Banner (from Dina) to add consistency across pages-->
<div class="packagebanner">
    <div class="container">
        <h1 class="bold">Contact us</h1>
        <p class="color">One agency many worlds</p>
    </div>
</div>
<!-- open table to organize elements on side: 3 rows and 2 columns (a version of this page using Flex-box gave me a worse overall result.) -->
<table id =maintable > 
    <tr><!-- open frst row of maintable. It is the headline for the page, so it spans both columns.-->
        <td  colspan ="2">
            <div class= "headtext">
            <h5>You can contact us with all your questions and booking needs and we will be happy to help. <br/> <a class= infoemail href="mailto:info@travelexperts.com">E-mail</a> or call us directly at (123)456-7890.<br/>
                        Or visit one of our branches or contact an agent directly.</h5>
            </div>
            </td>
    </tr><!-- close first row of maintable -->
    <tr><!-- open second row of maintable -->
        <td class= bigcellcontacts rowspan ="2"><!-- open cell (left) of maintable for contactstable, will span across 2 rows -->
                  <div class= "ContactsTable">
                      <!-- call and include the php file that connects to travelexprts database and prints the agncy and agent information -->
                      <?php require "scripts/contactspull.php"?>
                 </div>
            </td><!-- close cell maintable for contactstable -->
        <td class=bigcell> <!-- open cell (right) in maintable for another table with Calgaryinfo -->
                            <table class= "Calgarytable">
                                <tr>
                                    <th class=headline colspan="2">
                                        Meet us in Calgary
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="polaroidJ"> <img src="media/contacts/businesspalmtree.jpeg" style="width:100%"> 
                                        <div class="container">
                                        <p class=comic>Janet from Calgary (expert for Spa vacations)</p>  
                                        </div>
                                    </div>     
                                    </td>
                                    <td> <!-- create a container for the map and inside it an element for the text
                                so that the text can be positioned with relative positioning -->
                                        <div class ="container1">
                                            <a href="https://www.google.com/maps/dir//51.0491311,-114.0622718/@51.0491041,-114.0623791,16z"target="_blank" >
                                            <img Id= calgarymap src="media/contacts/Calgarymap2.jpg" ></a>
                                            <div class="textOnMap">Click map for directions</div>
                                        </div>
                                    </td>
                                 </tr>
                              
                            </table>
</tr><!-- close row of maintable for Calgaryinfo -->
    </td>  <!-- close cell of maintable for Calgaryinfo -->
<tr> <!-- open row in maintable for Okotoksinfo -->
 <td class=bigcell>  <!-- open cell(right) in maintable for another table with Okotoksinfo -->                  
                            <table class= "Okotokstable">
                                 <tr>
                                     <th class= headline colspan ="2">
                                        Meet us in Okotoks
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="polaroidF"> <img  src="media/contacts/businessbeach.jpg" style= "width:100%">
                                        <div class="container">
                                            <p class=comic> Fred from Okotoks (expert for business trips)</p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                        <div class ="container1">
                                            <a href="https://www.google.com/maps/dir//50.7253655,-113.9750487/@50.7254225,-113.9750904,17z/data=!4m2!4m1!3e2"target="_blank">
                                            <img Id= okotoksmap src="media/contacts/Okotoksmap.png"  /></a> 
                                            <div class="textOnMap">Click map for directions</div>
                                        </div>
                                    </td>
                                
                                </tr>
                                </table>
</td><!-- close cell maintable for Okotoksinfo -->
</tr><!-- close row maintable for Okotoksinfo -->
     
    

</table><!-- close maintable -->






<?php require "scripts/footer.php" ?> 

</body>
</html>