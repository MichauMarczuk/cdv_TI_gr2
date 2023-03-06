<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php.php</title>
</head>
<body>
    <h4>LISTA</h4>
    <ul>
        <li>Poznań
            <ol>
                <li>Ulica</li> 
            </ol>
        </li>
        <li>Gniezno</li>
        <li>Kraków</li>
    </ul>
    <table>
        <tr>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Birthday</td>
        </tr>
    <?php 
        require_once("baza.php");
        //print_r($user);
        while($user = $result->fetch_assoc())
        {
            echo <<< 'dupa'
            
        <tr>   
            <td>$user[firstName]</td>
            <td>$user[lastName]</td>
            <td>$user[birthday]</td>
        </tr>
dupa;
        }
    ?>
    </table>
</body>
</html>
