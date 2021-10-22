<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../images/favicon.png" sizes="16x16 32x32" type="image/png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="after.css">

    <title>Your Details</title>
</head>
<style>
   
</style>

<body>
    <div class="bodymain">
      
        <div class="container content">
        <h2>Your Details</h2>
            <div class="main">
                <div class="field">
                    <h5>Field</h5>
                </div>
                <div class="entry">
                    <h5>Entry</h5>
                </div>
            </div>
            <div class="main">
                <div class="field">
                    <h6>Name</h6>
                </div>
                <div class="entry">
                    <p><?php echo "$name"; ?></p>
                </div>
            </div>

            <div class="main">
                <div class="field">
                    <h6>Email Address</h6>
                </div>
                <div class="entry">
                    <p><?php echo "$email"; ?></p>
                </div>
            </div>

            <div class="main">
                <div class="field">
                    <h6>Contact Number</h6>
                </div>
                <div class="entry">
                    <p><?php echo "$mobile"; ?></p>
                </div>
            </div>

            <div class="main">
                <div class="field">
                    <h6>Service</h6>
                </div>
                <div class="entry">
                    <p><?php echo "$service"; ?></p>
                </div>
            </div>

            <div class="main">
                <div class="field">
                    <h6>Budget</h6>
                </div>
                <div class="entry">
                    <p><?php echo "From $low_budget Rs To $high_budget Rs"; ?></p>
                </div>
            </div><br><br>

    
            <div class="bottom">
            <h4>Your Project Details Submit Succesfully....</h4><br>
            <a href="../index.html" class="btn button btn-lg active" role="button" aria-pressed="true"> <i class="fas fa-home"></i>&nbsp Home</a><br>
        </div>
        </div>
       
    </div><br>
    <footer>
        <span>Created By <a href="https://www.webcraft.com">Webcraft Creatives</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
</body>

</html>