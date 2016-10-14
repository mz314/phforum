<?php

namespace PhForum\Lib\Auth;

use Phalcon\Mvc\User\Component;
use PhForum\Models\Users;
use PhForum\Lib\Auth\AnonymousUser;

class Auth extends Component
{

    const SESSION_KEY = 'phauth';

    protected $secret;

    public function __construct($secret)
    {
        $this->secret = $secret;
    }

    public function checkCredentials($username, $password)
    {
        $user = Users::findFirstByUsername($username);

        if ($this->security->checkHash($password, $user->password)) {
            return $user;
        } else {
            return null;
        }
    }

    protected function encryptIdentity(Users $user)
    {
        $data = [
            'id' => $user->id,
            'name' => $user->username,
        ];
        
        $jsonData = json_encode($data);
        
        $encrypted = $jsonData xor $this->secret;
        
        return $encrypted;
    }
    
    protected function decryptIdentity($encrypted)
    {
        $decrypted = $encrypted xor $this->secret;
        
        return (Array)json_decode($decrypted);
    }

    public function authenticateUser(Users $user)
    {
        $identity = $this->encryptIdentity($user);
        
        $this->session->set(self::SESSION_KEY, $identity);
    }

    public function getUser()
    {
        $encrypted = $this->session->get(self::SESSION_KEY);

        $sessionData = $this->decryptIdentity($encrypted);
        
        if (isset($sessionData['id'])) {
            return Users::findFirstById($sessionData['id']);
        }

        return new AnonymousUser();
    }

    public function clearIdentity()
    {
        $this->session->set(self::SESSION_KEY, null);
    }
}
