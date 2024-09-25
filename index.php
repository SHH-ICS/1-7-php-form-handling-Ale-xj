<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <main class="mdl-layout__content">
        <div class="page-content">
            <!-- Form -->
            <form action="handler.php" method="POST">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="name" name="name">
                    <label class="mdl-textfield__label" for="name">Enter your name...</label>
                </div>
                <br>
                <!-- Button inside the form -->
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
                    Submit
                </button>
            </form>
        </div>
    </main>
</div>

</body>
</html>
