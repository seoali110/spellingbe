<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Spelling Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007acc;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        p {
            font-size: 16px;
        }

        textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #007acc;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Spelling Checker</h1>
    </header>
    <div class="container">
        <p>Enter the text you want to check for spelling errors:</p>
        <form method="post" action="check_spelling.php">
            <textarea id="textToCheck" name="textToCheck" placeholder="Type or paste your text here..."></textarea>
            <br>
            <button id="checkButton">Check Spelling</button>
        </form>
    </div>

    <div class="container">
        <h2>About Spelling Checker</h2>
        <p>
            The Spelling Checker is a simple web tool that helps you identify and correct spelling errors in your text. Just enter your text in the provided text area, click the "Check Spelling" button, and the tool will highlight any potential spelling mistakes.
        </p>
    </div>

    <div class="container">
        <h2>Spelling Bee Solver</h2>
        <p>
            <a href="https://sbhinter.com/">Spelling Bee Solver</a> could be your go-to tool if you're a fan of word games. You've likely come across the renowned New York Times Spelling Bee, a game that poses a unique challenge by requiring players to construct words from a specific set of letters. With its captivating gameplay and intricate puzzles, it's no wonder this game has captured the hearts of word enthusiasts.

            However, there are moments when you hit a mental roadblock and struggle to conjure up more words. If you find yourself stuck while tackling the popular New York Times Spelling Bee, take comfort in knowing that you're not the only one facing this challenge. Fortunately, there's a solution: the NYT Spelling Bee Solver, an invaluable tool that can enhance your gameplay and expand your vocabulary.
        </p>
    </div>
</body>
</html>
