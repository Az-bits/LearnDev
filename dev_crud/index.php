<?php
include 'conexion.php';
$conn = conectar();

$query = 'SELECT * FROM persona';
$res = mysqli_query($conn, $query);

// echo "<pre>";
// print_r($res);
// echo "</pre>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dev_crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container p-3">
        <h1 class="text-center">Listado de personas</h1>
        <a href="crear.php" class="btn btn-primary mb-2">Crear +</a>
        <div class="table-responsive">
            <table class="table table-secondary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">CI</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">FECHA NACIMIENTO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($res)) : ?>
                    <tr class="">
                        <td scope="row"><?= $row['id'] ?></td>
                        <td scope="row"><?= $row['ci'] ?></td>
                        <td scope="row"><?= $row['nombre'] ?></td>
                        <td scope="row"><?= $row['fecha_nac'] ?></td>
                        <td scope="row">
                            <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm">Editar</a>
                            <a href="eliminar.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>