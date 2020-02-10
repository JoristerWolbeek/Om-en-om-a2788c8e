<style>

table, tr, td{
    padding: 40px;
    border: 2px solid black;
    border-collapse: collapse;
}



.black{
    background-color: black;
}
</style>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
    <table>
    <?php
    for($y=0; $y<8; $y++) {
        echo("<tr>");
        for($x=0; $x<8; $x++){
            if(($x + $y) % 2) {
                echo("<td></td>");
            } else {
                echo("<td class='black'></td>");
            }
        }
        echo("</tr>");
    }

?>

</table>
</html>
