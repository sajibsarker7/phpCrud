
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All user list</title>
    <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body>

    <?php
      if (isset($_REQUEST['back'])) {
        if ($_REQUEST['back'] == "backIndex") {
          header("Location:index.php");
        }
      }
     if (isset($_REQUEST['updated'])) {
      echo "data updated Successfully";
     }
     if (isset($_REQUEST["edited"])) {
       echo "data edited Successfully";
     }
      ?>
    <header>
      <div class="container">
        <a href="all_users.php?back=backIndex" class="btn btn-success mb-4">SIGN UP NOW</a>
        <h2 class="py-4 text-center bg-info text-light">Our All Users List Here</h2>
         <?php  if (isset($_REQUEST['deleted'])) {
        echo "Data Deleted Successfully";
      }?>
        <table class="table table-striped table-hover border table-bordered">
          <tr class="bg-dark text-light text-center">
            <td>Serial</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td colspan="2">Action</td>
          </tr>

          <?php
            require_once('config.php');


            $showQuery ="SELECT * FROM showcase";
            $runQuery = mysqli_query($connect,$showQuery);
            if ($runQuery == true) {
              $count = 1;
              while ($mydata = mysqli_fetch_array($runQuery)) {?>
                <tr>
                  <td><?php echo $count++?></td>
                  <td><?php echo $mydata['Name'];?></td>
                  <td><?php echo $mydata['Email'];?></td>
                  <td><?php echo $mydata['Password'];?></td>
                  <td><a href="update_data.php?id=<?php echo $mydata['Id']; ?>">Edit</a></td>
                  <td><a href="delete_data.php?id=<?php echo $mydata['Id']; ?>">Delete</a></td>
                </tr>
             <?php }}?>
        </table>
      </div>
    </header>
  </body>
</html>
