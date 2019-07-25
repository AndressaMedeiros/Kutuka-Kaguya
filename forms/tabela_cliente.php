<?php include "negocio/clientern.php";?>


<!DOCTYPE html>
<html lang = "pt_BR">
  <head>
    <meta charset="utf-8">
    <title>Listar Clientes</title>
  </head>
  <body>
    <table>
    <thead>
      <th>id</th>
      <th>Nome</th>
      <th>cpf</th>
      <th>endereco</th>
    </thead>
    <tbody>
      <?php foreach(lista() as $valor) : ?>
        <tr>
          <td>
            <?php echo $valor['id']; ?>
          </td>
          <td>
            <?php echo $valor['nome']; ?>
          </td>
          <td>
            <?php echo $valor['cpf']; ?>
          </td>
          <td>
            <?php echo $valor['endereco']; ?>
          </td>
        </tr>
      <?php endforeach;?>
    </tbody>
    </table>
  </body>
</html>
