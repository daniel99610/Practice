<?php
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }
?>


<?php 

if($_POST!=null)
{
    $h=empty($_POST["height"]) ? 0 : $_POST["height"];
    $w=empty($_POST["weight"]) ? 0 : $_POST["weight"];
    $index =0;
    if($h !=0 && $w !=0)
      $index = round($w/($h*$h)* 703,2);
  
    $bmi="";
    $bmiStyle="alert alert-primary";
    if ($index < 18.5) {
        $bmi="unerweight - BMI : " . $index;
        $bmiStyle="alert alert-secondary";
    } else if ($index < 25 ) {
        $bmi="normal - BMI : ". $index;
        $bmiStyle="alert alert-success";
    } else if ($index < 30) {
        $bmi="overweight - BMI : " . $index;
        $bmiStyle="alert alert-warning";
    } else {
        $bmi="obese - BMI : " . $index;
        $bmiStyle="alert alert-danger";
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laragon</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
                background-image: linear-gradient(red, yellow);
                
              }

              .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
                height: 50vh;
                width: 70vw;
                
              }
              

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }
            .menu-bar {
              position: absolute;
              top: 0vh;
              height: 10vh;
              left: 0vw;
              width: 100vw;
              border-bottom: solid white 1px;
            }

            .menu {
              display: inline-flex;
              top: 2vh;
              right: 2vw;
              position: absolute;
              
            }

            .menu li {
              margin-left: 2vw;
              list-style: none;
            }

            .menu a {
              text-decoration: none;
              color: white;
            }

            .menu a:hover {
              color: red;
            }

            input {
              border: solid 1px white;
              background: transparent;
              margin-top: 2vh;
              padding: 10px;
              color: white;
            }

            button {
              display: block;
              margin: auto;
              margin-top: 2vh;
              color: white;
              background: transparent;
              padding: 35px;
              border: solid white 1px;
              border-radius: 3px;
              cursor: pointer;
            }

            button:hover {
              color: black;
              background: white;
              opacity: 0.5;
              transition: 1s;
            }

            .something {
              color: white;
              width: 10vw;
            }

            .logo {
              height: 70px;
              width: 70px;
              border: solid 1px white;
              border-radius: 50%;
            }

            .logo-box {
              width: 25vw;
              display: flex;
              align-items: center;
              margin-left: 2vw;
              margin-top: 1vh;
            }

            .bmibox {
              border: solid 3px black;
              border-radius: 10px;
              width: 30vw;
              height: 70vh;
              margin: auto;
            }

        </style>
    </head>

    <body>
        <div class="container">
          <div class="bmibox">
          <h1>PHP BODY MASS INDEX</h1>
          <form method="post">
            <div class="form-group">
              <label for="height">Please Enter your height in inches :</label>
              <input type="text" class="form-control" name="height" placeholder="69">
          </div>
          <div class="form-group">
            <label for="weight">Please Enter your weight in Pounds :</label>
            <input type="text" class="form-control" name="weight" placeholder="150">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-sucess">Calculate</button> 
          </div>
          </form>
          <div class="<?=$bmiStyle?>" role="alert" id="bmi">
          <?php
          echo $bmi;
          ?>
        </div>
        </div>
    </body>
</html>




