<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $table = "formulir";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
	}
	
	public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_mahasiswa" => $id])->row();
    }

    public function update($data,$id)
    {
        return $this->db->update($this->table, $data, array('id_mahasiswa' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_mahasiswa" => $id));
    }
}
