<?php

$filename = 'data.json';

$data = file_get_contents($filename);
$users = json_decode($data);
?>

<html>
<table>
    <tbody>
        <tr>
            <th>Nama</th>
            <th>Pekerjaan</th>
            <th>Umur</th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td> <?= $user->nama; ?> </td>
            <td> <?= $user->Pekerjaan; ?> </td>
            <td> <?= $user->Umur; ?> </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</html>