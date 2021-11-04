<?php
require 'inc/header.php';

$select = "SELECT * FROM client_quotes WHERE status = 'active'";
$query_data= mysqli_query($db,$select);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">ZILLUR-WEB</a>
    <a class="breadcrumb-item active" href="quote.php">Quote</a>
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
        <div class="alert alert-info">
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
      <h3 class="text-center">Client Quotes</h3>
      <div class="text-right">
          <a href="add-quote.php"><i class="fa fa-plus"></i> Add</a>
      </div>
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th>SL</th>
            <th>Client Name</th>
            <th>Client Say</th>
            <th>Client Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($query_data as $key => $value): ?>
            <tr>
              <td><?=++$key?></td>
              <td style="width: 100px;"><?=$value['name'];?></td>
              <td style="width: 350px;"><?=$value['quote'];?></td>
              <td style="width: 200px;"><img style="height: 60px; width: 100px;" src="../img/testimonials/<?=$value['image'];?>" alt="Client Image"></td>
              <td>
                <a class="btn btn-info" href="quote-edit.php?id=<?=$value['id'];?>"><i class="far fa-edit"></i> Edit</a>
                <button class="btn btn-danger quoteDelete" data-id="<?=$value['id']?>"><i class="far fa-trash-alt"></i> Trush</button>
              </td>
              
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>    
    </div><!-- sl-page-title -->
    <script>
  // Settings.php page

  $('.quoteDelete').click(function(){
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
          window.location.href = 'quote-delete.php?id='+id;
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