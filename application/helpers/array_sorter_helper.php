<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('array_order_by')) {
    function array_order_by()
    {
        $args = func_get_args();
        $data = array_shift($args);
        foreach ($args as $n => $field) {
            if (is_string($field)) {
                $tmp[$field] = array();
                foreach ($data as $key => $row)
                    $tmp[$field][$key] = $row[$field];
                $args[$n] = &$tmp[$field];
            } else {
                $args[$n] = &$args[$n];
            }
        }
        $args[] = &$data;
        call_user_func_array('array_multisort', $args);
        return array_pop($args);
    }
}

/* End of file array_sorter_helper.php */
/* Location: ./application/helpers/array_sorter_helper.php */