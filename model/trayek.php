<?php
    require_once(dirname(__FILE__)."/../module/database.php");
    class Trayek extends Database
    {
        private $tabel;
        public function Trayek()
        {
            $this->Database();
            $this->tabel = "trayek";
        }
        public function AddTrayek($data)
        {
            $action = $this->insert($this->tabel,$data);
            return $action;
        }
        public function GetAllTrayek()
        {
            $query = $this->query("SELECT * FROM $this->tabel ORDER by id DESC");
            return $query;
        }
        public function GetTrayek($id)
        {
            $query = $this->query("SELECT * FROM $this->tabel WHERE id = '$id'");
            $result = mysql_fetch_object($query);
            return $result;
        }
        public function EditTrayek($data,$id)
        {
            $action = $this->update($this->tabel,$data,"id = '$id'");
            return $action;
        }
        public function DelTrayek($id)
        {
            $action = $this->delete($this->tabel,"id = '$id'");
            return $action;
        }
    }
?>