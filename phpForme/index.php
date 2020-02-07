<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forme</title>
  </head>
  <body>
    <!-- getmetoda salje same podatke preko urla,
    gde su userName i password vrednosti nasih name atributa -->
    <!-- <form action="getData.php" method="get"> -->
    <form action="getData.php" method="post">
      <input type="text" name="userName" placeholder="userName"><br>
      <input type="text" name="password" placeholder="password"><br>
      <button type="submit">Save</button>

    </form>
    <!-- a tag takodje menja url zove se quvery string -->
    <a href="getData.php?userName=Mikica&password=12345">Go to getData</a>

  </body>
</html>
