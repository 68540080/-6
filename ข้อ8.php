<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            transition: background-color 0.5s ease;
        }
        h1 {
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .button-group {
            display: flex;
            gap: 15px;
        }
        button {
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            color: white;
            transition: transform 0.2s;
        }
        button:active {
            transform: scale(0.95);
        }
        .btn-green { background-color: #2ecc71; }
        .btn-orange { background-color: #e67e22; }
        .btn-purple { background-color: #9b59b6; }
        .btn-clear { background-color: #bdc3c7; color: #333; }
    </style>
</head>
<body>

    <h1></h1>

    <div class="button-group">
        <button class="btn-green" onclick="changeColor('green')">เขียว</button>
        <button class="btn-orange" onclick="changeColor('orange')">ส้ม</button>
        <button class="btn-purple" onclick="changeColor('purple')">ม่วง</button>
        <button class="btn-clear" onclick="changeColor('')">Clear</button>
    </div>

    <script>
        function changeColor(colorName) {
            document.body.style.backgroundColor = colorName;
        }
    </script>

</body>
</html>