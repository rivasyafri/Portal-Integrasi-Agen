<?php
    require_once(dirname(__FILE__)."/../module/database.php");
    class Bus extends Database
    {
        private $tabel;
        public function Bus()
        {
            $this->Database();
            $this->tabel = "bus";
        }
        public function AddBus($data)
        {
            $action = $this->insert($this->tabel,$data);
            return $action;
        }
        public function GetAllBus()
        {
            $query = $this->query("SELECT * FROM $this->tabel ORDER by id DESC");
            return $query;
        }
        public function GetBus($id)
        {
            $query = $this->query("SELECT * FROM $this->tabel WHERE id = '$id'");
            $result = mysql_fetch_object($query);
            return $result;
        }
        public function EditBus($data,$id)
        {
            $action = $this->update($this->tabel,$data,"id = '$id'");
            return $action;
        }
        public function DelBus($id)
        {
            $action = $this->delete($this->tabel,"id = '$id'");
            return $action;
        }
    }
?>