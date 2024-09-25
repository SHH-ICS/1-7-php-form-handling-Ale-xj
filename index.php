<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <main class="mdl-layout__content">
        <div class="page-content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="userName" name="userName">
                    <label class="mdl-textfield__label" for="userName">Enter your name...</label>
                </div>
                <br>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
                    Submit
                </button>
            </form>
            
            <?php
            $userName = "";
            if (isset($_POST['userName']) && !empty($_POST['userName'])) {
                $userName = htmlspecialchars($_POST['userName']); // Sanitize input to avoid XSS
                echo "<h1>Welcome, " . $userName . "!</h1>\n";
            }
            ?>
        </div>
    </main>
</div>

</body>
</html>
