<?php

class AbstractPdoConnector {
    
	const DRIVER = 'mysql';
    const SOCKET = '/tmp/mysql5.sock';
    const HOST = 'localhost';
    const DATABASE_NAME = 'db472681427';
    const USER = 'dbo472681427';
	const PASSWORD = 'u5822mVM8232dcY';
	
	protected $pdo;
	
	
	public function __construct() {
		$dsn = self::DRIVER.':host='.self::HOST.';unix_socket='.self::SOCKET.';dbname='.self::DATABASE_NAME;
		$this->pdo = new PDO($dsn, self::USER, self::PASSWORD, array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
		$this->pdo->query("SET time_zone = '-4:00';");
	}
}

?>
