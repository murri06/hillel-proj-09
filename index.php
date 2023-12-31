<?php
require_once  "vendor/autoload.php";

use App\SpaceShuttle;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

$encoder = [new JsonEncoder()];
$normalizers = [new ObjectNormalizer()];
$serializer = new Serializer($normalizers, $encoder);

$shuttle = new SpaceShuttle("Earth", 27, 2572.5);

$jsonSerialised = $serializer->serialize($shuttle, "json");

echo "Created object:" . PHP_EOL;
var_dump($shuttle);

echo "JSON serialized object:" . $jsonSerialised . PHP_EOL;

$shuttle2 = $serializer->deserialize($jsonSerialised, SpaceShuttle::class, 'json');
echo "Deserialized object as a new instance:" . PHP_EOL;
var_dump($shuttle2);

echo $shuttle2->getHomePlanet() . PHP_EOL;