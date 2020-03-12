 <?php  
 session_start();  
 $host = "127.0.0.1";  
 $username = "root";  
 $password = "";  
 $database = "classicmodels";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '';  
           }  
           else  
           {  
                $query = "SELECT * FROM admin WHERE Username = :username AND Password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     echo "Successfully Logged in!";
                     header("location:login_success.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> Login Page</title>  
      </head>  
      <body>  
           <br />  
           <div class="login">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h3 >CLASSIC-MOTORS ADMIN LOOKUP</h3><br />  
               <h2> Sign in as an admin</h2>
                <form method="post">  
                     
                     <input type="text" name="username" class="form-control" placeholder="Username" />  
                     <br />  
                     
                     <input type="password" name="password" class="form-control" placeholder="Password"/>  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  
           </div>  
           <br /> 


          <style>
              body {
                  background-color: darkslategrey;
              }

              h3 {
                  font-family: 'Bauhaus 93';
                  text-align: center;
                  color: antiquewhite;
              }

              h2 {
                  font-family: 'Brush Script MT';
                  text-align: center;
                  color: antiquewhite;
                  font-size: 35Px;
              }
              .login {
                  width: 400px;
                  background-color: rgba(0, 0, 0, 0.3);
                  box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
                  margin: 100px auto;
              }
                  .login h1 {
                      text-align: center;
                      color: #5b6574;
                      font-size: 24px;
                      padding: 20px 0 20px 0;
                      border-bottom: 1px solid rgba(0, 0, 0, 0.3);
                  }
                   .login form {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                padding-top: 20px;
            }
                .login form label {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 50px;
                    height: 50px;
                    background-color: darkslategrey;
                    color: #5b6574;
                }
                .login form input[type="password"], .login form input[type="text"] {
                    width: 310px;
                    height: 50px;
                    border: 1px solid antiquewhite;
                    margin-bottom: 20px;
                    padding: 0 15px;
                }

                .login form input[type="submit"] {
                    width: 100%;
                    padding: 15px;
                    margin-top: 20px;
                    background-color: darkslategrey;
                    border: 0;
                    cursor: pointer;
                    font-weight: bold;
                    color: antiquewhite;
                    transition: background-color 0.2s;
                }
                    .login form input[type="submit"]:hover {
                        background-color: #000000;
                        transition: background-color 0.2s;
                    }

             
            
              

             
          </style>
          <footer>
          <?php

           include('view/footer.php');

               ?>
          </footer>


      </body>  

 </html> 