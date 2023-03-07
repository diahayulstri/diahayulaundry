 <div class="row">
     <div class="col-lg-12">
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                     <a href="<?= base_url('outlet/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
                 </div>
             </div>
             <div class="card-body">

                 <div class="row">
                     <div class="col-md-12">

                         <?php if ($message = $this->session->flashdata('message')) : ?>
                             <div class="alert alert-success">
                                 <p><?= $message ?></p>
                             </div>
                         <?php endif; ?>

                         <table class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th class="text-center">No</th>
                                     <th class="text-center">Outlet</th>
                                     <th class="text-center">Alamat</th>
                                     <th class="text-center">Telpon</th>
                                     <th class="text-center">Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($outlet as $row) : ?>
                                     <tr>
                                         <td class="text-center"><?= $no++ ?></td>
                                         <td class="text-center"><?= $row['nama'] ?></td>
                                         <td class="text-center"><?= $row['alamat'] ?></td>
                                         <td class="text-center"><?= $row['tlp'] ?></td>
                                         <td class="text-center">
                                             <a class="btn btn-sm btn-warning" href="<?= base_url('outlet/ubah/') . $row['id_outlet'] ?>"><i class="fas fa-edit"></i></a>
                                             <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?= base_url('outlet/hapus/') . $row['id_outlet'] ?>"><i class="fas fa-trash"></i></a>
                                             <!-- <button onclick="hapusOutlet('<?= base_url('outlet/hapus/') . $row['id_outlet'] ?>')" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash"></i></button> -->
                                             <!-- <a class="btn btn-sm btn-danger" onclick="return hapusOutlet('<?= base_url('outlet/hapus/') . $row['id_outlet'] ?>')"><i class="fas fa-trash"></i></a> -->
                                         </td>
                                     </tr>
                                 <?php endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>
 <!-- /.row -->