<?php

include('view/header.php');



?>

<script>




  
   



</script>





><body>
  

      <div class="topnav">
        <a href="reportUp.html">View Payments</a>
        <a href="Labl.html">Add Customer</a>
    
        <a href="Labl.html">Delete Customer</a>
        <input type="text" placeholder="Search customer.."autofocus="true" id="search-box" name="search" >
</div>


        </div>
         <?php

 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3 align="right" class="UsernameArea">Welcome - '.$_SESSION["username"].'</h3>';  
    

   

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "classicmodels";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT customerNumber, customerName, contactLastname FROM customers";
    $result = $conn->query($sql);
   

    
}

 

    
 else  
 {  
      header("location:pdo_login.php");  
 } 



?>
<h3> Custumers List </h3>

<table>
  <tr>
                <td>CustomerNumber</td>
                <td>CustomerName</td>
                <td>ContactLastname</td>
                
            </tr>

             <?php
               while ($row = $result->fetch_assoc()) {

                   echo "<tr>";
                   echo "<td >".$row['customerNumber']."</td>";
                   echo "<td>".$row['customerName']."</td>";
                   echo "<td>".$row['contactLastname']."</td>";
                 
                   echo "</tr>";
               }

            ?>

       
            </table>

        

        
    

  
   
    <style>

 
    tr:hover {background-color: #f5f5f5;
    }

    tr:nth-child(even) {background-color: #f2f2f2;
    }
    table {
  width: 100%;
}

th {
  height: 50px;
}
   
        .topnav {
  background-color: #333;
  overflow: hidden;
}

.topnav input[type=text] {
    border: 1px solid #ccc;
  }

  .topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}






      
    </style>

    </body>

</html>