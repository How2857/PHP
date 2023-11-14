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
    <h1>edit</h1>
    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit cumque, provident praesentium nisi harum, quidem vel odio eaque voluptatem rem illo? Eius fugiat ipsam saepe nobis vero omnis culpa dolorum!
    </P>
    <!-- slide bar end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>