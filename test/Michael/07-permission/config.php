<?php

// paramètres de connexions
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PWD = "";
const DB_NAME = "bloog";
const DB_PORT = 3306;
const DB_CHARSET = "utf8mb4";

// paramètres supplémentaires pour PDO
const DB_TYPE = "mysql"; // valable pour MySQL et/ou MariaDB

/*
Mode d'environnement
développement => dev
production => prod
test => test
*/
const ENV = "dev";

// chemin absolu du projet
const PROJECT_DIRECTORY = __DIR__ ;

// mail pour webdev-cf2m.be
const MAIL_SERVER = "***@***.be";
