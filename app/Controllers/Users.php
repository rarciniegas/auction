<?php namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);


		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'user_name' => 'required|min_length[6]|max_length[50]',
				'password' => 'required|min_length[8]|max_length[255]|validateUser[user_name, password]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'User name or Password don\'t match'
				]
			];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$user = $model->where('user_name', $this->request->getVar('user_name'))
											->first();

				$this->setUserSession($user);
				return redirect()->to('welcome');

			}
		}

		echo view('templates/header', $data);
		echo view('users/login');
		echo view('templates/footer');
	}

	private function setUserSession($user){
		$data = [
			'id' => $user['userID'],
			'first_name' => $user['first_name'],
			'last_name' => $user['last_name'],
			'user_name' => $user['user_name'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}
	//--------------------------------------------------------------------

	public function register(){
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'first_name' => 'required|min_length[3]|max_length[20]',
				'last_name' => 'required|min_length[3]|max_length[20]',
				'user_name' => 'required|min_length[6]|max_length[50]|is_unique[user.user_name]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

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
		echo view('users/register');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

	public function profile(){
		
		$data = [];
		helper(['form']);
		$model = new UserModel();

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'first_name' => 'required|min_length[3]|max_length[20]',
				'last_name' => 'required|min_length[3]|max_length[20]',
				];

			if($this->request->getPost('password') != ''){
				$rules['password'] = 'required|min_length[8]|max_length[255]';
				$rules['password_confirm'] = 'matches[password]';
			}


			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{

				$newData = [
					'id' => session()->get('id'),
					'first_name' => $this->request->getPost('first_name'),
					'last_name' => $this->request->getPost('last_name'),
					];
					if($this->request->getPost('password') != ''){
						$newData['password'] = $this->request->getPost('password');
					}
				$model->save($newData);

				session()->setFlashdata('success', 'Successfuly Updated');
				return redirect()->to('/profile');

			}
		}

		$data['user'] = $model->where('id', session()->get('id'))->first();
		echo view('templates/header', $data);
		echo view('users/profile');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------


	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}
}
