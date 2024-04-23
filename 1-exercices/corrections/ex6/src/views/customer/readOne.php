<?php

require_once dirname(__DIR__).'/../../bootstrap.php';
use App\Classes\Customer;

$id = $_GET['id']??null;
$id = $id != null ? htmlspecialchars($id):$id;
$customerRepository = $entityManager->getRepository(Customer::class);
$customer = $customerRepository->findOneBy(['id' => $id]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Page cliensts</title>
</head>
<body class="container">
  <header>
    <h1>Client identifiant <?= $customer->getId(); ?></h1>
  </header>
  <main>
    <table class="table table-striped-columns">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Adresse</th>
          <th>Type</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $customer->getName() ;?></td>
          <td><?= $customer->getAddr() ;?></td>
          <td><?= $customer->getTypeOf() ;?></td>
        </tr>
      </tbody>
    </table>
  </main>
</body>
</html>