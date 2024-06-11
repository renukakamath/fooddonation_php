<?php include 'publicheader.php';

if (isset($_POST['login'])) {
     extract($_POST);

     $q="select * from login where username='$uname' and password='$pwd'";
     $res=select($q);

  if (sizeof($res>0) {
    $_SESSION['logid']=$res[0]['login_id'];
    $logid=$_SESSION['logid'];
  	if ($res[0]['type']=="admin") {
  		alert('sucsessfully admin login');
  		return redirect('admin_home.php');
  	}elseif ($res[0]['type']=="suppliers") {
      $q1="select * from suppliers where login_id='$logid'";
    $r=select($q1);
    if (sizeof($r)>0)
     {
      $_SESSION['supplier_id']=$r[0]['supplier_id'];
      $sid=$_SESSION['supplier_id'];
  		alert('sucsessfully supplier login');
  		return redirect('supplier_home.php');}
  	}elseif ($res[0]['type']=="members") {
  		$q1="select * from members where login_id='$logid'";
    $r=select($q1);
    if (sizeof($r)>0)
     {
      $_SESSION['member_id']=$r[0]['member_id'];
      $mid=$_SESSION['member_id'];


      alert('sucessfully');
  		return redirect('member_home.php');
  	}
  }

}

else{
  alert('invalid password and username');


	}
}




?>

    
 </head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
          <center>
             <h1>login</h1>
<form method="post">
  <table class="table" style="width: 500px">
    <tr>
      <th><input type="text" required="" class="form-control" placeholder="user name"  name="uname"></th>
    </tr>
    <tr>
      <th><input type="password" required=""  class="form-control" placeholder="password" name="pwd"></th>
    </tr>
    <tr>
      <td align="center" colspan="2"><input type="submit" name="login" value="submit"  class="btn btn-success"></td>
    </tr>
  </table>
</form>
</center>       
        </div>
    </header>         



<?php include 'footer.php' ?>