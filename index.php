<?php
 
 $name= null;
 $surname = null;
 $age = null;
 
if (!empty($_POST)) {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $surname = isset($_POST['surname']) ? $_POST['surname'] : null;
    $age = isset($_POST['age']) ? $_POST['age'] : null;
}
 
if (!empty($_GET)) {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $surname = isset($_POST['surname']) ? $_POST['surname'] : null;
    $age = isset($_POST['age']) ? $_POST['age'] : null;
}
 
var_dump($_POST);
var_dump($_GET);
 
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form method="get">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"> *Поле Name должно быть заполнено.
  Иначе форму отправить нельзя.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Surname</label>
        <input type="surname" name="surname" class="form-control" id="exampleInputPassword1">
        
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Age</label>
        <input type="text" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"> *Поле Age должно быть заполнено.
  Иначе форму отправить нельзя.</div>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>

<?php
     if(empty($_GET['name']) && empty($_GET['surname']) && empty($_GET['age'])){
         exit('Текстовые поля Name или Age не заполнены');
     } else{
         echo '</pre';
         print_r($_GET);
         echo '</pre';
     }

?>     
 </body>
</html>