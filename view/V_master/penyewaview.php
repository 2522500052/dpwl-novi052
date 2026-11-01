  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page Novi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin_C/index') ?>">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
<<<<<<< HEAD
                <a href="<?= base_url('Penyewa_C/create_penyewa') ?>"
                  class="btn btn-primary mb-3">Tambah Data</a>
                <table class="table table-bordered table-striped">
=======
                <a href="<?= base_url('Penyewa_C/create_mobil') ?>"
                  class="btn btn-primary mb-3">Tambah Data</a>
                <table class="table table-bordered table-striped">
<<<<<<< HEAD
                    <thead>
                        <tr>
                            <th>User Pelanggan</th>
                            <th>Sandi</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>No. HP/<br>Alamat Lengkap</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datapenyewa as $m) : ?>
                            <tr>
                                <td><?= $m['user_plg'] ?></td>
                                <td><?= $m['sandi'] ?></td>
                                <td><?= $m['nik'] ?></td>
                                <td><?= $m['nm_lngkp'] ?></td>
                                <td><?= $m['no_hp'] . '<br>' . $m['almt_lngk['] ?></td>
                                <td><?= $m['ft_ktp'] . '<br>' . $m['ft_sim_a'] . '<br>' . ?></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- Data Penyewa -->
                    </tbody>
=======
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                  <thead>
                    <tr>
                      <th>User Pelanggan</th>
                      <th>Sandi</th>
<<<<<<< HEAD
                      <th>Nik</th>
                      <th>Nama Lengkap</th>
                      <th>No HP</th>
                      <th>Alamat Lengkap</th>
                      <th>Foto KTP</th>
                      <th>Foto SIM A</th>
=======
                      <th>NIK</th>
                      <th>Nama Lengkap</th>
                      <th>No. HP/<br>Alamat Lengkap</th>
                      <th>Foto</th>
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($datapenyewa as $m) : ?>
                      <tr>
<<<<<<< HEAD
                        <td><?= $m['user_plg'] ?></td>
                        <td><?= $m['sandi'] ?></td>
                        <td><?= $m['nik'] ?></td>
                        <td><?= $m['nm_lngkp'] ?></td>
                        <td><?= $m['no_hp'] ?></td>
                        <td><?= $m['almt_lngkp'] ?></td>
                        <td>
                        <?php if (!empty($m['ft_ktp'])) : ?>
                            <img src="<?= base_url('img/' . $m['ft_ktp']) ?>"
                                width="100" height="60"
                                style="object-fit: cover;"
                                alt="Foto KTP">
                        <?php else : ?>
                            Tidak ada foto
                        <?php endif; ?>
                    </td>

                    <td>
                        <?php if (!empty($m['ft_sim_a'])) : ?>
                            <img src="<?= base_url('img/' . $m['ft_sim_a']) ?>"
                                width="100" height="60"
                                style="object-fit: cover;"
                                alt="Foto SIM A">
                        <?php else : ?>
                            Tidak ada foto
                        <?php endif; ?>
                    </td>
                        <td>
=======
                        <td><?= $m['user_plh'] ?></td>
                        <td><?= $m['sandi'] ?></td>
                        <td><?= $m['nik'] ?></td>
                        <td><?= $m['nm_lengkap'] ?></td>
                        <td><?= $m['no_hp'] . '<br>' . $m['almt_lngkp'] ?></td>
                        <td>
                          <?php if (!empty($m['ft_ktp'])) : ?>
                            <img src="<?= base_url('img/' . $m['ft_ktp']) ?>"
                              style="width: 80px; height: 40px; object-fit: cover;"
                              alt="Foto KTP"
                              onerror="this.style.display='none';">
                            <br>
                          <?php endif; ?>
                          <?php if (!empty($m['ft_sim_a'])) : ?>
                            <img src="<?= base_url('img/' . $m['ft_sim_a']) ?>"
                              style="width: 80px; height: 40px; object-fit: cover;"
                              alt="Foto SIM A"
                              onerror="this.style.display='none';">
                            <br>
                         
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                          <a href="<?= base_url('Penyewa_C/edit/' . $m['user_plg']) ?>" class="btn btn-warning btn-sm">Edit</a>
                          <a href="<?= base_url('Penyewa_C/hapus/' . $m['user_plg']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus penyewa ini?')">Hapus</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
<<<<<<< HEAD
                  </tbody>
=======
                    <!-- Data penyewa -->
                  </tbody>
>>>>>>> 1e3dda6db3a78fbe14c948c53bd08ff6955574ef
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                </table>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->