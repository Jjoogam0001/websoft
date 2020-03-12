<?php
$currentPage ='index';

include('view/header.php');

?>
</head>
<body>

<form method="POST">

  <input type="text"  placeholder="Customer Name"name="customerName"><br>
  <input type="text" placeholder="ContactLastname"name="contactLastName"><br>
  <input type="text" placeholder="ContactFirstname"name="contactFirstName"><br>
  <input type="text" placeholder="Phone Number"name="phone"><br>
  <input type="text"  placeholder="Address Line 1"name="addressLine1"><br>
  <input type="text" placeholder="AddressLine2"name="addressLine2"><br>
  <input type="text" placeholder="city"name="city"><br>
  <input type="text"  placeholder="State"name="state"><br>
  <input type="text" placeholder="Postal Code"name="postalCode"><br>
  <input type="text" placeholder="Country"name="country"><br>
  <input type="text"  placeholder="SalesRepEmployeeNumber"name="salesRepEmployeeNumber"><br>
  <input type="text" placeholder="CreditLimit"name="creditLimit"><br>
  <button type="submit" id="submit"name="save">Submit</button>

</form>

<?php  
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "classicmodels";

    $customername = $_POST['customerName'];
    $contactLastname= $_POST['contactLastName'];
    $contactFirstname = $_POST['contactFirstName'];
    $phone= $_POST['phone'];
    $addressLine1 = $_POST['addressLine1'];
    $addressline2= $_POST['addressLine2'];
    $city = $_POST['city'];
    $state= $_POST['state'];
    $postalcode = $_POST['postalCode'];
    $country = $_POST['country'];
    $salesemployeeNumber= $_POST['salesRepEmployeeNumber'];
    $creditLimit= $_POST['creditLimit'];
    



    $conn = new mysqli($servername, $username, $password, $dbname);
  

     echo "Connected successfully";

     if(isset($_POST['save']))
{	 

     $sql = "INSERT INTO customers (customerName, contactLastName,contactFirstName,phone,addressLine1,addressLine2,city,state,postalCode,country,salesRepEmployeeNumber,creditLimit) VALUES ('$customername','$contactLastname','$contactFirstname','$phone','$addressLine1','$addressline2','$city','$state','$postalcode','$country','$salesemployeeNumber','$creditLimit')";

     if (mysqli_query($conn, $sql)) {
      echo "New record created successfully !";
     } else {
      echo "Error: " . $sql . "
  " . mysqli_error($conn);
     }
     mysqli_close($conn);
}





 

 
 ?>  







<style>
form{
  margin:  auto;
  width: 500px;
  /* Form outline */
  padding: 1em;
  border: 5px solid #CCC;
  border-radius: 1em;

}

button{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;

}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>




</body>
<footer>

<?php

include('view/footer.php');

?>
</footer>



</html>