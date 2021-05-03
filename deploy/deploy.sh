  #!/bin/bash
  cd /home/ubuntu/esi-pruebas/deploy
  sed -i "9/esi-pruebas:.*/esi-pruebas:$1/g" docker-compose.yml
  docker-compose up -d