<?php

//Ao startar s sessoon em outra página é possível usar os dados;
session_start();
echo $_SESSION['cor']."<br>".$_SESSION['carro'];