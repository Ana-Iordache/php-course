<?php
    namespace Core;

    use PDO;

    class Database {
        public $connection;
        public $statement;
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
            // '/PDO' - it looks for this class from the root
            // 'PDO' - it looks from the current namespace
            // but it is simplier to declare 'use' at the beginning
        }

        // by default, visibility is public
        public function query($query, $params = []) {

            $this->statement = $this->connection->prepare($query);
            $this->statement->execute($params);

            return $this;
            // ;->fetchAll(PDO::FETCH_ASSOC); // to fetch in an associative array rather than indexed
            // $fetchAll will return an array of arrays
            // $fetch will return a single array
            
        }

        public function get() {
            return $this->statement->fetchAll();
        }

        public function find() {
            return $this->statement->fetch();
        }

        public function findOrFail() {
            $result = $this->find();
            if(!$result) {
                abort();
            }

            return $result;
        }
    }
?>