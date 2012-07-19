<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>CRPP - Collaborative raster painting protocol</title>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
    </head>
    <body>
        <div id="menu">

            <h2>Menu</h2>

            <?php
            $items = array(
                "about" => "about",
                "mailing_list" => "mailing list",
                "credits" => "credits"
            );
            ?>

            <ul>
                <?php
                foreach ($items as $key => $value) {
                    echo '<li>' . '<a href="?page=' . $key . '">' . $value . '</a>' . '</li>' . "\n";
                }
                ?>
            </ul>
        </div>
        <div id="content">
            <?php
            $page = $_GET["page"];
            if (empty($page)) {
                $page = "about";
            }
            $page = 'pages/' . $page . '.php';
            require $page;
            ?>
        </div>

    </body>
</html>
