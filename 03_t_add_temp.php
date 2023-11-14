<?php
//使用一頁完成填表與插入資料

//如果有送出表單,則插入資料
//isset()判斷 內容變數是否存在
if(isset($_GET['action']) && $_GET['action'] =='add_temp'){
// if(isset($_GET['action']) && $_GET['action'] == 'add_temp') {
    include("./conn.php");
    $sql_query = "INSERT INTO students (cName,cSex,cBirthday,cEmail,cPhone,cAddr)
VALUES (?,?,?,?,?,?)";
    $stmt = $db_link->prepare($sql_query);
    $stmt->bind_param("ssssss", $_GET['cName'], $_GET['cSex'], $_GET['cBirthday'], $_GET['cEmail'], $_GET['cPhone'], $_GET['cAddr']);
    $stmt->execute();
    //要記得關
    $stmt->close();
    $db_link->close();
    header("location: 01_home.php");
}
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
        object-position: 0% 60%;

    }

    .carousel-caption h5,
    .carousel-caption p {
        color: seashell;

        /* display: inline;
        background-color:black; */

    }

    h5,
    p {
        display: inline;
        background-color: black;
        border-radius: 8px;
        box-sizing: border-box;
        padding: 0 20px;
    }

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
    <h1>add</h1>
    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit cumque, provident praesentium nisi harum, quidem vel odio eaque voluptatem rem illo? Eius fugiat ipsam saepe nobis vero omnis culpa dolorum!
    </P><br>

    <!-- <div style="text-align:center"> -->
    <form action="./03_t_add_temp.php" method="get">
        <div class="container mt-5 text-center">
            <!-- <div style="text-align: left;"> -->
            姓名<input type="text" name="cName" id="cName" maxlength="15"></input><br>
            性別<input type="radio" name="cSex" value="男">男</input><input type="radio" name="cSex" value="女">女</input><br>
            生日<input name="cBirthday" type="date"></input><br>
            電子郵件<input name="cEmail" maxlength="30"></input><br>
            電話<input name="cPhone" maxlength="10"></input><br>
            地址<input name="cAddr" maxlength="30"></input><br>

            <input type="hidden" name="action" value="add_temp">
            <input type="submit" name="button"></button>
            <!-- </div> -->
        </div>
    </form>





    <!-- slide bar end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>