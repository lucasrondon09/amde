<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class NoticiaModel extends Model
{
    protected $table = 'noticias';
	protected $primaryKey = 'id';
	protected $allowedFields = ['idCategoria', 'idUsuario', 'titulo', 'subtitulo', 'texto', 'capa', 'dataNoticia', 'slug', 'status', 'visualizacoes'];
	
	protected $returnType     = 'object';
    protected $useSoftDeletes = true;
	
	protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
		
	public function get($id = null)
	{
		if($id <> null)
		{
			return $this->find($id);
				
		}
		
		return $this->find();
	
	}


	
}
