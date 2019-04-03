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
                         <h5> <br/>Or you can contact us at one of our branches in Calgary or Okotoks
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
  
        <tr><!--First row of the table contains headline for Calgary. Middle three cells are merged and headline is centered. -->
            <td></td><!-- empty cell 'just in case'-->
            <td class=headlinecell colspan='3'> 
              <h5>CALGARY HEADQUATERS</h5>
            </td>
            <td></td> <!-- empty cell 'just in case'-->
        </tr>
        <tr><!--Second row of table has i: in left cell a picture representing Calgary, ii: in middle 
                    branch address and  iii: in the right cell a map linking to google maps with location address. -->
            <td></td><!-- empty cell 'just in case'-->
            <td  class=cell><img width='250px'  src="media/contacts/Calgary1.jpg" /></td>

            <td class=cell>
            <p>1155 8th Ave SW, World tower level 10, suite 109<br />Calgary,AB, T2P1N3<br />
                Hours: Mon-Fri 9am-5pm<br />info@travelexperts.com<br />phone: 403 271 9873<br /> fax: 403 271 9872</p>
            </td>

            <td  class =cell><!-- onmouseover  and mouseout effects to zoom into the map. the map is also a link to google maps.-->
            <h5>How to find us:</h5><a href="https://www.google.com/maps/dir//51.0491311,-114.0622718/@51.0491041,-114.0623791,16z">
            <img onmouseover ="bigImg(this)" onmouseout="normalImg(this)"src="media/contacts/Calgarymap2.jpg" style="width:200px; height:20%" title="Calgarymap"/></a>
        </td>
        <td></td><!-- empty cell 'just in case'-->
        </tr>
</div> <!-- close Calgary div-->
<div class = Okotoks>
        <tr>
            <!--Third row of table is Okotoks headline. Merge 3 cells and center headline. -->
            <td></td>
            <td colspan='3' class=headlinecell >
                <h5>OKOTOKS BRANCH </h5>
            </td>
            <td></td>
        </tr>
        <tr>
            <!--Fourth row of table has a picture representing Okotoks, the branch address and
                            a map linking to google maps with location address. -->
            <td></td>
            <td  class=cell  ><img height='188px'  src="media/contacts/Okotoksplaza.jpg" /></td>

            <td class=cell>
                <p>110 Main Street, ground floor,<br />Okotoks, AB, T7R3J5<br />
                    Hours: Mon-Fri 9 am -5pm<br />info@travelexperts.com<br />phone: 403 563 2381<br/>fax: 403 563 2382</p>
            </td>
            <td class=cell >
                <h5>How to find us:</h5><a href="https://www.google.com/maps/dir//50.7253655,-113.9750487/@50.7254225,-113.9750904,17z/data=!4m2!4m1!3e2"><img onmouseover ="bigImg(this)" onmouseout="normalImg(this)"src="media/contacts/Okotoksmap.png" style="width:200px; height:20%" /></a>
            </td>
            <td></td>
        </tr>
        <tr> <!-- following cells are just place holders-->
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
</table>
</div> <!--close Okotoks div -->

<!--  MODALS: The button is linked to open up a modal, i.e. a text field listing the agents'
                        contact details. The modal contains 1 table with 2 columns and one row per agent. -->

<!-- MODAL CODE MODAL CODE MODAL CODE-->
<!-- <div class='container'>-->
<!-- Creating the  modal-->
<div id="ModalCalgaryAgents" class="modal">
    <div class="modal-content">
             <div class=modal-header>
                <h3 class="modal-title w-100 text-center" >Contact a travelexpert</h3>
             </div> 
                <span class="close">&times;</span><!-- Cross to close the modal-->
        <div class= "modal-body">
            <div class= 'modaltable'>
                <table >
                <TR>
                    <TD class='modalheading modalcell1' colspan='2'>
                        <h5 > Travelagents located in Calgary</h5>
                    </TD>
                </TR >
                <TR class='modalborderrow'>
                    <TD class=modalcell1><img width='250px' src="media/contacts/agentDavid.jpg" /> </TD>
                    <TD class='modalcell1'>
                        <div class = 'modalagentname'><h6>John Doe, junior agent</h6></div>
                            <a  class= 'agentemail' href="mailto:JohnDoe@travelexperts.com">JohnDoe@travelexperts.com</a><br />
                            </p>  phone: 403 123 456 01</p>
                    </TD>
                </TR>
                <TR>
                    <TD class =modalcell1><img width='250px' src="media/contacts/agentAnn1.jpg" /></TD>
                    <TD class ='modalcell modalcell1'>
                    <div class ='modalagentname'> <h6>Ann Douglas, junior agent</h6></div>
                        <a class= 'agentemail' href="mailto:AnnDouglas@travelexperts.com">AnnDouglas@travelexperts.com</a><br />
                        <p>phone: 403 123 456 02</p>
                </TD>
                </TR> 
                <TR>
                    <TD class='modalheading modalcell1' colspan='2'>
                    <br/> <br/> <br/> <h5 > Travelagents located in Okotoks</h5>
                    </TD>
                </TR>
                <TR>
                    <TD class=modalcell1><img  height = 200px src="media/contacts/agentkaren.jpg" /> </TD>
                    <TD class= modalcell1>
                        <div class =modalagentname> <h6>Karen Smith, senior agent</h6></div>
                           <p> <a class= 'agentemail' href="mailto:karensmith@travelexperts.com">Karensmith@travelexperts.com</a><br />
                            phone: 403 563 2382</p>
                    </TD>
                </TR>
                <TD class =modalcell1><img height=200px src="media/contacts/agentHamila.jpg" /></TD>
                <TD class =modalcell1>
                <div class =modalagentname> <h6> Hamila Kumi, junior agent</h6></div>
                        <p><a class= 'agentemail' href="mailto:hamilakumi@travelexperts.com">Hamilakumi@travelexperts.com</a><br />
                        phone: 403 563 2383</p>
                </TD>
                </TR>
                </table>
            </div> <!--close div modalable-->
        </div>  <!--close div modal body -->
    </div><!--close div  modal content-->
</div><!--close div modal -->
    <!-- FOOTER -->

    <script>
        //Modal functions in javascript
        var modal = document.getElementById('ModalCalgaryAgents');
        var btn = document.getElementById("buttonCalgaryAgents");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
<?php require "scripts/footer.php" ?> 

</body>
</html>