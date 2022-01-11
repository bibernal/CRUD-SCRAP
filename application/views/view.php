<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tabela de quotes</title>
  </head>
  <h1>Tabela de textos</h1>
  <body>
  <a href="<?php echo site_url('Controller/cadastro');?>"><button class="btn btn-primary" type="submit">Cadastrar</button></a>
  <br>
  <br>
  <a href="<?php echo site_url('Controller/quote');?>"><button class="btn btn-primary" type="submit">Buscar informações QUOTE</button></a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">texto</th>
      <th scope="col">autor</th>
      <th scope="col">tags</th>
      <th scope="col">ações</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($result as $linha){ ?>

      
    <tr>
      <th scope="row"><?php echo $linha-> texto ?></th>
      <td><?php echo $linha-> autor ?></td>
      <td><?php echo $linha-> tags ?></td>
      <td>
      <a href="<?php echo site_url('Controller/delete');?>"><button class="btn btn-danger" type="submit">DELETE</button></a>
      <a href="<?php echo site_url('Controller/delete');?>"><button class="btn btn-primary" type="submit">EDITAR</button></a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>