<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class BannerModel extends Model
{
    protected $table = 'banners';
	protected $primaryKey = 'id';
	protected $allowedFields = ['titulo', 'link', 'texto', 'posicao', 'imagem', 'imagem_responsiva', 'status'];
	
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
