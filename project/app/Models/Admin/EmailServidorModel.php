<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class EmailServidorModel extends Model
{
    protected $table = 'email_servidor';
	protected $primaryKey = 'id';
	protected $allowedFields = ['descricao', 'protocolo', 'smtp_host', 'smtp_porta', 'smtp_usuario', 'smtp_senha', 'smtp_criptografia', 'tipo_email', 'remetente'];
	
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
