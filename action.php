    <!DOCTYPE html>
        <head>
            <meta charset="UTF-8">
            <link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen">
            <title>regex</title>
        </head>

        <body>
            <?php
                //echo $_POST['mail']; 
                $retourmail ="";
                $chaine="^[a-zA-Z0-9.-_]+@[a-zA-Z0-9]+([.][a-zA-Z0-9.-_]{1,3})+$";
                $mail=$_POST['mail'];
var_dump($_POST);
                //toujours parenthese en php
                if (preg_match('/'.$chaine.'/', $mail)){
                    $retourmail = "mail ".$mail." ok";   
                }
                else {
                    $retourmail = "mail ".$mail." ko"; 
                }


                //echo $_POST['nom'];    
                $retournom ="";
                $chaine="^(([A-Z].[a-z]+[ -]?)){1,}$";
                $nom=$_POST['nom'];

                if (preg_match('/'.$chaine.'/', $nom)){
                 $retournom = "nom ".$nom." ok";   
                }
                else {
                  $retournom = "nom ".$nom." ko"; 
                }


                $retourage ="";
                $chaine="^[0-9]{1,3}$";
                $age=$_POST['age'];

                if (preg_match('/'.$chaine.'/', $age)){
                 $retourage = "age ".$age." ok";   
                }
                else {
                  $retourage = "age ".$age." ko"; 
                }       

echo $_POST['adresse']; 
                $retouradresse ="";
                $chaine="^[]*[0-9]*(([a-zA-Z]?[a-z]+[ -]?)){1,}[,][0-9]{5}[ ](([a-zA-Z]?[a-z]+[ -]?)){1,}$";
                $adresse=$_POST['adresse'];

                if (preg_match('/'.$chaine.'/', $adresse)){
                 $retouradresse = "adresse ".$adresse." ok";  
                }
                else {
                  $retouradresse = "adresse ".$adresse." ko"; 
                }             
            ?>
            <form class="form">
                <div>
                    <h1><?php echo $retourmail."<br>";?></h1>
                    <h1><?php echo $retournom."<br>";?></h1>
                    <h1><?php echo $retourage."<br>";?></h1>
                     <h1><?php echo $retouradresse."<br>";?></h1>
                </div>
            </form>
        </body>
    </html>