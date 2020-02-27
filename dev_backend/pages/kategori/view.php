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
                                <a href="?page=Add-Kategori" class="btn btn-sm btn-icon btn-circle btn-primary" data-click="panel-plus"><i class="fa fa-plus"></i></a> &nbsp;&nbsp;
                                <button class='btn btn-xs btn-inverse'>Data Kategori</button>
                                
                            </div>
                            

                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    if ($_SESSION['level'] == 'superadmin') {
                                      $sql   ="SELECT * FROM tbl_kategori ORDER BY id_kategori DESC";
                                      $query = mysqli_query($koneksidb, $sql);
                                    } 
                                    else{
                                      $sql   ="SELECT * FROM tbl_kategori
                                               WHERE uploader = '$_SESSION[username]'
                                               ORDER BY id_kategori DESC";
                                      $query = mysqli_query($koneksidb, $sql);
                                    }
      $no = 1;
      if (mysqli_num_rows($query) > 0) 
      {
        while ($data = mysqli_fetch_array($query)) {
          echo "<tr>
                  <td style='text-align: center;'>".$no."</td>
                  <td style='text-align: left;'>".$data['nama_kategori']."</td>
                  <td style='text-align: center'>".$data['status']."</td>
                  <td style='text-align: center;'>
                    <a class='btn btn-success btn-icon btn-circle btn-sm' href='?page=Edit-Kategori&amp;id_kategori=$data[id_kategori]'><i class='fa fa-pencil'></i>
                    </a>
                    <a class='btn btn-danger btn-icon btn-circle btn-sm' href='?page=Del-Kategori&amp;id_kategori=$data[id_kategori]' OnClick=\"return confirm('Apakah Anda yakin?');\"><i class='fa fa-times'></i>
                    </a>
                  </td>";
                  /*if ($_SESSION['usertype'] == 'admin') { //trigger
                  echo"<td style='text-align: center;'>
                    <a href='blog_ubah.php?id_blog=$data[id_blog]'>
                      <button type='submit' class='btn btn-primary'>Ubah</button>
                    </a>
                    <a href='blog_hapus.php?id_blog=$data[id_blog]'>
                      <button type='submit' class='btn btn-danger' OnClick=\"return confirm('Apakah Anda yakin?');\">Hapus</button>
                    </a>
                  </td>";
                } else {
                  echo "
                  <td>
                    <a href='blog_ubah.php?id_blog=$data[id_blog]'>
                      <button type='submit' class='btn btn-primary'>Ubah</button>
                    </a>
                    <a href='blog_hapus.php?id_blog=$data[id_blog]'>
                      <button type='submit' class='btn btn-danger' OnClick=\"return confirm('Apakah Anda yakin?');\">Hapus</button>
                    </a>
                  </td>";
                }*/
                echo"</tr>";
                $no++;
        }
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
