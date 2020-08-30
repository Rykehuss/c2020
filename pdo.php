<?php

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=w3schools;host=127.0.0.1';
$user = 'root';
$password = '';

$style = "'border: black 1px solid; padding:5px; margin:5px'";

class Order {
    public $OrderID;
    public $CustomerID;
    public $EmployeeID;
    public $OrderDate;
    public $ShipperID;

    public function sayHello()
    {
        echo "Hello!";
    }
}

try {
    $dbh = new PDO($dsn, $user, $password);
    $query = 'SELECT * FROM orders WHERE CustomerID = 4';

    // Fetch as array of values
    echo "<div style={$style}>";

    $result = $dbh->query($query);
//    var_dump($result);
    foreach ($result as $row) {
        var_dump($row);
        echo "<br>";
    }
    echo "</div>";

    // Fetch as object
    echo "<div style={$style}>";
    $result = $dbh->query($query, PDO::FETCH_CLASS, Order::class);
    foreach ($result as $row) {
        var_dump($row);
        echo "<br>";
    }
    echo "</div>";

    //PDOStatement
    $sth = $dbh->prepare($query);
    $sth->execute();

    $sth->setFetchMode(PDO::FETCH_CLASS, Order::class);
    $order1 = $sth->fetch();
    $sth->setFetchMode(PDO::FETCH_OBJ);
    $order2 = $sth->fetch();
    $order3 = $sth->fetch();

    echo "<div style={$style}>";
    var_dump($order1);
    echo "<br>";
    $order1->sayHello();
    echo "</div>";

    echo "<div style={$style}>";
    var_dump($order2);
    echo "<br>";
//    $order2->sayHello();
    echo "</div>";

    echo "<div style={$style}>";
    var_dump($order3);
    echo "</div>";

    // Fetch all
    $sth = $dbh->prepare($query);
    $sth->execute();

    $sth->setFetchMode(PDO::FETCH_CLASS, Order::class);
    $orders = $sth->fetchAll();

    echo "<div style={$style}>";
    var_dump($orders);
    echo "</div>";

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}