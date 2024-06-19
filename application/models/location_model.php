<?php
class Location_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllLocations()
    {
        return $this->db->get('location')->result_array();
    }

    public function insertLocation($data)
    {
        return $this->db->insert('location', $data);
    }

    public function getLocation($ID_location)
    {
        return $this->db->get_where('location', array('ID_location' => $ID_location))->row_array();
    }

    public function updateLocation($data, $ID_location)
    {
        $this->db->where('ID_location', $ID_location);
        return $this->db->update('location', $data);
    }

    public function deleteLocation($ID_location)
    {
        return $this->db->delete('location', array('ID_location' => $ID_location));
    }
}
?>
