<?php 
    require_once('./functions/checkSession.php');
    //print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Document</title>
</head>
<body>
    <nav class="sidebar">
        <div class="text">Side Menu</div>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li>
                <a href="#" class="feat-btn">
                    Features
                    <span class="fas fa-caret-down first"></span>
                </a>
                
                <ul class="feat-show">
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Elements</a></li>
                </ul>
            </li>
            <li>
                <a href="empleados">Empleados</a>
                <ul>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Elements</a></li>
                </ul>
            </li>
            <li><a href="#">Portafolio</a></li>
        </ul>
    </nav>

    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $('.feat-btn').click(function(){
            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        })
        $('nav ul li').click(function() {
            $(this).addClass('active').siblings().removeClass("active");
        })
    </script>
</body>
</html>
