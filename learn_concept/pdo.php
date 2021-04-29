<?php
    $host       = 'localhost';
    $user       = 'root';
    $password   = 'Goodman5!';
    $dbname     = 'test';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    // PDO instance, наследуем класс PDO в переменную $pdo;
    $pdo = new PDO($dsn, $user, $password);
    // PDO attribute, чтобы результат был ассоциативным массивом.
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // Prepare statements (prepare & execute)
    $role = 'guest';

    $sql = 'SELECT * FROM pdo WHERE role = :role';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['role'=>$role]);
    $posts = $stmt->fetchAll();

    foreach ($posts as $post) {
        echo $post->name . '<br>';
    }
    var_dump($posts);


