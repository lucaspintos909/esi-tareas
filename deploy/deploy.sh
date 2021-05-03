  #!/bin/bash
  cd /home/ubuntu/esi-pruebas/deploy
  sed -i "s/esi-pruebas:.*/esi-pruebas:14499467c11a4df44b3b3bfdf8c40af16930da1d/g" docker-compose.yml
  docker-compose up -d
