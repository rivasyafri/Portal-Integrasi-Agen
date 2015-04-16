<?php
    require_once(dirname(__FILE__)."/../module/database.php");
    class Agen extends Database
    {
        private $tabel;
        public function Agen()
        {
            $this->Database();
            $this->tabel = "agen";
        }
        public function AddAgen($data)
        {
            $action = $this->insert($this->tabel,$data);
            return $action;
        }
        public function GetAllAgen()
        {
            $query = $this->query("SELECT * FROM $this->tabel ORDER by id DESC");
            return $query;
        }
        public function GetAgen($id)
        {
            $query = $this->query("SELECT * FROM $this->tabel WHERE id = '$id'");
            $result = mysql_fetch_object($query);
            return $result;
        }
        public function EditAgen($data,$id)
        {
            $action = $this->update($this->tabel,$data,"id = '$id'");
            return $action;
        }
        public function DelAgen($id)
        {
            $action = $this->delete($this->tabel,"id = '$id'");
            return $action;
        }
    }
?>