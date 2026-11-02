<?php
class Penyewa_M extends Model
{
    function datapenyewa()
    {
        $dtpenyewa = $this->db->prepare("SELECT user_plg052, Sandi052, Nik052, nm_lngkp052, no_hp052, almt_lngkp052,  
        ft_ktp, ft_sim_a FROM penyewa");
        $dtpenyewa->execute();
        return $dtpenyewa->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function cekpenyewa($user_plg052)
{
    $sql = $this->db->prepare("SELECT user_plg052 FROM penyewa WHERE user_plg052 = ? ");
    $sql->bind_param("s", $user_plg052);
    $sql->execute();
    $hasil = $sql->get_result();
    return $hasil->num_rows > 0;
}

public function simpan($data)
{
    $sql = $this->db->prepare("INSERT INTO penyewa (user_plg052,Sandi052,Nik052,nm_lngkp052,
    no_hp052,almt_lngkp052,ft_ktp,ft_sim_a) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("ssiississsdss", $data['user_plg052'], $data['Sandi052'], $data['Nik052'], 
    $data['nm_lngkp052'], $data['no_hp052'], $data['almt_lngkp052'], $data['ft_ktp'], 
    $data['ft_sim_a']);
    return $sql->execute();
}

public function detailpenyewa($user_plg052)
{
    $sql = $this->db->prepare(
        "SELECT user_plg052, Sandi052, Nik052, nm_lngkp052, no_hp052,
            almt_lngkp052, ft_ktp, ft_sim_a
        FROM penyewa
        WHERE user_plg052 = ?"
    );

    $sql->bind_param("s", $user_plg052);
    $sql->execute();

    return $sql->get_result()->fetch_assoc();
}
public function UbahDtPenyewa($data)
{
    $sql = $this->db->prepare(
        "UPDATE penyewa SET Sandi052 = ?, Nik052 = ?, nm_lngkp052 = ?, no_hp052 = ?, 
        almt_lngkp052 = ?, ft_ktp = ?, ft_sim_a = ? WHERE user_plg052 = ?"
    );

    $sql->bind_param(
        "ssssssss",
        $data['Sandi052'],
        $data['Nik052'],
        $data['nm_lngkp052'],
        $data['no_hp052'],
        $data['almt_lngkp052'],
        $data['ft_ktp'],
        $data['ft_sim_a'],
        $data['user_plg052']
    );

    return $sql->execute();
}
public function HapusDtpenyewa($user_plg052)
{
    $dtpenyewa = $this->db->prepare("DELETE FROM penyewa WHERE user_plg052 = ?");
    $dtpenyewa->bind_param("s", $user_plg052);
    $hasil = $dtpenyewa->execute();
    $dtpenyewa->close();
    return $hasil;
}
}