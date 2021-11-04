<?php
require 'inc/header.php';
$select = "SELECT * FROM home_banner WHERE status = 'deactive'";
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
        <th>Owner Name</th>
        <th>Tagline</th>
        <th>Banner Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($query_data as $key => $value): ?>
        <tr>
          <td><?=++$key?></td>
          <td><?=$value['owner_name'];?></td>
          <td><?=$value['tagline'];?></td>
          <td><img class="img-fluid" style="height: 200px; width: 200px;" src="../img/banner/<?=$value['banner_image'];?>" alt="Image Here"></td>
          <td>
            <a class="btn btn-info" href="trush-banner-restore.php?id=<?=$value['id'];?>"><i class="fas fa-trash-restore"></i> Restore</a>
            <button class="btn btn-danger homeBannerDelete" data-id="<?=$value['id']?>"><i class="far fa-trash-alt"></i> Delete</button>
          </td>

        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div><!-- sl-page-title -->
</div><!-- sl-pagebody -->
<!-- ########## END: MAIN PANEL ########## -->

<script>
  //settings delete
  $('.homeBannerDelete').click(function(){
    let id = $(this).attr("data-id");
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this data!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Poof! Your data has been deleted!", {
          icon: "success",
        });
        window.setTimeout(function(){
          window.location.href = 'trush-bannar-delete.php?id='+id;
        }, 3000)
      } 
      else {
        swal("Your data is safe!");
      }
    });

  });

</script>
<?php
require 'inc/footer.php';
?>