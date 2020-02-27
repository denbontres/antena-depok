<?php  
$id_ticket  = mysqli_real_escape_string($koneksidb,$_GET['id_ticket']);
$sql        = "SELECT * FROM mis_ticket WHERE id_ticket = '$id_ticket' ";
$result     = mysqli_query($koneksidb, $sql);
$data       = mysqli_fetch_array($result);
$txtDesk    = str_replace("<br>","\r\n",$data['deskripsi']);
?>
        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Detail Ticket</a></li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Detail Ticket <small>header small text goes here...</small></h1>
            <!-- end page-header -->
            <!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-8">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Detail Ticket</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="?module=Edit-Proses-Ticket"> 
                                <div class="form-group">
                                    <label class="col-md-2 control-label">No Ticket</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control"  name="id_ticket" id="id_ticket" value="<?php echo $data['id_ticket'] ?>" placeholder="Disabled input" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Subject</label>
                                    <div class="col-md-9">
                                        <input type="text" name="txtSub" class="form-control" value="<?php echo $data['subject'] ?>" disabled/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Select</label>
                                    <div class="col-md-6">
                                        <select name="cmbkat" id="cmbkat" class="form-control" disabled/>
                                            <?php
                                            $kat            = "SELECT * FROM mis_kategori ORDER BY nm_kategori ASC";
                                            $result         = mysqli_query($koneksidb, $kat);
                                            while($datakat  = mysqli_fetch_array($result))
                                            {
                                              echo "<option value='$datakat[id_kategori]'".($data['kategori']==$datakat['id_kategori']?' selected':'').">$datakat[nm_kategori]</option>\n";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Textarea</label>
                                    <div class="col-md-9">
                                        <textarea name="txtDesk" class="form-control" placeholder="Textarea" rows="5" disabled><?php echo "$txtDesk" ?></textarea>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-2 control-label">Attachment</label>
                                    <div class="col-md-9">
                                            <b>Preview Gambar</b><br>
                                            <?php echo "<img id='preview' src='upload/ticket/".$data['gambar']."' width='50%'>"; ?>
                                    </div>
                                  </div>
                     
                            


                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-sm btn-success" onClick="document.location.href='cms.nw.php?module=Data-Ticket';">Back</button>
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

<?php 
include "imgpreview.php"; // Preview gambar yang akan diupload

?>