<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class GaleriaImagensModel extends Model
{
    protected $table = 'galeria_imagens';
	protected $primaryKey = 'id';
	protected $allowedFields = ['idGaleria', 'imagem'];
	
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
