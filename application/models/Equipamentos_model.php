<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Equipamentos_model extends CI_Model
{

    public function get_all()
    {
        $this->db->select([
            'equipamentos.*',
            'marcas.marca_id',
            'marcas.marca_nome as equipamento_marca',

        ]);
        
        $this->db->join('marcas', 'marca_id = equipamento_marca_id', 'LEFT');

        return $this->db->get('equipamentos')->result();
    }

}


