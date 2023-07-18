<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;


class Home extends Controller
{
    public function __construct()
	{
		
	}

    public function index()
    {
        helper('auth');
        permission();

        $this->data	=	[
                        'empresa'   => 'Axons Neurologia',
                        'telefone'  => '(65) 3661-6144',
                        'endereco'  => 'SB Tower - Av. Historiador Rubens de Mendonça, 1756',
                        'uf'        => 'Cuiabá-MT, CEP: 78000-00',
                        'site'      => 'https://axonsneurologia.com.br',
                        'versaoPhp' => '7.4',
                        'versaoMySQL' => '8.0',
                        'dataAtualizacao' =>  '01/2023',        
                        ];

        echo view('admin/template/header.php');
        echo view('admin/template/sidebar.php');
        echo view('admin/home/index.php', $this->data);
        echo view('admin/template/footer.php');

    }

    public function sobre()
    {
        helper('auth');
        permission();                      

        echo view('admin/template/header.php');
        echo view('admin/template/sidebar.php');
        echo view('admin/home/sobre.php');
        echo view('admin/template/footer.php');

    }
}
