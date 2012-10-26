<?php 

class Pages extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Recipe_model');
    }
    
    public function logout() {
        $this->session->set_userdata('logged_in', FALSE );
        $this->session->set_userdata('username', '' );
    }
    
    public function login() {
        $un = $this->input->post("un");
        $pw = $this->input->post("pw");
        $correct = $this->Recipe_model->login($un, $pw);
        if ( $correct ) {
            $newdata = array(
                   'username'  => $un,
                   'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
        }
        return $correct;
    }
    public function signup() {
        $un = $this->input->post("un");
        $pw = $this->input->post("pw");
        $correct = $this->Recipe_model->signup($un, $pw);
        if ( $correct ) {
            $newdata = array(
                   'username'  => $un,
                   'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
        }
        return $correct;
    }

    public function index()
    {
        // By default the "recipe" page is shown.
        // Links don't work when at 'appstudio_project1/pages', so redirect.
        header( 'Location: view/home' );
        //var_dump($recipes);
        //exit;

    }
    
    public function view($page, $arg = 'whatever')
    {
        // Full link to path is apparently necessary. Does this always work?
	    // FIXED: if ( !file_exists('file:///home/jharvard/vhosts/appstudio_project1/application/views/pages/'.$page.'.php'))
	    if (!file_exists('../application/views/pages/'.$page.'.php')) 
	    {
		    // Whoops, we don't have a page for that!
		    show_404();
	    }
	    
	    // Impromptu title for the page.
	    $data['title'] = ucfirst($page); // Capitalize the first letter
	    
	    // Showing the header, page, and footer.
        
	    $this->load->view('templates/header', $data);
	    //List page:
	    if ( $page == 'list' ) {
	        $recipes = $this->Recipe_model->get_all();
	        $this->load->view('pages/'.$page, array('recipes' => $recipes));
	    } 
	    //Recipe page:
	    elseif ( $page == 'recipe' ) {
	        $recipes = $this->Recipe_model->get_one($arg);
	        $this->load->view('pages/'.$page, array('recipes' => $recipes));
	    }
	    //Search page
	    elseif ( $page == 'search' ) {
	    	$data['mintime'] = $this->Recipe_model->get_min('time');
	    	$data['maxtime'] = $this->Recipe_model->get_max('time');
	    	$data['minyield'] = $this->Recipe_model->get_min('yield');
	    	$data['maxyield'] = $this->Recipe_model->get_max('yield');
	        $this->load->view('pages/'.$page, $data);
	    }
	    //Home page
	    elseif ( $page == 'home' ) {
	        if ( isset($_POST['un']) ) {
	    	    $this->login(); // This function does all the work.
	    	}
	        $this->load->view('pages/'.$page,'eh');
	    }
	    //user has just signed up!
	    elseif ( $page == 'welcome' ) {
	        if ( isset($_POST['un']) ) {
	    	    $itworked = $this->signup(); // This function does all the work.
	    	}
	        if ($itworked) {$this->load->view('pages/'.$page,'eh');}
	        else {$this->load->view('pages/signup_error','eh');}
	    }
	    //logging out!
	    elseif ( $page == 'logout' ) {
	        $this->session->unset_userdata('username');
	        $this->session->unset_userdata('logged_in');
	        $this->load->view('pages/'.$page,'eh');
	    }
	    // Catchall for other pages.
	    else {
	        $this->load->view('pages/'.$page, "nothing");
	    }
	    
	    
	    //Footer
	    if ($page == 'recipe'){
	        $this->load->view('templates/footerRecipe', $data);
	        }
	    else {
	    	$this->load->view('templates/footer', $data);
	    }
        
    }
    
}

?>
