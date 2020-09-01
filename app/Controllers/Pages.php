<?php namespace App\Controllers;

use App\Models\ItemModel;


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
				'item_name' => 'required|min_length[3]|max_length[20]',
				'description' => 'required|min_length[3]|max_length[255]',
				'start_bid' => 'required|greater_than_equal_to[0]',
				'reserve' => 'required|greater_than_equal_to[0]',
				'get_it_now' => 'required|greater_than_equal_to[0]',
			];
			
			$ends_in = Date('y:m:d H:i:s', strtotime('+'.$_POST['ends_in']));
			if( isset( $_POST['returnable'] ) ){
				$returnable = 1;
			} else{
				$returnable = 0;
			}

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new ItemModel();
		
				$newData = [
					'item_name' => $this->request->getVar('item_name'),
					'description' => $this->request->getVar('description'),
					'start_bid' => $this->request->getVar('start_bid'),
					'reserve' => $this->request->getVar('reserve'),
					'ends_in' => $ends_in,
					'get_it_now' => $this->request->getVar('get_it_now'),
					'returnable' => $returnable,
					'category' => $this->request->getVar('category'),
					'user_name' => $_SESSION['user_name'],
					'item_condition' => $this->request->getVar('shape'),

				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('welcome');
			}
		}
		
		echo view('templates/header', $data);
		echo view('pages/list_item');
		echo view('templates/footer');
	}

	public function item_search()
	{
		$data = [];
		helper(['form']);
	
		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'keyword' => 'required|min_length[3]|max_length[20]',
				'min_price' => 'required|greater_than_equal_to[0]',
				'max_price' => 'required|greater_than_equal_to[0]',
			];
			


			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
		
				$data = [
					'keyword' => $this->request->getVar('keyword'),
					'category' => $this->request->getVar('category'),
					'min_price' => $this->request->getVar('min_price'),
					'max_price' => $this->request->getVar('max_price'),
					'condition' => $this->request->getVar('condition'),
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('welcome');
			}
		}
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
