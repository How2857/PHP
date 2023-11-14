<?php
include_once('./conn.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<style>
    .carousel-inner IMG {
        width: 100vw;
        height: 40vh;
        object-fit: cover;
        object-position: 50% 60%;

    }

    .carousel-caption h5,
    .carousel-caption p {
        color: seashell;
        display: inline-block;
        background-color: black;
        border-radius: 8px;
        box-sizing: border-box;
        padding: 3px 20px;
        /* display: inline;
        background-color:black; */

    }

    #set_radius {
        /* background-color: black; */
        /* display: flex; */
        /* border-color: black; */
        border-radius: -10px;
    }

    /* h5,
    p {
        
    } */

    /* .carousel-inner div
    {
        background-color:black;
        
    } */
</style>

<body>
    <!-- nav start shift + alt 下 複製一行 -->
    <?php
    require("./01_t_nav.php")
    ?>
    <!-- shift+alt+放向鍵  複製並位移 -->
    <!-- alt+方向鍵 整行位移 -->
    <!-- nav end  -->







    <!-- slide bar stat -->
    <?php
    include('./02_t_slideBar.php')
    ?>



    <?php
    $sql_query = 'SELECT * FROM students';
    $result = $db_link->query($sql_query);
    print_r($result);
    ?>



    <div class="container mt-5 text-center">
        <h1>會員管理系統 - 共<?php echo $result->num_rows; ?>筆</h1>
        <P>請點選下方功能,進行編輯或刪除<span class="btn btn-primary btn-sm">編輯</span>
        </P>
        <div id="set_radius" class="d-flax order-1">
            <table class="table table-striped mb-0 d-flex order-2">
                <tr>
                    <th>編號</th>
                    <th>姓名</th>
                    <th>生日</th>
                    <th>電話</th>
                    <th><span class="btn btn-primary btn-sm">編輯</span></th>
                </tr>
                <?php
                //php變數 $i(開頭_ $age $age_men)
                // for ($i = 1; $i < 20; $i++) {
                //     //如果小於等於9 要補零
                //     if ($i < 9) {
                //         $i = "0" . $i;
                //     }
                $i = 1;
                while ($row_result = $result->fetch_assoc()) {


                ?>
                    <tr>
                        <td><?php
                            //三元運算
                            $i = ($i <= 9) ? '0' . $i : $i;
                            // if ($i < 9) {
                            //     $i = '0' . $i;
                            echo $i;
                            $i++;
                            // };

                            ?></td>
                        <td><?php echo $row_result['cName']  ?><img src="./icon/<?php echo ($row_result['cSex'] == 'F') ? 'F1' : 'M1' ?>.png"></td>
                        <td><?php echo $row_result['cBirthday'] ?></td>
                        <td><?php echo $row_result['cPhone'] ?></td>
                        <td><span class="btn btn-primary btn-sm">編輯</span><span class="btn btn-primary btn-sm">刪除</span></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <!-- slide bar end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>