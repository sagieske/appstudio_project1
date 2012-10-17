<?php 

class Pages extends CI_Controller {

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
	    if ( !file_exists('file:///home/jharvard/vhosts/appstudio_project1/application/views/pages/'.$page.'.php'))
	    {
		    // Whoops, we don't have a page for that!
		    show_404();
	    }
	    
	    // Impromptu title for the page.
	    $data['title'] = ucfirst($page); // Capitalize the first letter
	    
	    $this->load->model('Recipe');
	    
	    // Showing the header, page, and footer.

	    $this->load->view('templates/header', $data);
	    if ( $page == 'list' ) {
	        $recipes = $this->Recipe->get_all();
	        $this->load->view('pages/'.$page, array('recipes' => $recipes));
	    } elseif ( $page == 'recipe' ) {
	        $recipes = $this->Recipe->get_one($arg);
	        $this->load->view('pages/'.$page, array('recipes' => $recipes));
	    } else {
	        $this->load->view('pages/'.$page, "nothing");
	    }
	    if ($page == 'recipe'){
	        $this->load->view('templates/footerRecipe', $data);
	        }
	    else {
	    	$this->load->view('templates/footer', $data);
	    }
        
    }
}

?>
