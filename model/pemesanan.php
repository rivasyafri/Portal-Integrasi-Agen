<?php
    require_once(dirname(__FILE__)."/../module/database.php");
    class Pemesanan extends Database
    {
        private $tabel;
        public function Pemesanan()
        {
            $this->Database();
            $this->tabel = "pemesanan";
        }
        public function AddPemesanan($data)
        {
            $action = $this->insert($this->tabel,$data);
            return $action;
        }
        public function GetAllPemesanan()
        {
            $query = $this->query("SELECT * FROM $this->tabel ORDER by id DESC");
            return $query;
        }
        public function GetPemesanan($id)
        {
            $query = $this->query("SELECT * FROM $this->tabel WHERE id = '$id'");
            $result = mysql_fetch_object($query);
            return $result;
        }
        public function EditPemesanan($data,$id)
        {
            $action = $this->update($this->tabel,$data,"id = '$id'");
            return $action;
        }
        public function DelPemesanan($id)
        {
            $action = $this->delete($this->tabel,"id = '$id'");
            return $action;
        }
    }
?>