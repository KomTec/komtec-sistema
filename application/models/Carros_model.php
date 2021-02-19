<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Carros_model extends CI_Model
{

    public function get_all()
    {
        $this->db->select([
            'carros.*',
            'marcas.marca_id',
            'marcas.marca_nome as carro_marca',

        ]);
        
        $this->db->join('marcas', 'marca_id = carro_marca_id', 'LEFT');

        return $this->db->get('carros')->result();
    }

}


