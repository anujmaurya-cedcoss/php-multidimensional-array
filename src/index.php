<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
    <style>
        table,td,tr,th {
            border : 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<?php
$languages = array();
$languages['Python'] = array(
    "first_release" => "1991",
    "latest_release" => "3.8.0",
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py",
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);
$languages['PHP'] = array(
    "first_release" => "1995",
    "latest_release" => "7.3.11",
    "designed_by" => "Rasmus Lerdorf",
    "description" => array(
        "extension" => ".php",
        "typing_discipline" => "Dynamic, weak",
        "license" => "PHP License (most of Zend engine
                    under Zend Engine License)"
    )
);
?>

<body>
    <table>
        <thead>
            <tr>
                <th>First Release</th>
                <th>Latest Release</th>
                <th>Designed By</th>
                <th>Extension</th>
                <th>Typing Discipline</th>
                <th>license</th>
            </tr>
        </thead>
        <?php

        foreach ($languages as $language => $details) {
            echo "<tr>";
            echo "<td> $details[first_release]</td> <td> $details[latest_release] </td> <td> $details[designed_by]</td>";
            foreach ($details['description'] as $key => $value) {
                echo "<td> $value </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>