<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [];
		echo view('templates/header', $data);
		echo view('pages/welcome');
		echo view('templates/footer');
	}

	public function view($page = 'home')
	{
    	if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
    	{
        // Whoops, we don't have a page for that!
        	throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    	}

    	$data['title'] = ucfirst($page); // Capitalize the first letter

    	echo view('templates/header', $data);
    	echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
	}
	
	public function list_item()
	{
		$data = [];
		echo view('templates/header', $data);
		echo view('pages/list_item');
		echo view('templates/footer');
	}

	public function item_search()
	{
		$data = [];
		echo view('templates/header', $data);
		echo view('pages/item_search');
		echo view('templates/footer');
	}

	public function auction_results()
	{
		$data = [];
		echo view('templates/header', $data);
		echo view('pages/auction_results');
		echo view('templates/footer');
	}
	//--------------------------------------------------------------------

}
