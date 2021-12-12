<?php

    // Website routes
    $routes = array(
        "/"         => "/pages/home.php",
        "/signup"   => "/pages/signup.php",
        "/image"   => "/pages/image.php",
    );

    // Router function
    function router($routes)
    {
        foreach($routes as $path => $page)
        {
            if($path == $_SERVER["PATH_INFO"])
            {
                include($_SERVER["DOCUMENT_ROOT"]."/templates/header.php");
                include($_SERVER["DOCUMENT_ROOT"].$page);
                include($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
            }
        }
    }

    // Execute router
    router($routes);

?>