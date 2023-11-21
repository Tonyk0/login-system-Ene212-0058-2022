<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }

        body {
            font-family: Arial, sans-serif;
            background-color: #29567a;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #770f0f;
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 36px;
        }
        .recipe-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #155f0e;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        img {
            max-width: 100%;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        ol {
            list-style-type: decimal;
            padding-left: 20px;
        }
        p {
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>



    <div>
    <header>
        <h1>Delicious Spaghetti Recipe</h1>
    </header>
    <div class="recipe-container">
        <img src="img/spaghetti.jpeg" alt="Delicious Pasta">
        <h2>Ingredients:</h2>
        <ul>
            <li>8 ounces of spaghetti</li>
            <li>2 tablespoons olive oil</li>
            <li>2 cloves garlic, minced</li>
            <li>1/2 cup diced tomatoes</li>
            <li>1/4 cup grated Parmesan cheese</li>
            <li>1/4 cup chopped fresh basil</li>
            <li>Salt and pepper to taste</li>
        </ul>
        <h2>Instructions:</h2>
        <ol>
            <li>Cook the spaghetti according to package instructions. Drain and set aside.</li>
            <li>In a large skillet, heat the olive oil over medium heat. Add the minced garlic and sauté for about 1 minute until fragrant.</li>
            <li>Add the diced tomatoes to the skillet and cook for another 2-3 minutes until they soften.</li>
            <li>Add the cooked spaghetti to the skillet and toss to combine with the tomatoes and garlic.</li>
            <li>Stir in the grated Parmesan cheese and chopped fresh basil. Season with salt and pepper to taste.</li>
            <li>Serve the delicious pasta hot and enjoy!</li>
        </ol>
    </div>


    </div>
</body>
</html>