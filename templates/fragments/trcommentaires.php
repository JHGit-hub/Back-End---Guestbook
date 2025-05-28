<?php

/*

Template de fragment TR : detail d'un commentaire sur 5 colonnes (nom, prenom, date de départ, note et voir détail)
chaque commentaire est cliquable pour voir plus de detail

paramétre:
        $liste : tableau indéxé des commentaires issu de la base de donnée

*/

?>
<tr>
    <td><?= $com['lastname'] ?></td>
    <td><?= $com['firstname'] ?></td>
    <td><?= $com['departure'] ?></td>
    <td><?= $com['rate'] ?></td>
    <td><a href="https://guestbook-juha.play.mywebecom.ovh/afficher_commentaire.php?id=<?= $com["id"] ?>">lire le commentaire</a></td>
</tr>