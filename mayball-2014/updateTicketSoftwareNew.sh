#!/bin/bash
if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root" 1>&2
   exit 1
fi
echo "Cloning a new copy of the ticketing system to ticketsNew"
git clone ssh://pc410@zeus.jesus.cam.ac.uk/societies/mayball/tickets.git/ ticketsNew
echo "Moving preferences"
cp tickets/includes/config.php ticketsNew/includes/
cp tickets/.htaccess ticketsNew/
cp tickets/.htpasswd ticketsNew/
cp tickets/entry/.htaccess ticketsNew/entry/
cp tickets/admin/.htaccess ticketsNew/admin/
cp tickets/permissions/* ticketsNew/permissions/
cp tickets/includes/database_config.php ticketsNew/includes/
cp tickets/res/logo.png ticketsNew/res/
cp tickets/tc.pdf ticketsNew/
cp tickets/res/charities.html ticketsNew/res/
rm ticketsNew/receipts/ -rf
mv tickets/receipts/ ticketsNew/
echo "Chown must be run as root, please enter your password if you have sudo rights"
sudo chown mayball:mayball ticketsNew/ -R
mv tickets/ ticketsOld/
mv ticketsNew/ tickets/
rm ticketsOld/ -rf
chmod ug+rw tickets/ -R
chmod o+r tickets/ -R
#chmod 775 tickets/permissions/ -R
#chmod 775 tickets/receipts/ -R
#chmod 755 tickets/includes/config.php
