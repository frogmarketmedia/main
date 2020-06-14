<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'juliandsmith.com');

// Project repository
set('repository', 'git@github.com:frogmarketmedia/main.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 
set('writable_mode', 'chown');

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('167.99.98.182')
	->stage('production')
	->user('forge')
    ->set('deploy_path', '~/{{application}}');    
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');