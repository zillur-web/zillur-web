<?php
require 'inc/header.php';

$select = "SELECT * FROM messages WHERE status = '3'";
$query_data= mysqli_query($db,$select);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item" href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="trush-massage.php">Trush Massages</a>
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
			<h3 class="text-center">Trush Massages</h3>
		</div>
		<table class="table table-hover" id="dataTable">
			<thead>
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>Subject</th>
					<th>Massage</th>
					<th>Time</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($query_data as $key => $value): ?>
					<tr>
						<td><?=++$key?></td>
						<td><?=$value['name'];?></td>
						<td><?=$value['email'];?></td>
						<td><?=$value['subject'];?></td>
						<td style="width: 200px; text-align: justify;"><?=$value['message'];?></td>
						<td><?=$value['date_time'];?></td>
						<td>
							<a class="btn btn-info" href="message-status.php?id=<?= $value['id']?>"><i class="fas fa-trash-restore"></i> Restore</a>
							<button class="btn btn-danger MessageDelete" data-id="<?=$value['id']?>"><i class="far fa-trash-alt"></i> Delete</button>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>    
	</div><!-- sl-page-title -->
	<script>
  // Settings.php page

  $('.MessageDelete').click(function(){
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
  				window.location.href = 'trush-message-delete.php?id='+id;
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