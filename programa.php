<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

echo "Hoje é " . date('l d/F/y');
echo "<br>Agora são " . date('H:i:s');
echo "<br>Faltam " . (int)date('N') . " dias para sábado";