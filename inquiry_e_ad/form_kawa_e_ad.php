
<?php



if(isset($_POST['inputForm:submit']))

{


//mail from customer
            $to_mail = "Kawashima@keal.com.bd";   
            $email_subject="Kawashima Product Inquiry";
            
            $email_message="Sent From        : ".$_POST['inputForm:userEmail']."\r\n".$_POST['inputForm:userAddress']."\r".$_POST['inputForm:postalCode']."\r\n".
            		   "Inquired By      : ".$_POST['inputForm:userName']."\r\n".
            		   "Contact No       : ".$_POST['inputForm:userTel']."\r\n".
            		   "Inquiry Type     : ".$_POST['inputForm:inquiryType']."\r\n".
            		   "Inquiry Product  : ".$_POST['inputForm:productsType']."\r\n".
                     "Inquiry Product Model  : ".$_POST['inputForm:productModel']."\r\n\r\n".
                     
            		   
            		   
            		   
            		  "Inquiry Deacription: " .$_POST['inputForm:description-textarea']."\r\n\r\n";
            		    
            		    
            $headers = 'From: '.$_POST['inputForm:userEmail']."\r\n".
                     'Reply-To:'.$_POST['inputForm:userEmail'] . "\r\n" .
                     'X-Mailer: PHP/' . phpversion();

            'Reply-To: '.$_POST['inputForm:userEmail']."\r\n" .

            'Content-Type: text/html; charset=ISO-8859-1'."\r\n".

            'MIME-Version: 1.0'."\r\n\r\n";

            mail("<$to_mail>", "$email_subject","$email_message", "$headers"); 
}        
?>





<html>
<!-- Mirrored from www.kawashima-pack.co.jp/inquiry_e_ad/form_kawa_e_ad.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2017 03:14:43 GMT -->

<head>

<title>Thank you for your inquiry.</title>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<!-- base href="https://maneki.tactnet.co.jp/kawa-e/inquiry/" -->
<script>
function validateForm() {
    var x = document.forms["inputForm"]["inputForm:tx14"].value;
    if (x == null || x == "") {
        alert("please enter valid name");
        return false;
   }
   
 
   
   
   
      var x = document.forms["inputForm"]["inputForm:tx11"].value;
    if (x == null || x == "") {
        alert("company must be fill out");
        return false;
   }
   
   
   
     
  
   
   var x = document.forms["inputForm"]["inputForm:tx19"].value;
    if (x == null || x == "") {
        alert("please enter valid address");
        return false;
   }
   
   
   var x = document.forms["inputForm"]["inputForm:tx15"].value;
    if (! /^[0-9]{11}$/.test(x)) {
  alert("Please input exactly 11 contact numbers!");
  return false;
}
   
   
   
    var x = document.forms["inputForm"]["inputForm:mailaddress"].value;
    if (x == null || x == "") {
        alert("Please fill out the email field.");
        return false;
   }
   var x = document.forms["inputForm"]["inputForm:mailaddress"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    
       var x = document.forms["inputForm"]["inputForm:mailaddress2"].value;
    if (x == null || x == "") {
        alert("Please fill out the email field.");
        return false;
   }
   var x = document.forms["inputForm"]["inputForm:mailaddress2"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }




    var x = document.forms["inputForm"]["inputForm:tx31"].value;
    if (x == null || x == "") {
        alert("Product weight per bag can not be empty");
        return false;
   }
   
   
   
      var x = document.forms["inputForm"]["inputForm:tx32"].value;
    if (x == null || x == "") {
        alert("BAg Size can not be empty");
        return false;
   }
   
   
   
   
  
   
   
   
     var x = document.forms["inputForm"]["inputForm:tx33"].value;
    if (x == null || x == "") {
        alert("PACKAGING MATERIAL can not be empty");
        return false;
   }
   
   



  var x = document.forms["inputForm"]["inputForm:tx34"].value;
    if (x == null || x == "") {
        alert(" Please fill out the SPEED REQUIRE");
        return false;
   }

  var x = document.forms["inputForm"]["inputForm:tx35"].value;
    if (x == null || x == "") {
        alert(" Please fill out the FEEDING SYSTEM");
        return false;
   }
     var x = document.forms["inputForm"]["inputForm:rb31"].value;
    if (x == null || x == "") {
        alert(" Please fill out the TYPING A PRODUCTION DATE ON A BAG");
        return false;
   }

  var x = document.forms["inputForm"]["inputForm:rb32"].value;
    if (x == null || x == "") {
        alert(" Please fill out the PRODUCT'S LONG SHELF LIFE");
        return false;
   }
   var x = document.forms["inputForm"]["inputForm:rb33"].value;
    if (x == null || x == "") {
        alert(" Please fill out the CONVEYANCE OF PRODUCTS");
        return false;
   }
 var x = document.forms["inputForm"]["inputForm:tx36"].value;
    if (x == null || x == "") {
        alert(" Please fill out the PRODUCT SIZE ");
        return false;
   }
   var x = document.forms["inputForm"]["inputForm:tx37"].value;
    if (x == null || x == "") {
        alert(" Please fill out the PACKAGING MATERIAL ");
        return false;
   }
    var x = document.forms["inputForm"]["inputForm:tx38"].value;
    if (x == null || x == "") {
        alert(" Please fill out the SPEED REQUIRE ");
        return false;
   }
     var x = document.forms["inputForm"]["inputForm:tx39"].value;
    if (x == null || x == "") {
        alert(" Please fill out the FEEDING SYSTEM");
        return false;
   }
       var x = document.forms["inputForm"]["inputForm:rb34"].value;
    if (x == null || x == "") {
        alert(" Please fill out the LONG SHELF LIFE ");
        return false;
   }
    var x = document.forms["inputForm"]["inputForm:rb35"].value;
    if (x == null || x == "") {
        alert(" Please fill out the INCASE OF YES, HOW BY USING ");
        return false;
   }

      var x = document.forms["inputForm"]["inputForm:rb36"].value;
    if (x == null || x == "") {
        alert(" Please fill out the PRODUCT FEEDING METHOD");
        return false;
   }
    var x = document.forms["inputForm"]["inputForm:rb37"].value;
    if (x == null || x == "") {
        alert(" Please fill out the TYPING A PRODUCTION DATE ON A BAG");
        return false;
   }
    var x = document.forms["inputForm"]["inputForm:rb38"].value;
    if (x == null || x == "") {
        alert(" Please fill out the GUSSETTED END CRIMP SEAL");
        return false;
   }
    var x = document.forms["inputForm"]["inputForm:rb39"].value;
    if (x == null || x == "") {
        alert(" Please fill out the NOTCH");
        return false;
   }
    var x = document.forms["inputForm"]["inputForm:rb40"].value;
    if (x == null || x == "") {
        alert(" Please fill out the IN CASE OF YES ");
        return false;
   }

 var x = document.forms["inputForm"]["inputForm:tx40"].value;
    if (x == null || x == "") {
        alert(" Please fill out the PRODUCT SIZE");
        return false;
   }
   var x = document.forms["inputForm"]["inputForm:tx41"].value;
    if (x == null || x == "") {
        alert(" Please fill out the WRAPPING MATERIAL");
        return false;
   }
     var x = document.forms["inputForm"]["inputForm:rb41"].value;
    if (x == null || x == "") {
        alert(" Please fill out the TYPING A PRODUCTION DATE ON A BAG");
        return false;
   }


 var x = document.forms["inputForm"]["inputForm:ta11"].value;
    if (x == null || x == "") {
        alert("OTHER REQUIREMENT can not be empty ");
        return false;
   }
 }
</script>

</head>
<body bgcolor="#FFFFFF" text="#333333">

<form method="post" action="http://www.kawashima-pack.co.jp/cgi-bin/mpmail_e/mpmail.cgi">
<input name="pg" value="2" type="hidden">

<center>

<table border="0" cellpadding="3" cellspacing="0" width="640">
<tbody><tr><td bgcolor="#000066">
	<font color="#FFFFFF" size="2">
	<b>KAWASHIMA PACKAGING MACHINERY LTD.Inquiry.</b></font></td></tr>
</tbody></table>
<br>

<table border="0" cellpadding="2" cellspacing="0">
<tbody><tr><td valign="top"><font size="2"><b>(Note)</b></font></td>
    <td><font size="2"><b>Please click "Confirm" button after filling the follwoing columns.</b></font></td></tr>

<tr><td valign="top" align="right"><font color="#CC0000" size="2"><br></font></td>
    <td><font color="#000000" size="2">Fields marked  <img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8">  must be completed.</font></td></tr>
</tbody></table>
<br>

<table border="0" cellpadding="1" cellspacing="0" width="640">


<tbody><tr><td align="center">
	</td></tr>

<tr><td align="center">
	<table border="0" cellpadding="1" cellspacing="0">
	<tbody><tr>
	    <td><input name="cb11" value="Need the catalog" type="checkbox"><!--chk--></td>
	    <td nowrap="nowrap"><font size="2">Need the catalog  </font></td>
	    <td><input name="cb12" value="Question" type="checkbox"><!--chk--></td>
	    <td nowrap="nowrap"><font size="2">Question  </font></td>
	    <td><input name="cb13" value="Sales Contact" type="checkbox"><!--chk--></td>
	    <td nowrap="nowrap"><font size="2">Sales Contact  </font></td>
	    <td><input name="cb14" value="Other" type="checkbox"><!--chk--></td>
	    <td nowrap="nowrap"><font size="2">Other (Please describe in details in the inquiry column below.)  </font></td>
	</tr>
	</tbody></table>
</td></tr>
</tbody></table>
<br>

<table border="0" cellpadding="1" cellspacing="0" width="640">
<tbody><tr><td bgcolor="#3366CC" align="center">
	<table border="0" cellpadding="3" cellspacing="1" width="100%">

	<tbody><tr><td bgcolor="#EBE9E9" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8"> <font size="2">Your name</font></td>
	    <td bgcolor="#FFFFFF"><input name="tx14" size="40" type="text"></td></tr>

	<tr><td bgcolor="#EBE9E9" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8"> <font size="2">Company</font></td>
	    <td bgcolor="#FFFFFF"><input name="tx11" size="40" type="text"></td></tr>

	<tr><td bgcolor="#EBE9E9" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8"> <font size="2">Address</font></td>
	    <td bgcolor="#FFFFFF"><input name="tx19" size="20" type="text"></td></tr>

	<tr><td bgcolor="#EBE9E9" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8"> <font size="2">Phone No.</font></td>
	    <td bgcolor="#FFFFFF"><input name="tx15" size="40" type="text"></td></tr>

	<tr><td bgcolor="#EBE9E9" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-r.gif" alt="" height="8" width="8"> <font size="2">E-mail</font></td>
	    <td bgcolor="#FFFFFF"><input type="text" name="mailaddress" size="30"><br>
            <font size="2">for confirmation input below again</font><br>           
             <input type="text" name="mailaddress2" size="30"></td></tr>


<!--01 option start-->
	<tr><td colspan="2" bgcolor="#DEF8BE" nowrap="nowrap"><font size="2"><b>VERTICAL MACHINE</b></font></td></tr>

	<tr><td bgcolor="#DEF8BE" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">PRODUCT WEIGHT PER BAG:(g)</font></td>
	    <td bgcolor="#DEF8BE"><input name="tx31" size="40" type="text"></td></tr>
	    
	<tr><td bgcolor="#DEF8BE" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">BAG SIZE (LxWxH (mm))</font></td>
	    <td bgcolor="#DEF8BE"><input name="tx32" size="40" type="text"></td></tr>
	    
	<tr><td bgcolor="#DEF8BE" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">PACKAGING MATERIAL</font></td>
	    <td bgcolor="#DEF8BE"><input name="tx33" size="40" type="text"></td></tr>
	    
	<tr><td bgcolor="#DEF8BE" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">SPEED REQUIRE</font></td>
	    <td bgcolor="#DEF8BE"><input name="tx34" size="40" type="text"></td></tr>

	<tr><td bgcolor="#DEF8BE" nowrap="nowrap" valign="top"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">FEEDING SYSTEM</font></td>
	    <td bgcolor="#DEF8BE">
			<table border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td><input name="tx35" size="40" type="text"></td></tr>
			</tbody></table>

			<table border="0" cellpadding="3" cellspacing="0">
			<tbody><tr><td colspan="2"><font size="2"><b>OPTIONAL REQUIREMENT FOR YOUR PACKING</b></font></td></tr>

			<tr><td><font size="2">&#183;TYPING A PRODUCTION DATE ON A BAG</font></td>
			    <td><input name="rb31" value="Yes" type="radio"><!--rb0--><font size="2">YES</font>
				/<input name="rb31" value="No" type="radio"><!--rb1--><font size="2">NO</font></td></tr>

			<tr><td><font size="2">&#183;PRODUCT'S LONG SHELF LIFE</font></td>
			    <td><input name="rb32" value="Yes" type="radio"><!--rb0--><font size="2">YES</font>
				/<input name="rb32" value="No" type="radio"><!--rb1--><font size="2">NO</font></td></tr>

			<tr><td><font size="2">&#183;CONVEYANCE OF PRODUCTS</font></td>
			    <td><input name="rb33" value="Yes" type="radio"><!--rb0--><font size="2">YES</font>
				/<input name="rb33" value="No" type="radio"><!--rb1--><font size="2">NO</font></td></tr>
			</tbody></table>
	    </td></tr>

<!--02 option start-->
	<tr><td colspan="2" bgcolor="#F8F8BE" nowrap="nowrap"><font size="2"><b>HORIZONTAL MACHINE</b></font></td></tr>

	<tr><td bgcolor="#F8F8BE" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">PRODUCT SIZE (LxWxH (mm))</font></td>
	    <td bgcolor="#F8F8BE"><input name="tx36" size="40" type="text"></td></tr>
	    
	<tr><td bgcolor="#F8F8BE" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">PACKAGING MATERIAL</font></td>
	    <td bgcolor="#F8F8BE"><input name="tx37" size="40" type="text"></td></tr>
	    
	<tr><td bgcolor="#F8F8BE" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">SPEED REQUIRE</font></td>
	    <td bgcolor="#F8F8BE"><input name="tx38" size="40" type="text"></td></tr>

	<tr><td bgcolor="#F8F8BE" nowrap="nowrap" valign="top"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">FEEDING SYSTEM</font></td>
	    <td bgcolor="#F8F8BE">
			<table border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td><input name="tx39" size="40" type="text"></td></tr>
			</tbody></table>

			<table border="0" cellpadding="3" cellspacing="0">
			<tbody><tr><td colspan="2"><font size="2"><b>OPTIONAL REQUIREMENT FOR YOUR PACKING</b></font></td></tr>

			<tr><td><font size="2">&#183;LONG SHELF LIFE </font></td>
			    <td><input name="rb34" value="Yes" type="radio"><!--rb0--><font size="2">YES</font>
				/<input name="rb34" value="No" type="radio"><!--rb1--><font size="2">NO</font></td></tr>

			<tr><td valign="top" align="right"><font size="2">INCASE OF YES, HOW BY USING </font></td>
			    <td><input name="rb35" value="N2GAS" type="radio"><!--rb0--><font size="2">N2GAS</font><br>
				<input name="rb35" value="OXYGEN ABSORBER" type="radio"><!--rb1--><font size="2">OXYGEN ABSORBER </font></td></tr>

			<tr><td valign="top"><font size="2">&#183;PRODUCT FEEDING METHOD</font></td>
			    <td><input name="rb36" value="MANUAL" type="radio"><!--rb0--><font size="2">MANUAL</font><br>
				<input name="rb36" value="SEMI AUTO" type="radio"><!--rb1--><font size="2">SEMI AUTO</font><br>
				<input name="rb36" value="FULLY AUTOMATION" type="radio"><!--rb2--><font size="2">FULLY AUTOMATION </font></td></tr>

			<tr><td><font size="2">&#183;TYPING A PRODUCTION DATE ON A BAG</font></td>
			    <td><input name="rb37" value="Yes" type="radio"><!--rb0--><font size="2">YES</font>
				/<input name="rb37" value="No" type="radio"><!--rb1--><font size="2">NO</font></td></tr>

			<tr><td><font size="2">&#183;GUSSETTED END CRIMP SEAL</font></td>
			    <td><input name="rb38" value="Yes" type="radio"><!--rb0--><font size="2">YES</font>
				/<input name="rb38" value="No" type="radio"><!--rb1--><font size="2">NO</font></td></tr>

			<tr><td><font size="2">&#183;NOTCH</font></td>
			    <td><input name="rb39" value="Yes" type="radio"><!--rb0--><font size="2">YES</font>
				/<input name="rb39" value="No" type="radio"><!--rb1--><font size="2">NO</font></td></tr>

			<tr><td valign="top" align="right"><font size="2">IN CASE OF YES  </font></td>
			    <td><input name="rb40" value="V-SHAPE" type="radio"><!--rb0--><font size="2">V-SHAPE</font><br>
				<input name="rb40" value="I-SHAPE" type="radio"><!--rb1--><font size="2">I-SHAPE</font><br>
				<input name="rb40" value="ZIG ZAG" type="radio"><!--rb2--><font size="2">ZIG ZAG</font></td></tr>
			</tbody></table>
	</td></tr>

<!--03 option start-->
	<tr><td colspan="2" bgcolor="#FAE6FA" nowrap="nowrap"><font size="2"><b>WRAPPING MACHINE</b></font></td></tr>

	<tr><td bgcolor="#FAE6FA" nowrap="nowrap"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">PRODUCT SIZE (LxWxH (mm))</font></td>
	    <td bgcolor="#FAE6FA"><input name="tx40" size="40" type="text"></td></tr>

	<tr><td bgcolor="#FAE6FA" nowrap="nowrap" valign="top"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">WRAPPING MATERIAL</font></td>
	    <td bgcolor="#FAE6FA">
			<table border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td><input name="tx41" size="40" type="text"></td></tr>
			</tbody></table>

			<table border="0" cellpadding="3" cellspacing="0">
			<tbody><tr><td colspan="2"><font size="2"><b>OPTIONAL REQUIREMENT FOR YOUR PACKING</b></font></td></tr>

			<tr><td><font size="2">&#183;TYPING A PRODUCTION DATE ON A BAG</font></td>
			    <td><input name="rb41" value="Yes" type="radio"><!--rb0--><font size="2">YES</font>
				/<input name="rb41" value="No" type="radio"><!--rb1--><font size="2">NO</font></td></tr>
			</tbody></table>
	</td></tr>

	<tr><td bgcolor="#EBE9E9" nowrap="nowrap" valign="top"><img src="form_kawa_e_ad_files/dot-g.gif" alt="" height="8" width="8"> <font size="2">OTHER REQUIREMENT IF ANY</font></td>
	    <td bgcolor="#FFFFFF"><textarea name="ta11" rows="5" cols="50"></textarea></td></tr>

	</tbody></table>
</td></tr>
</tbody></table>
<br>

<table border="0" cellpadding="0" cellspacing="0" width="640">
<tbody><tr><td align="center">
	<input value="Confirm" type="submit" name="submit"> | 
	<input value="Reset" type="reset">
</td></tr>
</tbody></table>
<br>

<table border="0" cellpadding="0" cellspacing="0" width="640">
<tbody><tr><td><hr size="1" noshade="noshade"></td></tr>
<tr><td align="center"><font color="#777777" size="2">Copyright (C) Kyoto Engineering & Automation Ltd. All Rights Reserved.</font></td></tr>
</tbody></table>
<br>

</center>
</form>


</body>
<!-- Mirrored from www.kawashima-pack.co.jp/inquiry_e_ad/form_kawa_e_ad.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2017 03:14:43 GMT -->
</html>