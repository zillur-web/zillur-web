<?php
require 'inc/header.php';
$select = "SELECT * FROM users WHERE status = 'active'";
$query_data= mysqli_query($db,$select);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
    <a class="breadcrumb-item active" href="users.php">All Users</a>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
     <?php
     if (isset($_SESSION['UsersSuccess'])) {
      ?>
      <div class="alert alert-success">
        <span>
          <?php
          echo $_SESSION['UsersSuccess'];
          unset($_SESSION['UsersSuccess']);
          ?>
        </span>
      </div>
      <?php
    }
    if (isset($_SESSION['UsersDelete'])) {
      ?>
      <div class="alert alert-danger">
        <span>
          <?php
          echo $_SESSION['UsersDelete'];
          unset($_SESSION['UsersDelete']);
          ?>
        </span>
      </div>
      <?php
    }
    ?>
    <table class="table table-hover" id="dataTable">
      <thead>
        <tr>
          <th>SL</th>
          <th>Name</th>
          <th>E-mail</th>
          <th>User Role</th>
          <th>Profile</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php  
        foreach ($query_data as $key => $value) { ?>
          <tr>
            <td><?=++$key?></td>
            <td><?=$value['name'];?></td>
            <td><?=$value['email'];?></td>
            <td>
              <?php
                if ($value['role'] == 1) {
                  echo 'User';
                }
                elseif($value['role'] == 2){
                  echo 'Employee';
                }
                else{
                  echo 'Admin';
                }
              ?>
            </td>
            <td><img class="img-fluid" style="height: 50px; width: 50px; border-radius: 50%" src="upload/<?=$value['profile_image'];?>" alt="Profile Picture Here"></td>
            <td>
              <a class="btn btn-info" href="users-edit.php?id=<?=$value['id'];?>"><i class="far fa-edit"></i> Edit</a>
              <button class="btn btn-danger UserDelete" data-id="<?=$value['id']?>"><i class="far fa-trash-alt"></i> Trush</button>
            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div><!-- sl-page-title -->

</div><!-- sl-pagebody -->
<!-- ########## END: MAIN PANEL ########## -->
<?php
require 'inc/footer.php';
?>