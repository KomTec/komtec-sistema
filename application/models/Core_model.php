<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Core_model extends CI_Model
{
    public function get_all($tabela = NULL, $condicao = NULL)
    {
        if($tabela){

            if(is_array($condicao)){

                $this->db->where($condicao);
            }

            return $this->db->get($tabela)->result();
        }else{

        return false;
        
        }
    }

    public function get_by_id($tabela = NULL, $condicao = NULL)
    {
        if($tabela && is_array($condicao)){

            $this->db->where($condicao);
            $this->db->limit(1);

            return $this->db->get($tabela)->row();
        }else{

            return false;
        }
    }

    public function insert($tabela = NULL, $data = NULL, $get_last_id = NULL)
    {
        if($tabela && is_array($data)){

            $this->db->insert($tabela, $data);

            if($get_last_id){

                $this->session->set_userdata('last_id', $this->db->insert_id());
            }

            if($this->db->affected_rows() > 0){

                $this->session->set_flashdata('sucesso', 'Dados Salvo com sucesso');
            }else{

                $this->session->set_flashdata('error', 'Erro ao salvar dados');

            }

        }else{



        }
    }

    public function update($tabela = NULL, $data = NULL, $condicao = NULL)
    {
        if($tabela && is_array($data) && is_array($condicao)){

            if($this->db->update($tabela, $data, $condicao)){

                $this->session->set_flashdata('sucesso', 'Dados salvo com sucesso!');

            }else{

                $this->session->set_flashdata('error', 'Erro ao atualizar os dados!');
            }

            }else{

            return false;        
        }

    } 

    public function delete($tabela = NULL, $condicao = NULL)
    {

        $this->db->db_debug = false;

        if($tabela && is_array($condicao)){

            $status = $this->db->delete($tabela, $condicao);

            $error = $this->db->error();
            
            if(!$status){

                foreach($error as $code){

                    if($code == 1451){

                        $this->session->set_flasdata('error', 'Esse registro não poderá ser excluído, pois está sendo utilizado em uma tabela!');

                    }
                }
            }else{

                $this->session->set_flashdata('sucesso', 'Registro excluído com sucesso!');
            }

            $this->db->db_debug = true;

        }else{

            return false;

        }
    }
    
    /**
     * @ Habilitar helper string
     * @param string $table
     * @param string $type_of_code. Ex.: 'numeric', 'alpha', 'alnum', 'basic', 'numeric', 'nozero', 'md5', 'sha1'
     * @param int $size_of_code
     * @param string $field_seach
     * @return int
     */
    public function generate_unique_code($table = NULL, $type_of_code = NULL, $size_of_code, $field_search) {

        do {
            $code = random_string($type_of_code, $size_of_code);
            $this->db->where($field_search, $code);
            $this->db->from($table);
        } while ($this->db->count_all_results() >= 1);

        return $code;
    }
}
