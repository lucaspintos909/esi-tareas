  #!/bin/bash
  cd /home/ubuntu/esi-pruebas/deploy
  sed -i "s/esi-pruebas:.*/esi-pruebas:$1/g" docker-compose.yml
  docker-compose up -d