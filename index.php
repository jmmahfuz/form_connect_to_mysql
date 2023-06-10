<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">     
    <h1>Form</h1>
    <form action="connect.php" method="post">

    <div>
        <label for="">Name: </label>
        <input type="text" name="name" id="" placeholder="Enter Your Name"> 
    </div>
    <div>
        <label for="">Email: </label>
        <input type="email" name="email" id="" placeholder="Enter Your Email"> 
    </div>
    <div>
    <div>
        <label for="">Mobile: </label>
        <input type="text" name="mobile" id="" placeholder="Enter Your mobile"> 
    </div>
    <div>
        <label for="">Password: </label>
        <input type="password" name="password" id="" placeholder="Enter Your password"> 
    </div>

    <div class="btn">
        <button type="submit">Submit Data</button>
    </div>

    </form>
    </div>

</body>
</html>