<?php include 'adminheader.php';

if (isset($_POST['member'])) {
	extract($_POST);

	$q="insert into login values(null,'$uname','$pwd','members')";
	$id=insert($q);

	$q1="insert into members values(null,'$id','$fname','$lname','$place','$phone','$email','$pin')";
	insert($q1);
   alert('insertion successfully');
   return redirect('admin_managemember.php');

}
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from members where member_id='$did'";
	delete($q);
	 alert('deletion successfully');
   return redirect('admin_managemember.php');

}
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from members where member_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST); 

	$q="update members set firstname='$fname',lastname='$lname',place='$place',phone='$phone',email='$email',pincode='$pin' where member_id='$uid'";
	update($q);
alert('updation successfully');
   return redirect('admin_managemember.php');
}



 ?>
 </head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
        	<br><br><br><br><br>
<center>
	<h1>manage members</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px">
			<tr>
				
				<th><input type="text" class="form-control" required="" placeholder="first name"  name="fname" value="<?php echo $res[0]['firstname'] ?>"></th>
				
			</tr>
			<tr>
				<th><input type="text" required=""  class="form-control" placeholder="last name" name="lname" value="<?php echo $res[0]['lastname'] ?>"></th>
			</tr>
			<tr>
				<th><input type="text" required="" class="form-control" placeholder="place" name="place" value="<?php echo $res[0]['place'] ?>"></th>
			</tr>
			<tr>
				<th><input type="numbers" pattern="[0-9]{10}" class="form-control" placeholder="phone number" name="phone" value="<?php echo $res[0]['phone'] ?>"></th>
			</tr>
			<tr>
				<th><input type="email" required="" class="form-control" placeholder="email" name="email" value="<?php echo $res[0]['email'] ?>"></th>
			</tr>
			<tr>
				<th><input type="text" required="" pattern="[0-9]{6}" class="form-control" placeholder="pincode" name="pin" value="<?php echo $res[0]['pincode'] ?>"></th>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px">
			<tr>
				
				<th><input type="text" required=""  class="form-control" placeholder="first name" name="fname"></th>
				
			</tr>
			<tr>
				<th><input type="text"  required="" class="form-control" placeholder="last name" name="lname"></th>
			</tr>
			<tr>
				<th><input type="text" required=""  class="form-control" placeholder="place" name="place"></th>
			</tr>
			<tr>
				<th><input type="numbers" required="" pattern="[0-9]{10}" class="form-control" placeholder="phone number" name="phone"></th>
			</tr>
			<tr>
				<th><input type="email" required=""  class="form-control" placeholder="email" name="email"></th>
			</tr>
			<tr>
				<th><input type="text" required="" pattern="[0-9]{6}" class="form-control" placeholder="pincode" name="pin"></th>
			</tr>
			<tr>
			<th><input type="text" required=""  class="form-control" placeholder="user name"  name="uname"></th>
		</tr>
		<tr>
			<th><input type="password" required="" class="form-control" placeholder="password" name="pwd"></th>
		</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="member" value="submit"  class="btn btn-success"></td>
			</tr>
		</table>
	</form>
<?php } ?>
</center>
</div></header></body>
<center>
	<h1>view members</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>first name</th>
				<th>last name</th>
				<th>place</th>
				<th>phone no:</th>
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
    		<td><a href="?did=<?php echo $row['member_id'] ?>">delete</a></td>
    		<td><a href="?uid=<?php echo $row['member_id'] ?>">update</a></td>
    	</tr>
    <?php }




			 ?>
		</table>
	</form>
</center>
<?php include 'footer.php' ?>
