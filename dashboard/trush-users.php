<?php
require 'inc/header.php';
$select = "SELECT * FROM users WHERE status = 'deactive'";
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
     if (isset($_SESSION['TrushRestore'])) {
      ?>
      <div class="alert alert-success">
        <span>
          <?php
          echo $_SESSION['TrushRestore'];
          unset($_SESSION['TrushRestore']);
          ?>
        </span>
      </div>
      <?php
    }
    if (isset($_SESSION['TrushDelete'])) {
      ?>
      <div class="alert alert-danger">
        <span>
          <?php
          echo $_SESSION['TrushDelete'];
          unset($_SESSION['TrushDelete']);
          ?>
        </span>
      </div>
      <?php
    }
    if (isset($_SESSION['UnSuccess'])) {
      ?>
      <div class="alert alert-warning">
        <span>
          <?php
          echo $_SESSION['UnSuccess'];
          unset($_SESSION['UnSuccess']);
          ?>
        </span>
      </div>
      <?php
    }
    ?>
    <table class="table table-hover" id="trushTable">
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
            <td><img class="img-fluid" style="height: 50px; width: 50px; border-radius: 50%;" src="upload/<?=$value['profile_image'];?>" alt="Profile Picture Here"></td>
            <td>
            <td>
              <a class="btn btn-info" href="trush-users-restore.php?id=<?=$value['id'];?>"><i class="fas fa-trash-restore"></i> Restore</a>
              <button class="btn btn-danger TrushUserDelete" data-id="<?=$value['id']?>"><i class="far fa-trash-alt"></i> Delete</button>
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