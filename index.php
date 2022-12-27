<?php

    // $serverName = "WINDOWS-JVNO0ME"; //serverName\instanceName
    // $connectionInfo = array( "Database"=>"EntrepriseDev", "UID"=>"yond", "PWD"=>"24-09-2001");
    // $bdd = sqlsrv_connect( $serverName, $connectionInfo);

    // if( $bdd ) {
    //     echo "Connection established.<br />";
    // }else{
    //     echo "Connection could not be established.<br />";
    //     die( print_r( sqlsrv_errors(), true));
    // }
    try {
        $bdd = new PDO("sqlsrv:server=WINDOWS-JVNO0ME;database=EntrepriseDev", "yond", "24-09-2001");
        echo "Gg man";
    } catch (Exception $e){
        die(print_r("Erreur :".$e->getMessage()));
    }

    $request = $bdd->prepare("SELECT * FROM Employe");
    $request->execute();
    echo 
    "<table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th> 
        </tr>";

    while ($result = $request->fetch()) {
        echo 
        "<tr>
            <td>".$result['NomE']."</td>";
        echo "<td>".$result['PrenomE']."</td></tr>";    
    }
    echo "</table>";
?>