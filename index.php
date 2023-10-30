<?php
require_once  "vendor/autoload.php";
require_once "SpaceShuttle.php";

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;



$encoder = [new JsonEncoder()];
$normalizers = [new ObjectNormalizer()];
$serializer = new Serializer($normalizers, $encoder);

$shuttle = new SpaceShuttle("Earth", 27, 2572.5);

$jsonSerialised = $serializer->serialize($shuttle, "json");

echo $jsonSerialised . PHP_EOL;

$shuttle2 = $serializer->deserialize($jsonSerialised, SpaceShuttle::class, 'json');
var_dump($shuttle2);

echo $shuttle2->getHomePlanet() . PHP_EOL;