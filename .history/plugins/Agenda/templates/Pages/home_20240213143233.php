<body>
<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionalidades
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/telefones">Telefones</a></li>
            <li><a class="dropdown-item" href="/pessoas">Pessoas</a></li>
            <li><a class="dropdown-item" href="/">Registros</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/pessoas/add">Add pessoa</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" aria-placeholder="">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class='container'>

<table class="table table-dark mx-auto m-3">
  

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($pessoas as $pessoa): ?>
    <tr>
      <td scope="row"><?= $pessoa->id?></td>
      <td scope="row"><?= $pessoa->nome_completo?></td>
      <td scope="row"><?= $pessoa->cpf ?></td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>
</div>



</body>