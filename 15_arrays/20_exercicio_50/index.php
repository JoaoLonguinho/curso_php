<?php

$arr = [
    "Nome" => "João",
    "Idade" => 27,
    "Profissão" => "Programador"
];

echo "<table> <tr>";
foreach($arr as $item => $value){
    echo "<td> $item <br/> $value </td> ";
}
echo "</tr> </table> <br/>";