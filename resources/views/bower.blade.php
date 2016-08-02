<script type="text/javascript" src="js/bower.js"></script>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">

<nav class="navbar navbar-inverse" style="">
    <ul class="nav navbar-nav" id="#menu-container">
        <li><a href="/">REST</a></li>
        <li><a href="/bower">Bower</a></li>
    </ul>
</nav>

<div data-widget="Page">
    <button data-action-handler='resetAll'>Reset All</button>
    <hr>
    <div data-widget="Timer" data-widget-part='timer'>
        <div class="time">no record!</div>
        <button class="toggle-button">start</button>
        <button class="lap-button">lap</button>
        <button class="reset-button">reset</button>
    </div>
    <hr>
    <div data-widget="ScoreBoard">
        <div>History</div>
        <ol data-widget-part="scoreList"></ol>
        <button data-action-handler="clean">Clean</button>
    </div>
</div>