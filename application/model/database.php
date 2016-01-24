<?php 

	class Database extends PDO{

		public function __construct(){
			
			try{
				parent::__construct('mysql:host=localhost;dbname=optica_db','root','');
				//APEE parent::__construct('mysql:host=localhost;dbname=apeecl_optica_db','apeecl_optica_db','TdomZbzPF)Xu'); 	
				parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				die('No se puede establecer la conexión al servidor.');
			}

		}

	}

?>

