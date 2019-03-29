<!-- Contacts page by Samira -->




<?php require "scripts/header.php" ?>
<!-- CONTACTS STYLES -->
<link rel="stylesheet" href="styles/contacts.css">
<script>
function bigImg(x) {
  x.style.height = "";
  x.style.width = "300px";
}

function normalImg(x) {
  x.style.height = "";
  x.style.width = "200px";
}
</script>

<!-- CREATE CONTENT -->
<div class="container" align='center'>
    <h1 ID= headline >Contact us</h1>
    <div class=table1>
        <table>
            <TR><TD>
            <img width=600px  src="media/contacts/agentswithglobe5.jpg">
               </TD>
                <TD class = buttoncell >
                   <h5> You can contact as with all your questions and booking needs
                        via <a ID = email href="mailto:info@travelexperts.com">email</a>, phone, or in person.
                        You can reach any of our agents directly, or by contacting our headquarters in Calgary or
                        our branch in Okotoks.</h5><br/>
                    <!-- button to open the modal/window with agent contact details at Calgary location -->
                         <button class='button' id="buttonCalgaryAgents">available agents</button>
               </TD>
            </TR>
        </table>
    </div>
</div>
<!--Create a table to arangee elements on page:5 colums by 5 rows.Left and right columns
                will be space holders for now.-->
<div class="container"> </div>

<table class='table1' style='width:100%'>
    <col width="50" >
    <col width="200">
    <col width="200">
    <col width="200">
    <col width="50">
    <tr>
        <!--First row of table has headline for Calgary. All three cells are merged and headline is centered. -->
        <td></td>
        <td class=headlinecell colspan='3' align='center'>
            <h5>CALGARY HEADQUATERS</h5>
        </td>

        <td></td>
    </tr>
    <tr>
        <!--Second row of table has in left cell: picture representing Calgary, in middle 
                    branch address and  in the right cell a map linking to google maps with location address. -->
        <td></td>
        <td id= cell1 class=cell><img width='250px'  border="0" align='center' src="media/contacts/Calgary1.jpg" /></td>

        <td class=cell>
            <p>1155 8th Ave SW, World tower level 10, suit 109<br />Calgary,AB, T2P1N3<br />
                hours: Mo-Fri 9am-5pm<br />info@travelexperts.com<br />phone: 403 2719 873<br /> fax: 403 271 9872</p>
        </td>

        <td id= cell1 class =cell>
            <h5>How to find us:</h5><a href="https://www.google.com/maps/dir//51.0491311,-114.0622718/@51.0491041,-114.0623791,16z">
            <img onmouseover ="bigImg(this)" onmouseout="normalImg(this)"src="media/contacts/Calgarymap2.jpg" style="width:200px; height:20%" title="Calgarymap"/></a>
        </td>
        <td></td>
    </tr>
    </div>
    <div>
        <tr>
            <!--Third row is Okotoks headline. Merge 3 cells and center headline. -->
            <td></td>
            <td colspan='3' class=headlinecell align='center'>
                <h5>OKOTOKS BRANCH </h5>
            </td>
            <td></td>
        </tr>
        <tr>
            <!--Fourth row of table has a picture representing Okotoks, the branch address and
                            a map linking to google maps with location address. -->
            <td></td>
            <td id= cell1 class=cell><img height='188px' align='center' src="media/contacts/Okotoksplaza.jpg" /></td>

            <td class=cell>
                <p>110 Main Street, ground floor,<br />Okotoks, AB, T7R3J5<br />
                    hours:Mo-Fri 9 am -5pm<br />info@travelexperts.com<br />phone: 403 563 2381<br/>fax: 403 563 2382</p>
            </td>
            <td id= cell1 class=cell >
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
    </div>

</table>
<!--  MODALS: The button is linked to open up a modal, i.e. a text field listing the agents'
                        contact details. The modal contains 1 table with 2 columns and one row per agent. -->

<!-- MODAL CODE MODAL CODE MODAL CODE-->
<!-- <div class='container'>-->
<!-- Creating the  modal-->
<div id="ModalCalgaryAgents" class="modal">
    <div class="modal-content">
             <div class=modal-header>
            <h3 class="modal-title w-100 text-center" >Contact an expert:</h3>
             </div> 
                <span class="close">&times;</span>
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
                    <TD>
                        <div class = 'modalagentname modalcell1'> <h6>John Doe, junior agent</h6></div>
                            <a  class= 'agentemail' href="mailto:JohnDoe@travelexperts.com">JohnDoe@travelexperts.com</a><br />
                            </p>  phone: 403 123 456 01</p>
                    </TD>
                </TR>
                <TR>
                    <TD class =modalcell1><img width='250px' src="media/contacts/agentAnn1.jpg" /></TD>
                    <TD class ='modalcell modalcell1'>
                    <div class ='modalagentname'> <h6>Ann Douglas, junior agent</h6></div>
                        <a class= 'agentemail' href="AnnDouglas@travelexperts.com">AnnDouglas@travelexperts.com</a><br />
                        <p>phone: 403 123 456 02</p>
                </TD>
                </TR> 
                <TR>
                    <TD class='modalheading modalcell1' colspan='2'>
                    <br/> <br/> <br/> <h5 > Travelagents located in Okotoks</h5>
                    </TD>
                </TR>
                <TR>
                    <TD class=modalcell1><img width='250px' src="media/contacts/agentkaren.jpg" /> </TD>
                    <TD class= modalcell1>
                        <div class =modalagentname> <h6>Karen Smith, senior agent</h6></div>
                           <p> <a class= 'agentemail' href="mailto:karensmith@travelexperts.com">Karensmith@travelexperts.com</a><br />
                            phone: 403 563 2382</p>
                    </TD>
                </TR>
                <TD class =modalcell1><img width='250px' src="media/contacts/agentAfrican.jpg" /></TD>
                <TD class =modalcell1>
                <div class =modalagentname> <h6> Hamila Kumi, junior agent</h6></div>
                        <p><a class= 'agentemail' href="hamilakumi@travelexperts.com">Hamilakumi@travelexperts.com</a><br />
                        phone: 403 563 2383</p>
                </TD>
                </TR>
                </table>
            </div> <!--close div table-->
        </div>  <!--close div  -->
    </div><!--close div  -->
</div><!--close div  -->
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
</div>
<?php require "scripts/footer.php" ?> 