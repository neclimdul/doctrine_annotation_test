<?php

//use ReflectionClass;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use My\Test\Foo;

$loader = require_once __DIR__.'/vendor/autoload.php';

$reflectionClass = new ReflectionClass('My\\Annotated\\Test');
$reader = new AnnotationReader();
$classAnnotations = $reader->getClassAnnotations($reflectionClass);
var_dump($classAnnotations);

