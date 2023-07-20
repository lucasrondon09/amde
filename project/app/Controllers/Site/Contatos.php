<?php

namespace App\Controllers\Site;

use App\Models\Admin\EmailServidorModel;
use CodeIgniter\Controller;
use App\Models\Admin\EmailModel;
use App\Models\Admin\EmailServidorModelModel;

class Contatos extends Controller
{

    //--------------------------------------------------------------------
    public function contatos()
    {

        helper('form');

        return view('site/contatos');

    }

    //--------------------------------------------------------------------
    public function sendMail()
    {

        helper('leads');

        $email = \Config\Services::email();

        $this->modelEmail = new EmailModel();
        $this->modelServidorEmail = new EmailServidorModel();

        $server = $this->modelServidorEmail->first();

        $config =       [
            'protocol' => $server->protocolo,
            'SMTPHost' => $server->smtp_host,
            'SMTPPort' => (int)$server->smtp_porta,
            'SMTPUser' => $server->smtp_usuario,
            'SMTPPass' => $server->smtp_senha,
            'wordWrap' => true,
            'mailType' => $server->tipo_email,
            'SMTPCrypto'=> $server->smtp_criptografia
            ];                

            $emailSetTo = $this->modelEmail->findAll();

              foreach($emailSetTo as $emailSetToItem){

                $email->initialize($config);

                $email->setFrom($server->remetente, $server->descricao);

                $email->setTo($emailSetToItem->email);

                $template = view('site/template-email', $this->request->getPost());

                $email->setSubject($this->request->getVar('assunto'));
                $email->setMessage($template);

                $sent = $email->send();


              }

              if(!$sent){
                    var_dump($email->printDebugger());exit;


              }else{

                $fields =   [
                            'nome' => $this->request->getPost('nome'),
                            'email' => $this->request->getPost('email')
                            ];

                $leads = leadsInsert($fields);

                return redirect()->to('/Obrigado');
              }

    }

}
