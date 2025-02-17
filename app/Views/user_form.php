<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alta y Edición de Usuarios</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
  <div class="conteiner">
    <h2><?= isset($user) ? 'Editar Usuario' : 'Crear Usuario' ?></h2>
    <form class="formulario" action="<?= isset($user) ? '/users/update/' . $user['id'] : '/users/store' ?>" method="post">
      <label for="name">Nombre:</label>
      <input type="text" name="name" value="<?= isset($user) ? $user['name'] : '' ?>" required>
      <label for="email">Email:</label>
      <input type="email" name="email" value="<?= isset($user) ? $user['email'] : '' ?>" required>

      <div class="botones">
        <button class="stboton" type="submit"><?= isset($user) ? 'Actualizar' : 'Crear' ?></button>
        <a class="stboton rdboton" href="/users">Volver al listado</a>
      </div>
    </form>

  </div>
</body>

</html>