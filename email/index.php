<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send an e-mail from Localhost</title>
    <link rel="stylesheet" href="style.css">
    <!--bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
                <h2 class="text-center">Send message</h2>
                <p class="text-center">Send e-mail to anyone from your Localhost</p>
                <form action="#" method="POST" autocomplete="off">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Recipients">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" cols="30" rows="10" class="form-control textarea" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control button btn-primary" value="Send">
                    </div>
                </form>
            </div>
        </div>      
    </div>
</body>
</html>

