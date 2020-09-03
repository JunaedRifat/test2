<!DOCTYPE html>
  <html>

  <title>RegistrationPageDesign</title>


<p  style="color:red"> <b>Donor Information.</b> </p>


<form method="post" action="">



<table >
 
<tr>
<td>First Name: </td>
<td> <input type="text" name="firstname"/> <td>
</tr>


<tr>
<td>Last Name: </td>
<td> <input type="text" name="lastname"/> <td>
</tr>


<tr>
<td>Company: </td>
<td> <input type="text" name="company"/> <td>
</tr>

<tr>
<td>Address 1: </td>
<td> <input type="text" name="address1"/> <td>
</tr>

<tr>
<td>Address 2: </td>
<td> <input type="text" name="address2"/> <td>
</tr>

<tr>
<td>City: </td>
<td> <input type="text" name="city"/> <td>
</tr>


<tr>
          <td>State: </td>
          <td>
            <select name="u_state" required>
              <option value="" disabled selected>Please select from the following...</option>
              <option value="california">California</option>
              <option value="texas">Texas</option>
              <option value="florida">Florida</option>
            </select>
          </td>
        </tr>







<tr>
<td>Zipcode: </td>
<td> <input type="text" name="address1"/> <td>
</tr>



<tr>
          <td>Country: </td>
          <td>
            <select name="u_country" required>
              <option value="" disabled selected>Please select from the following...</option>
              <option value="usa">USA</option>
              <option value="canada">Canada</option>
              <option value="russua">Russia</option>
            </select>
          </td>
        </tr>




<tr>
<td>Phone: </td>
<td> <input type="value" name="phone"/> <td>
</tr>


<tr>
<td>Fax: </td>
<td> <input type="text" name="fax"/> <td>
</tr>

<tr>
<td>Email: </td>
<td> <input type="email" name="email"/> <td>
</tr>

<tr>
          <td>Donation Ammount: </td>
          <td>
           <input type="radio" name="u_donation" value="none" checked required> none
		   <input type="radio" name="u_donation" value="$50" checked required> $50
            <input type="radio" name="u_donation" value="$75" required> $75
            <input type="radio" name="u_donation" value="$100" required> $100
			<input type="radio" name="u_donation" value="$250" checked required> $250
			<input type="radio" name="u_donation" value="other" checked required> Other
          </td>
        </tr>


   
	<tr>
          <td>I would like to make this donation </td>
          <td>
           <input type="radio" name="u_donate" value="to_honor" checked required> To honor <br> 
		   <input type="radio" name="u_donate" value="in_memory_of" checked required> In Memory of
            
          </td>
        </tr>
  
    <tr>
     <td>Name: </td>
     <td> <input type="text" name="name"/> <td>
     </tr>

  <tr>
     <td>Acknowledge Donation to: </td>
     <td> <input type="text" name="acknowledgedonationto"/> <td>
     </tr>


<tr>
<td>Address : </td>
<td> <input type="text" name="address"/> <td>
</tr>

<tr>
<td>City: </td>
<td> <input type="text" name="city"/> <td>
</tr>


<tr>
          <td>State: </td>
          <td>
            <select name="u_state" required>
              <option value="" disabled selected>Please select from the following...</option>
              <option value="california">California</option>
              <option value="texas">Texas</option>
              <option value="florida">Florida</option>
            </select>
          </td>
        </tr>

<tr>
<td>Zip: </td>
<td> <input type="value" name="address2"/> <td>
</tr>


 <tr>
     <td>Name: </td>
     <td> <input type="text" name="name"/> <td>
     </tr>



 <tr>
     <td>Comment: </td>
     <td> <textarea name="comment" rows="5"  cols="20"/> </textarea>
	 <td>
     </tr>



      </tr>
        <tr align="right">
          <td colspan="2"><input type="submit" name="submit" value="submit"></td>
		  
        </tr>












</table >
</form>

<?php 
   if($_SERVER[REQUEST_METHOD]=="POST"){
		$firstname      =validate ($_POST['firstname']);
		$lastname     =validate($_POST["lastname"]);
       $company   =validate($_POST["company"]);
	   $address1    =validate($_POST["address1"]); 	
        $address2    =validate($_POST["address2"]);
         $city    =validate($_POST["city"]);  

        if($_SERVER['REQUEST_METHOD'] == "POST"){
 
 if(empty($_POST['state'])){
    $gError = "state cannot be empty!";
  }
  else{
    $state_req = $_POST['state'];
  }
		 

		echo "First Name: ".$firstname. "<br/>"
	    echo "lastname: ".$lastname. "<br/>"
	    echo "company:   ".$company. "<br/>"
	    echo "address1:    ".$address1. "<br/>"
		echo "address2:    ".$address2. "<br/>"
		echo "city:    ".city. "<br/>"
	    echo "state:   ".stat."<br/>"
   }
	
	
   }
	function validate($data){
	$data = trim($data);
	$data =stripcslashes($data);
	$data =htmlspecialchars($data);
	return $data;
		
	}
	

	
	
	?>




</html>



