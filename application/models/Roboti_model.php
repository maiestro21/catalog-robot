<?php
class Roboti_model extends CI_Model
{

    function getAllRobots()
    {

        $result = $this->db->get("roboti");
        return $result->result();
    }


    function getRobotsByCategorie($categorie)
    {
        $this->db->like('categorie', $categorie);
        $result = $this->db->get("roboti");
        return $result->result();
    }

    function getRobotsByProducator($producator)
    {
        $this->db->like('nume_producator', $producator);
        $result = $this->db->get("roboti");
        return $result->result();
    }


    function getRobotById($id_robot)
    {
        $this->db->where('id_robot', $id_robot);
        $result = $this->db->get("roboti", 1);
        return $result->row();
    }

    function getAllProducatori()
    {

        $result = $this->db->get("producatori");
        return $result->result();
    }

    function getAllCategorii()
    {
        $this->db->distinct();
        $this->db->select('categorie');
        $query = $this->db->get('roboti');
        return $query->result();
    }

    function stergeRobotById($id_robot){
        $this->db->where('id_robot', $id_robot);
        $this->db->delete('roboti');
        return $this->db->affected_rows();
    }

    function adaugaRobot($data){
        $this->db->insert('roboti',$data);
        return $this->db->insert_id();
    }

    function updateRobot($id_robot, $data){
        $this->db->where('id_robot', $id_robot);
        $this->db->update('roboti',$data);
        return $this->db->affected_rows();
    }
}

