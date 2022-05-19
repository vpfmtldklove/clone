<?php 
    include("connect.php");
    $name = $_POST['uname'];
    $password = $_POST['psw'];

    $sql = "insert into member set
            name = '$name',
            password = '$password'
            ";
    $result = $conn -> query($sql);

    if($result) {
        echo "
        <script>
            alert('가입완료했습니다! 로그인해주세요');
            location.href = 'sign_in.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('다른 이름을 사용해주십시오.');
            history.back();
        </script>
        ";
    }
?>