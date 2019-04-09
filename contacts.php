<!-- CONTACTS PAGE BY SAMIRA -->
<?php  
require "scripts/showuserguest.php";
if(!isset($_SESSION["username"])){
    $user = "Guest";
    $_SESSION["ref"] = "contacts.php";
}
else{
    $user = $_SESSION["username"];
}
?>
<html>
    <head>
    <!-- Call the stylesheet for header and footer for conistency  -->
    <?php require "scripts/header.php" ?>
    <!-- Call the contacts stylesheet that I created for this page -->
    <link rel="stylesheet" href="styles/contacts.css">
</head>
<body>

<!--javascript enabling zoomin and zoomout of maps-->


<!-- CREATE CONTENT -->
<!--Banner (from Dina) to add consistency across pages-->
<div class="packagebanner">
    <div class="container">
        <h1 class="bold">Contact us</h1>
        <p class="color">One agency many worlds</p>
        <?php showUserGuest($user); 
        if($user=="Guest") {
        echo "<a href='register.php?ref='".$_SERVER['REQUEST_URI']."'><small>[login]</small></a>";
    }?>
    </div>
</div>

<table id =maintable > <!-- open table to organize elements on side: 3 rows and 2 columns -->
    <tr><!-- open frst row maintable -->
        <td  colspan ="2">
            <div class= "headtext">
            <h5>You can contact us with all your questions and booking needs and we will be happy to help. <br/> <a class= infoemail href="mailto:info@travelexperts.com">E-mail</a> or call us directly at (123)456-7890.<br/>
                        Or visit one of our branches or contact an agent directly.</h5>
            </div>
            </td>
    </tr><!-- close first row maintable -->
    <tr><!-- open second row maintable -->
             <td rowspan ="2"><!-- open cell maintable for contactstable, will span across 2 rows -->
                  <div class= "ContactsTable">
                      <?php require "contactspull.php"?>
                 </div>
        </td><!-- close cell maintable for contactstable -->
        <td class=bigcell> <!-- open cell in maintable for Calgaryinfo -->
                            <table class= "Calgarytable">
                              <tr>
                                  <th class=headline colspan="2">
                                        Meet us in Calgary
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                    <img Id=Janet  src="media/contacts/businessmountain.png" >        
                                 </td>
                                
                               
                                 <td> 
                                
                                 <a href="https://www.google.com/maps/dir//51.0491311,-114.0622718/@51.0491041,-114.0623791,16z"target="_blank" >
                                                <img Id= calgarymap src="media/contacts/Calgarymap2.jpg" ></a>
                                </td>

                                 </tr>
                                 <tr>    
                                   <td> Janet from Calgary </td>
                                   <td class=mapcell>  Click map for directions</td>
                                 
                                </tr> 
                                
                                </table>
</tr><!-- close row maintable for Calgaryinfo -->
    </td>  <!-- close cell maintable for Calgaryinfo -->
<tr> <!-- open row maintable for Okotoksinfo -->
 <td class=bigcell>  <!-- open cell maintable for Okotoksinfo -->                  
                            <table class= "Okotokstable">
                                 <tr>
                                     <th class= headline colspan ="2">
                                        Meet us in Okotoks
                                    </th>
                                
                                <tr>
                                    <td>
                                        <img Id=Fred  src="media/contacts/businessbeach.jpg" >
                                    </td>
                                     <td>
                                        <a href="https://www.google.com/maps/dir//50.7253655,-113.9750487/@50.7254225,-113.9750904,17z/data=!4m2!4m1!3e2"target="_blank">
                                        <img Id= okotoksmap src="media/contacts/Okotoksmap.png"  /></a>  
                                     </td>
                                 </tr>
                                 <tr>    
                                     <td>
                                       Fred from Okotoks
                                  </td>
                                      <td>
                                         Click map for directions
                                      </td>
                                </tr>
                                </table>
</td><!-- close cell maintable for Okotoksinfo -->
</tr><!-- close row maintable for Okotoksinfo -->
     
    
<tr colspan= "2"><!-- open row for maintable, carrer or travelinfo button-->
<td class=careercell>
            CAREERS
</td>
</tr>
</table><!-- close table to organize side-->






<?php require "scripts/footer.php" ?> 

</body>
</html>