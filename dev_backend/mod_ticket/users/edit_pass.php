<?php  
if ($_GET) {
    if (isset($_POST['btnSave'])) {
//$txtPassLama    = mysqli_real_escape_string($koneksidb, $_POST['pswlama']);
$pswlama  = $_POST['pswlama'];
$pswbaru  = password_hash($_POST['pswbaru'], PASSWORD_DEFAULT);
  
$cari     = "SELECT * FROM mis_userlogin WHERE userid = '$_SESSION[userid]' ";
$result   = mysqli_query($koneksidb,$cari);
if (mysqli_num_rows($result) > 0)
{
  while ($data = mysqli_fetch_array($result))
  {
    if(password_verify($pswlama, $data['password']))
    {
      $perintah = "UPDATE mis_userlogin SET password = '$pswbaru' WHERE userid = '$_SESSION[userid]' ";
      if (mysqli_query($koneksidb, $perintah)) 
      {
        echo "<script>alert('Ubah Password berhasil! Klik ok untuk melanjutkan');location.replace('?module=Beranda')</script>";
        session_destroy();
      } 
        else 
        {
          echo "Error updating record: " . mysqli_error($koneksidb);
        }
    }
      else
      {
        echo "<script>alert('Password lama salah, input dengan benar password lama Anda!');history.go(-1)</script>";
      }
  }
}
  else
  {
    echo "<script>alert('Akun tidak ditemukan');history.go(-1)</script>";
  }


}
}
?>

<!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Form Kategori</a></li>
                <li class="active">Form Add</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Form Add <small>header small text goes here...</small></h1>
            <!-- end page-header -->
            <!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Input Types</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="?module=Edit-Password" method="post" name="frmadd" target="_self"> 
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password Lama</label>
                                    <div class="col-md-9">
                                        <input type="password" name="pswlama" class="form-control" placeholder="Masukkan password lama" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password Baru</label>
                                     <div class="col-md-9">
                                        <input type="password" name="pswbaru" class="form-control" placeholder="Masukkan password baru" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-9">
                                        <button type="submit" name="btnSave" class="btn btn-sm btn-success">Save</button>&nbsp;&nbsp;
                                        <button type="reset" class="btn btn-sm btn-success">Clear</button>&nbsp;&nbsp;
                                        <button type="button" class="btn btn-sm btn-success" onClick="document.location.href='cms.nw.php?module=Data-Kategori';">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->

        </div>
        <!-- end #content -->