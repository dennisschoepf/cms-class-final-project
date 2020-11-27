<?php

namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'alex');

// Project repository
set('repository', 'git@github.com:dennisschoepf/wpalex_max_dennis.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
set('shared_files', array(
  'wp-config.php',
  'wp-content/wp-cache-config.php',
));
set('shared_dirs', array(
  'wp-content/uploads',
));

// Writable dirs by web server
set('writable_dirs', array(
  'wp-content/uploads',
  'wp-content/cache',
));
set('allow_anonymous_stats', false);
// set('writable_mode', 'chown');
// set('writable_use_sudo', 'true');

// Host
host('vm-olive.multimediatechnology.at')
  ->user('admin')
  ->port(5412)
  ->identityFile('/root/.ssh/cms2020_rsa')
  ->set('deploy_path', '~/{{application}}');

// Composer
set('composer_action', false);

task('deploy:update_code', function () {
  upload('public/', '{{release_path}}');
});

// Tasks
desc('Deploy your project');
task('deploy', [
  'deploy:info',
  'deploy:prepare',
  'deploy:lock',
  'deploy:release',
  'deploy:update_code',
  'deploy:shared',
  'deploy:writable',
  'deploy:clear_paths',
  'deploy:symlink',
  'deploy:unlock',
  'cleanup',
  'success'
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
