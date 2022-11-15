<h1>Oppgave 1</h1>
<table>
        <tr>
                <th>Mappe/fil</th>
                <th>Type</th>
                <th>Størrelse</th>
                <th>Sist modifisert</th>
                <th>Lesbar</th>
                <th>Kjørbar</th>
                <th>Skrivbar</th>
        </tr>
        <tr>
                <?php
                //definerer mappen som skal scannes
                $folder = "files/";
                // lister opp filer og mapper i en gitt mappe med funksjonen scandir
                $folderItems = scandir($folder);

                //looper over innholdet i mappen leser innholdet
                foreach ($folderItems as $file)
                // lageer ett nytt objekt av finfo (fileinfo). For å få frem filtype
                {
                        $finfo = new finfo(FILEINFO_MIME_TYPE);
                        $type = $finfo->file($folder . $file);
                        //ulike funksjoner for å få data om filene i mappen.
                        $size = filesize($folder . $file);
                        $timestamp = filemtime($folder . $file);
                        $date = date("D.M.Y, H:i", $timestamp);
                        $readability = is_readable($folder . $file);
                        $executable = is_executable($folder . $file);
                        $writeable = is_writable($folder . $file);
                ?>
        <tr>
                <!-- printer ut verdiene i en tabell -->
                <td><?= $file; ?></td>
                <td><?= $type; ?></td>
                <td><?= $size . 'bytes'; ?></td>
                <td><?= $date; ?></td>
                <!--is_readable, is_executable returnerer en boolean type. Dersom filen er lesbar returnerer den true  -->
                <td><?= $readability == true ? "ja" : "nei"; ?></td> <!-- dersom var variabelen == true blir "ja printet ut"-->
                <td><?= $executable == true ? "ja" : "nei"; ?></td>
                <td><?= $writeable == true ? "ja" : "nei"; ?></td>
        </tr>

<?php } ?>
</tr>
</table>