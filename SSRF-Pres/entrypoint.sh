#!/bin/sh
apt update
apt install net-tools
ifconfig
python3 -m http.server -d /usr/src/app2 7000 &
node /usr/src/app/ssrf.js -p 9000


