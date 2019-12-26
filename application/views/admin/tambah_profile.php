<!DOCTYPE html>
<html lang="en">
<style>
<?php include 'css_select.css'; ?>
<?php include 'css_modal.css'; ?>
</style>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Profil</title>
  
     <?php $this->load->view('admin/admin_navbaratas');?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <?php $this->load->view('admin/admin_menu');?>
      </nav>


    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <!-- BATAS ISI -->


 <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Profil</h4>
                  <hr>


                 <form class="form-signin" action="<?php echo base_url().'Admin/post_profile' ?>" method="post" enctype="multipart/form-data">

                 
                    <div class="form-group">
                      <label for="exampleInputName1">Judul Profil</label>
                      <input type="text" name="title" required class="form-control" required >
                    </div>
                   
                    <div class="form-group">
                      <label>Poster Profil</label>
                      <input required class="form-control" type="file" id="picture" name="picture" required="" accept="image/*">
                    </div>

                 
                    <div class="form-group">
                      <label for="exampleInputName1">Deskripsi Profil</label>
                 <textarea name="content" required rows="20"  class="form-control" ></textarea></div>



                   
                    <!-- DIHIDEN KARENA PENTING -->
                    <input type="hidden" name="updated_at" required class="title-value" >
              <input type="hidden" name="created_at" required class="title-value" >
              

                    <button type="submit" class="btn btn-primary mr-2">Tambah</button>
                     <a href="javascript:history.go(-1)"><input type="button" class="btn btn-light" value=" Batal"></a>
                  </form>
                </div>
              </div>

            </div>


<!-- BATAS ISI -->
</div>
</div>
</div>
</div>




<?php $this->load->view('admin/admin_footer');?>