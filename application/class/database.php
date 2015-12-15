<?php 

	class Database extends PDO{

		public function __construct(){
			
			try{
				parent::__construct('mysql:host=localhost;dbname=optic a_db','root','');
				parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				die('No se puede establecer la conexión al servidor.');
			}

		}

	}
	/*este es el gatillador de la conexion.
		<?php 
			require '../class/database.php';
			$objConn = new Database();
	    ?>
    */

?>

