
<?php

//fetch_images.php

include('dbconfig.php');

if(isset($_POST["user_id"]))
{
		
		$query = "SELECT * FROM tbl_images WHERE userid=$_POST[user_id]";

		$statement = $connect->prepare($query);

		$output = '<div class="row">';

		if($statement->execute())
		{
		 $result = $statement->fetchAll();

		 foreach($result as $row)
		 {
		  $output .= '
		  <div class="col-md-2" style="margin-bottom:16px;">
		   <img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" class="img-thumbnail" />
		  </div>
		  ';
		 }
		}

		$output .= '</div>';

		echo $output;
	}

?>
