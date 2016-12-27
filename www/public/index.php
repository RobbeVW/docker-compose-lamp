<?php
/**
 * This is just an example php file
 *
 * Use below command to find the MySQL container IP (see mariadb):
 *
 * docker inspect -f '{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)
 */
$con = new PDO('mysql:host=172.18.0.3;dbname=phptherightway_checklist;', 'Bob', 'Bob');
