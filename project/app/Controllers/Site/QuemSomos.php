<?php

namespace App\Controllers\Site;

use CodeIgniter\Controller;
use App\Models\Admin\GaleriaImagensModel;
use App\Models\Admin\PaginasModel;
use App\Models\Admin\ServicoModel;

class QuemSomos extends Controller
{

    //--------------------------------------------------------------------
    public function sobre()
    {

        $this->modelGaleriaImagens	= new GaleriaImagensModel();
        $this->modelPaginas	= new PaginasModel();
        $this->modelServico	= new ServicoModel();

        $this->data =   [
                            'imagens'  => $this->modelGaleriaImagens->where('idGaleria', 1)->find(),
                            'pagina'   => $this->modelPaginas->get(7),
                            'servicos' =>$this->modelServico->where('status', 1)->findAll()
                        ];

        echo view('site/header.php', $this->data);
        echo view('site/sobre.php');
        echo view('site/footer.php');

    }



}
