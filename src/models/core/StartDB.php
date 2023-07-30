<?php
    namespace DB;

    use mysqli;
    use Dotenv\Dotenv;

    class StartDB {
        private $host, $name, $password, $dataBase, $port, $mysqlData;

        public function __construct () {
            $dotenv = Dotenv::createImmutable('../');
            $dotenv->load();

            $this->mysqlData = new mysqli($_ENV['DB_Host'], $_ENV['DB_Name'], $_ENV['DB_Password'], $_ENV['DB'], $_ENV['DB_Port']);
        }
    }
?>