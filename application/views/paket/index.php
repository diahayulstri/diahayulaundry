 <div class="row">
     <div class="col-lg-12">
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                     <a href="<?= base_url('paket/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
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
                                     <th class="text-center">Nama</th>
                                     <th class="text-center">Outlet</th>
                                     <th class="text-center">Jenis</th>
                                     <th class="text-center">Harga</th>
                                     <th class="text-center">Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($paket as $row) : ?>
                                     <tr>
                                         <td class="text-center"><?= $no++ ?></td>
                                         <td class="text-center"><?= $row['nama_paket'] ?></td>
                                         <td class="text-center"><?= $row['nama'] ?></td>
                                         <td class="text-center"><?= $row['jenis'] ?></td>
                                         <td class="text-center"><?= "Rp." . number_format($row['harga'])  ?></td>
                                         <td class="text-center">
                                             <a class="btn btn-sm btn-warning" href="<?= base_url('paket/ubah/') . $row['id_paket'] ?>"><i class="fas fa-edit"></i></a>
                                             <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?= base_url('paket/hapus/') . $row['id_paket'] ?>"><i class="fas fa-trash"></i></a>
                                             <!-- <a class="btn btn-sm btn-danger" onclick="return hapusPaket('<?= base_url('paket/hapus/') . $row['id_paket'] ?>')"><i class="fas fa-trash"></i></a> -->
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