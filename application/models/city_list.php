<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @database        first_cinema
 * @table           fc_city_list
 **/

class City_List extends CI_Model
{
    /**
     * 基本字段
     */
    var  $id = ''; 
    var  $zh_name = ''; 
    var  $name = ''; 
    var  $d_c_id = ''; 
    var  $parent_id = ''; 
     
    //database  first_cinema 
    const __DATABASE= 'first_cinema';
    const __TABLE= 'fc_city_list';

    function __construct()
    {
        parent::__construct();
    }

    /**
     * insert movie data
     */
    public function insertCityData()
    {
        $this->db->insert(self::__TABLE, $this);
    }

    public function selectCityInfoByField()
    {
        $this->db->select($this->field_str);
       // $this->db->where('id >', '56'); 
        $query = $this->db->get(self::__TABLE);
        $data = $query->result();

        if(empty($data))
        {
            return false;
        }
        return $data;
    }
}
