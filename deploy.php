<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config
set('repository', 'git@github.com:radoslavtomas/luke-therapy.git');
set('keep_releases', 3);
set ('ssh_multiplexing', false);
set('git_tty', false);

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
host('dev')
    ->set('hostname', '139.177.183.107')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/var/www/html/luke-therapy')
    ->set('branch', 'main');

// Hooks
/**
 * Main deploy task.
 */
desc('Deploys your project');
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:config:cache',
    'artisan:route:cache',
    'artisan:view:cache',
//    'artisan:event:cache',
//    'artisan:migrate',
    'deploy:publish',
]);

after('deploy:failed', 'deploy:unlock');
