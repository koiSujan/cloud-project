<?php
// define("DB_SERVER" , "localhost");
// define("DB_USER" , "root");
// define("DB_PASSWORD" , "");
// define("DB_NAME" , "real-state");


define("ENV", "PROD");
if (ENV == 'DEV') {
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");
  define("DB_NAME", "real-state");
} else {
  define("DB_SERVER", "34.68.115.27");
  define("DB_USER", "root");
  define("DB_PASSWORD", "cloudproject");
  define("DB_NAME", "real-state");
}

?>