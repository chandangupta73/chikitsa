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

	
<div class="row">
<div class="col-lg-12">

<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
<div class="au-card-title">
<div class="bg-overlay bg-overlay--blue">
<h3 style="padding-left: 20px; padding-top: 10px; font-weight:bold; ">
Add Pages For SEO</h3>
</div>
</div>
<div class="container-fluid">
<div class="row">
   <div class="col-lg-12">
<div class="card">
<?php
	if($this->session->flashdata('error'))
	{
		echo $this->session->flashdata('error');
	}
	?>
<div class="card-body">
<div class="card-title">
	<span id="msg_main"></span>
</div>
<hr>
<?php
/*================== For Update Data ================ */
if(!empty($this->uri->segment(3)))
{
foreach($d as $v)
{
	?>
<form action="<?= base_url('seo-admin/update-pages-action');?>" method="post"  autocomplete="on" id="addpagesForm">
<div class="form-group">
<label for="cc-payment" class="control-label mb-1">Page Name</label>
<input  name="uri1" type="text" class="form-control" id="uri1" value="<?= $v['page_name'];?>" readonly="true">
<input  name="uid" type="hidden" class="form-control" id="uid" value="<?= $v['id'];?>" readonly="true">
</div>
<!--<div class="form-group">
<label for="cc-name">URI Segment 2</label>
<input  name="uri2" type="text" class="form-control" id="uri2">
<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>-->
<div class="form-group">
<label for="cc-name" class="control-label mb-1">Page Title</label>
<textarea id="title" name="title" class="form-control" required="true"><?= $v['title'];?></textarea>
<span id="msg" style="color: red; font-weight: bold;"></span>
</div>
<div class="form-group">
<label for="cc-name" class="control-label mb-1">Meta Keywords</label>
<textarea id="keywords" name="keywords" class="form-control" required="true"><?= $v['keyword'];?></textarea>
<span id="msg" style="color: red; font-weight: bold;"></span>
</div>
<div class="form-group">
<label for="cc-name" class="control-label mb-1">Meta Description</label>
<textarea id="description" name="description" class="form-control" required="true"><?= $v['description'];?></textarea>
<span id="msg" style="color: red; font-weight: bold;"></span>
</div>
<div class="form-group">
<label for="cc-name" class="control-label mb-1">Canonical Url (Only URL)</label>
<input type="text" id="can" name="can" class="form-control" value="<?= $v['canonical'];?>"/>
<span id="msg" style="color: red; font-weight: bold;"></span>
</div>

<div>
<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" id="">

<span id="payment-button-amount">Update</span>
<span id="payment-button-sending" style="display:none;">Please Wait…</span>
</button>
</div>
</form>	
	<?php
}
}
else
{
?>
<form action="<?= base_url('seo-admin/add-pages-action');?>" method="post"  autocomplete="on" id="addpagesForm">
<div class="form-group">
<label for="cc-payment" class="control-label mb-1">Enter URI Segment 1</label>
<input  name="uri1" type="text" class="form-control" id="uri1" >
</div>
<div class="form-group">
<label for="cc-name">Enter URI Segment 2</label>
<input  name="uri2" type="text" class="form-control" id="uri2">
<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
<div class="form-group">
<label for="cc-name" class="control-label mb-1">Page Title</label>
<textarea id="title" name="title" class="form-control" required="true"></textarea>
<span id="msg" style="color: red; font-weight: bold;"></span>
</div>
<div class="form-group">
<label for="cc-name" class="control-label mb-1">Meta Keywords</label>
<textarea id="keywords" name="keywords" class="form-control" required="true"></textarea>
<span id="msg" style="color: red; font-weight: bold;"></span>
</div>
<div class="form-group">
<label for="cc-name" class="control-label mb-1">Meta Description</label>
<textarea id="description" name="description" class="form-control" required="true"></textarea>
<span id="msg" style="color: red; font-weight: bold;"></span>
</div>
<div class="form-group">
<label for="cc-name" class="control-label mb-1">Canonical Url (Only URL)</label>
<input type="text" id="can" name="can" class="form-control"/>
<span id="msg" style="color: red; font-weight: bold;"></span>
</div>

<div>
<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" id="">

<span id="payment-button-amount">Add</span>
<span id="payment-button-sending" style="display:none;">Please Wait…</span>
</button>
</div>
</form>
<?php
}
?>
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
<script type="text/javascript">
	$(function(){
	$(document).on('keyup', "input[id=uri1] , input[id=uri2]", function () {
    $(this).val(function (_, val) {
        return val.toLowerCase();
    });
});
	});
</script>
