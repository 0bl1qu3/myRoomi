<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleSetting.css">
    <script>
        function redirectToSettings() {
            window.location.href = "SETTING.HTML";
        }
    </script>
</head>
<body>
 <section class="wrapper">
 
         <div class="container">
             <div class="settings_modal">
                 <div class="left">
                     <span class="icon hamb">
                         <span></span>
                         <span></span>
                         <span></span>
                     </span>
                     <div class="links_container">
                         <div class="side_link home"><span>Home</span></div>
                         <div class="side_link account"><span>Account</span></div>
                         <div class="side_link active"><span>Settings</span></div>
                         <div class="side_link logout"><span>Logout</span></div>
                     </div>
                 </div>
                 <div class="right">
                     <div class="form">
                         <h2 class="title">UPDATE INFORMATION</h2>

                         <form action="updateHandler.php" method="POST" class="updateForm">
                             <div class="form-group">
                                 <label for="name" style="color: #FFF; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Name:</label>
                                 <input type="text" id="name" name="name" required>
                             </div>
                             <div class="form-group">
                                 <label for="surname" style="color: #FFF; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Surname:</label>
                                 <input type="text" id="surname" name="surname" required>
                             </div>
                             <div class="form-group">
                                 <label for="email" style="color: #FFF; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Email:</label>
                                 <input type="email" id="email" name="email" required>
                             </div>
                             <button type="submit" id="update" name="update" >UPDATE</button>
                         </form>

                     </div>
                 </div>
             </div>
         </div>
     </section>
 
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            event.preventDefault();

            var icon = document.querySelector('.hamb'),
            left = document.querySelector('.left');

            icon.addEventListener('click', expand);

            function expand() {
                left.classList.toggle('show');
            }

            var accountLink = document.querySelector('.side_link.account');
            accountLink.addEventListener('click', function() {
                window.location.href = '../AccountPage/account.php';
            });

            var homeLink = document.querySelector('.side_link.home');
            homeLink.addEventListener('click', function() {
                window.location.href = '../HomePage/home.php';
            });

            var logoutLink = document.querySelector('.side_link.logout');
            logoutLink.addEventListener('click', function() {
                window.location.href = '../WelcomePage/index.html';
            });


        /*const form = document.querySelector('form');

        form.addEventListener('submit', handleSubmit);

        function handleSubmit(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const surname = document.getElementById('surname').value;
            const email = document.getElementById('email').value;

        
            console.log('Name:', name);
            console.log('Surname:', surname);
            console.log('Email:', email);

        
            form.reset();
        }*/
    });


    </script>
</body>
</html>