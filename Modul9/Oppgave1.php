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

            $folder = "files/";

            $folderItems = scandir($folder);


            foreach($folderItems as $file) 
            {
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $type = $finfo->file($folder . $file);
                
                $size = filesize($folder . $file);
                $timestamp = filemtime($folder . $file);
                $date = date("D.M.Y, H:i", $timestamp);
                $readability = is_readable($folder . $file);
                $executable = is_executable($folder . $file);
                $writeable = is_writable($folder . $file);
            ?>
            <tr>
                    <td><?= $file; ?></td>
                    <td><?= $type; ?></td>
                    <td><?= $size . 'bytes'; ?></td>
                    <td><?= $date; ?></td>
                    <!--is_readable, is_executable returnerer en boolean type. Dersom filen er lesbar returnerer den true  -->
                    <td><?= $readability == true ? "ja": "nei"; ?></td>
                    <td><?= $executable == true ? "ja": "nei"; ?></td>
                    <td><?= $writeable == true ? "ja": "nei"; ?></td>
            </tr>
            
            <?php } ?>
        </tr>
</table>