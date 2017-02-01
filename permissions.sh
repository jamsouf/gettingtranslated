#!/bin/sh

# all things we have to do for setting up the
# right owners and permissions on specific folders

grps() {
    chgrp -R www-data storage/
}
permissions() {
    chmod -R 775 storage/
}

grps
permissions