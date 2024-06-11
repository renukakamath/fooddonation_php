<?php include 'adminheader.php';
extract($_GET);
if (isset($_GET['did'])) {
	extract($_GET);

$q="update login set type='block' where login_id='$did'";
update($q);
alert('successfully ');
return redirect('admin_viewsuppliers.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);
	 $q1="update login set  type='suppliers' where login_id='$uid'";
	update($q1);
	
alert('successfully');
return redirect('admin_viewsuppliers.php');

}



 ?>
 <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <br><br><br><br>
<center>
	<h1>view suppliers</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>First name</th>
	            <th>Last name</th>
	            <th>Place</th>
	            <th>Phone</th>
	            <th>Email</th>
                <th>Pincode</th>
	            <th>License_Number</th>
	        </tr>
	        <?php 
    $q="select * from suppliers inner join login using(login_id)";
    $res=select($q);
    $sino=1;
    foreach ($res as $row) {
    	?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    	   <td><?php echo $row['first_name'] ?></td>
    		<td><?php echo $row['last_name'] ?></td>
    		<td><?php echo $row['place'] ?></td>
    		<td><?php echo $row['phone'] ?></td>
    		<td><?php echo $row['email'] ?></td>
    		<td><?php echo $row['pincode'] ?></td>
    		<td><?php echo $row['licensenum'] ?></td>
    		<?php 

            if ($row['type']=="pending") {

    		 ?>
    		<td><a href="?did=<?php echo $row['supplier_id'] ?>">reject</a></td>
    		<td><a href="?uid=<?php echo $row['login_id'] ?>">accept</a></td>
    	<?php } ?>
    	</tr>
    <?php }


	         ?>
		</table>
	</form>
</center>
</div></header></body>
<?php include 'footer.php' ?>