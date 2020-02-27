<!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <!--<ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">Tables</a></li>
        <li class="active">Managed Tables</li>
      </ol>-->
      <!-- end breadcrumb -->
      
      <!-- begin row -->
      <div class="row">
          <!-- begin col-12 -->
          <div class="col-md-12">
              <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>

                            <div class="panel-heading-plus">
                                <a href="?module=Add-Ticket" class="btn btn-sm btn-icon btn-circle btn-primary" data-click="panel-plus"><i class="fa fa-plus"></i></a> &nbsp;&nbsp;
                                <button class='btn btn-xs btn-inverse'>Data Ticket</button>
                                
                            </div>
                            

                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No Ticket</th>
                                        <th>Report By</th>
                                        <th>Assign to</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    if ($_SESSION['level'] == 'superadmin') {
                                      $sql   ="SELECT a.id_ticket, a.uploader, a.subject, a.status, b.nm_kategori as kategori
                                                FROM mis_ticket a
                                                LEFT JOIN mis_kategori b on b.id_kategori = a.kategori
                                                ORDER BY a.id_ticket DESC
                                      ";
                                      $query = mysqli_query($koneksidb, $sql);
                                    } 
                                    elseif ($_SESSION['level'] == 'manager') {
                                      $sql   ="SELECT a.id_ticket, a.uploader, a.subject, a.status, a.dept, b.nm_kategori as kategori
                                                FROM mis_ticket a
                                                LEFT JOIN mis_kategori b on b.id_kategori = a.kategori
                                               WHERE a.dept = '$_SESSION[departemen]'
                                               ORDER BY a.id_ticket DESC";
                                      $query = mysqli_query($koneksidb, $sql);
                                    }
                                    else{
                                      $sql   ="SELECT a.id_ticket, a.uploader, a.subject, a.status, b.nm_kategori as kategori
                                                FROM mis_ticket a
                                                LEFT JOIN mis_kategori b on b.id_kategori = a.kategori
                                               WHERE a.uploader = '$_SESSION[userid]'
                                               ORDER BY a.id_ticket DESC";
                                      $query = mysqli_query($koneksidb, $sql);
                                    }
      $no = 1;
      if (mysqli_num_rows($query) > 0) 
      {

        while ($data = mysqli_fetch_array($query)) {
      ?>
                <tr>
                  <td style='text-align: center;'><?php echo $no; ?></td>
                  <td style='text-align: left;'><?php echo $data['id_ticket']; ?></td>
                  <td style='text-align: left;'><?php echo $data['uploader']; ?></td>
                  <td style='text-align: left;'><?php echo $data['kategori']; ?></td>
                  <td style='text-align: left;'><?php echo $data['subject']; ?></td>
                  <?php 
                    if ($data['status']=='open') {
                  ?>

                  <td style='text-align: center'>
                    <a href='?module=Set-Progress-Ticket&amp;id_ticket=<?php echo $data['id_ticket']; ?>'>
                      <button type='submit' class="btn btn-success btn-xs"><?php echo $status = "open"; ?></button>
                    </a>
                  </td>
                <?php }
                    elseif ($data['status']=='progress') {
                  ?>

                  <td style='text-align: center'>
                    <a href='?module=Set-Closed-Ticket&amp;id_ticket=<?php echo $data['id_ticket']; ?>'>
                      <button type='submit' class="btn btn-danger btn-xs"><?php echo $status = "proggres"; ?></button>
                    </a>
                  </td>
                <?php } 
                    else {
                  ?>

                  <td style='text-align: center'>
                    <a href='?module=Set-Open-Ticket&amp;id_ticket=<?php echo $data['id_ticket']; ?>'>
                      <button type='submit' class="btn btn-danger btn-xs"><?php echo $status = "closed"; ?></button>
                    </a>
                  </td>
                <?php }  ?>
                  <td style='text-align: center;'>
                    <a class='btn btn-success btn-icon btn-circle btn-sm' href='?module=Detail-Ticket&amp;id_ticket=<?php echo $data['id_ticket']; ?>'><i class='fa fa-search'></i>
                    </a>
                    <?php   if ($_SESSION['level'] == 'superadmin') { ?>
                    <a class='btn btn-success btn-icon btn-circle btn-sm' href='?module=Edit-Ticket&amp;id_ticket=<?php echo $data['id_ticket']; ?>'><i class='fa fa-pencil'></i>
                    </a>
                    <a class='btn btn-danger btn-icon btn-circle btn-sm' href='?module=Delete-Ticket&amp;id_ticket=<?php echo $data['id_ticket']; ?>' OnClick="return confirm('Apakah Anda yakin?');"><i class='fa fa-times'></i>
                    </a>
                  <?php } ?>
                  </td>
                </tr>
                <?php $no++; ?>
        <?php }
      }
      else
      {
        echo"Belum ada data";
      }
      ?>
      
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
    </div>
    <!-- end #content -->
