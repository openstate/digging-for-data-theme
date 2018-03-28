from fabric.api import run, env, cd, sudo

env.use_ssh_config = True
env.hosts = ["Oxygen"]

# Container used to compile the assets
GIT_REPO_NAME = 'digging-for-data-theme'
NODE_CONTAINER = 'c-nodejs-digging-for-data'

def deploy():
    with cd('/home/projects/wordpress/www/wp-mu/wp-content/themes/%s' % (GIT_REPO_NAME)):
        sudo('git pull git@github.com:openstate/%s.git' % (GIT_REPO_NAME))
        output = sudo('docker inspect --format="{{.State.Status}}" %s' % (NODE_CONTAINER))
        if output != 'running':
            exit('\n*** ERROR: The %s container, used to compile the assets, is not running. Please build/run/start the container.' % (NODE_CONTAINER))
        sudo('docker exec %s gulp --production' % (NODE_CONTAINER))
