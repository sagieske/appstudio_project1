<?php 

class Pages extends CI_Controller {

    public function index()
    {
        // By default the "recipe" page is shown.
        $this->view('home');

        //var_dump($recipes);
        //exit;

    }
    
    public function view($page)
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
	    // This loads all recipes every time you load any page.
        $recipes = $this->Recipe->get_all(); // OH MY this is bad.
	    
	    // Showing the header, page, and footer.
	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, array('recipes' => $recipes));
	    $this->load->view('templates/footer', $data);

    }
}

?>
