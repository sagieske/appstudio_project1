<?php 

class Pages extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('Recipe_model');
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
	        $this->load->view('pages/'.$page);
	    }//
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
