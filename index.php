<?php

	$con = mysqli_connect('localhost', 'root', '','user_point') ;

	$alldata = mysqli_fetch_all(mysqli_query($con,"SELECT name,point,MONTHNAME(date) as date FROM user_point"),MYSQLI_ASSOC);

	$name = array_column($alldata,'name');

	// print_r($name);
	$info=[];
	foreach ($name as $iname) {
		//$info[$iname];
		foreach($alldata as $key=>$value){
			if($iname==$value['name']){
				$info[$iname][$value['date']]=$value['point'];
			}
		}	
	}
		// echo '<pre>';
		 //print_r($info);
		 //exit;
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>Name</th>
		<th>jan</th>
		<th>fab</th>
		<th>mar</th>
		<th>apr</th>
		<th>may</th>
		<th>jun</th>
		<th>jul</th>
		<th>aug</th>
		<th>sep</th>
		<th>oct</th>
		<th>nov</th>
		<th>dec</th>
		<th>Total</th>
	</tr>

	<?php
	
	foreach ($info as $key=>$data) {
	$tot=0;	
	?>
	<tr>
		<td><?php echo $key;?></td>
		<td>
		<?php 
		if(isset($data['January'])){
			echo $data['January'];
			$tot+=$data['January'];
		}
		?>
		</td>
		<td>
		<?php 
			if(isset($data['February'])){
				echo $data['February'];
				$tot+=$data['February'];
			}
			?>
		</td>
		<td>
		<?php 
			if(isset($data['March'])){
				echo $data['March'];
				$tot+=$data['March'];
			}
			?>
		</td>
		<td>
		<?php 
			if(isset($data['April'])){
				echo $data['April'];
				$tot+=$data['April'];
			}
			?>
		</td>
		<td>
		<?php 
			if(isset($data['May'])){
				echo $data['May'];
				$tot+=$data['May'];
			}
			?>
		</td>
		<td>
		<?php 
			if(isset($data['June'])){
				echo $data['June'];
				$tot+=$data['June'];
			}
			?>
		</td>
		<td>
		<?php 
			if(isset($data['July'])){
				echo $data['July'];
				$tot+=$data['July'];
			}
			?>
		</td>
		<td>
		<?php 
			if(isset($data['Augest'])){
				echo $data['Augest'];
				$tot+=$data['Augest'];
			}
			?>
		</td>
		<td>
		<?php 
			if(isset($data['September'])){
				echo $data['September'];
				$tot+=$data['September'];
			}
			?>
		</td>
		<td>
		<?php 
			if(isset($data['October'])){
				echo $data['October'];
				$tot+=$data['October'];
			}
			?>
		</td>
		<td>
		<?php 
			if(isset($data['November'])){
				echo $data['November'];
				$tot+=$data['November'];
			}
			?>
		</td>
		<td>
		<?php 
			if(isset($data['December'])){
				echo $data['December'];
				$tot+=$data['December'];
			}
			?>
		</td>
		<td><?php echo $tot;?></td>

	</tr>
	<?php } ?>
	
</table>
