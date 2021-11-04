<?php
require 'inc/header.php';

$select = "SELECT * FROM contact WHERE status = 'deactive'";
$query_data= mysqli_query($db,$select);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">ZILLUR-WEB</a>
    <a class="breadcrumb-item active" href="trush-contact.php">Trush Contact-us</a>
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
      ?>
      <h3 class="text-center">Trush Contact-us</h3>
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th>SL</th>
            <th>Address</th>
            <th>City</th>
            <th>Phone</th>
            <th>Office Time</th>
            <th>E-mail</th>
            <th>Google Location</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($query_data as $key => $value): ?>
            <tr>
              <td><?=++$key?></td>
              <td><?=$value['address'];?></td>
              <td><?=$value['city'];?></td>
              <td><?=$value['phone'];?></td>
              <td><?=$value['o_time'];?></td>
              <td style="width: 100px;"><?=$value['o_email'];?></td>
              <td><?=$value['location'];?></td>
             <td>
            <a class="btn btn-info" href="trush-contact-restore.php?id=<?=$value['id'];?>"><i class="fas fa-trash-restore"></i> Restore</a>
            <button class="btn btn-danger ContactDelete" data-id="<?=$value['id']?>"><i class="far fa-trash-alt"></i> Delete</button>
          </td>
              
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>    
    </div><!-- sl-page-title -->
    <script>
  // Settings.php page

  $('.ContactDelete').click(function(){
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
          window.location.href = 'trush-contact-delete.php?id='+id;
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