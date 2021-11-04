<?php
require 'inc/header.php';

$count = "SELECT COUNT(*) as total FROM general_settings WHERE status = 'active'";
$query = mysqli_query($db,$count);
$after_assoc = mysqli_fetch_assoc($query);

$select = "SELECT * FROM general_settings WHERE status = 'active'";
$query_data= mysqli_query($db,$select);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">ZILLUR-WEB</a>
    <a class="breadcrumb-item active" href="general-settings.php">General Settings</a>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">

      <?php
      if (isset($_SESSION['Success'])) {
        ?>
        <div class="alert alert-success">
          <span>
            <?php
            echo $_SESSION['Success'];
            unset($_SESSION['Success']);
            ?>
          </span>
        </div>
        <?php
      }
      if (isset($_SESSION['Delete'])) {
        ?>
        <div class="alert alert-danger">
          <span>
            <?php
            echo $_SESSION['Delete'];
            unset($_SESSION['Delete']);
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
      <h3 class="text-center">General Settings</h3>
      <div class="text-right">
        <?php if (!$after_assoc['total'] > 0): ?>
          <a href="add-general-settings.php"><i class="fa fa-plus"></i> Add</a>
        <?php endif ?>
      </div>
      <table class="table table-hover" id="dataTable">
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
                <a class="btn btn-info" href="general-settings-edit.php?id=<?=$value['id'];?>"><i class="far fa-edit"></i> Edit</a>
                <button class="btn btn-danger settingDelete" data-id="<?=$value['id']?>"><i class="far fa-trash-alt"></i> Trush</button>
              </td>

            </tr>
          <?php endforeach ?>
        </tbody>
      </table>    </div><!-- sl-page-title -->
      <script>
  // Settings.php page

  $('.settingDelete').click(function(){
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
          window.location.href = 'general-settings-delete.php?id='+id;
        }, 3000)
      } 
      else {
        swal("Your data is safe!");
      }
    });

  });
</script>
</div><!-- sl-pagebody -->
<!-- ########## END: MAIN PANEL ########## -->

<?php
require_once 'inc/footer.php';
?>