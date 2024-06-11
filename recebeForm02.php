<?php
    // Radio Button
    echo "<b> Seu sistema operacional é: </b>" . $_POST["sistema"] , "<br><br>";

    // Checkbox
    if(isset($_POST["numeros"]))
    {
        echo "<b>Os números de sua preferência são:</b><br>";

        // Faz loop pelo array dos numeros
        foreach($_POST["numeros"] as $numero)
        {
            echo "" , $numero . "<br><br>";
        }
    }
    else
    {
        echo "<b>Você não escolheu número preferido!</b><br><br>";
    }

    echo "<b>Seu processador é: </b>" . $_POST["processador"] ,"<br>";
?>