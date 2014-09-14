<?php
/**
 * Created by PhpStorm.
 * User: Tim van Steenbergen
 * Date: 13-9-14
 * Time: 11:07
 */

try {
    throw new Exception('Some message.');
} catch (InvalidArgumentException) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}

$people = array(
    array('name' => 'Jan',
        'age' => 20),
    array('name' => 'Piet',
        'age' => 30),
    array('name' => 'Klaas',
        'age' => 40)
);

/**
 * @param $person
 */
function setToPensionAge($person)
{
    $person['age'] = 65;
}

foreach ($people as $person) {
    setToPensionAge($person);
}

