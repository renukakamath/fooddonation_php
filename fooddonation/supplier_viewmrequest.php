<?php include 'supplierheader.php';
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="update mrequest set status='pick food' where mrequest_id='$uid'";
	update($q);
}


 ?>
 <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
          <br><br><br><br>
<center>
	<h1>view  member request</h1>
	<form class="table" style="width: 500px">
		<table>
			<tr>
				<th>sino</th>
				<th>Member</th>
				<th>Supplier</th>
				<th>food</th>
				<th>Description</th>
				<th>Datefordeliver</th>
				<th>Status</th>
				<?php 
   $q="select * from mrequest inner join members using (member_id) inner join Suppliers using (Supplier_id)";
   $res=select($q);
   $sino=1;

   foreach ($res as $row) {
   	?>
   	<tr>
   		<td><?php echo $sino++; ?></td>
   		<td><?php echo $row['firstname'] ?></td>
   		<td><?php echo $row['first_name'] ?></td>
   		<td><?php echo $row['food'] ?></td>
   		<td><?php echo $row['description'] ?></td>
   		<td><?php echo $row['dateforfooddeliver'] ?></td>
       <?php 
          if ($row['status']=='accept') {?>
	     <td><a href="?uid=<?php echo $row['mrequest_id'] ?>">accept</a></td>
         <?php 
     }else
     {


           ?>
   		<td><?php echo $row['status'] ?></td>
   		
   	</tr>
   

  <?php 
}

}

				 ?>
			</tr>
		</table>
	</form>
</center>
</div></header></body>
<?php include 'footer.php' ?>