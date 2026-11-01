<?php
class Penyewa_M extends Model
{
    function datapenyewa()
    {
        $dtpenyewa = $this->db->prepare("SELECT user_plg, sandi, nik, nm_lngkp, no_hp, almt_lngkp,
<<<<<<< HEAD
        ft_ktp, ft_sim_a  FROM penyewa");
=======
        ft_ktp, ft_sim_a, FROM penyewa");
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
        $dtpenyewa->execute();
        return $dtpenyewa->get_result()->fetch_all(MYSQLI_ASSOC);
    }

<<<<<<< HEAD
    public function cekpenyewa($user_plg)
=======
    public function cekplat($user_plg)
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
{
    $sql = $this->db->prepare("SELECT user_plg FROM penyewa WHERE user_plg = ? ");
    $sql->bind_param("s", $user_plg);
    $sql->execute();
    $hasil = $sql->get_result();
    return $hasil->num_rows > 0;
}

public function simpan($data)
{
<<<<<<< HEAD
    $sql = $this->db->prepare("INSERT INTO penyewa (user_plg, sandi, nik, nm_lngkp, no_hp, almt_lngkp, ft_ktp, ft_sim_a) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("ssssssss", $data['user_plg'], $data['sandi'], $data['nik'], $data['nm_lngkp'], $data['no_hp'], $data['almt_lngkp'], $data['ft_ktp'], $data['ft_sim_a']);
=======
    $sql = $this->db->prepare("INSERT INTO penyewa (user_plg,sandi,nik,nm_lngkp,
    no_hp,almt_lngkp,ft_ktp,ft_sim_a) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("ssiississsdss", $data['user_plg'], $data['sandi'], $data['nik'], 
    $data['nm_lngkp'], $data['no_hp'], $data['almt_lngkp'], $data['ft_ktp'], 
    $data['ft_sim_a']);
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
    return $sql->execute();
}

public function detailpenyewa($user_plg)
{
    $sql = $this->db->prepare(
<<<<<<< HEAD
        "SELECT user_plg, sandi, nik, nm_lngkp, no_hp, almt_lngkp, ft_ktp, ft_sim_a
        FROM penyewa
        WHERE user_plg = ?"
=======
        "SELECT user_plg, sandi, nik, nm_lngkp, no_hp,
            almt_lngkp, ft_ktp, ft_sim_a
        FROM penyewa
        WHERE nuser_plg = ?"
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
    );

    $sql->bind_param("s", $user_plg);
    $sql->execute();

    return $sql->get_result()->fetch_assoc();
}
public function UbahDtPenyewa($data)
{
    $sql = $this->db->prepare(
<<<<<<< HEAD
        "UPDATE penyewa SET sandi = ?, nik = ?, nm_lngkp = ?, no_hp = ?, almt_lngkp = ?,
         ft_ktp = ?, ft_sim_a = ? WHERE user_plg = ?"
    );

    $sql->bind_param(
        "ssssssss",
=======
        "UPDATE penyewa SET sandi = ?, nik = ?, nm_lngkp = ?, no_hp = ?, 
        almt_lngkp = ?, ft_ktp = ?, ft_sim_a = ? WHERE user_plg = ?"
    );

    $sql->bind_param(
        "siississsdsss",
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
        $data['sandi'],
        $data['nik'],
        $data['nm_lngkp'],
        $data['no_hp'],
        $data['almt_lngkp'],
        $data['ft_ktp'],
        $data['ft_sim_a'],
        $data['user_plg']
    );

    return $sql->execute();
}
<<<<<<< HEAD
public function HapusDtPenyewa($user_plg)
=======
public function HapusDtpenyewa($user_plg)
>>>>>>> 053bf9e032e675df901f9e340624bd97bb843b71
{
    $dtpenyewa = $this->db->prepare("DELETE FROM penyewa WHERE user_plg = ?");
    $dtpenyewa->bind_param("s", $user_plg);
    $hasil = $dtpenyewa->execute();
    $dtpenyewa->close();
    return $hasil;
}
}