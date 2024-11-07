<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            max-width: 400px;
        }
        h2 {
            text-align: center;
        }
        label, input {
            display: block;
            margin: 10px 0;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Aplikasi Penilaian Mahasiswa</h2>
    <form id="gradeForm">
        <label for="nilai1">Masukkan Nilai Mata Kuliah 1:</label>
        <input type="number" id="nilai1" required>

        <label for="nilai2">Masukkan Nilai Mata Kuliah 2:</label>
        <input type="number" id="nilai2" required>

        <label for="nilai3">Masukkan Nilai Mata Kuliah 3:</label>
        <input type="number" id="nilai3" required>

        <button type="button" onclick="calculateAverage()">Submit</button>
    </form>

    <div class="result">
        <p>Nilai Rata-Rata: <span id="averageScore">-</span></p>
        <p>Status Kelulusan: <span id="status">-</span></p>
    </div>

    <script>
        function calculateAverage() {
            const nilai1 = parseFloat(document.getElementById('nilai1').value);
            const nilai2 = parseFloat(document.getElementById('nilai2').value);
            const nilai3 = parseFloat(document.getElementById('nilai3').value);

            if (isNaN(nilai1) || isNaN(nilai2) || isNaN(nilai3)) {
                alert("Please enter all values.");
                return;
            }

            const average = (nilai1 + nilai2 + nilai3) / 3;
            document.getElementById('averageScore').innerText = average.toFixed(2);

            const status = average >= 60 ? "Lulus" : "Tidak Lulus";
            document.getElementById('status').innerText = status;
        }
    </script>
</body>
</html>