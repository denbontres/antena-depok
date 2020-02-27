<?php  
    $id_kategori= mysqli_real_escape_string($koneksidb, $_GET['id_kategori']);
    $sql        = "SELECT * FROM tbl_kategori WHERE id_kategori = '$id_kategori' ";
    $result     = mysqli_query($koneksidb, $sql);
    $data       = mysqli_fetch_array($result);
?>
<?php
if ($_GET) {
    if(isset($_POST['btnEdit']))
    {
      $id_kategori  = mysqli_real_escape_string($koneksidb, $_POST['id_kategori']);
      $txtNKat      = mysqli_real_escape_string($koneksidb, $_POST['txtNKat']);
      $kategori_seo  = seo_title($_POST['txtNKat']);
      $status       = mysqli_real_escape_string($koneksidb, $_POST['status']);

      $sqlEd = "UPDATE tbl_kategori SET id_kategori = '$id_kategori', 
                                        nama_kategori = '$txtNKat',
                                        kategori_seo = '$kategori_seo', 
                                        status      = '$status',
                                        updater     = '$_SESSION[username]', 
                                        updated_at  = now() 
                                        WHERE id_kategori = '$id_kategori' ";
                                
      if(mysqli_query($koneksidb, $sqlEd)) 
      {
        echo "<script>alert('Update data berhasil! Klik ok untuk melanjutkan');location.replace('?module=Data-Kategori')</script>";
      } 
        else 
        {
          echo "Error updating record: " . mysqli_error($koneksidb);
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
                <li class="active">Form Edit</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Form Edit <small>header small text goes here...</small></h1>
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
                            <form class="form-horizontal" action="?module=Edit-Kategori" method="post" name="frmadd" target="_self"> 
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Default Input</label>
                                     <input name="id_kategori" type="hidden" id="id_kategori" value="<?php echo $data['id_kategori'] ?>">
                                    <div class="col-md-9">
                                        <input type="text" name="txtNKat" class="form-control" value="<?php echo $data['nama_kategori'] ?>" required />
                                    </div>
                                </div>

                                <?php if ($data['status']=='N') { ?>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Status</label>
                                    <div class="col-md-9">
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="Y" />
                                            Y
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="N" checked />
                                            N
                                        </label>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Status</label>
                                    <div class="col-md-9">
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="Y" checked />
                                            Y
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="N" />
                                            N
                                        </label>
                                    </div>
                                </div>
                                <?php } ?>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-9">
                                        <button type="submit" name="btnEdit" class="btn btn-sm btn-success">Ubah</button>&nbsp;&nbsp;
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