<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home work #7</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse" style="">
        <ul class="nav navbar-nav" id="#menu-container">
            <li><a href="#books">View All Books</a></li>
            <li><a href="#books/create">Create a New Book</a></li>
            <li><a href="#users">View All Users</a></li>
            <li><a href="/bower">Bower</a></li>
        </ul>
    </nav>

    <div class="container" id="content" style="padding-top: 70px">
        <div class="container">
            <div class="content">
                <div class="title">BSA 16 PHP - Backbone/Marionette.JS</div>
            </div>
        </div>
    </div>

    <?php
require('templates_books.php');
require('templates_users.php');
?>

</div>
</body>
</html>