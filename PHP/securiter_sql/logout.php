<?php
session_start();
session_destroy();
header('location:index.php?message=Vous ete deconecter de la realiter&status=success');