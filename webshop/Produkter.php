<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $url = "http://localhost/webshop/api/api.json";
    $json = file_get_contents($url);


    $array = json_decode($json, true);

    foreach ($array as $key => $value) {
        $table .= "<tr>
        <td> <b>Title:</b> $value[title] </td>
        <br>
        <td> <b>Price:</b> $value[price] </td>
        <br>
        <td> <b>Description:</b> $value[description] </td>
        <br>
        </tr>";
        $table .= "</table>";
        echo $table;
        echo "<img src='$value[image]'widht='100' width='100'>";
        echo "<br>";
        $table = " ";
    }
    
    ?>

</body>
</html>