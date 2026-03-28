<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แปลงรูปแบบเวลา</title>
    <style>
        body { font-family: 'Tahoma', sans-serif; text-align: center; margin-top: 50px; background-color: #f0f2f5; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); display: inline-block; }
        input { padding: 10px; font-size: 1rem; border: 1px solid #ddd; border-radius: 5px; width: 150px; text-align: center; }
        button { padding: 10px 20px; font-size: 1rem; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; margin-left: 10px; }
        button:hover { background-color: #0056b3; }
        #output { margin-top: 25px; font-size: 1.3rem; color: #333; font-weight: bold; }
    </style>
</head>
<body>

    <div class="card">
        <h2>โปรแกรมแยกส่วนเวลา</h2>
        <p>กรอกเวลา (รูปแบบ HH:mm:ss):</p>
        
        <input type="text" id="timeInput" placeholder="02:30:05" value="02:30:05">
        <button onclick="convertTime()">แปลงผลลัพธ์</button>

        <div id="output"></div>
    </div>

    <script>
        function convertTime() {
            // 1. ดึงค่าจากช่อง Input
            let timeVal = document.getElementById('timeInput').value.trim();
            let outputDiv = document.getElementById('output');

            // 2. ใช้คำสั่ง split(':') เพื่อแยกข้อความด้วยเครื่องหมาย :
            // เช่น "02:30:05" จะกลายเป็น Array ["02", "30", "05"]
            let timeParts = timeVal.split(':');

            // 3. ตรวจสอบว่ากรอกข้อมูลครบ 3 ส่วนหรือไม่
            if (timeParts.length === 3) {
                let hh = timeParts[0];
                let mm = timeParts[1];
                let ss = timeParts[2];

                // 4. แสดงผลลัพธ์
                outputDiv.innerHTML = `${hh} ชั่วโมง ${mm} นาที ${ss} วินาที`;
                outputDiv.style.color = "#333";
            } else {
                outputDiv.innerHTML = "กรุณากรอกรูปแบบให้ถูกต้อง (hh:mm:ss)";
                outputDiv.style.color = "red";
            }
        }
    </script>

</body>
</html>