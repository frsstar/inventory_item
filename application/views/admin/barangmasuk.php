
          
       
   
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?= $title; ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?= $title; ?></li>
                        </ol>
                        <?php if ($this->session->flashdata('flash')) : ?>
                <!-- Alert simpan -->
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong>
                    <?php echo $this->session->flashdata('flash'); ?>
                    
                </div>
            <?php endif; ?>
            <a class="btn btn-primary mb-4" href="<?= base_url(); ?>home/tambah_barangmasuk">Tambah Data</a>
                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                   
                                    <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Barang</th>
                                <th>Stock Barang</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                            <?php foreach ($barangmasuk as $brgmsk) : ?>
                                <tr>

                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $brgmsk['nama_barang']; ?></td>
                                    <td><?php echo $brgmsk['stock_barang']; ?></td>

                                    <td>
                                        <a href="<?= base_url(); ?>home/update_barangmasuk/<?= $brgmsk['id']; ?>"  class="btn btn-warning" role="button">Edit</a> ||
                                        <a class="btn btn-danger" href="<?= base_url(); ?>home/hapus_barangmasuk/<?= $brgmsk['id']; ?>" onclick="return confirm('Yakin Menghapus Data?');" role="button">Delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                