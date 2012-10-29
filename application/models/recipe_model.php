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
    
    public function get_ratings( $recipe ) {
        return $this->db->get_where('ratings',array('recipeID' => $recipe))->result();
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
        
        $users = $this->db->get_where('users',array('username' => $un))->result();
        foreach ( $users as $user ) {
        
            if ( $pw == $user->password ) { return TRUE; }
        
        }
        return FALSE;
        //(BTW, database gazes also into you, BE CAREFUL)
    }
    public function signup($un,$pw){
        
        $users = $this->db->get_where('users',array('username' => $un))->result();
        foreach ( $users as $user ) {
            return FALSE; // Checks for existing users with the same name
        }
        $data = array(
            'username' => $un,
            'password' => $pw
            // identifier => auto-increment
        );
        $this->db->insert('users', $data); 
        return TRUE;
        
    }
    
    
    public function rate($un, $rating, $recipe) {
        $existing = $this->db->get_where('ratings',array('username' => $un,
                                                       'recipeID' => $recipe))->result();
        foreach ( $existing as $e ) {
            return FALSE; // Breaks on existing rating.
        }
        $data = array(
            'username' => $un,
            'recipeID' => $recipe,
            'rating' => $rating
            // identifier => auto-increment
        );
        $this->db->insert('ratings', $data); 
        return TRUE;
        
    }


}

?>
