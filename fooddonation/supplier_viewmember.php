<?php include 'supplierheader.php' ?>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
        	<br><br><br><br>
<center>
	<h1>view members</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>first name</th>
			<th>last name</th>
			<th>place</th>
			<th>phone</th>
			<th>email</th>
			<th>pincode</th>
		</tr>
		<?php 
   $q="select * from members";
   $res=select($q);
   $sino=1;
   foreach ($res as $row) {?>
   <tr>
   	<td><?php echo $sino++; ?></td>
   	<td><?php echo $row['firstname'] ?></td>
   	<td><?php echo $row['lastname'] ?></td>
   	<td><?php echo $row['place'] ?></td>
   	<td><?php echo $row['phone'] ?></td>
   	<td><?php echo $row['email'] ?></td>
   	<td><?php echo $row['pincode'] ?></td>
   	<td><a href="supplier_sentrequest.php?mid=<?php echo $row['member_id'] ?>">sent request</a></td>


   </tr>
<?php }

		 ?>
	</table>
</center>
</div></header></body>
<?php include 'footer.php' ?>