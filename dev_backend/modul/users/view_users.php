<!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">Tables</a></li>
        <li class="active">Managed Tables</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">Managed Tables <small>header small text goes here...</small></h1>
      <!-- end page-header -->
      
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
                            <h4 class="panel-title">Data Table - Default</h4>
                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $sql = "SELECT * FROM mis_userlogin WHERE id > 0 ORDER BY id ASC";
                                    $result = mysqli_query($koneksidb, $sql);
                                    $no = 1;
                                    if (mysqli_num_rows($result) > 0)
                                    {
                                      while ($data = mysqli_fetch_array($result))
                                      {
                                        echo "<tr>
                                                <td style='text-align: center'>".$no."</td>
                                                <td style='text-align: left'>".$data['nama']."</td>
                                                <td style='text-align: center'>".$data['userid']."</td>
                                                <td>
                                                <div class='btn-group pull-center'>
                                                  <button type='button' class='btn btn-success btn-xs'>Action</button>
                                                  <button type='button' class='btn btn-success btn-xs dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                                                      <span class='caret'></span>
                                                  </button>
                                                  <ul class='dropdown-menu' role='menu'>
                                                      <li><a href='#'>Action</a></li>
                                                      <li><a href='users_ubah.php?id=".$data['id']."' '>Ubah</a></li>
                                                      <li><a href='users_hapus.php?id=".$data['id']."' ' OnClick=\"return confirm('Apakah Anda yakin?');\">Hapus</a></li>
                                                      <li class='divider'></li>
                                                      <li><a href='#'>Separated link</a></li>
                                                  </ul>
                                              </div>
                                              </td>
                                           
                                              </tr>";
                                              $no++;
                                      }
                                    }
                                      else
                                      {
                                        echo "Belum ada data";
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
