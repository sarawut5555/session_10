<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: การทำงานกับฟอร์ม ::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>
<body>
    <form name="form1" action="#" method="post" enctpe="multiparform-data">
<div class="container">
    <div class="row">
    <div class="col">
        <label class="form-label">คำนำหน้าชื่อ</label>
    <br>
        <select class="form-select" aria-label="Default select example">
            <option selected>เลือกคำนำหน้าชื่อ</option>
            <option value="1">นาย</option>
            <option value="2">นางสาว</option>
            <option value="3">นาง</option>
        </select>
    </div>
    <div class="col">
        <label class="form-label">ชื่อ</label>
    <br>
        <input type="text" class ="formcontrol" name="text_firstname" id="text_firstname" placeholder="กรุณาป้อนชื่อ">
    </div>
    <div class="col">
        <label class="form-label">นามสกุล</label>
    <br>
        <input type="text" class ="formcontrol" name="text_lastname" id="text_lastname"placeholder="กรุณาป้อนนามสกุล">
    </div>
  </div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>