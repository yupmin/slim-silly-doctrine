<?php
// Commands

use Symfony\Component\Console\Output\OutputInterface;

$app->command('show-name name', function (OutputInterface $output, $name) use ($container) {
    // Show name
    $output->writeln('<info>Hello '.$name.'!</info>');
    return 0;
})->Descriptions('Show name', [
    'name' => 'Your name',
]);
