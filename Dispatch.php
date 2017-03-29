<?php
include('session.php');


?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Dispatch-ICT KNH</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
   <script type='text/javascript' src='js/Knh js.js'></script>
		<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
      <script type='text/javascript' src='js/jquery3.1.1.min.js'></script>
</head>
<body>
	<div id="heade">
       <span style="padding: 30px 0;"><img src="images/logo.png"></span>
       <label style="float:right"><a href="logout.php" >|Logout</a></label>
       <label style="float:right"><span style="color:#000;">Welcome, <?php echo $login_session; ?> </span></label>
	</div>
	<div id="header">
		
		<ul id="navigation">
			<li>
				<a href="home.php">Home</a>
			</li>
			<li>
				<a href="procurement.php">Procurement</a>
			</li>
			<li class="current">
				<a href="dispatch.php">Dispatch</a>
			</li>
			<li>
				<a href="#">Support</a>
				<ul>
					<li>
						<a href="support.php">Helpdesk</a>
					</li>
					
					<li>
						<a href="workshop.php">Workshop</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="contact.php">Contact</a>
			</li>
			<li>
				<a href="dashboard.php">Reports</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h2>Dispatch</h2>
		<p style="margin-left:205px;">Fill in the details below to dispatch ICT equipment:</p>

		<div id="contact">
         <form method="post" action="disp.php">
         	<h3>Details</h3>

               <label for="PNO">
				<span>Personal number</span>
				<input type="text" id="PNO" name="PNO">
			</label>
			
			<label for="date">
				<span>Date</span>
				<input type="date" name="date">
			</label>
			<label for="Product type">
				<span>Product ID</span>
				<input type="text" id="pid" name="pid">
			</label>
			<label for="serial">
				<span>Serial No</span>
				<input type="text" name="SNO">
			</label>
			<div id="Proc-left1">
			<label> Department</label>

 <input type="button" id="btn" value="Administration" />
<input type="button" id="btn1" value="Medicine" />
<input type="button" id="btn2" value="Peripheral   " />

    
<br /><br />       
    
<div id="output"></div><br><br>
<tr><td>
         <label for="location">
            <span>Location</span>
            <input type="text" id="loc" name="loc">
         </label></td></tr>
<tr><td>
         <label for="quo">
            <span>Quantity</span>
            <input type="text" id="quo" name="quo">
         </label></td></tr>         
    
<div id="overlay" class="web_dialog_overlay"></div>
    
 <div id="dialog" class="web_dialog">
   <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
      <tr>
         <td class="web_dialog_title">Department Selection</td>
         <td class="web_dialog_title align_right">
            <a href="#" id="btnClose">Close</a>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
          <p> <b>Choose the appropriate department </b></p>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
            <div id="brands">
               <input id="brand1" name="brand" type="radio" checked="checked" value="Finance" /> Finance
               <input id="brand2" name="brand" type="radio" value="Supply Chain" /> Supply Chain
               <input id="brand3" name="brand" type="radio" value="Security" /> Security
               <input id="brand3" name="brand" type="radio" value="Human Resource" /> Human resource
            </div>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="text-align: center;">
            <input id="btnSubmit" type="button" value="Submit" />
         </td>
      </tr>
   </table>
</div>

<!--Beginning of web_dialog2-->
<div id="dialog2" class="web_dialog2">
   <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
      <tr>
         <td class="web_dialog_title">Department Selection</td>
         <td class="web_dialog_title align_right">
            <a href="#" id="btn1Close">Close</a>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
          <p> <b>Choose the appropriate department </b></p>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
            <div id="brand">
               <input id="brand1" name="brand" type="radio" checked="checked" value="Level 1" /> Level 1
               <input id="brand2" name="brand" type="radio" value="Level 6" /> Level 6
               <input id="brand3" name="brand" type="radio" value="Casualty" /> Casualty
               <input id="brand3" name="brand" type="radio" value="Radiology" /> Radiology
            </div>
         </td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
            <div id="brandsh">
               <input id="brand1" name="brand" type="radio" checked="checked" value="Level 2" /> Level 2
               <input id="brand2" name="brand" type="radio" value="Level 7" /> Level 7
               <input id="brand3" name="brand" type="radio" value="Dental" /> Dental
               <input id="brand3" name="brand" type="radio" value="Orthopaedic" /> Orthopaedic
            </div>
         </td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
            <div id="brandh">
               <input id="brand1" name="brand" type="radio" checked="checked" value="Level 3" /> Level 3
               <input id="brand2" name="brand" type="radio" value="Level 8" /> Level 8
               <input id="brand3" name="brand" type="radio" value="Morgue" /> Morgue
               <input id="brand3" name="brand" type="radio" value="Blood Transfer" /> Blood Transfer
            </div>
         </td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
            <div id="brandss">
               <input id="brand1" name="brand" type="radio" checked="checked" value="Level 4" /> Level 4
               <input id="brand2" name="brand" type="radio" value="Level 9" /> Level 9
               <input id="brand3" name="brand" type="radio" value="maternity" /> Maternity
               <input id="brand3" name="brand" type="radio" value="Eye Clinic" /> Eye Clinic
            </div>
         </td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
            <div id="brandsz">
               <input id="brand1" name="brand" type="radio" checked="checked" value="Level 5" /> Level 5
               <input id="brand2" name="brand" type="radio" value="Level 10" /> Level 10
               <input id="brand3" name="brand" type="radio" value="Theatre" /> Theatre
               <input id="brand3" name="brand" type="radio" value="Records" /> Records
            </div>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="text-align: center;">
            <input id="btn1Submit" type="button" value="Submit" />
         </td>
      </tr>
   </table>
</div>


<!--End of web_dialog2-->
<!--Beginning of web_dialog3-->

<div id="dialog3" class="web_dialog">
   <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
      <tr>
         <td class="web_dialog_title">Department Selection</td>
         <td class="web_dialog_title align_right">
            <a href="#" id="btn2Close">Close</a>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
          <p> <b>Choose the appropriate department </b></p>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
            <div id="brandy">
               <input id="brand1" name="brand" type="radio" checked="checked" value="Maintenance" /> Maintenance
               <input id="brand2" name="brand" type="radio" value="Main Store" /> Main Store
               <input id="brand3" name="brand" type="radio" value="Lower Mess" /> Lower Mess
               <input id="brand3" name="brand" type="radio" value="Boiler" /> Boiler
            </div>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="text-align: center;">
            <input id="btn2Submit" type="button" value="Submit" />
         </td>
      </tr>
   </table>
</div>


<!--End of web_dialog3-->


		</div>
			<input type="submit" id="send" value="submit" style="margin-top:125px;">
             </form>
         
		</div>
	</div>
	<div id="footer">
		<div>
			
			<p>
				&copy; 2017 Kenyatta National Hospital . All rights reserved.
			</p>
		</div>
		<script type="text/javascript">
        $(document).ready(function ()
   {
      $("#btn").click(function (e)
      {
         ShowDialog(false);
         e.preventDefault();
      });

      $("#btn1").click(function (e)
      {
         ShowDialog2(true);
         e.preventDefault();
      });

      $("#btn2").click(function (e)
      {
         ShowDialog3(true);
         e.preventDefault();
      });

      $("#btnClose").click(function (e)
      { 
         HideDialog();
         e.preventDefault();
      });

      $("#btn1Close").click(function (e)
      { 
         HideDialog2();
         e.preventDefault();
      });
      $("#btn2Close").click(function (e)
      { 
         HideDialog3();
         e.preventDefault();
      });

      $("#btnSubmit").click(function (e)
      {  
          var region=$
         var brand = $("#brands input:radio:checked").val();
         $("#output").html("<br><b>You have Selected: </b>" + brand);
        $.post('disp.php', {'department':brand});


         HideDialog();
         e.preventDefault();
      });

      $("#btn2Submit").click(function (e)
      {  
          var region=$
         var brand = $("#brandy input:radio:checked").val();
         $("#output").html("<br><b>You have Selected: </b>" + brand);
         HideDialog3();
         e.preventDefault();
      });

      $("#btn1Submit").click(function (e)
      {  
          var region=$
         var brand = $("#brand input:radio:checked").val()||$("#brandsh input:radio:checked").val()||$("#brandh input:radio:checked").val()||$("#brandss input:radio:checked").val()||$("#brandsz input:radio:checked").val();
         $("#output").html("<br><b>You have Selected: </b>" + brand);
         HideDialog2();
         e.preventDefault();
      });

   });

   function ShowDialog(modal)
   {
      $("#overlay").show();
      $("#dialog").fadeIn(300);

      if (modal)
      {
         $("#overlay").unbind("click");
      }
      else
      {
         $("#overlay").click(function (e)
         {
            HideDialog();
         });
      }
   }

   function ShowDialog2(modal)
   {
      $("#overlay").show();
      $("#dialog2").fadeIn(300);

      if (modal)
      {
         $("#overlay").unbind("click");
      }
      else
      {
         $("#overlay").click(function (e)
         {
            HideDialog();
         });
      }
   }
   function ShowDialog3(modal)
   {
      $("#overlay").show();
      $("#dialog3").fadeIn(300);

      if (modal)
      {
         $("#overlay").unbind("click");
      }
      else
      {
         $("#overlay").click(function (e)
         {
            HideDialog();
         });
      }
   }

   function HideDialog()
   {
      $("#overlay").hide();
      $("#dialog").fadeOut(300);
   } 
        
   function HideDialog2()
   {
      $("#overlay").hide();
      $("#dialog2").fadeOut(300);
   } 
   function HideDialog3()
   {
      $("#overlay").hide();
      $("#dialog3").fadeOut(300);
   } 
     </script>
		<div id="connect">
			<a href="https:://www.facebook.com/Kenyatta-National-Hospital-222808627792716/" id="facebook" target="_blank">Facebook</a>
			<a href="https:://twitter.com/knh_hospital?lang=en" id="twitter" target="_blank">Twitter</a>
			<a href="https://knh.or.ke/" id="googleplus" target="_blank">Google&#43;</a>
		</div>
	</div>
</body>
</html>