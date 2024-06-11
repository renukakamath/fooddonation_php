<?php include 'supplierheader.php';
extract($_POST);
$lid=$_SESSION['logid'];
if (isset($_POST['complain'])) {
	extract($_POST);

	$q="insert into complaint values(null,'$lid','supplier','$comp','pending',curdate())";
	insert($q);

	alert('successfully');
	return redirect('supplier_sentcomplaint.php');
}




 ?>
 <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
        	<br><br><br><br>
<center>
	<h1>sent complaint</h1>
	<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th><input type="text" required="" class="form-control" placeholder="complaint" name="comp"></th>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="complain" value="submit"  class="btn btn-success"></td>
		</tr>
	</table>
	</form>
</center>
<center>
	<h1>view reply</h1>
	<table>
		<tr>
			<th>sino</th>
			<th>name</th>
			<th>type</th>
			<th>complaint</th>
			<th>date</th>
			<th>reply</th>
		</tr>
		<?php 
  $q="select * from complaint inner join login using(login_id)";
    $res=select($q);
    $sino=1;
    foreach ($res as $row) {
    	?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><?php echo $row['username'] ?></td>
    		<td><?php echo $row['sendedby'] ?></td>
    		<td><?php echo $row['complint'] ?></td>
    		<td><?php echo $row['date'] ?></td>
    		<td><?php echo $row['reply'] ?></td>
    	</tr>
   <?php
    }


		 ?>
	</table>
</center>
</div></header></body>
<?php include 'footer.php' ?>