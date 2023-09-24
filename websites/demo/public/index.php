<?php
    const BASE_PATH = __DIR__ . "\\..\\";

    use Core\Router;
    require BASE_PATH . 'Core/functions.php';
    
    // require base_path('Database.php'); // moved here so we'll have de db instance before the router is reqired
    // require base_path('Response.php');

    // to load files that aren't immediatelly available
    // new Database($config['database']); this line is triggering this function
    // it let us declare manually how we want to go about importing classes that 
    // have not already been explicity/manually rewuired
    spl_autoload_register(function($class) {
        $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

        // this condition is added by me, idk why doesn't work otherwise
        if(!str_contains($class, "Core")) {
            $class = "Core/" . $class;
        }

        require base_path("{$class}.php");
    });

    $router = new Router();
    $routes = require base_path('routes.php');

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD']; // shorthand for isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD']
    $router->route($uri, $method);

    // $id = $_GET['id'];
    // $query = "select * from posts where id = {$id}";
    // if i'm writing like this i'm injecting vulerabilitites
    // because the 'id' will take everything that comes after equal in the query
    // so we should binf the variable:
    // $query = "select * from posts where id = ?";
    // or ':id' instead of '?'

    // and here i'll send "['id' => id]"
    // $posts = $db->query($query, [$id])->fetchAll();
    // $posts = $db->query($query)->fetchAll();

    // foreach($posts as $post) {
    //     echo '<li>' . $post['title'] . '</li>';
    // }

    //  php -S localhost:8888 -t public: to have the acces from front only to files from public directory
?>