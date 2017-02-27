<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=divice-width, initial-scale=1.0">
    <title>แบบสอบถามพฤติกรรมการซื้อสินค้าทางออนไลน์</title>
    <link rel="stylesheet" href="css/template.css">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script>
        $(document).ready(function() {
            $(".sentData").hide();
        });
    </script>
</head>
<body>
    <form class="main_container" action="getSecondPart.php" method="POST">
    <h1>แบบสอบถามพฤติกรรมการซื้อสินค้าทางออนไลน์</h1>
        <div class="header_container">
        <h2>ส่วนที่ 2 : ข้อมูลสอบถามพฤติกรรมการซื้อสินค้าออนไลน์</h2>
        </div>
		<div class="container">
            <p>ท่านซื้อสินค้าหรือบริการผ่านทางอินเทอร์เน็ตและสื่อออนไลน์บ่อยแค่ไหน</p>
            <input type="radio" name="choice_1" value="longtime" onchange="check_1(this)"><label>นาน ๆ ครั้ง (น้อยกว่า 1 ครั้งต่อเดือน)</label><br>
            <input type="radio" name="choice_1" value="often" onchange="check_1(this)"><label>ไม่บ่อย (1 - 3 ครั้งต่อเดือน)</label><br>
            <input type="radio" name="choice_1" value="hourly" onchange="check_1(this)"><label>บ่อย (1 ครั้งต่อสัปดาห์)</label><br>
			<input type="radio" name="choice_1" value="always" onchange="check_1(this)"><label>บ่อยมาก (มากกว่า 1 ครั้งต่อสัปดาห์)</label><br>
        </div>
		<div class="container">
            <p>ท่านใช้จ่ายเงินเฉลี่ยต่อครั้งประมาณเท่าไรในการเลือกซื้อสินค้าหรือบริการผ่านทางอินเทอร์เน็ตและสื่อออนไลน์</p>
            <input type="radio" name="choice_2" value="less" onchange="check_2(this)"><label>น้อยกว่า 500 บาท</label><br>
            <input type="radio" name="choice_2" value="fivetoten" onchange="check_2(this)"><label>500 บาท - 1,999 บาท</label><br>
            <input type="radio" name="choice_2" value="twentothirty" onchange="check_2(this)"><label>2,000 บาท - 3,999 บาท</label><br>
			<input type="radio" name="choice_2" value="overfourty" onchange="check_2(this)"><label>มากกว่า 4,000 บาทขึ้นไป</label><br>
        </div>
		<div class="container">
            <p>ท่านนิยมเลือกซื้อสินค้าหรือบริการผ่านทางอินเทอร์เน็ตและสื่อออนไลน์ผ่านช่องทางใด</p>
            <label class="note">*หมายเหตุ : สามารถตอบได้มากกว่า 1 คำตอบ</label><br>
            <input type="checkbox" name="choice_3[]" value="web" onchange="check_3(this)" ><label>เว็บไซต์ (เช่น Lazada, Amazon, eBay)</label><br>
            <input type="checkbox" name="choice_3[]" value="social" onchange="check_3(this)"><label>สื่อสังคมออนไลน์ (เช่น Facebook, Instagram, Line)</label><br>
            <input type="checkbox" name="choice_3[]" value="other" onchange="check_3(this)"><label>อื่น ๆ</label><br>
        </div>
		<div class="container">
            <p>บุคคลใดมีอิทธิพลต่อการตัดสินใจในการเลือกซื้อสินค้าหรือบริการผ่านทางอินเทอร์เน็ตและสื่อออนไลน์</p>
            <label class="note">*หมายเหตุ : สามารถตอบได้มากกว่า 1 คำตอบ</label><br>
            <input type="checkbox" name="choice_4[]" value="star" onchange="check_4(this)"><label>บุคคลผู้มีชื่อเสียง / ดารานักแสดง / นักร้อง</label><br>
            <input type="checkbox" name="choice_4[]" value="friend" onchange="check_4(this)"><label>เพื่อน / คนสนิท</label><br>
            <input type="checkbox" name="choice_4[]" value="family" onchange="check_4(this)"><label>ญาติพี่น้อง</label><br>
			<input type="checkbox" name="choice_4[]" value="other" onchange="check_4(this)"><label>อื่น ๆ</label><br>
        </div>
		<div class="container">
            <p>สินค้าหรือบริการประเภทใดที่ท่านนิยมเลือกซื้อ</p>
            <label class="note">*หมายเหตุ : สามารถตอบได้มากกว่า 1 คำตอบ</label><br>
            <input type="checkbox" name="choice_5[]" value="fashion" onchange="check_5(this)"><label>แฟชั่นสุภาพสตรี / สุภาพบุรุษ</label><br>
            <input type="checkbox" name="choice_5[]" value="health" onchange="check_5(this)"><label>สุขภาพและความงาม</label><br>
            <input type="checkbox" name="choice_5[]" value="housewares" onchange="check_5(this)"><label>เครื่องใช้ไฟฟ้า ของใช้ภายในบ้าน และอุปกรณ์อิเล็กทรอนิกส์</label><br>
			<input type="checkbox" name="choice_5[]" value="automotive" onchange="check_5(this)"><label>ของตกแต่งยานยนต์ / สื่อบรรเทิง</label><br>
			<input type="checkbox" name="choice_5[]" value="pet" onchange="check_5(this)"><label>สัตว์เลี้ยง</label><br>
			<input type="checkbox" name="choice_5[]" value="child" onchange="check_5(this)"><label>สินค้าเด็กและของเล่นเด็ก</label><br>
			<input type="checkbox" name="choice_5[]" value="sport" onchange="check_5(this)"><label>กีฬาและการเดินทาง</label><br>
			<input type="checkbox" name="choice_5[]" value="other" onchange="check_5(this)"><label>อื่น ๆ</label><br>
        </div>
        <script src="js/radioCheckSecondPart.js"></script>
        <input type="submit" class="sentData" name="submit" value="ส่งแบบสอบถาม">
    </form>
</body>
</html>