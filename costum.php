<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasaun Kores </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/costum.css">

</head>
<?php
if (!empty($_GET['color'])) {
?>
    <style>
        body {
            background-color: <?php echo $_GET['color'] ?>;
        }
    </style>
<?php
}
?>
<?php
if (!empty($_GET['text'])) {
?>
    <style>
        h1,
        p {
            background-color: <?php echo $_GET['text'] ?>;
        }
    </style>
    <?php
}
    ?><?php
        if (!empty($_GET['nav'])) {
        ?>
    <style>
        header {
            background-color: <?php echo $_GET['nav'] ?>;
        }
    </style>
<?php
        }
?>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-transparent">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets/bg-transparent" width="20px" height="20px" style="max-width: none !important;">
            </button>
            <img src="assets/post-cores.jpg" width="50" height="50">
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 20px !important">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="konese.html">Konesementu Kor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kor_diak.html">Kombinasaun Kor Di'ak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kor_ladiak.html">Kombinasaun Kor Ladi'ak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="favoritu.html">Kor Favoritu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="costum.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Costum
                        </a>
                        <ul class="dropdown-menu">
                            <form action="" method="get">
                                <label for="">Background color</label><br>
                                <input type="color" name="color"><br>
                                <button class="btn btn-primary">Save</button>
                                <hr>
                                <label for="">Text color</label><br>
                                <input type="color" name="text"><br>
                                <button class="btn btn-primary">Save</button>
                                <hr>
                                <label for="">Navbar color</label><br>
                                <input type="color" name="nav"><br>
                                <button class="btn btn-primary">Save</button>
                            </form>
                        </ul>
                    </li>
                </ul>
                <div class="nav-item">
                    <a class="nav-link">Kores</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- taka header -->

    <h1 class="title">TESTE BA TEXTU NO BACKGROUND</h1>
    <p style="width: 75%; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque molestiae expedita ducimus ab libero eius sunt quos soluta dolor, voluptas deleniti repellat? Natus repellendus sint quidem non repellat ut amet, neque quis praesentium tenetur, illum pariatur qui sapiente, assumenda hic beatae atque sequi iure asperiores dolorem debitis eaque dignissimos ipsa reiciendis? Ducimus est aut porro recusandae doloremque delectus ipsam tenetur reprehenderit expedita minus laboriosam, totam architecto quod, officiis, nam dicta labore temporibus perferendis aspernatur? Possimus ullam esse eveniet alias doloribus explicabo quaerat quos iste cumque unde quis praesentium architecto, sint magnam accusantium minima aliquam blanditiis dicta voluptatem consequuntur adipisci rerum! Architecto cum maiores aspernatur consequuntur, labore, est sunt beatae, repudiandae voluptate minus numquam harum sequi earum quam veritatis excepturi exercitationem nisi voluptates repellendus accusamus. Voluptate et, perspiciatis amet, libero ipsum quo consequuntur quibusdam debitis voluptates excepturi similique iste fuga eum officia nihil ratione qui eaque magnam. Corrupti voluptatibus porro ea expedita sit incidunt sapiente, accusantium hic deserunt ipsa aspernatur animi asperiores soluta quis laudantium et modi officia pariatur iste laborum? Eum iste reprehenderit accusamus illo assumenda quo quod asperiores sequi quam! Aut debitis doloribus optio unde laboriosam eaque amet mollitia pariatur at ipsam reiciendis, perspiciatis ab atque aspernatur quod.</p>

    <script src="" async defer></script>
</body>

</html>