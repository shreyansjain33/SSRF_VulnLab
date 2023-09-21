# SSRF_VulnLab
A custom made SSRF vulnerable lab with multiple components vulnerable to SSRF demonstrating different varients of SSRF.

# Setup Instruction
  1. Install docker and docker-desktop (or any other replcements of it)
  2. Create two Docker Networks using the below commands:
    docker network create --attachable -d bridge ssrf-net
    docker network create --attachable -d bridge internal-net
  3. Clone this repo.
  4. Change directory to SSRF-Pres.
    cd SSRF-Pres
  5. Run Docker Compose.
    docker-compose up

# Credits and References:
1. [SethSec: NodeJS-SSRF-App](https://github.com/sethsec/Nodejs-SSRF-App)
2. [Osiris Lab: Giraffe](https://github.com/osirislab/Giraffe/blob/master/htdocs/ssrf.php)
3. [HackTricks](https://book.hacktricks.xyz/pentesting-web/ssrf-server-side-request-forgery)
4. [WebAcademy - PortSwigger](https://portswigger.net/web-security/ssrf)
