<?php
include("connect.php");

$name = $_POST['uname'];
$password = $_POST['psw'];

$sql = "select no, name, password from member
        where name = '$name'";

$result = $conn -> query($sql);

$db_pw = mysqli_fetch_assoc($result);

if($db_pw) {

    if($password == $db_pw['password']) {
        $_SESSION['no'] = $db_pw['no'];
        $_SESSION['name'] = $db_pw['name'];
        $_SESSION['password'] = $db_pw['password'];
        echo "
        <script>
            alert('로그인성공!');
            location.href = '../view/index.php';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('비밀번호가 다릅니다');
        history.back();
    </script>
    ";
    }
    
} else {
    echo "
    <scritp>
        alert('로그인에 실패했습니다. 회원가입하세요');
        location.href = 'sign_up.php';
    </script>
    ";
}


?>