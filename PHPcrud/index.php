<?php
require_once ("config.php");
include 'inc/header.php';
?>


<?php
    if (isset($_REQUEST['action'])){
    	if ($_REQUEST['action'] == "created") {
    		 echo "<span style='color:green;''>data inserted successfully</span>";
    	}else{
    		echo "data not inserted";
    	}

    	if($_REQUEST['action'] == "empty"){
    		echo "feild not must be empty";
    	}
       
    }
    if (isset($_REQUEST['users'])) {
    	if ($_REQUEST['users'] == 'allUsers') {
    		header("Location:all_users.php");
    	}
    }
?>

<form  action="creat_data.php" method="POST" class="form bg-info p-5 text-light">
	<div class="row">
		<div class="col-md-6">
			<h1 class="pb-4 text-light">Sign Up Now </h1>
		</div>
		<div class="col-md-6 text-right">
			<a href="index.php?users=allUsers" class="btn btn-dark  mt-3">show all user</a>
		</div>
	</div>

<div class=" pb-2">
	<label for="name" class="form-label">Name : </label>
	<input type="text" name="name" value="" placeholder="input your name" class="form-control"/>

</div>

<div class="pb-2">
	<label for="name" class="form-label">Email : </label>
	<input type="email" name="email" value="" placeholder="input your Email here" class="form-control"/>
</div>
	<label for="name" class="form-label">password : </label>
	<input type="password" name="pass" value="" placeholder="input your password" class="form-control"/>

	<input type="submit" name="submitBtn" value="submit" value="SUBMIT" class="btn btn-success btn-block mt-3">
</form>
</header>
<?php


?>
