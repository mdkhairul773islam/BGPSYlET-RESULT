<?php 


// get data array
if (!function_exists('data_array')) {
    function data_array($array = array())
    {
        if (!empty($array)) {

            $new_data = array();
            foreach ($array as $val) {
                $new_data[$val] = htmlspecialchars($_POST[$val]);
            }
            return $new_data;
        } else {
            return false;
        }
    }
}


// get row
if (!function_exists('get_row')) {
    function get_row($table, $where = array())
    {
        //get main CodeIgniter object
        $ci =& get_instance();

        //get data from databasea
        if (!empty($where)) {
            $query = $ci->db->where($where)->get($table);
            if ($query->num_rows() > 0) {
                $result = $query->row();
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

// get all data
if (!function_exists('get_result')) {
    function get_result($table, $where = array(),  $groupBy = null, $order_col = null, $order_by = null, $limit = null)
    {
        //get main CodeIgniter object
        $ci =& get_instance();

        //get data from databasea
        $ci->db->where($where);
        
        // get group by
        if(!empty($groupBy)){
            $ci->db->group_by($groupBy);
        }

        if (!empty($order_col) && !empty($order_by)) {
            $order_col = $order_col;
            $order_by = $order_by;
            $ci->db->order_by($order_col, $order_by);
        } 

        

        if (!empty($limit)) {
            $ci->db->limit($limit);
        }

        $query = $ci->db->get($table);

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }
}


// get name
if (!function_exists('get_name')) {
    function get_name($table, $where = array(), $column)
    {
        //get main CodeIgniter object
        $ci =& get_instance();

        //get data from databasea
        if ($ci->db->field_exists($column, $table)) {
            //get data from databasea
            $ci->db->select($column);
            $ci->db->where($where);
            $query = $ci->db->get($table);

            if ($query->num_rows() > 0) {
                $result = $query->row();
                echo $result->$column;
            } else {
                echo "N/A";
            }
        } else {
            echo "Field not exists!";
        }
    }
}

// get join all data
if (!function_exists('get_join')) {
    function get_join($tableFrom, $tableTo, $joinCond, $where = array(), $select = array(), $groupBy = null, $order_col = null, $order_by = null, $limit = null)
    {
        //get main CodeIgniter object
        $ci =& get_instance();

        // get all query
        if (!empty($select)){
            foreach ($select as $s_value) {
                $ci->db->select($s_value);
            }
        }else{
            $ci->db->select('*');
        }
        
        $ci->db->from($tableFrom);
        $ci->db->join($tableTo, $joinCond);
        $ci->db->where($where);
        
        // get group by
        if(!empty($groupBy)){
            $ci->db->group_by($groupBy);
        }

        // get order by
        if (!empty($order_col) && !empty($order_by)) {
            $order_col = $order_col;
            $order_by = $order_by;
            $ci->db->order_by($order_col, $order_by);
        }

        // get limit
        if (!empty($limit)) {
            $ci->db->limit($limit);
        }

        // get query
        $query = $ci->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }
}

// get row join
if (!function_exists('get_row_join')) {
    function get_row_join($tableFrom, $tableTo, $joinCond, $where = array(), $select = array())
    {
        //get main CodeIgniter object
        $ci =& get_instance();

        // get all query
        if (!empty($select)){
            foreach ($select as $s_value) {
                $ci->db->select($s_value);
            }
        }else{
            $ci->db->select('*');
        }
        $ci->db->from($tableFrom);
        $ci->db->join($tableTo, $joinCond);
        $ci->db->where($where);

        // get order by
        if (!empty($order_col) && !empty($order_by)) {
            $order_col = $order_col;
            $order_by = $order_by;
            $ci->db->order_by($order_col, $order_by);
        }

        // get limit
        if (!empty($limit)) {
            $ci->db->limit($limit);
        }

        // get query
        $query = $ci->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result;
        } else {
            return false;
        }
    }
}