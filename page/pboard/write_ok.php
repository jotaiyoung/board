<?php
    include $_SERVER['DOCUMENT_ROOT']."/db.php";
    
    $username = $_POST['name'];
    $userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d');
    
    if($username && $userpw && $title && $content){
        $sql = mq("insert into board(name,pw,title,content,date) values('".$username."','".$userpw."','".$title."','".$content."','".$date."')");
        echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='/';</script>";
    }