<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gấu Bông online</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon" />
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- link style -->
    <link rel="stylesheet" href="./assets/style/index.css">
    <!-- link slick slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="wapper">
        <?php
            session_start();
            include("admin/config/config.php");
            include("pages/navtop.php");
            include("pages/navmenu.php");
            include("pages/main.php");
            include("pages/footer.php");
        ?>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"
        integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/JS/app.js"></script>
    <script src="./assets/JS/index.js"></script>
    <!-- <script type="text/javascript">
    $(document).ready(function() {

        var back = $(".prev");
        var next = $(".next");
        var steps = $(".step");

        next.bind("click", function() {
            $.each(steps, function(i) {
                if (!$(steps[i]).hasClass('current') && !$(steps[i]).hasClass('done')) {
                    $(steps[i]).addClass('current');
                    $(steps[i - 1]).removeClass('current').addClass('done');
                    return false;
                }
            })
        });
        back.bind("click", function() {
            $.each(steps, function(i) {
                if ($(steps[i]).hasClass('done') && $(steps[i + 1]).hasClass('current')) {
                    $(steps[i + 1]).removeClass('current');
                    $(steps[i]).removeClass('done').addClass('current');
                    return false;
                }
            })
        });

    })
    </script> -->
</body>

</html>