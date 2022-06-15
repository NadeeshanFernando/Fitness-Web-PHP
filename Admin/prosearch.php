<?php
session_start();
       error_reporting(0);

include ('../Connection/connection.php');
	$output = '';
$deltid = $_GET['fid'];
$type = $_GET['type'];
if($type == 'delete'){
  echo $deltid;
}
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($con, $_POST["query"]);
	$query = "
	SELECT * FROM products 
	WHERE name LIKE '%".$search."%'
	OR description LIKE '%".$search."%' 
	OR price LIKE '%".$search."%' 
    OR shopName LIKE '%".$search."%' 
	OR qty LIKE '%".$search."%' 
	
	";
}
else
{
	$query = "
	SELECT * FROM  products   order BY fid";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
					    	<th>Id</th>
							<th>Product</th>
                            <th>Shop</th>
                            <th>Image</th>
							<th>Description</th>
							<th>Price</th>
                            <th>Qty</th>
							<th>Current Action</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$result1= '';
		$sts = $row["status"];
		if($sts == 1){
		
		$output .= '
			<tr>
			<td>'.$row["fid"].'</td>
				<td>'.$row["name"].'</td>
                <td>'.$row["shopName"].'</td>
				<td><img src="../Shop/assets1/productItem/'.$row["image"].'" width = 90px></td>
				<td>'.$row["description"].'</td>
				<td>'.$row["price"].'</td>
                <td>'.$row["qty"].'</td>


							

					<td>
					<a href="./products.php?type=deactivate&id='.$row["id"].'"><button type="button" class="btn btn-secondary">Deactivate</button></a>    

					<a href="./products.php?type=delete&id='.$row["id"].'"><button type="button" class="btn btn-danger">Delete</button></a>    
					</td>  

							
		</tr>
		';
		}	
		else {
			$output .= '
            <tr>
			<td>'.$row["fid"].'</td>
            <td>'.$row["name"].'</td>
            <td>'.$row["shopName"].'</td>
            <td><img src="../Shop/assets1/productItem/'.$row["image"].'" width = 90px></td>
            <td>'.$row["description"].'</td>
            <td>'.$row["price"].'</td>
            <td>'.$row["qty"].'</td>


							

					<td>
					<a href="./products.php?type=activate&id='.$row["id"].'"><button type="button" class="btn btn-success">Activate</button></a>    

					<a href="./products.php?type=delete&id='.$row["id"].'"><button type="button" class="btn btn-danger">Delete</button></a>    
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
