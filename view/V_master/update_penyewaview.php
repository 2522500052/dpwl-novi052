
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page Novi - Edit Data Penyewa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Admin_C/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Penyewa_C052/index') ?>">Data Penyewa</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Penyewa</li>
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
                            <h3 class="card-title">Form Edit Data Penyewa</h3>
                        </div>

                        <form action="<?= base_url('Penyewa_C052/UpdatePenyewa') ?>"
                            method="post"
                            enctype="multipart/form-data">

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="user_plg052">User Pelanggan</label>
                                    <input type="text" name="user_plg052"
                                        id="user_plg052" class="form-control"
                                        placeholder="Masukkan user pelanggan"
                                        value="<?= $penyewa['user_plg052'] ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="Sandi052">Sandi</label>
                                    <input type="text" name="Sandi052"
                                        id="Sandi052" class="form-control"
                                        placeholder="Masukkan sandi"
                                        value="<?= $penyewa['Sandi052'] ?>" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Nik052">NIK</label>
                                            <input type="text" name="Nik052"
                                                id="Nik052" class="form-control"
                                                placeholder="Masukkan NIK"
                                                value="<?= $penyewa['Nik052'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nm_lngkp052">Nama Lengkap</label>
                                            <input type="text" name="nm_lngkp052"
                                                id="nm_lngkp052" class="form-control"
                                                placeholder="Masukkan nama lengkap"
                                                value="<?= $penyewa['nm_lngkp052'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="no_hp052">No. HP</label>
                                    <input type="text" name="no_hp052"
                                        id="no_hp052" class="form-control"
                                        placeholder="Masukkan nomor HP"
                                        value="<?= $penyewa['no_hp052'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="almt_lngkp052">Alamat Lengkap</label>
                                    <input type="text" name="almt_lngkp052"
                                        id="almt_lngkp052" class="form-control"
                                        placeholder="Masukkan alamat lengkap"
                                        value="<?= $penyewa['almt_lngkp052'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="ft_ktp">Foto KTP</label>
                                    <input type="file" name="ft_ktp"
                                        id="ft_ktp" class="form-control"
                                        accept="image/jpeg,image/png">
                                    <input type="text" name="ft_ktp_asli"
                                        value="<?= $penyewa['ft_ktp'] ?>" hidden>
                                </div>

                                <div class="form-group">
                                    <label for="ft_sim_a">Foto SIM A</label>
                                    <input type="file" name="ft_sim_a"
                                        id="ft_sim_a" class="form-control"
                                        accept="image/jpeg,image/png">
                                    <input type="text" name="ft_sim_a_asli"
                                        value="<?= $penyewa['ft_sim_a'] ?>" hidden>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>

                                <a href="<?= base_url('Penyewa_C052/index') ?>"
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
