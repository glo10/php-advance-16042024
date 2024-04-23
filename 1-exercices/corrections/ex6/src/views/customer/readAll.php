<?php

$articleRepository = $this->em->getRepository(Article::class);
$articles = $articleRepository->findAll();
var_dump($articles);