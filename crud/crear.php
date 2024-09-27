<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen = file_get_contents($_FILES['imagen_producto']['tmp_name']);

    $sql = "INSERT INTO productos (descripcion, precio, imagen) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$descripcion, $precio, $imagen]);

    header("Location: index.html"); 
    exit();
}
?>
