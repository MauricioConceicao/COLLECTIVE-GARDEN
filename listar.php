<?php

$con = mysql_connect("localhost", "root","");
mysql_select_db("collective_garden", $con);
if (!$con)
{
die('Problema na ligação ' . mysql_error());
}
mysql_select_db("collective_garden", $con);

$result = mysql_query("SELECT * FROM cadastro_plantas", $con);


//Verifica se algum registo foi devolvido
$numero_registos = mysql_num_rows($result);

echo "<table border=2>";
echo "<tr>";
echo "<td>Código Obra:</td> <td>Código Empresa:</td> <td>Data de Inicio:</td>";
echo "</tr>";

while($row = mysql_fetch_array($result))
{

echo "<tr>";




echo "<td>".$row['nome_comum']."</td>";

echo "<td>".$row['observacao']."</td>";


echo "</tr>";
echo "<br>";
}
echo "</table>";



