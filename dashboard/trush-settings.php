<?php
require 'inc/header.php';
$select = "SELECT * FROM general_settings WHERE status = 'deactive'";
$query_data= mysqli_query($db,$select);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
    <a class="breadcrumb-item active" href="users.php">Trush Settings</a>
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
        <th>Website Title</th>
        <th>Website Subtitle</th>
        <th>Website Logo</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($query_data as $key => $value): ?>
        <tr>
          <td><?=++$key?></td>
          <td><?=$value['website_title'];?></td>
          <td><?=$value['website_subtitle'];?></td>
          <td><img class="img-fluid" style="height: 50px; width: 50px;" src="../img/<?=$value['logo'];?>" alt="logo Here"></td>
          <td>
            <a class="btn btn-info" href="trush-settings-restore.php?id=<?=$value['id'];?>"><i class="fas fa-trash-restore"></i> Restore</a>
            <button class="btn btn-danger TrushSettingsDelete" data-id="<?=$value['id']?>"><i class="far fa-trash-alt"></i> Delete</button>
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
$('.TrushSettingsDelete').click(function(){
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
        window.location.href = 'trush-settings-delete.php?id='+id;
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