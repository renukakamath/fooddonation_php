<?php include 'adminheader.php' ?>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
        	<br><br><br><br>
<center>
	<h1>view supplier request</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
			<th>sino:</th>
			<th>member</th>
			<th>supplier</th>
			<th>description</th>
			<th>date of deliver</th>
			
			<th>status</th>
			</tr>
			<?php 
   $q="select * from srequest inner join members using(member_id) inner join suppliers using(supplier_id)";
   $res=select($q);
   $sino=1;

foreach ($res as $row) {?>
	<tr>
		<td><?php echo $sino++; ?></td>
		<td><?php echo $row['firstname'] ?></td>
		<td><?php echo $row['first_name'] ?></td>
		<td><?php echo $row['description'] ?></td>
		<td><?php echo $row['datefordeliver'] ?></td>
		<td><?php echo $row['status'] ?></td>
		
	</tr>
<?php }

			 ?>

		</table>
	</form>
</center>
</div></header></body>
<?php include 'footer.php' ?>