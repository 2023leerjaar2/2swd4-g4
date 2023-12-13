<?php
// Inclusief de databaseverbinding
require "dbconnect.php";
// Controleren of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username en wachtwoord uit het formulier halen
    $username = $_POST["gebruikersnaam"];
    $password = $_POST["wachtwoord"];
    // Hier kun je een SQL-query schrijven om de gebruiker te controleren in de database
    // Bijvoorbeeld:
//FOUT: $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Controleer of er overeenkomende rijen zijn gevonden
        if (mysqli_num_rows($result) == 1) {
            // Gebruiker is ingelogd, voer hier de juiste acties uit (bijv. sessie starten)
            
            // Stuur de gebruiker door naar de dashboard.php pagina na een succesvolle login
        header("Location: index.php");
            exit();
        } else {
            // Gebruiker niet gevonden in de database
            echo "Ongeldige username of wachtwoord.";
        }
    } else {
        // Fout bij de uitvoering van de query
        echo "Fout bij het inloggen. Probeer het later opnieuw.";
    }
    // Sluit de databaseverbinding
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        header, main, footer {
            text-align: center;
            max-width: 600px;
            padding: 20px;
        }

        .form {
  position: relative;
  display: flex;
  flex-direction: column;
  border-radius: 0.75rem;
  background-color: #fff;
  color: rgb(97 97 97);
  box-shadow: 20px 20px 30px rgba(0, 0, 0, .05);
  width: 22rem;
  background-clip: border-box;
}

.header {
  position: relative;
  background-clip: border-box;
  background-color: #1e88e5;
  background-image: linear-gradient(to top right,#1e88e5,#42a5f5);
  margin: 10px;
  border-radius: 0.75rem;
  overflow: hidden;
  color: #fff;
  box-shadow: 0 0 #0000,0 0 #0000,0 0 #0000,0 0 #0000,rgba(33,150,243,.4);
  height: 7rem;
  letter-spacing: 0;
  line-height: 1.375;
  font-weight: 600;
  font-size: 1.9rem;
  font-family: Roboto, sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}

.inputs {
  padding: 1.5rem;
  gap: 1rem;
  display: flex;
  flex-direction: column;
}

.input-container {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  min-width: 200px;
  width: 100%;
  height: 2.75rem;
  position: relative;
}

.input {
  border: 1px solid rgba(128, 128, 128, 0.61);
  outline: 0;
  color: rgb(69 90 100);
  font-weight: 400;
  font-size: .9rem;
  line-height: 1.25rem;
  padding: 0.75rem;
  background-color: transparent;
  border-radius: .375rem;
  width: 100%;
  height: 100%;
}

.input:focus {
  border: 1px solid #1e88e5;
}

.checkbox-container {
  margin-left: -0.625rem;
  display: inline-flex;
  align-items: center;
}

.checkbox {
  position: relative;
  overflow: hidden;
  padding: .55rem;
  border-radius: 999px;
  display: flex;
  align-items: center;
  cursor: pointer;
  justify-content: center;
  background-color: rgba(0, 0, 0, 0.027);
  height: 35px;
  width: 35px;
}

.checkbox input {
  width: 100%;
  height: 100%;
  cursor: pointer;
}

.checkbox-text {
  cursor: pointer;
}

.sigin-btn {
  text-transform: uppercase;
  font-weight: 700;
  font-size: .75rem;
  line-height: 1rem;
  text-align: center;
  padding: .75rem 1.5rem;
  background-color: #1e88e5;
  background-image: linear-gradient(to top right,#1e88e5,#42a5f5);
  border-radius: .5rem;
  width: 100%;
  outline: 0;
  border: 0;
  color: #fff;
}

.signup-link {
  line-height: 1.5;
  font-weight: 300;
  font-size: 0.875rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.signup-link a, .forget {
  line-height: 1.5;
  font-weight: 700;
  font-size: .875rem;
  margin-left: .25rem;
  color: #1e88e5;
}

.forget {
  text-align: right;
  font-weight: 600;
}
    </style>
</head>
<body>
<header>
    <h1>Inloggen</h1>
</header>
<main>
   


    <form class="form" method="POST" action="login.php">
    <div class="header">Sign In</div>
    <div class="inputs">
<!-- FOUT: <input placeholder="gebruikersnaam" id="gebruikersnaam" class="input" type="text" required>-->
<!-- FOUT: <input placeholder="Password" id="wachtwoord" class="input" type="password" required>-->
        <input name="gebruikersnaam" placeholder="gebruikersnaam" id="gebruikersnaam" class="input" type="text" required>
        <input name="wachtwoord" placeholder="Password" id="wachtwoord" class="input" type="password" required>

        <div class="checkbox-container">
        <label class="checkbox">
        <input type="checkbox" id="checkbox">
        </label>
        <label for="checkbox" class="checkbox-text">Remember me</label>
    </div>
    <button class="signin-btn">Submit</button>
    <a class="forget" href="#">Forget password ?</a>
    <p class="signup-link">Don't have an account? <a href="register.php">Sign up</a></p>
    </div>
</form>
</main>
<footer>
</footer>
</body>  
</html> 