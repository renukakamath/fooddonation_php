<?php include 'supplierheader.php';
  $sid=$_SESSION['supplier_id'];
 extract($_GET);
if (isset($_POST['request'])) {
	extract($_POST);

	$q="insert into srequest values(null,'$mid','$sid','$des','$date','pending')";
	insert($q);

	alert('sucessfully');
	return redirect('supplier_sentrequest.php');
}




 ?>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
        	<br><br><br><br>
<center>
	<h1>sent request</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th>description</th>
				<td><input type="text" required="" class="form-control" name="des"></td>
			</tr>
			<tr>
				<th>date for food deliver</th>
				<td><input type="date" required=""  class="form-control" name="date"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="request"  class="btn btn-success" value="submit" ></td>
			</tr>
		</table>
	</form>
</center>
</div></header></body>
<?php include 'footer.php' ?>