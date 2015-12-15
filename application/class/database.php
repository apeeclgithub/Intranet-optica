<?php 

	class Database extends PDO{

		public function __construct(){

			parent::__construct('mysql:host=localhost;dbname=optica_db','root','');
			parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		}

	}
	/*este es el gatillador de la conexion.
		<?php 
			require '../class/database.php';
			$objConn = new Database();
	    ?>
    */

?>

