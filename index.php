<html>
    <head>
        <title>Tugas Dadu</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div id="tabel">
            <table>
                <tr>
                    <td>
                        <img id="Dadu1" src="dice6.png" alt="dadu6">
                    </td>
                    <td>
                        <p id="Nilai1">6</p>
                    </td>
                    <td>
                        <button id="bt1" >Lempar Dadu A</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img id="Dadu2" src="dice6.png" alt="">
                    </td>
                    <td>
                        <p id="Nilai2">6</p>
                    </td>
                    <td id="bt2">
                        <button id="bt2">Lempar Dadu B</button>
                    </td>
                </tr>
            </table>
            <div id="Penjumlah">
                <button id="RANDOM">Gulir 2 dadu</button>
                <button id="Jumlah" onclick="TampilkanNilai()">Total Langkah</button>
            </div>
        </div>
    </body>
    <script src="Tugas.js"></script>
</html>
