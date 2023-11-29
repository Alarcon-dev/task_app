<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= route_path ?>public/assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="main-container">
        <header class="header">
            <div class="main-title">
                <h1>Welcome to your task maker</h1>
            </div>
            <div class="clearfix"></div>
            <nav class="nav-bar">
                <ul>
                    <li><a href="<?= route_path ?>Home/index">Home</a></li>
                    <li><a href="<?= route_path ?>Note/index">Make task</a></li>
                    <li><a href="<?= route_path ?>Note/noteList">Manage your task</a></li>
                    <li><a href="">Show all</a></li>
                </ul>
            </nav>
        </header>