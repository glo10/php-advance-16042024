<?php

require_once dirname(__DIR__).'/../../bootstrap.php';
use App\Classes\Customer;

$id = $_GET['id']??null;
$id = $id != null ? htmlspecialchars($id):$id;
$customerRepository = $entityManager->getRepository(Customer::class);
$customer = $customerRepository->findOneBy(['id' => $id]);
var_dump($customer);