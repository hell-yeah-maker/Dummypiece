<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <main>
        <form action="process.php" method="post">
            <label>Name:</label>
            <input type="text" name="name" required>
            
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <label>Message:</label>
            <textarea name="message" required></textarea>
            
            <button type="submit">Send</button>
        </form>
    </main>
</body>
</html>
