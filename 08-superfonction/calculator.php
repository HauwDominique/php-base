<form method="get">
    <input type="text" name="number1" id="number1" placeholder="Entrez le nombre 1">
    <input type="text" name="number2" id="number2" placeholder="Entrez le nombre 2"><br><br>
    <select name="operation" id="operation">
        <option value="addition">addition</option>
        <option value="soustraction">soustraction</option>
        <option value="division">division</option>
        <option value="multiplication">multiplication</option>
    </select>
    <button type="submit" name="calculer">Calculer</button>

</form>


<?php

if ($_GET['operation'] === 'soustraction') {
    echo $_GET['number1'] - $_GET['number2'];
}
elseif($_GET['operation'] === 'division') {
    echo $_GET['number1'] / $_GET['number2'];
}
elseif($_GET['operation'] === 'multiplication') {
    echo $_GET['number1'] * $_GET['number2'];
}
else{
    echo $_GET['number1'] + $_GET['number2'];
}


// correction de Matthieu



















