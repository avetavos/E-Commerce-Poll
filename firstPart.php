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
    <form class="main_container" action="getFirstPart.php" method="POST">
    <h1>แบบสอบถามพฤติกรรมการซื้อสินค้าทางออนไลน์</h1>
        <div class="header_container">
        <h2>ส่วนที่่ 1 : ข้อมูลส่วนบุคคลของผู้ตอบแบบสอบถาม</h2>
        </div>
        <div class="container">
            <p>เพศ</p> 
            <input type="radio" name="choice_1" value="male" onchange="check_1(this)"><label>ชาย</label><br>
            <input type="radio" name="choice_1" value="female" onchange="check_1(this)"><label>หญิง</label><br>
            <input type="radio" name="choice_1" value="other" onchange="check_1(this)"><label>อื่น ๆ</label><br>
        </div>
        <div class="container">
            <p>อายุ</p>
            <input type="radio" name="choice_2" value="19" onchange="check_2(this)"><label>19</label><br>
            <input type="radio" name="choice_2" value="20" onchange="check_2(this)"><label>20</label><br>
            <input type="radio" name="choice_2" value="21" onchange="check_2(this)"><label>21</label><br>
            <input type="radio" name="choice_2" value="22" onchange="check_2(this)"><label>22</label><br>
            <input type="radio" name="choice_2" value="23" onchange="check_2(this)"><label>23</label><br>
            <input type="radio" name="choice_2" value="other" onchange="check_2(this)"><label>อื่น ๆ</label><br>
        </div>
        <div class="container">
            <p>เป็นนักศึกษาคณะ</p>
            <input type="radio" name="choice_3" value="science" onchange="check_3(this)"><label>คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์</label><br>
            <input type="radio" name="choice_3" value="social" onchange="check_3(this)"><label>คณะสังคมบูรณาการณ์</label><br>
            <input type="radio" name="choice_3" value="business" onchange="check_3(this)"><label>คณะบริหารธุรกิจ</label><br>
            <input type="radio" name="choice_3" value="art" onchange="check_3(this)"><label>คณะศิลปศาสตร์</label><br>
		</div>
		<div class="container">
            <p>รายรับต่อเดือน</p>
            <input type="radio" name="choice_4" value="3999" onchange="check_4(this)"><label>ต่ำกว่า 4,000 บาท</label><br>
            <input type="radio" name="choice_4" value="4000-5999" onchange="check_4(this)"><label>4,000 บาท - 5,999 บาท</label><br>
            <input type="radio" name="choice_4" value="6000-7999" onchange="check_4(this)"><label>6,000 บาท - 7,999 บาท</label><br>
            <input type="radio" name="choice_4" value="8000-9999" onchange="check_4(this)"><label>8,000 บาท - 9,999บาท</label><br>
			<input type="radio" name="choice_4" value="10000" onchange="check_4(this)"><label>มากกว่า 10,000 บาทขึ้นไป</label><br>
		</div>
		<div class="container">
            <p>ท่านเคยค้นหาหรือซื้อสินค้าและบริการผ่านทางอินเทอร์เน็ตผ่านทางสื่อออนไลน์หรือไม่ </p>
            <input type="radio" name="choice_5" value="ever" onchange="check_5(this)"><label>เคย</label><br>
            <input type="radio" name="choice_5" value="never" onchange="check_5(this)"><label>ไม่เคย</label><br>
		</div>
        <script src="js/radioCheckFirstPart.js"></script>
        <input type="submit" class="sentData" name="submit" value="ส่งแบบสอบถาม">
    </form>
</body>
</html>