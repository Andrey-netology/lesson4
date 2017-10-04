<?php
$peopleJson = file_get_contents(__DIR__.'/phone_book.json');
$people = json_decode ($peopleJson, JSON_OBJECT_AS_ARRAY);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>List</title>
</head>
<body>
<table style="border: 1px solid black">
    <tr>
        <td> </td>
        <td>   </td>
        <td> </td>


    </tr>

    <?php foreach ($people as $key => $value) {?>
        <tr>
            <td><?= $key ?></td>
            <td><?php echo $value ?></td>
        </tr>
    <?php } ?>



</table>
</body>
</html>
