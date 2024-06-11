<?php include 'supplierheader.php' ?>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
        	<br><br><br><br>
<center>
	<h1>view food</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>food</th>
			<th>description</th>
			<th>date for food deliver</th>
			<th>date</th>
			<th>status</th>
		</tr>
		<?php
 $q="select * from mrequest";
 $res=select($q);
 $sino=1;

 foreach ($res as $row) {
 	?>
 	
 	<tr>
 		<td><?php echo $sino++; ?></td>
 		<td><?php echo $row['food'] ?></td>
 		<td><?php echo $row['description'] ?></td>
 		<td><?php echo $row['dateforfooddeliver'] ?></td>
 		<td><?php echo $row['date'] ?></td>
 		<td><?php echo $row['status'] ?></td>
 	</tr>
 <?php
}




		?>
	</table>
</center>
</div></header></body>
<?php include 'footer.php' ?>