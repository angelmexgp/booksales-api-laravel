<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Genre</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #eef5ff, #dbeafe);
            min-height: 100vh;
            padding: 50px 20px;
            color: #172554;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 45px;
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(30, 64, 175, 0.15);
        }

        .header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 10px;
        }

        .icon {
            font-size: 55px;
        }

        h1 {
            margin: 0;
            font-size: 42px;
            color: #1e3a8a;
        }

        .subtitle {
            color: #64748b;
            font-size: 18px;
            margin: 8px 0 30px;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            overflow: hidden;
            border: 1px solid #bfdbfe;
            border-radius: 12px;
        }

        th {
            background: #2563eb;
            color: white;
            text-align: left;
            padding: 17px 20px;
            font-size: 17px;
        }

        td {
            padding: 17px 20px;
            border-top: 1px solid #dbeafe;
            color: #1e293b;
            font-size: 16px;
        }

        tr:nth-child(even) td {
            background: #f8fbff;
        }

        tr:hover td {
            background: #eff6ff;
        }

        th:first-child {
            width: 120px;
        }

        .footer {
            margin-top: 25px;
            color: #94a3b8;
            font-size: 14px;
            text-align: center;
        }

        @media (max-width: 600px) {
            .container {
                padding: 25px;
            }

            h1 {
                font-size: 30px;
            }

            .icon {
                font-size: 40px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <div class="icon">📚</div>
        <h1>Data Genre</h1>
    </div>

    <p class="subtitle">
        Daftar genre buku yang tersedia
    </p>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
        </tr>

        @foreach ($genres as $genre)
        <tr>
            <td>{{ $genre['id'] }}</td>
            <td>{{ $genre['name'] }}</td>
        </tr>
        @endforeach
    </table>

    <div class="footer">
        Book Sales &copy; 2026
    </div>

</div>

</body>
</html>
