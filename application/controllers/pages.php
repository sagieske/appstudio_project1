<?php 

class Pages extends CI_Controller {

    public function index()
    {
        // By default the "recipe" page is shown.
        $this->view('home','what');

        //var_dump($recipes);
        //exit;

    }
    
    public function view($page, $arg)
    {
        /* This check seems to return nonexistant even when not appropriate.
	    if ( ! file_exists('application/views/pages/'.$page.'.php'))
	    {
		    // Whoops, we don't have a page for that!
		    show_404();
	    }
	    */
	    
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
	    }
	    $this->load->view('templates/footer', $data);

    }
}

?>
