<?php
    require_once(dirname(__FILE__)."/../module/database.php");
    class Perjalanan extends Database
    {
        private $tabel;
        public function Perjalanan()
        {
            $this->Database();
            $this->tabel = "perjalanan";
        }
        public function AddPerjalanan($data)
        {
            $action = $this->insert($this->tabel,$data);
            return $action;
        }
        public function GetAllPerjalanan()
        {
            $query = $this->query("SELECT * FROM $this->tabel ORDER by id DESC");
            return $query;
        }
        public function GetPerjalanan($id)
        {
            $query = $this->query("SELECT * FROM $this->tabel WHERE id = '$id'");
            $result = mysql_fetch_object($query);
            return $result;
        }
        public function EditPerjalanan($data,$id)
        {
            $action = $this->update($this->tabel,$data,"id = '$id'");
            return $action;
        }
        public function DelPerjalanan($id)
        {
            $action = $this->delete($this->tabel,"id = '$id'");
            return $action;
        }
    }
?>