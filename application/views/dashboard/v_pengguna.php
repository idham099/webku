<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pengguna &amp; hak akses 
            <small>Manajemen pengguna website</small>
        </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?php echo base_url().'dashboard/pengguna_tambah';?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp;Buat pengguna baru</a>
                
                <br/>
                <br/>
                
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Pengguna dan hak akses</h3>
                    </div>
                    
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="1%">NO</th>
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>USERNAME</th>
                                    <th>LEVEL</th>
                                    <th>STATUS</th>
                                    <th width="10%">OPSI</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php $no=1; foreach($pengguna as $p){?>
                                
                                <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $p->pengguna_nama;?></td>
                                    <td><?php echo $p->pengguna_email;?></td>
                                    <td><?php echo $p->pengguna_username;?></td>
                                    <td><?php echo $p->pengguna_level;?></td>
                                    <td>
                                        <?php
                                            if($p->pengguna_status == 1){
                                             echo "Aktif";
                                            }else{
                                                
                                                echo "Non  Aktif";
                                            }    
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url().'dashboard/pengguna_edit/'.$p->pengguna_id;?>" class="btn btn-warning btn-sm">
                                        <i class="fa fa-pencil"></i>
                                        </a>  
                                        
                                        <a href="<?php echo base_url().'dashboard/pengguna_hapus/'.$p->pengguna_id;?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
        </div>
    </section>
</div>