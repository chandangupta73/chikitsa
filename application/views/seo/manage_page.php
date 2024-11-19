
<?php 
include('header.php');
include('sidebar.php');
?>

<!-- MAIN CONTENT-->
<div class="main-content">
<div class="section__content section__content--p40">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">

<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
<div class="au-card-title">
<div class="bg-overlay bg-overlay--blue"><h3 style="padding-left: 20px; padding-top: 10px; font-weight:bold; ">
All SEO Pages</h3></div>
</div>

<div class="row">
  <div class="col-sm-12">
     <br/>
     <?php
  if($this->session->flashdata('error'))
  {
    echo $this->session->flashdata('error');
  }
  ?>
  </div>
</div>
<div class="container-fluid">
<div class="row">
   <div class="col-sm-12">

      <table class="table table-striped" id="myTable" >
    <thead>
      <tr>
        <th>Sno</th>
        <th>Page Name</th>
        <th>Page Title</th>
        <th>Meta Keywords</th>
        <th>Meta Description</th>
        <th>Canonical</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sn=0;
      foreach($data as $d)
      {
        ?>
      <tr>
        <td><?= ++$sn;?></td>
         <td><?= $d['page_name'];?></td>
        <td><?= $d['title'];?></td>
        <td><?= $d['keyword'];?></td>
        <td><?= $d['description'];?></td>
         <td><?= $d['canonical'];?></td>
      
        <td width="170"><a href="<?= base_url('seo-admin/add-pages/').$d['id'];?>"   style="font-size:22px;"  ><i class="fas fa-edit"></i></a>&nbsp;&nbsp;<a href="<?= base_url('seo-admin/delete/').$d['id'];?>"  style="color: red; font-size:22px;"><i class="fa fa-trash" aria-hidden="true"></i></i></a>
          <!-- Condtion is reverse if block then status 1 otherwise 0-->
         
      </tr>
      <?php
  }
  ?>
     
    </tbody>
  </table>
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
<!-- The Modal of view candidate details -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Candidate Details -->
        <div class="modal-header">
          <h4 class="modal-title">Update Page</h4>
          <button type="button" class="close" data-dismiss="modal" style="color: red; font-weight: bold; font-size: 20px;">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id="view_employer_details">
       
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
        </div>
        
      </div>
    </div>
  </div>
  

</div>

<!-- Modal of the send email to employer -->
<?php include('footer1.php');?>
