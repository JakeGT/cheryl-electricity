<!DOCTYPE html>
<head>
    <link rel='stylesheet' href='style.css'>
    <script src='./scripts/tenants.js'></script>
</head>

<body>
    <div id='nav'>
        <a class='nav-item' href='dashboard.php'>HOME</a>
        <a class='nav-item' href='electricity.php'>ELECTRICITY</a>
        <a class='nav-item active' href='tenants.php'>TENANTS</a>
        <a class='nav-item' href='settings.php' style="margin-left: auto;">SETTINGS</a>
    </div>

    <div id='tenants'>
        <a id='placeholder' href="./tenant.php?id=0">
        <div class='tenant'></div>
        </a>
        <!-- auto tenant fill -->
    </div>

</body>