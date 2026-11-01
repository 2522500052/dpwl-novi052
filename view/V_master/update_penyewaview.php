<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page Novi - Entri Data Penyewa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Admin_C/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Penyewa_C/index') ?>">Data Penyewa</a>
                        </li>
                        <li class="breadcrumb-item active">Entri Penyewa</li>
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

                        <form action="<?= base_url('Penyewa_C/UpdatePenyewa') ?>"
                            method="post"
                            enctype="multipart/form-data">

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="user_plg">User Pelanggan</label>
                                    <input type="text" name="user_plg"
                                        id="user_plg" class="form-control"
                                        placeholder="Masukkan user pelanggan"
                                        value="<?= $penyewa['user_plg'] ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="sandi">Sandi</label>
                                    <input type="text" name="sandi"
                                        id="sandi" class="form-control"
                                        placeholder="Masukkan sandi"
                                        value="<?= $penyewa['sandi'] ?>" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input type="text" name="nik"
                                                id="nik" class="form-control"
                                                placeholder="Masukkan NIK"
                                                value="<?= $penyewa['nik'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nm_lngkp">Nama Lengkap</label>
                                            <input type="text" name="nm_lngkp"
                                                id="nm_lngkp" class="form-control"
                                                placeholder="Masukkan nama lengkap"
                                                value="<?= $penyewa['nm_lngkp'] ?>" required>
                                        </div>
                                    </div>
                                </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_hp">No. HP</label>
                                            <input type="text" name="no_hp"
                                                id="no_hp" class="form-control"
                                                placeholder="Masukkan nomor hp"
                                                value="<?= $penyewa['no_hp'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="almt_lngkp">Alamat Lengkap</label>
                                    <input type="text" name="almt_lngkp"
                                        id="almt_lngkp" class="form-control"
                                        placeholder="Masukkan alamat  lengkap"
                                        value="<?= $penyewa['almt_lngkp'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="ft_ktp">Foto KTP</label>
                                    <input type="file" name="ft_ktp"
                                        id="ft_ktp" class="form-control"
                                        accept="image/jpeg,image/png">
                                    <input type="text" name="ft_ktp_asli" value="<?= $penyewa['ft_ktp'] ?>" hidden>
                                </div>

                                <div class="form-group">
                                    <label for="ft_sim_a">Foto SIM A</label>
                                    <input type="file" name="ft_sim_a"
                                        id="ft_sim_a" class="form-control"
                                        accept="image/jpeg,image/png">
                                    <input type="text" name="ft_sim_a_asli" value="<?= $penyewa['ft_sim_a'] ?>" hidden>
                                </div>


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