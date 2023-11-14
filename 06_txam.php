<?php
include_once('./conn_obj/conn.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body>
    <?php
    $sql_query = 'SELECT * FROM scorelist';
    $result = $db_link->query($sql_query);
    print_r($result);
    ?>
    <div class="container mt-5 text-center">
        <table class="table table-striped mb-0">
            <tr>
                <th>序號id</th>
                <th>學號cID</th>
                <th>科目course</th>
                <th>分數score</th>
            </tr>
            <?php
            while ($row_result = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row_result['id'] ?></td>
                    <td><?php echo $row_result['cID'] ?></td>
                    <td><?php echo $row_result['course'] ?>alt=""></td>
                    <td><?php echo $row_result['score'] ?><img src="./icon/<?php if ($row_result['score'] < 50) {
                                                                                echo 's';
                                                                            } else if ($row_result['score'] > 95) {
                                                                                echo 'h';
                                                                            } else {
                                                                                echo 'is';
                                                                            }
                                                                            ?>.png"></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>