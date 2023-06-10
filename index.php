<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"> 
        <div>    
    <h1>Register Form</h1>
    <form action="connect.php" method="post">

    <div>
        <label for="">Name: </label>
        <input type="text" name="name" id="" placeholder="Enter Your Name" required> 
    </div>
    <div>
        <label for="">Email: </label>
        <input type="email" name="email" id="" placeholder="Enter Your Email" required> 
    </div>
    <div>
        <label for="">Gender:</label> <br>
        <select class="gender" name="" id="">
            <option value="">---select---</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="o">Others</option>
        </select>
    </div>
    <div>
        <label for="">Mobile: </label>
        <input type="text" name="mobile" id="" placeholder="Enter Your mobile" required> 
    </div>
    <div>
        <label for="">Password: </label>
        <input type="password" name="password" id="" placeholder="Enter Your password" required> 
    </div>

    <div >
        <button class="btn" type="submit">Submit Data</button>
    </div>

    </form>
    </div>
    </div>

</body>
</html>