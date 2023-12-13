<?php
// Verbinding maken met de database (gebruik dezelfde gegevens als in het vorige voorbeeld)
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'dbconnect.php';

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($mysqli->connect_error) {
  die("Verbindingsfout: " . $mysqli->connect_error);
}

 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST['gebruikersnaam'];
  $password = $_POST['wachtwoord'];

 $query = "INSERT INTO users (`username`, `password`) VALUES ('$username', '$password')";

 
if ($mysqli->query($query) === TRUE) {
  echo "Account aangemaakt!";
} else {
    echo "Fout bij het aanmaken van het account: " . $mysqli->error;
}

 

 

    $mysqli->close();

}

?>

 

<!DOCTYPE html>

<html lang="nl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registreren</title>

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

<body>

<main>

<!DOCTYPE html>

<html lang="nl">

<head>

    <!-- ... (je stijlen en andere head-inhoud hier) ... -->

</head>

<body>

    <main>

        <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="header">Registreer</div>

            <div class="inputs">

                <!-- Voeg de name-attributen toe aan de inputvelden -->

                <input placeholder="Gebruikersnaam" class="input" type="text" name="gebruikersnaam">

                <input placeholder="Wachtwoord" class="input" type="password" name="wachtwoord">

                <button class="sigin-btn" type="submit">Klik</button>

                <p class="signup-link">Heb je al een account? <a href="login.php">Log in</a></p>

            </div>

        </form>

    </main>

</body>

</html>

 

</main>

</body>

</html>