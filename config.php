<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_NAME', 'tuesday');

/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME,);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Database Connected';
    $query = "SELECT * FROM myguests;";
    foreach ($pdo->query($query) as $row)
    {
        echo "WORD: ". $row[0]. "<br>";
        echo "EXPLANATION: " .$row[1];
        echo "<br><br>";

    }
    

} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>

