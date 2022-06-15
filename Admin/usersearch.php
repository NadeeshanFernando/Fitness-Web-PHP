<?php
session_start();
error_reporting(0);

include ('../Connection/connection.php');
	$output = '';
$deltid = $_GET['id'];
$type = $_GET['type'];
if($type == 'delete'){
  echo $deltid;
}
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($con, $_POST["query"]);
	$query = "
	SELECT * FROM users 
	WHERE fname LIKE '%".$search."%'
	or lname LIKE '%".$search."%'
	OR email LIKE '%".$search."%' 
	OR telephone LIKE '%".$search."%' 
	OR date LIKE '%".$search."%' 
	and usertype='Customer'
	
	";
}
else
{
	$query = "
	SELECT * FROM  users WHERE usertype='Customer' order BY id";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
						<th>Id</th>

							<th>Name</th>
							<th>Email</th>
							<th>Telephone</th>
							<th>Date</th>
							<th>Current Status</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$result1= '';
		$sts = $row["status"];
		if($sts == 1){
		
		$output .= '
			<tr>
			<td>'.$row["id"].'</td>


				<td>'.$row["fname"].' '.$row["lname"] .'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["telephone"].'</td>
				<td>'.$row["date"].'</td>


							

					<td>
					<a href="./users.php?type=deactivate&id='.$row["id"].'"><button type="button" class="btn btn-secondary">Deactivate</button></a>    

					<a href="./users.php?type=delete&id='.$row["id"].'"><button type="button" class="btn btn-danger">Delete</button></a>    
					</td>  

							
		</tr>
		';
		}	
		else {
			$output .= '
			<tr>
			<td>'.$row["id"].'</td>
				<td>'.$row["fname"].$row["lname"] .'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["telephone"].'</td>
				<td>'.$row["date"].'</td>


							

					<td>
					<a href="./users.php?type=activate&id='.$row["id"].'"><button type="button" class="btn btn-success">Activate</button></a>    

					<a href="./users.php?type=delete&id='.$row["id"].'"><button type="button" class="btn btn-danger">Delete</button></a>    
					</td>  

							
		</tr>
		';
		}
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
