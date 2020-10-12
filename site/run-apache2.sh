sed -i "s/Listen 80/Listen ${PORT:-80}/g" /etc/apache2/ports.conf
apache2-foreground "$@"\
&& --env DOCKER_HOST=$(ip -4 addr show docker0 | grep -Po 'inet \K[\d.]+')