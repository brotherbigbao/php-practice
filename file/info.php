<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 防止乱码 -->
    <meta charset="utf-8">
    <title>信息反馈</title>
</head>

<body>
<div><a href="info.php">点击刷新页面</a></div>
<form action="info.php" enctype="multipart/form-data" method="post">
    信息：<input type="text" name="comment"/><br/>
    反馈文件：<input type="file" name="file"/><br/>
    <input type="submit" value="提交">
</form>
</body>
</html>

<?php
//print_r($_FILES);
if (isset($_FILES['file']['name'])) {
    if (move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . '/' . $_FILES['file']['name'])) {
        echo '反馈成功！';
    } else {
        echo '反馈失败！';
        print_r($_FILES);
    }
}