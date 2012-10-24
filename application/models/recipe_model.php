<?php

class Recipe_model extends CI_Model {
    // Class is meant to return different lists of recipes.

    public function get_all() {
        // Get all known recipes into one big array.
        return $this->db->order_by('recipeID', 'asc')->get('recipes')->result();
    }
    public function get_one($id) { // Get a single recipe, with recipeID == $arg
        return $this->db->get_where('recipes',array('recipeID' => $id))->result();
    }
    
    public function get_favorites() {
        // TODO: Return all favorites.
        return $this->db->order_by('recipeID', 'asc')->get('recipes')->result();
    }
    
    public function get_recent() { 
        // TODO: return every recipe in recently viewed.
        return $this->db->order_by('recipeID', 'asc')->get('recipes')->result();
    }
    
    public function get_searched_words( $words, $fields ) { //are these the right args?
        // TODO: return every recipe that conforms to search.
        return $this->db->order_by('recipeID', 'asc')->get('recipes')->result();
    }
    
    public function get_searched_time() { // Over should be "off" or "on"?
        return $this->db->order_by('recipeID', 'asc')->get('recipes')->result();
    }
    
    public function get_min($type){
        $this->db->select_min($type);
        $query = $this->db->get('recipes');
        return $query->result_array();
    }
    
    public function get_max($type){
        $this->db->select_max($type);
        $query = $this->db->get('recipes');
        return $query->result_array();
    }
    
    public function login($un,$pw){
        return ($un == 'user' && $pw == 'pass'); //TODO look into database
        //(BTW, database looks also into you, BE CAREFUL)
    }

}

?>
