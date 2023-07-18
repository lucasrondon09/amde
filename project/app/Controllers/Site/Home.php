<?php

namespace App\Controllers\Site;

use CodeIgniter\Controller;
use App\Models\Admin\NoticiaModel;
use App\Models\Admin\LeadsModel;
use App\Models\Admin\BannerModel;
use App\Models\Admin\ServicoModel;

class Home extends Controller
{

    //--------------------------------------------------------------------
    public function __construct()
	{
        $this->validation = \Config\Services::validation();
	}


    //--------------------------------------------------------------------
    public function index()
    {
        helper('text');
        setlocale(LC_TIME, 'pt_BR.utf-8');

        $this->model	= new NoticiaModel();
        $this->data = 	[
                            'noticia'   => $this->model->select('noticias.id as id, noticias.titulo as tituloNoticia, noticias.texto as texto, noticias_categorias.titulo as tituloCategoria, 
                                                                        noticias.capa as capa, noticias.dataNoticia as dataNoticia, noticias.slug as slug, noticias.visualizacoes as visualizacoes')
                                ->join('noticias_categorias', 'noticias.idCategoria = noticias_categorias.id')
                                ->where('status', 1)
                                ->limit(3)
                                ->orderBy('noticias.dataNoticia desc')
                                ->find()
                        ];

        return view('site/index.php', $this->data);

    }

    //--------------------------------------------------------------------
    public function home()
    {

        helper('form');

        $this->model	= new NoticiaModel();
        $this->modelBanner	= new BannerModel();
        $this->modelServico	= new ServicoModel();

        $this->data = 	[
                        'noticia'           => $this->model->select('noticias.id as id, noticias.titulo as tituloNoticia, noticias.texto as texto, noticias_categorias.titulo as tituloCategoria, noticias.capa as capa')
                                                     ->join('noticias_categorias', 'noticias.idCategoria = noticias_categorias.id')
                                                     ->where('status', 1)
                                                     ->limit(3)
                                                     ->orderBy('noticias.dataNoticia desc')
                                                     ->find(),
                        'banner'            =>$this->modelBanner->where('status', 1)
                                                            ->orderBy('posicao asc')
                                                            ->find(),
                        'servicos'          =>$this->modelServico->where('status', 1)->findAll()
                                                                                    

                        ];

        echo view('site/header.php', $this->data);
        echo view('site/home.php');
        echo view('site/footer.php');

    }

    //--------------------------------------------------------------------
    public function newsletter()
    {
        helper('leads');
       

        if($this->request->getMethod() === 'post'){

            
                $fields = $this->request->getVar();

                $leads = leadsInsert($fields);

                if(!$leads){

                    echo view('site/header.php');
                    echo view('site/obrigado.php');
                    echo view('site/footer.php');
                    
                }

            echo view('site/header.php');
            echo view('site/obrigado.php');
            echo view('site/footer.php');

        }
    }

    //--------------------------------------------------------------------
    public function obrigado()
    {

        echo view('site/header.php');
        echo view('site/obrigado.php');
        echo view('site/footer.php');

    }

    //--------------------------------------------------------------------
    public function email()
    {

        return view('site/template-email.php');

    }



}
