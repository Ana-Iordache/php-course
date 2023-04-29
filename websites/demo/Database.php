<?php
    class Database {
        public $connection;
        public function __construct($config, $username = 'root', $password = 'anaiordache') {

            // create an instance of PDO class (PHP Data Object)
            // $dsn -> data durce name => the connection string to the DB
            // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
            $dsn = 'mysql:' . http_build_query($config, '', ';');
            // http_build_query will build the query -> host=localhost;port=3306;dbname=learn_php;charset=utf8mb4
            // '' -> the prefix
            // ';' -> the separator. by default is '&'

            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        // by default, visibility is public
        public function query($query) {

            $statement = $this->connection->prepare($query);
            $statement->execute();

            return $statement;
            // ;->fetchAll(PDO::FETCH_ASSOC); // to fetch in an associative array rather than indexed
            // $fetchAll will return an array of arrays
            // $fetch will return a single array
            
        }
    }
?>