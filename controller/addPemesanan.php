<?php
    require_once(dirname(__FILE__)."/../model/pemesanan.php");
    if (isset($_POST['nama'])&&isset($_POST['trayek'])
        &&isset($_POST['no_hp'])&&isset($_POST['tanggal'])
        &&isset($_POST['tujuan'])&&isset($_POST['kelas'])
        &&isset($_POST['no_kursi'])&&isset($_POST['keterangan']))
    {
        $dataPemesanan = array (
            'nama' => $_POST['nama'],
            'no_hp' => $_POST['no_hp'],
            'tanggal_berangkat' => $_POST['tanggal']
            'keterangan' => $_POST['keterangan']
        );
        $dataPerjalanan = array (
            'no_kursi' => $_POST['no_kursi'],
            'tujuan' => $_POST['tujuan']
        );
        $pemesanan = new Pemesanan();
        $action = $pemesanan->AddPemesanan($data);
        if ($action)
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }
?>