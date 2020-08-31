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
		helper(['form']);
	
		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
			// '', '', '', ', 'ends_in', '', 'returnable', 'category', 'user_name', 'item_condition'];

				'item_name' => 'required|min_length[3]|max_length[20]',
				'description' => 'required|min_length[3]|max_length[255]',
				'start_bid' => 'required|min_length[6]|max_length[50]|is_unique[user.user_name]',
				'reserve' => 'required|less_than[0]',
				'get_it_now' => 'required|less_than[0]',
			];
		
			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new ItemModel();
		
				$newData = [
					'first_name' => $this->request->getVar('first_name'),
					'last_name' => $this->request->getVar('last_name'),
					'user_name' => $this->request->getVar('user_name'),
					'password' => $this->request->getVar('password'),
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/');
			}
		}
		
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

	public function category_report()
	{
		$data = [];
		echo view('templates/header', $data);
		echo view('pages/category_report');
		echo view('templates/footer');
	}

	public function user_report()
	{
		$data = [];
		echo view('templates/header', $data);
		echo view('pages/user_report');
		echo view('templates/footer');
	}
	//--------------------------------------------------------------------

}
