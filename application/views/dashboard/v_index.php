  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $jumlah_artikel?></h3>
                    <p>Jumlah Artikel</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-list"></i>
                </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $jumlah_halaman?></h3>
                    <p>Jumlah Halaman / Page</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-document"></i>
                </div>
            </div>
          </div>
          
          
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $jumlah_kategori?></h3>
                    <p>Jumlah Kategori</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $jumlah_pengguna?></h3>
                    <p>Jumlah Pengguna</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
          </div>
        </div>
        
        <div class="row">  
        <div class="col-lg-10">
       
          <!-- TO DO List -->
          <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Dashboard</h3>
            </div>
              
              <div class="box-body">
                  <h3>Selamat Datang !</h3>
                  <p>Berikut ini adalah data akun anda, harap untuk tidak memberitahukannya kepada orang lain.</p>
                  
                  <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                
                  <tr>  
                      <th width="%">Nama</th>
                      <th width="1px">:</th>
                      <td>
                          
                          <?php 
                            $id_user = $this->session->userdata('id');
                            $user = $this->db->query("select * from pengguna where pengguna_id='$id_user'")->row();
                            ?>
                          <p><?php echo $user->pengguna_nama;?></p>
                      </td>  
                    </tr>      
                    <tr>
                      
                        <th width="20%">Username</th>
                        <th width="1px">:</th>
                        <td><?php echo $this->session->userdata('username')?></td>
                    </tr>
                      
                    <tr>
                      <th width="20%">Level</th>
                      <th width="1px">:</th>
                      <td><?php echo $this->session->userdata('level')?></td>
                    </tr>  
                  
                      
                    <tr>
                        <th width="20%">Status</th>
                        <th width="1px">:</th>
                        <td>Aktif</td>
                    </tr>  
                      
                </table>
              </div>
          </div>
        </div>
        </div>
          </div>
      </section>
    </div>