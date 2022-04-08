<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h2>Daftar Program Kerja BEM</h2>
    <table>
        <tbody>
            <tr>
                <td>No</td>
                <td>Nama Program Kerja</td>
                <td>Surat Keterangan</td>
            </tr>
        </tbody>
        <?php
        foreach ($proker as $proker) {
            if ($proker >= 1) {
                echo "<tr>",
                "<td>$proker[nomorProgram]</td>",
                "<td>$proker[namaProgram]</td>",
                "<td>$proker[suratKeterangan]</td>",
                "</tr>";
            } elseif ($proker = 0) {
                echo "</table>";
            }
        }
        echo "</table>";
        ?>
</body>

</html>