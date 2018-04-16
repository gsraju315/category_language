<?php
class Db_model extends CI_Model {
    public function create_db()
    {
        $database_name = $this->input->post('database_name');
        $database_description = $this->input->post('database_description');
        $this->load->dbforge();
        if (!!$database_name && $this->dbforge->create_database($database_name))
        {
            $created_database = array (
                'database_name' => $database_name,
                'database_description' => $database_description,
                'hostname' => 'localhost',
                'username' => 'root',
                'password' => '',
                'dbdriver' => '',
                'dbprefix' => '',
                'pconnect' => '',
                'db_debug' => '',
                'cache_on' => '',
                'cachedir' => '',
                'char_set' => '',
                'dbcollat' => '',
                'swap_pre' => '',
                'encrypt'  => '',
                'compress' => '',
                'stricton' => '',
                'failover' => '',
                'dsn'      => '',
                'db_schema'=> ''  
            );
            $this->db->insert('database_configuration', $created_database);
        }
    }
}