<?php include 'adminheader.php' ?>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
          <br><br><br><br>
<center>
	<h1>view complaint</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>name</th>
				<th>type</th>
				<th>complaint</th>
				<th>date</th>
				<th>reply</th>
			</tr>
			<?php 

     $q="select * from complaint inner join login using (login_id)";
     $res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
     	
              <tr>
              	<td><?php echo $sino++; ?></td>
              	<td><?php echo $row['username'] ?></td>
              	<td><?php echo $row['type'] ?></td>
              	<td><?php echo $row['complint'] ?></td>
              	<td><?php echo $row['date'] ?></td>
             <?php 
              if ($row['reply']=="pending") {?>
              	 
              	 <td><a href="admin_reply.php?cid=<?php echo $row['complaint_id'] ?>">send reply</a></td>

              <?php }
               else{



              ?>
              	<td><?php echo $row['reply'] ?></td>
              </tr>
           <?php
             }
          }

			 ?>
		</table>
	</form>
</center>
</div></header></body>
<?php include 'footer.php' ?>

