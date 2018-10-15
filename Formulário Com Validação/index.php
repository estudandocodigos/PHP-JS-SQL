<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>Formulário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Formulário Completo com Validação e Segurança">
        <link rel="stylesheet" href="_css_/style.css" type="text/css">
        <link rel="shortcut icon" href="_icons_/favicon.ico" type="image/x-icon">
        <link rel="canonical" href="http://localhost">
    </head>
    <body>
        <?php include_once('_php_/verificar.php');?>   
        <fieldset id="formualrio">
            <legend>Formulário Com Validação</legend>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <input type="text" name="name" value="<?php echo $name;?>" placeholder="Nome">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>

                <input type="text" name="email" value="<?php echo $email;?>" placeholder="exemplo@exemplo.com">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>

                <input type="text" name="website" value="<?php echo $website;?>" placeholder="http://exemplo.com">
                <span class="error"><?php echo $websiteErr;?></span>
                <br><br>

                <textarea name="comment" rows="5" cols="40" placeholder="comentarios"><?php echo $comment;?></textarea>
                <br><br>

                Gender:
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
                <span class="error">* <?php echo $genderErr;?></span>
                <br><br>
                <input type="submit" name="submit" value="Submit">  
            </form>
        </fieldset>
        <?php include_once('_php_/seusDados.php');?>
    </body>
</html>