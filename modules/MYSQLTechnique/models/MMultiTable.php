<?php

class MMultiTable extends CI_Model {

    /*
        public $title;
        public $content;
        public $date;
    */
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function main(){
//            $q = $this->Moap->get("select table_name from information_schema.tables where (table_name like 'mst%' or table_name like 'r_%' or table_name like 'reff_%' or table_name like 't_%') and table_schema = 'sip_bpiw' and table_name != 'mst_user'");
            $q = $this->Moap->get("select table_name from information_schema.tables where table_schema = 'classicmodels'");
            $ds = array();
            $tmp = array();
            foreach ($q as $row) {
                $data = $this->Moap->table($row->table_name);
                $fields = $this->db->list_fields($row->table_name);
                foreach ($data as $dat) {
                    foreach ($fields as $field) {
                        $tmp[] = array(
                            "$field" => $dat->$field,
                        );
                    }                
                }
                $temp = array($row->table_name => $tmp);
            }
            
            array_push($ds, $temp);
            
            echo json_encode($ds); 
        }
        
         public function object(){
//            $q = $this->Moap->get("select table_name from information_schema.tables where (table_name like 'mst%' or table_name like 'r_%' or table_name like 'reff_%' or table_name like 't_%') and table_schema = 'sip_bpiw' and table_name != 'mst_user'");
            $q = $this->Moap->get("select table_name from information_schema.tables where table_schema = 'classicmodels'");
            $result = array();
            foreach ($q as $row) {

                $this->db->from($row->table_name);
                $data = $this->db->get();
                $result[$row->table_name] = $data->result();

            }
            
               
            echo json_encode($result); 
        }

}
?>
