<?php
require_once("config.php");
include 'inc/header.php';
?>
<?php
if (isset($_REQUEST['id'])) {
	$editID = $_REQUEST['id'];


	$updateData = "SELECT * FROM showcase WHERE id=$editID";
	$upQuery =mysqli_query($connect,$updateData);
	
		while ($getData =mysqli_fetch_array($upQuery)) {?>

			<form action="editeData_core.php" method="POST" class="form bg-primary p-5 text-light">
	<div class="row">
		<div class="col-md-6">
			<h1 class="pb-4 text-light">Your Data Edited </h1>
		</div>
		<div class="col-md-6 text-right">
			<a href="index.php?users=allUsers" class="btn btn-dark  mt-3">show all user</a>
		</div>
	</div>

<div class=" pb-2">
	<label for="name" class="form-label">Name : </label>
	<input type="text" name="name" value="<?php echo $getData['Name'];?>"  class="form-control"/>

</div>

<div class="pb-2">
	<label for="name" class="form-label">Email : </label>
	<input type="email" name="email" value="<?php echo $getData['Email'];?>"   class="form-control"/>
</div>
	<label for="name" class="form-label">password : </label>
	<input type="text" name="pass" value="<?php echo $getData['Password'];?>"  class="form-control"/>
	<input type="hidden" name="editingId"  value="<?php echo $editID;?>">
	<input type="submit" name="updateBtn" value="SUBMIT" class="btn btn-success btn-block mt-3">
</form>
	
	<?php }}
?>


</header>
