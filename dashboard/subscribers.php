<?php
require 'inc/header.php';

$select = "SELECT * FROM subscribers WHERE status = 'active'";
$query_data= mysqli_query($db,$select);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">ZILLUR-WEB</a>
    <a class="breadcrumb-item active" href="subscribers.php">Subscribers</a>
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
      ?>
      <h3 class="text-center">Subscribers</h3>
      
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th>SL</th>
            <th>E-mail</th>
            <th>Time</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($query_data as $key => $value): ?>
            <tr>
              <td><?=++$key?></td>
              <td><?=$value['email'];?></td>
              <td><?=$value['s_time'];?></td>
              <td><?=$value['s_date'];?></td>
              <td><img class="img-fluid" style="width: 15%;" src="../img/coming-soon.jpg" alt="cooming soon"></td>
              <!-- <td>
                <a class="btn btn-info" href="#?id=<?=$value['id'];?>"><i class="fas fa-trash-restore"></i> Restore</a>
                <button class="btn btn-danger Unread" data-id="<?=$value['id']?>"><i class="far fa-trash-alt"></i> Delete</button>
              </td> -->

            </tr>
          <?php endforeach ?>
        </tbody>
      </table>    </div><!-- sl-page-title -->
      <script>
  // Settings.php page

  $('.Unread').click(function(){
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
          window.location.href = '#?id='+id;
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