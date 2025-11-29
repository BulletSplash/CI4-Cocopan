<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function login()
    {
        $session = session();
        $request = service('request');

            // Here i created rules for email and password
        $validation = service('validation');
        // Variable comes from the html the id from the input
        // Format: variable, human readable name, rules seperated by |
        // So this following rule means variable email is Email which means it should not be null and has valid email format
        $validation->setRule('email', 'Email', 'required|valid_email');
        // The following rule means variable password, ma,ed Password and it should not be null
        $validation->setRule('password', 'Password', 'required');

        // Other Rules
        // min_length[]
        // max_length[]
        // permit_empty
        // matches[<variable name here>]
        
        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $email = $request->getPost('email');
        $userModel = new \App\Models\UsersModel();
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            $session->setFlashdata('errors', ['email' => 'Email does not exist!']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);

        if (! password_verify($request->getPost('password'), $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $session->set([
            'id' => $userArr['users_id'] ?? null,
            'email' => $userArr['email'] ?? null,
            'full_name' => $userArr['full_name'] ?? null,
            'type' => $userArr['type'] ?? 'client',
        ]);

        $type = strtolower($userArr['type'] ?? 'client');

        if ($type === 'manager') {
            return redirect()->to('/');
        }

        if ($type === 'client') {
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        return redirect()->to('/');
    }

    public function register()
    {
        $session = session();
        $request = service('request');

        $validation = service('validation');
        $validation->setRule('full_name', 'Password', 'required|min_length[8]');
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required|min_length[8]');

        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        if ($post['password'] !== $post['confirm_password'])
        {
            $session->setFlashdata('errors', ['password' => 'Password and Confirm Password not matching']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $userModel = new \App\Models\UsersModel();

        $data = [
<<<<<<< HEAD
            'full_name' => $post['full_name'],
=======
            'full_name' => $post['first_name'],
>>>>>>> a319a8f56a1e8ec40f8e4749afe3ef879f6ffdfb
            'email' => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type' => 'client',
        ];

<<<<<<< HEAD
        $inserted = $userModel->insert($data);

=======
>>>>>>> a319a8f56a1e8ec40f8e4749afe3ef879f6ffdfb
        return redirect()->to('/register');
    }
}
