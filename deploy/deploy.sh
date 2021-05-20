  #!/bin/bash
  cd /home/ubuntu/esi-tareas/deploy
  sed -i "s/esi-tareas:.*/esi-tareas:$1/g" docker-compose.yml
  docker-compose up -d
