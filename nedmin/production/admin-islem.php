<?php 
include 'header.php';

?>

<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Yönetici Ekle <small>,
              <?php 

              if ($_GET['ekle']=="ok") {?>

                <b style="color:green;">İşem başaralı</b>

              <?php }

               if ($_GET['ekle']=="no") {?>

                <b style="color:red;">İşlem başarısız</b>

              <?php }

              if ($_GET['ekle']=="eror") {?>

                <b style="color:red;">Oturum password yanlış</b>

              <?php }

                 if ($_GET['ekle']=="hata") {?>

                <b style="color:red;">Bu yönetici adı daha önce kayıt edilmiş</b>

              <?php }

               if ($_GET['ekle']=="bhata") {?>

                <b style="color:red;">bhata</b>

              <?php }

              ?>

            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group ">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yeni Yönetici Adı <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input maxlength="20" type="text" id="first-name" name="admin_kAdi" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group ">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yeni Yönetici Password <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input maxlength="20" type="text" id="first-name" name="Yadmin_password" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

               <div class="form-group ">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Oturum Password <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input maxlength="20" type="text" id="first-name" name="oturum_password" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="adminekle" class="btn btn-success">Ekle</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>