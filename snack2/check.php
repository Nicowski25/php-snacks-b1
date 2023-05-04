<?php if(strlen($_GET['name']) > 3 && str_contains($_GET['mail'], 'k') && is_numeric($_GET['age'])) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
?>