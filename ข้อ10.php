<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>FizzBuzz Game</title>
    <style>
        body { font-family: 'Sarabun', sans-serif; text-align: center; padding: 50px; background-color: #f4f4f9; }
        input { padding: 10px; font-size: 18px; border-radius: 5px; border: 1px solid #ccc; width: 150px; }
        button { padding: 10px 20px; font-size: 18px; cursor: pointer; background-color: #3498db; color: white; border: none; border-radius: 5px; }
        #result { margin-top: 30px; font-size: 24px; font-weight: bold; color: #2c3e50; }
        .fizz { color: #e67e22; }
        .buzz { color: #9b59b6; }
        .fizzbuzz { color: #27ae60; font-size: 32px; text-decoration: underline; }
    </style>
</head>
<body>

    <h2>โปรแกรม FizzBuzz (1-100)</h2>
    <input type="number" id="numInput" min="1" max="100" placeholder="กรอกเลข 1-100">
    <button onclick="checkFizzBuzz()"></button>

    <div id="result"></div>

    <script>
        function checkFizzBuzz() {
            const input = document.getElementById('numInput').value;
            const resultDiv = document.getElementById('result');
            
            if (input === "" || input < 1 || input > 100) {
                resultDiv.innerHTML = "<span style='color:red;'>กรุณากรอกตัวเลขระหว่าง 1 ถึง 100 </span>";
                return;
            }

            const n = parseInt(input);
            let output = "";

            if (n % 3 === 0 && n % 5 === 0) {
                output = "<span class='fizzbuzz'>FizzBuzz</span>";
            } else if (n % 3 === 0) {
                output = "<span class='fizz'>Fizz</span>";
            } else if (n % 5 === 0) {
                output = "<span class='buzz'>Buzz</span>";
            } else {
                output = n;
            }

            resultDiv.innerHTML = "ผลลัพธ์คือ: " + output;
        }
    </script>

</body>
</html>