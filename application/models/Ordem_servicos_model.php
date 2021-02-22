<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Ordem_servicos_model extends CI_Model {

    public function get_all() {

        $this->db->select([
            'ordens_servicos.*',
            'clientes.cliente_id',
            'clientes.cliente_cpf_cnpj',
            'CONCAT (clientes.cliente_nome, " ", clientes.cliente_sobrenome) as cliente_nome_completo',
            'formas_pagamentos.forma_pagamento_id',
            'formas_pagamentos.forma_pagamento_nome as forma_pagamento',
            'tecnicos.tecnico_id',
            'tecnicos.tecnico_nome_completo as tecnico_nome',
            'equipamentos.equipamento_id',
            'equipamentos.equipamento_nome',
            'equipamentos.equipamento_serie',
            'equipamentos.equipamento_serie_motor',
            'equipamentos.equipamento_hodometro',
            'equipamentos.equipamento_modelo',
            'marcas.marca_id',
            'marcas.marca_nome',
            'carros.carro_id',
            'carros.carro_placa',
        ]);
        
        $this->db->join('clientes', 'cliente_id = ordem_servico_cliente_id', 'LEFT');
        $this->db->join('formas_pagamentos', 'forma_pagamento_id = ordem_servico_forma_pagamento_id', 'LEFT');
        $this->db->join('tecnicos', 'tecnico_id = ordem_servico_tecnico_id', 'LEFT');
        $this->db->join('equipamentos', 'equipamento_id = ordem_servico_equipamento_id', 'LEFT');
        $this->db->join('marcas', 'marca_id = ordem_servico_marca_id', 'LEFT');
        $this->db->join('carros', 'carro_id = ordem_servico_carro_id', 'LEFT');

        return $this->db->get('ordens_servicos')->result();
    }

    public function get_by_id($ordem_servico_id = NULL) {

        $this->db->select([
            'ordens_servicos.*',            
            'clientes.cliente_id',
            'clientes.cliente_nome',
            'formas_pagamentos.forma_pagamento_id',
            'formas_pagamentos.forma_pagamento_nome as forma_pagamento',
            'tecnicos.tecnico_id',
            'tecnicos.tecnico_nome_completo as tecnico_nome',
            'equipamentos.equipamento_id',
            'equipamentos.equipamento_nome',
            'equipamentos.equipamento_serie',
            'equipamentos.equipamento_serie_motor',
            'equipamentos.equipamento_hodometro',
            'equipamentos.equipamento_modelo',
            'marcas.marca_id',
            'marcas.marca_nome',
            'carros.carro_id',
            'carros.carro_placa',
        ]);
        
        $this->db->where('ordem_servico_id', $ordem_servico_id);
        
        $this->db->join('clientes', 'cliente_id = ordem_servico_cliente_id', 'LEFT');
        $this->db->join('formas_pagamentos', 'forma_pagamento_id = ordem_servico_forma_pagamento_id', 'LEFT');
        $this->db->join('tecnicos', 'tecnico_id = ordem_servico_equipamento_id', 'LEFT');
        $this->db->join('equipamentos', 'equipamento_id = ordem_servico_tecnico_id', 'LEFT');
        $this->db->join('marcas', 'marca_id = ordem_servico_marca_id', 'LEFT');
        $this->db->join('carros', 'carro_id = ordem_servico_carro_id', 'LEFT');

        return $this->db->get('ordens_servicos')->row();
    }

    public function get_all_servicos_by_ordem($ordem_servico_id = NULL) {
 
        if ($ordem_servico_id) {
 
            $this->db->select([
                'ordem_tem_servicos.*',
                'servicos.servico_descricao',
            ]);
 
            $this->db->join('servicos', 'servico_id = ordem_ts_id_servico', 'LEFT');
 
            $this->db->where('ordem_ts_id_ordem_servico', $ordem_servico_id);
 
            return $this->db->get('ordem_tem_servicos')->result();
        }
    }

    public function delete_old_services($ordem_servico_id = NULL) {

        if ($ordem_servico_id) {

            $this->db->delete('ordem_tem_servicos', array('ordem_ts_id_ordem_servico' => $ordem_servico_id));
        }
    }
    
    public function get_all_servicos($ordem_servico_id = NULL) {
        
        if($ordem_servico_id){
            
            $this->db->select([
                'ordem_tem_servicos.*',
                'FORMAT(SUM(REPLACE(ordem_ts_valor_unitario, ",", "")), 2) as ordem_ts_valor_unitario',
                'FORMAT(SUM(REPLACE(ordem_ts_valor_total, ",", "")), 2) as ordem_ts_valor_total',
                'servicos.servico_id',
                'servicos.servico_descricao',
            ]);
            
            $this->db->join('servicos', 'servico_id = ordem_ts_id_servico', 'LEFT');
            $this->db->where('ordem_ts_id_servico', $ordem_servico_id);
            
            $this->db->group_by('ordem_ts_id_servico');
            
            return $this->db->get('ordem_tem_servicos')->result();
        }
        
    }
    
    public function get_valor_final_os($oder_servico_id = NULL) {
        
        if($ordem_servico_id){
            
            $this->db->select([
                'FORMAT(SUM(REPLACE(ordem_ts_valor_total, ",", "")), 2) as ordem_ts_valor_total)))',
            ]);
            
            $this->db->join('servicos', 'servico_id = ordem_ts_id_servico', 'LEFT');
            $this->db->where('ordem_ts_id_servico', $ordem_servico_id);  
        }
        
        return $this->db->get('ordem_tem_servicos')->row();
        
    }

}
