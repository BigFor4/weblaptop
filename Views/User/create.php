<?php
if (!isset($_SESSION["email"])) {
	header('Location: index.php?controller=user&action=dangnhap');
} else if ($_SESSION["role_id"] != 1) {
	header('Location: index.php');
}
?>
<?php require_once('./Views/header.php'); ?>


<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card" style="margin-top:100px;">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Create Users</h4>

					</div>
					<div class="wrapper wrapper--w680">
						<div class="">
							<div class="card-body">

								<form method="POST" id="create" novalidate="novalidate" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label style="font-size:20px;color:black;">Name<span class="text-danger">*</span></label>
												<input id="name" minlength="5" maxlength="200" type="text" class="form-control" name="name" placeholder="Enter Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label style="font-size:20px;color:black;">Email<span class="text-danger">*</span></label>
												<input id="email" minlength="5" maxlength="200" type="email" class="form-control" name="email" placeholder="Enter Email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label style="font-size:20px;color:black;">Address<span class="text-danger">*</span></label>
												<input id="address" minlength="5" maxlength="200" type="text" class="form-control" name="address" placeholder="Enter address">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label style="font-size:20px;color:black;">Phone<span class="text-danger">*</span></label>
												<input id="phone" minlength="5" maxlength="200" type="text" class="form-control" name="phone" placeholder="Enter phone">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label style="font-size:20px;color:black;">Password<span class="text-danger">*</span></label>
												<input id="password" minlength="5" maxlength="200" type="password" class="form-control" name="password" placeholder="Enter password">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label style="font-size:20px;color:black;">Confirm Password<span class="text-danger">*</span></label>
												<input id="confirmpassword" minlength="5" maxlength="200" type="password" class="form-control" name="confirmpassword" placeholder="Enter confirm password">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label style="font-size:20px;color:black;">Image<span class="text-danger">*</span></label>
												<input id="image" type="file" class="form-control" name="image" placeholder="Enter image">
											</div>
										</div>


									</div>
									<div id="alert"></div>
									<button class="btn btn-success">Save &nbsp;<i class="fa fa-save"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once('./Views/footer.php'); ?>

<script type="text/javascript">
	$("#create").submit(function(e) {
		e.preventDefault();
		let name = $("input[name='name']").val();
		let email = $("input[name='email']").val();
		<?php
		$result = "";
		foreach ($check as $sl) {


		?>if(email == "<?= $sl['email'] ?>") {
			$("#alert").html('<strong class="text-danger">Email đã tồn tại</strong>');
			$("input[name='email']").focus();
			return;
		}
	<?php
		}
	?>
	let password = $("input[name='password']").val();
	let confirmpassword = $("input[name='confirmpassword']").val();
	let address = $("input[name='address']").val();
	let phone = $("input[name='phone']").val();
	let images = $("input[name='image']").val();

	if (name == null || name == "") {
		$("#alert").html('<strong class="text-danger">Invalid Name</strong>');
		$("input[name='name']").focus();
		return;
	} else if (name.length < 5) {
		$("#alert").html('<strong class="text-danger">the length of the name i am missing is 5 characters</strong>');
		$("input[name='name']").focus();
		return;
	} else if (email == null || email == "") {
		$("#alert").html('<strong class="text-danger">Invalid Email</strong>');
		$("input[name='email']").focus();
		return;
	} else if (email.indexOf("@") == -1) {
		$("#alert").html('<strong class="text-danger">Email must have @ character </strong>');
		$("input[name='email']").focus();
		return;
	} else if (address == null || address == "") {
		$("#alert").html('<strong class="text-danger">Invalid Address</strong>');
		$("input[name='address']").focus();
		return;

	} else if (address.length < 5) {
		$("#alert").html('<strong class="text-danger">the length of the address i am missing is 5 characters</strong>');
		$("input[name='address']").focus();
		return;
	} else if (phone == null || phone == "") {
		$("#alert").html('<strong class="text-danger">Invalid Phone</strong>');
		$("input[name='phone']").focus();
		return;

	} else if (phone.length != 10) {
		$("#alert").html('<strong class="text-danger">Phone number must be 10 characters</strong>');
		$("input[name='phone']").focus();
		return;
	} else if (isNaN(phone)) {
		$("#alert").html('<strong class="text-danger">Phone number must be a numeric</strong>');
		$("input[name='phone']").focus();
		return;
	} else if (password == null || password == "") {
		$("#alert").html('<strong class="text-danger">Invalid Password</strong>');
		$("input[name='password']").focus();
		return;

	} else if (password.length < 6) {
		$("#alert").html('<strong class="text-danger">the length of the password i am missing is 6 characters</strong>');
		$("input[name='phone']").focus();
		return;
	} else if (confirmpassword == null || confirmpassword == "") {
		$("#alert").html('<strong class="text-danger">Invalid Confirmpassword</strong>');
		$("input[name='password']").focus();
		return;

	} else if (confirmpassword.length < 6) {
		$("#alert").html('<strong class="text-danger">the length of the confirmpassword i am missing is 6 characters</strong>');
		$("input[name='confirmpassword']").focus();
		return;
	} else if (password != confirmpassword) {
		$("#alert").html('<strong class="text-danger">Password and Confirm password do not match </strong>');
		$("input[name='confirmpassword']").focus();
		return;
	} else if (image == null || image == "") {
		$("#alert").html('<strong class="text-danger">Invalid Image</strong>');
		$("input[name='image']").focus();
		return;

	} else {
		$("#alert").html('<strong class="text-success">successfully</strong>');

	}
	const url = $(this).attr("action");

	const formData = new FormData(this);
	$.ajax({
		url,
		method: "POST",
		data: formData,
		dataType: 'html',
		processData: false,
		contentType: false,
		success: function(data) {

			alert("Thêm mới thành công");
			window.location.replace("index.php?controller=user&action=list");
		},
	});
	});
</script>