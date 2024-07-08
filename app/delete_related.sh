#!/bin/bash
NAME=$1

# Delete migration
find database/migrations -name "*$(echo $NAME | awk '{print tolower($0)}')*.php" -delete

# Delete model
rm -f app/Models/${NAME}.php

# Delete controller
rm -f app/Http/Controllers/${NAME}Controller.php

# Delete views
rm -rf resources/views/$(echo $NAME | awk '{print tolower($0)}')

# Delete factory
rm -f database/factories/${NAME}Factory.php

echo "All related files for ${NAME} have been deleted."
