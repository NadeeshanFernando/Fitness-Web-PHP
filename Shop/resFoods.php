<?php
   error_reporting(0);
   session_start();
    include '../Connection/connection.php';
    $id = $_SESSION['id'];

    if ($id == 0) {
        header('location: ../login/login.php');
    } 
        if($id!=1) {
        $sql="select * from products WHERE rid='$id'";
        $res=mysqli_query($con,$sql);
         }
         if(isset($_POST['delete'])){
            $delete = $_POST['id'];
            

        }
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./assets/style.css" />

  <!-- Bootstrap CSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <title>Sign Up - Restaurant</title>
</head>

<body>
<?php 
							// $i=1;
							while($row=mysqli_fetch_assoc($res)){?>
                	      <form method="POST">

                              <input type="hidden" name="id" value="<?php echo $row['id']?>" >
							  <?php echo $row['name']?>
							
							   <?php echo $row['description']?></td>
							   <?php echo $row['price']?></td>
                               
                                
                                <td>
                            <img src="./assets/foodItem/<?php echo $row['image']; ?>" width="100px" height="100px"></br>
                            
                                    <input type="submit" name="delete" value="delete" >

                                </form>
                        </td>

                        
								<?php
                                	 } ?>

                                    </body>
                                    </html>   