<?php

class Recipe extends CI_Model {
    // Class is meant to return different lists of recipes.

    public function get_all() {
        return $this->db->order_by('recipeID', 'asc')->get('recipes')->result();
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
    
    public function get_searched_time( $minutes, $over ) { // Over should be "off" or "on"?
        // TODO: return every recipe that conforms to search.
        return $this->db->order_by('recipeID', 'asc')->get('recipes')->result();
    }

}

?>
