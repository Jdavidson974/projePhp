<?php
    require('autoLoad.php');
    $router = new Router();
    //demare le buffer
    session_start();
    ob_start();
    $router->run();
    
    $content = ob_get_clean();
    // include nav bar if connected 
    if(isset($_SESSION['connected'])){
        if($_SESSION['connected'] == true){
            include('src/views/template/nav.php');
        }
    }
    include('src/views/template/head.php');
?>

<body>
    <?php
        //relache le buffer dans la page
        echo($content);
        include('src/views/template/footer.php') 
    ?>
</body>

</html>