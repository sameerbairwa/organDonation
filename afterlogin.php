
<!DOCTYPE html>
<html>
<head> 





<?php 
session_start();
$email=$_SESSION['username'];
$con=mysqli_connect("localhost","root","","user");
$query=mysqli_query($con,"select *from person where email='$email'");
while($data=mysqli_fetch_assoc($query))
{
    $aadhar=$data['id'];
    $fname=$data['First_Name'];
    $mname=$data['Middle_Name'];
    $lname=$data['Last_Name'];
    $pcode=$data['postcode'];
    $ad1=$data['addressLine'];
   
    $city=$data['town'];
    $country=$data['country'];
    $dob=$data['Dob'];
    $email=$data['email'];

    $phone=$data['phone'];
    $mobile=$data['mobile'];
    $ecn=$data['EmergencyContactName'];
    $ephone=$data['emergencyContactNo'];
    $eadd=$data['EmergencyContactAddress'];

}

if(isset($_POST['update']))
{


    $aadharId = $_POST["aadharId"]; 
    $title = $_POST["title"];
    $fname = $_POST["fname"];
    $Mname = $_POST["Mname"];
    $Lname = $_POST["Lname"];
    $postcode = $_POST["postcode"];
    $addressLine = $_POST["addressLine"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $DateOfBirth = $_POST["dob"];
    $telephone= $_POST["telephone"];
    $MobileNo = $_POST["MobileNo"];
    $EmailAddress = $_POST["email"];
    $donate = $_POST["Donate"];

    $PreferredContact = $_POST["PreferredContact"];
    $ECName = $_POST["EmergencyContactName"];
    $ECNumber = $_POST["EmergencyContactNo"];
    // $passwd = $_POST["pass"];
    // $ECAddress = $_POST["Emergency-Contact-Address"];
    
    if(isset($_POST["EmergencyContactAddress"]))
    {
        $ECAddress = $addressLine;
    }
    else
    {
        $ECAddress = $_POST["emergencycontactaddress"];
    }
    $count = sizeof($donate);

   mysqli_query($con,"update person set id='$aadharId',First_Name='$fname',Middle_Name='$Mname',Last_Name='$Lname',Title='$title',Dob='$DateOfBirth'");
        for($i = 0; $i<$count; $i++)
        {
            mysqli_query($con,"update organs set id='$aadharId',donateOrgans='$donate[$i]'"); 
        }
            mysqli_query($con,"update person set mobile='$MobileNo',phone='$telephone',email='$EmailAddress',preferredContact='$PreferredContact',EmergencyContactName='$ECName',emergencyContactNo='$ECNumber',EmergencyContactAddress='$ECAddress'");
            mysqli_query($con,"update person set postcode='$postcode',addressLine='$addressLine',town='$city',country='$country'");
}

?>








    

<style>

/* Full-width input fields */
input[type=text], input[type=password] ,select{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    border-radius: 4px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 4px;
}
button:hover{background-color:#46a049 }
.btn {
    width: 10px
    border: none; /* Remove borders */
    color: black; /* Add a text color */
    padding: 14px 28px; /* Add some padding */
    cursor: pointer; /* Add a pointer cursor on mouse-over */
    border-radius: 4px;
}

.title:hover{background-color: #ccc}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.container {
    padding: 10px 150px;
}
.form {
    padding: 30px 130px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
#aadharId,#TITLE,#fName,#MName,#LName,#Post,#Address,#City,#Country,#DOB,#Email,#Telephone,#MOB,#PC,#Ecn,#ECno,#required{
 color:#F00;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .form-group, input[type=submit]
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<script text= "text/javascript">
       function check()
        {   
            var x = 0;

            if((!document.signup.aadharId.value.match(/^[0-9]+$/)) && (!document.signup.aadharId.value==""))
                    {
                        document.getElementById("aadharId").innerHTML = "Enter the valid AadharId";
                        x++;
                    }
            else if((document.signup.aadharId.value==""))
                    {
                        document.getElementById("aadharId").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("aadharId").innerHTML = "";
            }

            if((document.signup.title.value==""))
                    {
                        document.getElementById("TITLE").innerHTML = "This field is required";
                        x++;
                    }      
            else{ 
                document.getElementById("TITLE").innerHTML = "";
            }
            
            if((!document.signup.fname.value.match(/^[A-Za-z]+$/) && (!document.signup.fname.value=="")))
                    {
                        document.getElementById("fName").innerHTML = "Enter the valid Name";
                        x++;
                    }
            else if((document.signup.fname.value==""))
                    {
                        document.getElementById("fName").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("fName").innerHTML = "";
            }

            if((!document.signup.Mname.value.match(/^[A-Za-z]+$/) && (!document.signup.Mname.value=="")))
                    {
                        document.getElementById("MName").innerHTML = "Enter the valid Name";
                        x++;
                    }
            else{ 
                document.getElementById("MName").innerHTML = "";
            }

            if((!document.signup.Lname.value.match(/^[A-Za-z]+$/) && (!document.signup.Lname.value=="")))
                    {
                        document.getElementById("LName").innerHTML = "Enter the valid Name";
                        x++;
                    }
            else if((document.signup.Lname.value==""))
                    {
                        document.getElementById("LName").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("LName").innerHTML = "";
            }
            
            if((!document.signup.postcode.value.match(/^[0-9]+$/)) && (!document.signup.postcode.value==""))
                    {
                        document.getElementById("Post").innerHTML = "Enter the valid postcode";
                        x++;
                    }
            else if((document.signup.postcode.value==""))
                    {
                        document.getElementById("Post").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("Post").innerHTML = "";
            }
            
            if((document.signup.addressLine.value==""))
                    {
                        document.getElementById("Address").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("Address").innerHTML = "";
            }

            if((!document.signup.city.value.match(/^[A-Za-z]+$/) && (!document.signup.city.value=="")))
                    {
                        document.getElementById("City").innerHTML = "Enter the valid City";
                        x++;
                    }
            else if((document.signup.city.value==""))
                    {
                        document.getElementById("City").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("City").innerHTML = "";
            }

            if((!document.signup.country.value.match(/^[A-Za-z]+$/) && (!document.signup.country.value=="")))
                    {
                        document.getElementById("Country").innerHTML = "Enter the valid Country";
                        x++;
                    }
            else if((document.signup.country.value==""))
                    {
                        document.getElementById("Country").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("Country").innerHTML = "";
            }
            if((document.signup.dob.value==""))
                    {
                        document.getElementById("DOB").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("DOB").innerHTML = "";
            }
            if((!document.signup.email.value.match(/^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/)) && (!document.signup.email.value==""))
                    {
                        document.getElementById("Email").innerHTML = "Enter the valid Email";
                        x++;
                    }       
            else if(document.signup.email.value=="")
                    {
                        document.getElementById("Email").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("Email").innerHTML = "";
            }


             if((!document.signup.telephone.value.match(/^[0-9]+$/)) && (!document.signup.telephone.value==""))
                    {
                        document.getElementById("Telephone").innerHTML = "Enter the valid Phone No.";
                        x++;
                    }      
            else{ 
                document.getElementById("Telephone").innerHTML = "";
            }

            if((!document.signup.MobileNo.value.match(/^[0-9]+$/)) && (!document.signup.MobileNo.value==""))
                    {
                        document.getElementById("MOB").innerHTML = "Enter the valid Mobile No.";
                        x++;
                    }      
            else if((document.signup.MobileNo.value==""))
                    {
                        document.getElementById("MOB").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("MOB").innerHTML = "";
            }
           
            if((document.signup.PreferredContact.value==""))
                    {
                        document.getElementById("PC").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("PC").innerHTML = "";
            }

            if((!document.signup.EmergencyContactName.value.match(/^[A-Za-z]+$/)) && (!document.signup.EmergencyContactName.value==""))
                    {
                        document.getElementById("Ecn").innerHTML = "Enter the valid Name";
                        x++;
                    }
            else if((document.signup.EmergencyContactName.value==""))
                    {
                        document.getElementById("Ecn").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("Ecn").innerHTML = "";
            }

            if((!document.signup.EmergencyContactNo.value.match(/^[0-9]+$/)) && (!document.signup.EmergencyContactNo.value==""))
                    {
                        document.getElementById("ECno").innerHTML = "Enter the valid Mumber";
                        x++;
                    }
            else if((document.signup.EmergencyContactNo.value==""))
                    {
                        document.getElementById("ECno").innerHTML = "This field is required";
                        x++;
                    }
            else{ 
                document.getElementById("ECno").innerHTML = "";
            }
                    

            if(x==0)
                return true;
            else
                return false;
        }
      </script>


</head>
<body style="background-color: #787878">

  
  <form class="form" action="afterlogin.php" method="POST" name="signup" onsubmit="return check();">
    <div class="container">
        
        <div class="form-group">
                        <label for="aadharId"> Aadhar Id <span id = "required"> * </span> </label>
                        <span id="aadharId"> </span>
                        <input class="form-control" data-val="true"  placeholder="Enter Aadhar Id"  id="AadharId" maxlength="21" name="aadharId" value="<?php echo $aadhar?> " type="text" required>
                    </div>
        <div class= "form-group">
            <label id="Title"  > Title <span id = "required"> * </span> </label> 
            <span id="TITLE"></span>
                    <select class="title" name="title" required >
                        <option value="" >Please Select</option>
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                        <option value="miss">Miss</option>
                    </select>
        
        </div>
     
                <div class="form-group">
                    <label for="firstname"> First Name <span id = "required"> * </span> </label>
                    <span id="fName"> </span>
                    <input type="text" name="fname" placeholder="Enter First Name" maxlength="50"  value="<?php echo $fname?>" required>
                    <div></div>
                    <label for="middlename"> Middle Name(If applicable)  </label>
                    <span id="MName"> </span>
                    <input type="text" name="Mname" placeholder="Enter Middle Name"
                      maxlength="50" value="<?php echo $mname?>" >
                      <div></div>
                    <label for="lastname"> Last Name <span id = "required"> * </span> </label>
                    <span id="LName"> </span>
                    <input type="text" name="Lname" placeholder="Enter Last Name"   maxlength="50" value="<?php echo $lname?>" required>
                </div>

                <div class="form-group" >

                    <label for="Address_Postcode" class="block" > Postcode <span id = "required"> * </span> </label>
                          <span id="Post"> </span>  
                        <input  
                         maxlength="10" name="postcode" value="<?php echo $pcode?>" type="text" placeholder="Enter Postcode" required>
                </div>


                <div class="form-group">
                    <label for="Address_AddressLine1"> Address Line <span id = "required"> * </span> </label>
                    <span id="Address"> </span>
                    <input class="form-control" data-val="true"  id="Address_AddressLine1" maxlength="100" name="addressLine" value="<?php echo $ad1?>" type="text" placeholder="Address Line " required >
                    <div></div>
                    <label for="Address_AddressLine2"> City  <span id = "required"> * </span></label>
                    <span id="City"> </span> 
                    <input class="form-control" id="Address_AddressLine2" maxlength="50" name="city" value="<?php echo $city?>" type="text"  placeholder=" Enter City" required>
                    <div></div>
                    <label for="Address_AddressLine3"> Country  <span id = "required"> * </span></label>
                    <span id="Country"> </span>

                    <input class="form-control" id="Address_AddressLine3" maxlength="50" name="country" value="<?php echo $country?>" type="text"  placeholder="Enter Country" required>
                      </b>
                </div>
          
                    <div id="donate-options">
                        <strong class="req">Please select which organs and tissue you wish to donate:</strong>
                        <div class = "donate">
                            <div class="checkbox" >
                                <label>
                                    Kidney  
                                    
                                </label>

                                <input  id="DonateKidney" name="Donate[]" value="Kidney" type="checkbox">
                                <input name="DonateKidney" value="false" type="hidden">
                                
                            </div>

                            <div class="checkbox" >
                                <label>
                                    Heart   
                                    
                                </label>
                                <input  id="DonateHeart" name="Donate[]" value="Heart" type="checkbox">
                                <input name="DonateHeart" value="false" type="hidden">
                            </div>

                            <div class="checkbox" >
                                <label >
                                    Liver      
                                    
                                </label>
                                <input  id="DonateLiver" name="Donate[]" value="Liver" type="checkbox">
                                <input name="DonateLiver" value="false" type="hidden">
                            </div>

                            <div class="checkbox" >
                                <label >
                                    Corneas
                                    
                                </label>
                                <input  id="DonateCornea" name="Donate[]" value="Cornea" type="checkbox">
                                <input name="DonateCornea" value="false" type="hidden">
                            </div>

                            <div class="checkbox">
                                <label>
                                    Lungs  
                                    
                                </label>
                                <input  id="DonateLungs" name="Donate[]" value="Lungs" type="checkbox">
                                <input name="DonationWishes.DonateLungs" value="false" type="hidden">
                            </div>

                            <div class="checkbox">
                                <label>
                                    Pancreas
                                    
                                </label>
                                <input  id="DonatePancreas" name="Donate[]" value="Pancreas" type="checkbox">
                                <input name="DonatePancreas" value="false" type="hidden">
                            </div>

                            <div class="checkbox" >
                                <label >
                                    Tissue
                                    
                                </label>
                                <input id="DonateTissue" name="Donate[]" value="Tissue" type="checkbox">
                                <input name="DonationWishes.DonateTissue" value="false" type="hidden">
                            </div>
                        </div>
                    </div>
                     <div class="form-group dob">
                        <label for="DateOfBirth" class="block">
                            Date of birth
                        </label>
                        
                            <input type="Date" name="dob" placeholder="dd-mm-yy" class="manage" value="<?php echo $dob?>" required>
                            <span id = "required"> * </span>
                            <span id="DOB"> </span>
                    </div>

                    <div class="form-group">
                        <label for="EmailAddress">
                            Email <span id = "required"> * </span>
                        </label>
                        
                        <span id="Email"> </span>
                        <input class="form-control" data-val="true" id="EmailAddress" maxlength="50" name="email" value="<?php echo $email?>" type="text"  placeholder="Email:...xyz@..xyz.com" required>
                    </div>
                  


                    <div class="form-group">
                        <label for="TelephoneNo">
                            Phone
                        </label>
                        <span id="Telephone"> </span>
                        <input class="form-control"   id="TelephoneNo" maxlength="21" name="telephone" value="<?php echo $phone?>" type="text" >
                    </div>

                    <div class="form-group">
                        <label for="MobileNo">
                            Mobile <span id = "required"> * </span>
                        </label>
                        <span id="MOB"> </span>

                        <input class="form-control" data-val="true" id="MobileNo" maxlength="21" name="MobileNo" value="<?php echo $mobile?>" type="text" required>
                    </div>

                    <div class="form-group">
                        <label for="PreferredContact">
                            Preferred form of contact <span id = "required"> * </span>
                        </label>
                        <span id="PC"> </span>
                        <select class="select" id="PreferredContact" name="PreferredContact"><option value="">Please Select</option>
                            <option value="POST">Post</option>
                            <option value="Email">Email</option>
                            <option value="Telephone">Telephone</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Emergency Contact Name <span id = "required"> * </span></label>
                            <span id="Ecn"> </span>
                        <input type="text" name="EmergencyContactName" id="ECN" maxlength="30" class="required" value="<?php echo $ecn?>" required>
                    </div>

                    <div class="form-group">
                        <label>Emergency Contact No <span id = "required"> * </span></label>
                        <span id="ECno"></span>
                        <input type="text" name="EmergencyContactNo" id="kins_phone_no" value="<?php echo $ephone?>" size="40" maxlength="15" class="required" s required> 
                    </div>

                    <div class="form-group">
                    <label>Emergency Contact Address<span id = "required" >*</span></label>
                        <textarea name="emergencycontactaddress" id="emergencycontactaddress" maxlength="200" class="required"></textarea>
                        <input type="checkbox" name="EmergencyContactAddress" value="<?php echo $eadd?>"  onclick="return emergencycontact();" > <span style="font-size:12px; color:#000;"> (Person's Address and Emergency Contact's Address is same) </span>
                    </div>

                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <a href="index.php"><button type="button" onclick=" " class="cancelbtn">Cancel</button></a>
        <button type="submit"  class="signupbtn" onclick="check();" name="update">Update</button>
      </div>
    </div>
  </form>


</body>
</html>
