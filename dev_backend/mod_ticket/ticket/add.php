
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
                            <h4 class="panel-title">Input Types</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="?module=Add-Proses-Ticket"> 
                                <!--<div class="form-group">
                                    <label class="col-md-2 control-label">No Ticket</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Disabled input" disabled />
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Subject</label>
                                    <div class="col-md-9">
                                        <input type="text" name="txtSub" class="form-control" placeholder="Ketikan Subject" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Select</label>
                                    <div class="col-md-6">
                                        <select name="cmbkat" id="cmbkat" class="form-control" required>
                                            <option value="">--Pilih Kategori--</option>
                                            <?php
                                            $query = "SELECT * FROM mis_kategori ORDER BY nm_kategori";
                                            $sql = mysqli_query($koneksidb, $query);
                                            while($data = mysqli_fetch_array($sql)){echo '<option value="'.$data['id_kategori'].'">'.$data['nm_kategori'].'</option>';}
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Textarea</label>
                                    <div class="col-md-9">
                                        <textarea name="txtDesk" class="form-control" placeholder="Textarea" rows="5" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Attachment</label>
                                    <div class="col-md-9">
                                         <input type="file" name="fupload" onchange="tampilkanPreview(this,'preview')"/>
                                            <br><b>Preview Gambar</b><br>
                                            <img id="preview" src="" alt="" width="35%"/>
                                    </div>
                                </div>
                                
                                <!--<div class="form-group">
                                    <label class="col-md-2 control-label">Attachment</label>
                                    <div class="col-md-9">
                                         <input name="fupload" type="file" size="70" />
                                    </div>
                                </div>-->


                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-9">
                                        <button type="submit" name="btnSave" class="btn btn-sm btn-success">Send</button>&nbsp;&nbsp;
                                        <button type="reset" class="btn btn-sm btn-success">Clear</button>&nbsp;&nbsp;
                                        <button type="button" class="btn btn-sm btn-success" onClick="document.location.href='cms.nw.php?module=Data-Ticket';">Cancel</button>
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