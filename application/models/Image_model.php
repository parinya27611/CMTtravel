<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Image_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get image by id
     */
    function get_image($id)
    {
        return $this->db->get_where('image',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all image count
     */
    function get_all_image_count()
    {
        $this->db->from('image');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all image
     */
    function get_all_image($params = array())
    {
        $this->db->order_by('travel_id', 'ASC');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('image')->result_array();
    }
        
    /*
     * function to add new image
     */

    function add_image($data = array()){
        $this->db->insert_batch('image',$data);
        return $this->db->insert_id();
    }

    
    /*
     * function to update image
     */
    function update_image($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('image',$params);
    }
    
    /*
     * function to delete image
     */
    function delete_image($id)
    {
        return $this->db->delete('image',array('id'=>$id));
    }

    function delete_imagefiles($id)
    {
        $this->db->order_by('id', 'desc');
       
        return $this->db->get_where('image',array('id'=>$id))->result_array();
        
    }
}
