<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

umask(0000);

$loader = require_once __DIR__.'/app/bootstrap.php.cache';
Debug::enable();

require_once __DIR__.'/app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request', $request);

// all our setup is done!!!!!!

//use \src\InvoiceBundle\Entity\Event;
use Pillaerds\TodoBundle;

$tditem = new TodoBundle\Entity\Todo();
$tditem->setName('New Item');
$tditem->setDate(new \DateTime('tomorrow noon'));
$tditem->setCompleted(0);

$em = $container->get('doctrine')->getManager();
$em->persist($tditem);
$em->flush();
