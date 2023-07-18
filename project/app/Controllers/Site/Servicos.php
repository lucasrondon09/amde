<?php

namespace App\Controllers\Site;

use CodeIgniter\Controller;
use App\Models\Admin\ServicoModel;

class Servicos extends Controller
{

    //--------------------------------------------------------------------
    public function index()
    {

        $this->model = new ServicoModel();

        $this->data =   [
                        'fields'    =>$this->model->where('status', 1)
                                                  ->paginate(12),
                        'pager'     =>$this->model->pager,
                        'servicos'  =>$this->model->where('status', 1)->findAll()
                        ];


        echo view('site/header.php', $this->data);
        echo view('site/servicos.php');
        echo view('site/footer.php');

    }

    //--------------------------------------------------------------------
    public function servicos($params)
    {

        $this->model = new ServicoModel();

        $this->data =   [
                        'fields'    =>$this->model->where('slug',$params)->first(),
                        'servicos'  =>$this->model->where('status', 1)->findAll()
                        ];


        echo view('site/header.php', $this->data);
        echo view('site/servicos-detalhes.php');
        echo view('site/footer.php');

    }




}
