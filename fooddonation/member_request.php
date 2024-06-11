<?php include 'memberheader.php';
 $mid=$_SESSION['member_id'];
extract($_GET);
 
if (isset($_POST['request'])) {
	extract($_POST);

	$q="insert into mrequest values(null,'$mid','$supp','$food','$des','$date',curdate(),'pending')";
	insert($q);

	alert('sucessfully');
	return redirect('member_request.php');
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
				<th>supplier</th>
                  <td>
                  	<select name="supp" required="" class="form-control">
                  		<option>select</option>
                  		<?php 
                       $q="SELECT * FROM suppliers INNER JOIN  login USING (login_id) WHERE TYPE='suppliers'";
                       $res=select($q);

                       foreach ($res as $row) {?>
                       	<option value="<?php echo $row['supplier_id'] ?>"><?php echo $row['first_name'] ?></option>
                       <?php }



                  		 ?>
                  	</select>
                  </td>
			</tr>
			<tr>
				<th>food</th>
				<td><input type="text" required="" class="form-control"  name="food"></td>
			</tr>
			<tr>
				<th>description</th>
				<td><input type="text" required="" class="form-control"  name="des"></td>
			</tr>
			<tr>
				<th>date for food deliver</th>
				<td><input type="date" required=""  class="form-control"  name="date"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="request" value="submit" class="btn btn-success" ></td>
			</tr>
		</table>
	</form>
</center>
</div></header></body>
<?php include 'footer.php' ?>