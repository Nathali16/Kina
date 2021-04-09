<?php

class Model extends CI_model

{
    public function __construct() {
        parent::__construct();
    }


    public function vypis()
    {
        $query = $this->db->query("SELECT * FROM knihy ORDER BY kategorie_id_kategorie asc;");
        return $query->result();
    }

    public function vypis_knihy_anotace($id)
    {
        $query = $this->db->query('SELECT * FROM knihy WHERE id = '.$id);
        return $query->result();
    }
    
    public function vypis_menu()
    {
        $query = $this->db->query("SELECT * FROM menu ORDER BY id asc;");
        return $query->result();
    }

    public function vypis_autori()
    {
        $query = $this->db->query("SELECT autor FROM knihy ORDER BY autor asc;");
        return $query->result();
    }
    
    public function vypis_knihy_kategorie($kat)
    {
        $query = $this->db->query('SELECT DISTINCT * FROM knihy WHERE id = '.$kat);
        return $query->result();
    }

    public function vypis_kategorie()
    {
        $query = $this->db->query('SELECT * FROM knihy ORDER BY kategorie_id_kategorie asc;');
        return $query->result();
    }

}

