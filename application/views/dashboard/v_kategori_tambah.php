<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Kategori
            <small>Kategori Artikel</small>
        </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?php echo base_url().'dashboard/kategori'; ?>" class="btn btn-sm btn-success"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali</a>

                <br/>
                <br/>
                
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Kategori</h3>
                    </div>
                    <div class="box-body">
                        <form method="post" action="<?php echo base_url('dashboard/kategori_aksi')?>">
                            
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    
                                    <input type="text" name="kategori" class="form-control" placeholder="Masukkan nama kategori ..">
                                    
                                    <?php echo form_error('kategori');?>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Simpan
                                </button>
                            </div>
                        </form>    
                        
                    </div>
                </div>
            </div>    
        </div>
    </section>
</div>