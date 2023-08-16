<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profile',
            'menu' => 'Profile'
        ];

        // user()->forcePasswordReset();

        return view('profile/index', $data);
    }

    public function update()
    {
        $req = $this->request->getPost();
		$session = \Config\Services::session();
        $validation = \Config\Services::validation();
        $uid = user_id();

        $validatorRoles = [
	        'username' => "required|is_unique[users.username,id,$uid]",
	        'email' => "required|valid_email|is_unique[users.email,id,$uid]"
	    ];
	    $validatorMessage = [   // Errors
	        'username' => [
	          'required' => 'username tidak boleh kosong',
	          'is_unique' => 'username sudah digunakan',
	        ],
	        'email' => [
	        	'required' => 'email tidak boleh kosong',
	        	'valid_email' => 'email tidak valid',
	        	'is_unique' => 'email sudah digunakan'
            ]
	    ];

        if(  isset($req['password']) ){
            $validatorRoles["password"] = "permit_empty|min_length[8]";
            $validatorMessage["password"] = [
                'min_length' => 'password tidak boleh kurang dari 8 karakter'
            ];
        }

        $validation->setRules($validatorRoles, $validatorMessage);
        $validate = $validation->run($req);

        if($validate){
            \Config\Database::connect()->table('users')->where('id', user_id())->update([
                'username' => $req['username'],
                'email' => $req['email']
            ]);
            if( isset($req['password']) ){ 
                \Config\Database::connect()->table('users')->where('id', user_id())->update([
                    'password_hash' => \Myth\Auth\Password::hash($req['password']),
                ]);
            }
        }else{
            $session->setFlashdata('error', $validation->getErrors());
            return redirect()->to('/profile');
        }

        $session->setFlashdata('success', 'Profile anda berhasil di update');
        return redirect()->to('/profile');
    }
}
