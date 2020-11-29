<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <?php include 'shared/css.php'?>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class= "col-12 text-center">Contact Us</h1>
            <div class="contato">
                <form action="./email.php" class="form" method="POST">
                    <input class="field" name="name" placeholder="Name" autocomplete="off">
                    <input class="field" name="email" placeholder="E-Mail" autocomplete="off">
                    <textarea class="field" name="message" placeholder="Type your message here" autocomplete="off"></textarea>
                    <input class="field" type="submit" value="Submit">                    
                </form>
                <a href="index.php"><input class="col-12 previous" type="submit" value="Previous"></a>                  
            </div>                     
        </div>        
    </div>    
    <?php include'shared/js.php'?>
</body>
</html>