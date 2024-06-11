<?php include 'supplierheader.php';

if (isset($_GET['did'])) {
	extract($_GET);

	$q="update mrequest set status='reject' where mrequest_id='$did'";
	update($q);

}
if (isset($_GET['uid'])) {
	extract($_GET);
$q1="update mrequest set status='accept' where mrequest_id='$uid' ";
      update($q1);

}



 ?>
 <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
        	<br><br><br><br>
<center>
<h1>view member request</h1>
<form class="table" style="width: 500px">
	<table>
		<tr>
			<th>member</th>
			<th>supplier</th>
			<th>food</th>
			<th>description</th>
			<th>date for food deliver</th>
			<th>date</th>
			<th>status</th>
		</tr>
		<?php 

$q="select * from mrequest inner join members using(member_id)inner join suppliers using(supplier_id)";
$res=select($q);
$sino=1;
foreach ($res as $row) {
	?>
	<tr>
		<td><?php echo $row['firstname'] ?></td>
		<td><?php echo $row['first_name'] ?></td>
		<td><?php echo $row['food'] ?></td>
		<td><?php echo $row['description'] ?></td>
		<td><?php echo $row['dateforfooddeliver'] ?></td>
		<td><?php echo $row['date'] ?></td>
		<?php 
         if ($row['status']=="pending") {?>
         		<td><a href="?did=<?php echo $row['mrequest_id'] ?>">reject</a></td>
		<td><a href="?uid=<?php echo $row['mrequest_id'] ?>">accept</a></td>
        <?php  }else{?>
       <td><?php echo $row['status'] ?></td><?php } ?>

		
		
	
	</tr>
<?php
}

		 ?>
	</table>
</form>
</center>
</div></header></body>
<?php include 'footer.php' ?>