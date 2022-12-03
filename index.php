<?php

$data = $_GET;

// var_dump($_GET);

?>

<!-- stampo tutti i parametri che mi arrivano in get da un determinato form -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Stampo get</title>
</head>
<body>

<div class="container py-5">

  <?php if(empty($data)) : ?>
    <div>
      <h1>Stampo i parametri in GET</h1>
      <!-- invio il form alla stessa pagina -->
        <form method="GET">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cognome</label>
            <input type="text" name="cognome" class="form-control" id="exampleFormControlInput1" placeholder="Cognome">
            </div>
            <div class="mb-3">
            <label for="messaggio" class="form-label">messaggio</label>
            <textarea class="form-control"  name="messaggio" id="messaggio" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
              <select name="professione" class="form-select" aria-label="Default select example">
                <option value="0" selected>Professione</option>
                <option value="1">Studente</option>
                <option value="2">Impiegato</option>
                <option value="3">Libero professionista</option>
                <option value="4">Pensionato</option>
              </select>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary" type="submit">Invia</button>
            </div>
        </form>
    </div>
  <?php else: ?> 
    <div>
      <h3>Stampo con echo anche del tag</h3>
      <ul> 
        <?php  
          foreach ($data as $key => $value) {
            echo "<li>$key: $value</li>";
          }
        ?>
      </ul>
      <h3>Stampo solo il valore ma non l'HTML</h3>
      <ul>
        <?php foreach ($data as $key => $value) : ?>
          <li><?php echo $key ?> <?php echo $value ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>


</div>


</body>
</html>