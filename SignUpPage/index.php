<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Profile</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="main.css">

</head>
<body>

    <img alt="image here" src="https://img.freepik.com/free-photo/background-gradient-lights_23-2149304984.jpg" class="image">

    <div id="center-div">

        <h1>Create Your Account</h1>
        <h3>Already have one? Just <~Login~></h3>

        <form action="formHandler.php" method="POST" class="form_container">

            <div id="left-center">

                <div class="input_container">
                    <input type="text" id="name" name="name" oninput="handleInput(this)" autocomplete="off" spellcheck="false" />
                    <label for="name">Name</label>
                </div>

                <div class="input_container">
                    <input type="text" id="surname" name="surname" oninput="handleInput(this)" autocomplete="off" spellcheck="false" />
                    <label for="surname">Surname</label>
                </div>

                <div class="input_container">
                    <input type="text" id="email" name="email" oninput="handleInput(this)" autocomplete="off" spellcheck="false" />
                    <label for="email">Email</label>
                </div>

                <div class="input_container">
                    <input type="text" id="student-no" name="student-no" oninput="handleInput(this)" autocomplete="off" spellcheck="false" />
                    <label for="student-no">Student Number</label>
                </div>

                <div class="input_container">
                    <input type="password" id="password" name="password" oninput="handleInput(this)" autocomplete="off" spellcheck="false" />
                    <label for="password">Password</label>
                </div>

            </div>

            <div id="right-center" >

                <button type="submit" name="completeProfileButton" class="formButtons">Complete Your Profile</button>

            </div>

        </form>

    </div>

    <script src="script.js"></script>
    
</body>
</html>