<?php 
include('header.php');
include('sidebar.php');
?>

<!-- MENU SIDEBAR-->


<!-- PAGE CONTAINER-->

<!-- END HEADER DESKTOP-->

<!-- MAIN CONTENT-->
<div class="main-content">
<div class="section__content section__content--p30">
<div class="container-fluid">

	<?php
	if($this->session->flashdata('error'))
	{
		echo $this->session->flashdata('error');
	}
	?>
<div class="row">
<div class="col-lg-12">
<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
<div class="au-card-title">
<div class="bg-overlay bg-overlay--blue">
<h3 style="padding-left: 20px; padding-top: 10px; font-weight:bold; ">
Change Password</h3>
</div>
</div>
<div class="container-fluid">
<div class="row">
   <div class="col-lg-12">
<div class="card">

<div class="card-body">
<div class="card-title">
	<span id="msg_main"></span>
</div>
<hr>
<form action="<?= base_url('SeoAccount/change_password_action');?>" method="post" novalidate="novalidate" autocomplete="on" id="seopasswordForm">
<div class="form-group">
<label for="cc-payment" class="control-label mb-1">Enter Old Password</label>
<input  name="seo-opass" type="password" class="form-control" id="seo-opass">
</div>
<div class="form-group">
<label for="cc-name">New Password</label>
<input  name="seo-npass" type="password" class="form-control" id="seo-npass">
<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
<div class="form-group">
<label for="cc-name" class="control-label mb-1">Confirm Password</label>
<input  name="seo-cpass" type="password" class="form-control" id="seo-cpass">
<span id="msg" style="color: red; font-weight: bold;"></span>
</div>
<div>
<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block seo-cbtn" id="seo-cbtn">
<i class="fa fa-lock fa-lg"></i>&nbsp;
<span id="payment-button-amount">Change</span>
<span id="payment-button-sending" style="display:none;">Please Wait…</span>
</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- END PAGE CONTAINER-->

</div>

<!-- Jquery JS-->
<?php include('footer.php');?>
