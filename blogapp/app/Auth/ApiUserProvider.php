<?php
namespace App\Auth;

use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use GuzzleHttp\Client;

class ApiUserProvider implements UserProvider
{
    /**
     * Retrieve a user by the given credentials.
     *
     * @param  array  $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
        $user = $this->getUserByUsername($credentials['username']);

        return $this->getApiUser($user);
    }

    /**
     * Retrieve a user by their unique identifier.
     *
     * @param  mixed  $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier)
    {
        $user = $this->getUserById($identifier);

        return $this->getApiUser($user);
    }

    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        return $user->getAuthPassword() == $credentials['password'];
    }

    /**
     * Get the api user.
     *
     * @param  mixed  $user
     * @return \App\Auth\ApiUser|null
     */
    protected function getApiUser($user)
    {
        if ($user !== null) {
            return new ApiUser($user);
        }
    }

    /**
     * Get the user details from your API.
     *
     * @param  string  $username
     * @return array|null
     */
    protected function getUsers()
    {

        $login_api = 'http://127.0.0.1:8000/user/login/';

        $client = new Client();
        $username = request()->username;
        $password = request()->password;  

        $response = $client->request('POST', $login_api, [
            'form_params' => [ 
                'username' => $username,
                'password' => $password
            ]
        ]);
        // $ch = curl_init();

        // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:8000/user/login/');

        // $response = curl_exec($ch);
        // $response = json_decode($response, true);

        // curl_close($ch);

        return $response['data'];
    }

    protected function getUserById($id)
    {
        $user = [];

        foreach ($this->getUsers() as $item) {
            if ($item['account_id'] == $id) {
                $user = $item;

                break;
            }
        }

        return $user ?: null;
    }

    protected function getUserByUsername($username)
    {
        $user = [];

        foreach ($this->getUsers() as $item) {
            if ($item['username'] == $username) {
                $user = $item;

                break;
            }
        }

        return $user ?: null;
    }

    // The methods below need to be defined because of the Authenticatable contract
    // but need no implementation for 'Auth::attempt' to work and can be implemented
    // if you need their functionality
    public function retrieveByToken($identifier, $token) { }
    public function updateRememberToken(UserContract $user, $token) { }
}