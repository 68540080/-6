<html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body { font-family: 'Sarabun', sans-serif; display: flex; justify-content: center; padding-top: 50px; background-color: #f0f2f5; }
        .calculator-card { background: white; padding: 25px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 350px; text-align: center; }
        input { width: 80%; padding: 12px; margin: 10px 0; border: 2px solid #ddd; border-radius: 8px; font-size: 18px; }
        .ops-group { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 20px 0; }
        button { padding: 15px; font-size: 18px; cursor: pointer; border: none; border-radius: 8px; transition: 0.2s; }
        .btn-op { background-color: #3498db; color: white; }
        .btn-op:hover { background-color: #2980b9; }
        .btn-clear { background-color: #e74c3c; color: white; width: 100%; margin-top: 10px; }
        .btn-clear:hover { background-color: #c0392b; }
        #result-display { margin-top: 20px; padding: 15px; background: #e8f4fd; border-radius: 8px; min-height: 30px; }
        .error { color: #e74c3c; font-weight: bold; }
        .success { color: #2c3e50; font-size: 24px; font-weight: bold; }
    </style>
</head>
<body>

<div class="calculator-card">
    <h2>Calculator</h2>
    
    <input type="number" id="num1" placeholder="ตัวเลขที่ 1">
    <input type="number" id="num2" placeholder="ตัวเลขที่ 2">

    <div class="ops-group">
        <button class="btn-op" onclick="calculate('+')">+</button>
        <button class="btn-op" onclick="calculate('-')">-</button>
        <button class="btn-op" onclick="calculate('*')">*</button>
        <button class="btn-op" onclick="calculate('/')">/</button>
    </div>

    <button class="btn-clear" onclick="clearAll()">ล้างข้อมูล (Clear)</button>

    <div id="result-display">
        <span>รอคำนวณ</span>
    </div>
</div>

<script>
    function calculate(operator) {
        const n1 = document.getElementById('num1').value;
        const n2 = document.getElementById('num2').value;
        const display = document.getElementById('result-display');

        if (n1 === "" || n2 === "") {
            alert("กรุณากรอกตัวเลขให้ครบทั้ง 2 ช่องครับ!");
            display.innerHTML = '<span class="error">กรุณากรอกข้อมูลให้ครบ</span>';
            return;
        }

        const val1 = parseFloat(n1);
        const val2 = parseFloat(n2);
        let result = 0;

        if (operator === '/' && val2 === 0) {
            alert("ไม่สามารถหารด้วยเลข 0 ได้ครับ");
            display.innerHTML = '<span class="error">Error: หารด้วย 0 ไม่ได้</span>';
            return;
        }

        switch(operator) {
            case '+': result = val1 + val2; break;
            case '-': result = val1 - val2; break;
            case '*': result = val1 * val2; break;
            case '/': result = val1 / val2; break;
        }

        display.innerHTML = `<span class="success">คำตอบคือ: ${result.toLocaleString()}</span>`;
    }

    function clearAll() {
        document.getElementById('num1').value = "";
        document.getElementById('num2').value = "";
        document.getElementById('result-display').innerHTML = "<span>รอการคำนวณ...</span>";
    }
</script>

</body>
</html>