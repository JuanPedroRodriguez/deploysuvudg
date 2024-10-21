<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Ejemplo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h1>Tabla de Productos</h1>

<table>
    <thead>
        <tr>
            <th>Nombre del Producto</th>
            <th>Descripción</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Pizza Margherita</td>
            <td>Pizza clásica con salsa de tomate, mozzarella y albahaca.</td>
            <td>$8.00</td>
        </tr>
        <tr>
            <td>Pizza Pepperoni</td>
            <td>Pizza con salsa de tomate, mozzarella y pepperoni.</td>
            <td>$10.00</td>
        </tr>
        <tr>
            <td>Pizza Vegetariana</td>
            <td>Pizza con salsa de tomate, mozzarella y verduras frescas.</td>
            <td>$9.00</td>
        </tr>
    </tbody>
</table>

</body>
</html>
