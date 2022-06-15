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
	SELECT * FROM shops 
	WHERE name LIKE '%".$search."%'
	OR email LIKE '%".$search."%' 
	OR telephone LIKE '%".$search."%' 
    OR address LIKE '%".$search."%' 
	OR date LIKE '%".$search."%' 
	
	";
}
else
{
	$query = "
	SELECT * FROM  shops   order BY id";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
					    	<th>Id</th>
							<th>Name</th>
                            <th>Logo</th>
							<th>Email</th>
							<th>Telephone</th>
							<th>Address</th>
							<th>Description</th>
							<th>Date</th>
							<th>Current Action</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$result1= '';
		$sts = $row["status"];
		if($sts == 1){
		
		$output .= '
			<tr>
			<td>'.$row["id"].'</td>
				<td>'.$row["name"].'</td>
				<td><img src="../Shop/assets1/images/'.$row["image"].'" width = 90px></td>
				<td>'.$row["email"].'</td>
                <td>'.$row["telephone"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["description"].'</td>
				<td>'.$row["date"].'</td>


							

					<td>
					<a href="./shops.php?type=deactivate&id='.$row["id"].'"><button type="button" class="btn btn-secondary">Deactivate</button></a>    

					<a href="./shops.php?type=delete&id='.$row["id"].'"><button type="button" class="btn btn-danger">Delete</button></a>    
					</td>  

							
		</tr>
		';
		}	
		else {
			$output .= '
            <tr>
			<td>'.$row["id"].'</td>
				<td>'.$row["name"].'</td>
				<td><img src="../Shop/assets1/images/'.$row["image"].'" width = 150px></td>
				<td>'.$row["email"].'</td>
                <td>'.$row["telephone"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["description"].'</td>
				<td>'.$row["date"].'</td>


							

					<td>
					<a href="./shops.php?type=activate&id='.$row["id"].'"><button type="button" class="btn btn-success">Activate</button></a>    

					<a href="./shops.php?type=delete&id='.$row["id"].'"><button type="button" class="btn btn-danger">Delete</button></a>    
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
