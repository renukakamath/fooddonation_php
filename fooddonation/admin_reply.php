<?php include 'adminheader.php';

if (isset($_POST['reply'])) {
	extract($_POST);
$q="update complaint set reply='$rep' where complaint_id='$cid'";
update($q);
alert('succesfully');
return redirect('admin_viewcomplaint.php');
}



?>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
        	<br><br><br><br>
<center>
	<h1>sent reply</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th><input type="text" required="" class="form-control" placeholder=" reply..." name="rep"></th>
			</tr>
			<tr>
				<th align="center" colspan="2"><input type="submit" name="reply" value="submit"  class="btn btn-success"></th>
			</tr>
		</table>
	</form>
</center>
</div></header></body>

<?php include 'footer.php' ?>