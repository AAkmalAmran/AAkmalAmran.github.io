<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web - [Nama Anda]</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="profile">
        <?php
            // Data pribadi (dapat diganti sesuai kebutuhan)
            $nama = "Ahmad Akmal Amran";
            $nim = "102022300010";
            $fakultas = "Fakultas Rekayasa Industri";
            $program_studi = "Sistem Informasi";
            $github = "https://github.com/AAkmalAmran";
            $linkedin = "https://www.linkedin.com/in/ahmad-akmal-amran/";
            $steam = "https://steamcommunity.com/profiles/76561198361278805/";

            // Menampilkan data menggunakan PHP echo
            echo "<img src='Foto1.jpg' alt='Foto Profil'>";
            echo "<h1>$nama</h1>";
            echo "<p>$nim / $fakultas / $program_studi</p>";

            // Link media sosial
            echo "<div class='social-links'>";
            echo "<a href='$github' target='_blank'>GitHub</a>";
            echo "<a href='$linkedin' target='_blank'>linkedin</a>";
            echo "<a href='$steam' target='_blank'>Steam</a>";
            echo "</div>";
        ?>
    </div>
</body>
</html>