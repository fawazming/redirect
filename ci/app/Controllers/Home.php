<?php

namespace App\Controllers;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;


class Home extends BaseController
{
    public function index()
    {
        echo ("Welcome to redirect");
    }

    public function cawebhook()
    {
        $Logs = new \App\Models\Logs();
        $incoming = $this->request->getPost();
        $incoming = hash_hmac('sha512', $incoming, $_ENV['caSK']);
        $Logs->insert(['logs'=>json_encode($incoming), 'type'=>'collectAfrica']);
    }

    public function test()
    {
        echo view('home');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }

    //--------------------------------------------------------------------

}
