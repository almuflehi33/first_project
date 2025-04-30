<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Submission</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
    </head> 
    <body>
        <div class="container mt-5">
            <h2>Form Profile</h2>
           
            <form action="emailHandler.php" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" >
</p>
<label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </p>
                    <label for="age">Age:</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter your age">
                    </p>
                    <label for="address">address:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
                    </p>
                    <label for="phone">phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                    </p>
                    <label for="about">About you:</label>
                    <input type="text" class="form-control" id="about" name="about" placeholder="Tell us about yourself">
                    </p>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </div>   
</html>