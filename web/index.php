<?php

/*
 * (c) Markus Lanthaler <mail@markus-lanthaler.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ML\GitSynchronizer;

require_once(__DIR__ . '/../vendor/autoload.php');


$app = new GitSynchronizer();

// You can either configure the $app object directly
$app['token'] = 'aRandomSecureString';
$app['repositories'] = array(
    'GitHub url (https)' => 'path/to/the/repo/',
    'https://github.com/lanthaler/GitSynchronizerApp' => '/some/path/'
);

// ... or you can, e.g., use a JSON file to it. For security reasons
// you should make sure that it isn't accessible from the Web

/*
$config = json_decode(file_get_contents('../configuration.json'), true);
foreach ($config as $key => $value) {
    $app[$key] = $value;
}
*/


// To enable logging using Monolog, uncomment the following lines add
// "monolog/monolog": ">=1.0.0" to the "require" object in composer.json

/*
$app->register(
    new \Silex\Provider\MonologServiceProvider(),
    array(
        'monolog.name' => 'GitSynchronizer',
        'monolog.logfile' => __DIR__ . '/../log.log',
        'monolog.level' => \Psr\Log\LogLevel::NOTICE
    )
);
*/

$app->run();
