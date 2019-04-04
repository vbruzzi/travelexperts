<!-- Contacts page by Samira -->




<?php require "scripts/header.php" ?>
<!-- CONTACTS STYLES -->
<link rel="stylesheet" href="styles/contacts.css">

<!-- CREATE CONTENT -->
<div class="container" align='center'>
    <h1 ID= headline >Contact us</h1>
    <div class=table>
        <table>
            <TR><TD>
                   <h5>or contact us here!</h5>
               </TD>
                <TD>
                   <h5>or contact us here!</h5>
               </TD>
               <TD>
                   <h5>or contact us here!</h5>
               </TD>
            </TR>
        </table>
    </div>
    <h5>You can contact as with all your questions and booking needs
        via <a ID = email href="mailto:info@travelexperts.com">email</a>, phone or in person
        You can reach any of our agents directly, or by contacting our headquarters in Calgary or
        one of our branches in Onoko or Edmonton.</h5>
    <!-- button to open the modal/window with agent contact details at Calgary location -->
    <button class='button' id="buttonCalgaryAgents">available agents</button>
    <br />
    <div ID = "rectangle" ></div>
    <img width='800px' align='center' src="media/contacts/agentswithglobe5.jpg">
    <br />
</div>
<!--Create a table to arangee elements on page:5 colums by 5 rows.Left and right columns
                will be space holders for now.-->
<div class="container" align='center'></div><br />

<table border=1 class='table1' style='width:100%'>
    <col width="50">
    <col width="200">
    <col width="200">
    <col width="200">
    <col width="50">
    <tr>
        <!--First row of table has headline for Calgary. All three cells are merged and headline is centered. -->
        <td>1</td>
        <td class=headlinecell colspan='3' align='center'>
            <h5>CALGARY HEADQUATERS</h5>
        </td>

        <td>5</td>
    </tr>
    <tr>
        <!--Second row of table has in left cell: picture representing Calgary, in middle 
                    branch address and  in the right cell a map linking to google maps with location address. -->
        <td>6</td>
        <td id= cell1 class=cell><img width='200px' align='center' src="media/contacts/Calgary1.jpg" /></td>

        <td class=cell>
            <p>1155 8th Ave SW, World tower level 10, suit 109<br />Calgary,AB, T2P1N3<br />
                hours: Mo-Fri 9am-5pm<br />info@travelexperts.com<br />phone: 403 2719 873<br /> fax: 403 271 9872</p>
        </td>

        <td id= cell1 class =cell>
            <h5>How to find us:</h5><a href="https://www.google.com/maps/dir//51.0491311,-114.0622718/@51.0491041,-114.0623791,16z"><img src="media/contacts/Calgarymap2.jpg" style="width:200px; height:20%" title="Calgarymap"/></a>
        </td>
        <td>10</td>
    </tr>
    </div>
    <div>
        <tr>
            <!--Third row is Okotoks headline. Merge 3 cells and center headline. -->
            <td>11</td>
            <td colspan='3' class=headlinecell align='center'>
                <h5>Okotoks Branch </h5>
            </td>
            <td>13</td>>
        </tr>
        <tr>
            <!--Fourth row of table has a picture representing Okotoks, the branch address and
                            a map linking to google maps with location address. -->
            <td>16</td>
            <td id= cell1 class=cell><img width='200px' align='center' src="media/contacts/Okotoksplaza.jpg" /></td>

            <td class=cell>
                <p>110 Main Street, ground floor,<br />Okotoks, AB, T7R3J5<br />
                    hours:Mo-Fri 9 am -5pm<br />info@travelexperts.com<br />phone: 403 563 2381<br/>fax: 403 563 2382</p>
            </td>
            <td id= cell1 class=cell >
                <h5>How to find us:</h5><a href="https://www.google.com/maps/dir//50.7253655,-113.9750487/@50.7254225,-113.9750904,17z/data=!4m2!4m1!3e2"><img src="media/contacts/Okotoksmap.png" style="width:200px; height:20%" /></a>
            </td>
            <td>20</td>
        </tr>
        <tr>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
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
            <h4 class="modal-title w-100 text-center" >Contact an expert:</h4>
        </div> 
           <span class="close">&times;</span>
        <div class="modal-body">
            <table class='modaltable'>
                <TR>
                    <TD class='modalheading' colspan='2'>
                        <h6 > Travelagents located in Calgary</h6>
                    </TD>
                </TR>
                <TR>
                    <TD><img width='250px' src="media/contacts/agentDavid.jpg" /> </TD>
                    <TD>
                        <div class =modalagentname> <h6>John Doe, junior agent</h6></div>
                           <div class = indemail> <a  href="mailto:JohnDoe@travelexperts.com">JohnDoe@travelexperts.com</a><br /></div>
                            </p>  phone: 403 123 456 01</p>
                    </TD>
                </TR>
                <TD><img width='250px' src="media/contacts/agentAnn.jpg" /></TD>
                <TD>
                    <div class =modalagentname> <h6>Ann Douglas, junior agent</h6></div>
                        <p><a href="AnnDouglas@travelexperts.com">AnnDouglas@travelexperts.com</a><br />
                        phone: 403 123 456 02</p>
                </TD>
                </TR>
                <TR>
                    <TD class='modalheading' colspan='2'>
                        <h6 > Travelagents located in Okotoks</h6>
                    </TD>
                </TR>
                <TR>
                    <TD><img width='250px' src="media/contacts/agentAsian.jpg" /> </TD>
                    <TD>
                        <div class =modalagentname> <h6>Karen Smith, senior agent</h6></div>
                           <p> <a href="mailto:karensmith@travelexperts.com">Karensmith@travelexperts.com</a><br />
                            phone: 403 563 2382</p>
                    </TD>
                </TR>
                <TD><img width='250px' src="media/contacts/agentAfrican.jpg" /></TD>
                <TD>
                <div class =modalagentname> <h6> Hamila Kumi, junior agent</h6></div>
                        <p><a href="hamilakumi@travelexperts.com">Hamilakumi@travelexperts.com</a><br />
                        phone: 403 563 2383</p>
                </TD>
                </TR>
            </table>
        </div>
    </div>

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