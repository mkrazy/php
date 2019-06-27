<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script src="jQuery.js"></script>
<style>
.btn-add{
    background-color: pink;
}
</style>
<script>
$(document).ready(function(){
    var count = 0;
    $('.btn-add').click(function(){
        $('form .wrapper-files').append('<div><input type ="file" name="file_'+count+'"></input></div>');
        count++;
        $('input[name="count"]').val(count);
    })
});
</script>
<body>
    <form action="" method="post" enctype="mutipart/form-data">
    <div class="wrapper-files">
    </div>
    <div class="btn-add">+</div>
    <input type="hidden" name="count" value=0>
    <input type="submit" value="submit">
    </form>
</body>
</html>