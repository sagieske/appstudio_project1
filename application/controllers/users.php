<?php 

class Users extends CI_Controller {
    
    public function login($un='', $pw='') {
        if ($un == 'user' && $pw == 'password' ) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
