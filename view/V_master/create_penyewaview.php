
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
<<<<<<< HEAD
                    <h1 class="m-0">Starter Page Novi - Entri Data Mobil</h1>
=======
                    <h1 class="m-0">Starter Page Novi - Entri Data Penyewa</h1>
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Admin_C/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
<<<<<<< HEAD
                            <a href="<?= base_url('Penyewa_C/index') ?>">Data Mobil</a>
                        </li>
                        <li class="breadcrumb-item active">Entri Mobil</li>
=======
                            <a href="<?= base_url('Penyewa_C/index') ?>">Data Penyewa</a>
                        </li>
                        <li class="breadcrumb-item active">Entri Penyewa</li>
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Entri Data Penyewa</h3>
                        </div>

                        <form action="<?= base_url('Penyewa_C/simpan') ?>"
                              method="post"
                              enctype="multipart/form-data">

                            <div class="card-body">

                                <div class="form-group">
<<<<<<< HEAD
                                    <label for="user_plg">Username</label>
                                    <input type="text" name="user_plg"
                                           id="user_plg" class="form-control"
                                           placeholder="Masukkan username"
=======
                                    <label for="user_plg">User Pelanggan</label>
                                    <input type="text" name="user_plg"
                                           id="user_plg" class="form-control"
                                           placeholder="Masukkan user pelanggan"
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="sandi">Sandi</label>
                                    <input type="text" name="sandi"
                                           id="sandi" class="form-control"
                                           placeholder="Masukkan sandi"
                                           required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
<<<<<<< HEAD
                                            <label for="nik">Nik</label>
=======
                                            <label for="nik">NIK</label>
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                                            <input type="text" name="nik"
                                                   id="nik" class="form-control"
                                                   placeholder="Masukkan nik"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nm_lngkp">Nama Lengkap</label>
                                            <input type="text" name="nm_lngkp"
                                                   id="nm_lngkp" class="form-control"
                                                   placeholder="Masukkan nama lengkap"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_hp">Nomor HP</label>
                                            <input type="text" name="no_hp"
                                                   id="no_hp" class="form-control"
<<<<<<< HEAD
                                                   placeholder="Masukkan nomor HP"
=======
                                                   placeholder="Masukkan nomor hp"
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                                                   required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
<<<<<<< HEAD
                                            <label for="almt_lngkp">Alamat</label>
=======
                                            <label for="almt_lngkp">Alamat Lengkap</label>
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                                            <input type="text" name="almt_lngkp"
                                                   id="almt_lngkp" class="form-control"
                                                   placeholder="Masukkan alamat lengkap"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ft_ktp">Foto KTP</label>
                                    <input type="file" name="ft_ktp"
<<<<<<< HEAD
                                           id="ft_ktp" class="form-control"
=======
                                           id="ft_ktp class="form-control"
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
                                           accept="image/*" required>
                                </div>

                                <div class="form-group">
                                    <label for="ft_sim_a">Foto SIM A</label>
                                    <input type="file" name="ft_sim_a"
                                           id="ft_sim_a" class="form-control"
                                           accept="image/*" required>
                                </div>
<<<<<<< HEAD
                            </div>
=======

>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>

                                <a href="<?= base_url('Penyewa_C/index') ?>"
                                   class="btn btn-secondary">
                                    Kembali
                                </a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->