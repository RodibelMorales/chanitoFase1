<?php 
$confi= null;
$confi= array();
$confi['server'] = '50.62.209.75:3306';
$confi['usuario'] = 'poli';
$confi['clave'] = 'medalofhonor2015';
$confi['basedato'] = 'transinet';
$con = new conexionBD($confi['server'],$confi['usuario'],$confi['clave'],$confi['basedato']);

	class conexionBD{
		public $enlace;
		function __construct($server, $usuario, $clave, $basedato){
			$this->enlace = mysql_connect($server,$usuario,$clave) or die(mysql_error());

			mysql_select_db($basedato,$this->enlace);
		}
		function __destruct(){
			mysql_close($this->enlace);
		}
	}
?>
