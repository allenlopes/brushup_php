<?php
session_start();
// Deleting session

// unset($_SESSION['x']); // It is for specific session, in this case it deleted session with x.

session_destroy(); // It is for deleting compelete session i.e deleting all the sessions.

?>