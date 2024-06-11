<?php include 'publicheader.php';

if (isset($_POST['registration'])) {
	extract($_POST);

	$q="insert into login values(null,'$uname','$pwd','pending')";
	$id=insert($q);
    $q1="insert into suppliers values(null,'$id','$fname','$lname','$place','$phone','$email','$pin','$lino')";
	insert($q1);
	alert('sucessfully');
	return redirect('donation_registration.php');
}






 ?>
   
 </head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
        	<br><br><br><br><br><br><br>
          <center>
 	 <h1>registration</h1>
	<form method="post">
		<table class="table" style="width: 500px">
			<tr>
				<th><input type="text" required="" class="form-control" placeholder="first name" name="fname"></th>
			</tr>
			<tr>
				<th><input type="text" required="" class="form-control" placeholder="last name" name="lname"></th>
			</tr>
			<tr>
				<th><input type="text" required="" class="form-control" placeholder="place" name="place"></th>
			</tr>
			<tr>
				<th><input type="number" required="" pattern="[0-9]{10}" class="form-control" placeholder="phone number"  name="phone"></th>
			</tr>
			<tr>
				<th><input type="email" required="" class="form-control" placeholder="email" name="email"></th>
			</tr>
			<tr>
				<th><input type="number" required=""  required="" pattern="[0-9]{6}" class="form-control" placeholder="pincode" name="pin"></th>
			</tr>
			<tr>
				<th><input type="number" required=""   class="form-control" placeholder="license number" name="lino"></th>
			</tr>
			<tr>
			<th><input type="text" required=""  class="form-control" placeholder="user name"  name="uname"></th>
		</tr>
		<tr>
			<th><input type="password" required="" class="form-control" placeholder="password" name="pwd"></th>
		</tr>

			<tr>
				<td align="center" colspan="2"><input type="submit" name="registration"  class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	</form>
</center>
     </div>
    </header>   

<?php include 'footer.php' ?>