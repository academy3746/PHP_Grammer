<?php
include("./db_config.php");

$sql = " SELECT COUNT(*) AS `CNT` FROM lions.hero ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_cnt = $row['CNT'];

$sql = " SELECT * FROM lions.hero ORDER BY mb_datetime DESC ";
$result = mysqli_query($conn, $sql);

if (!$_SESSION['ss_mb_id']) {
    echo "<script>alert('로그인 해주세요!')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
}
?>
<!doctype html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Member List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h4 class="display-4 text-center">회원목록</h4>
    <div class="box">
        <table class="table table-striped">
            <caption>Total <?php echo $total_cnt ?>명</caption>
            <thead>
            <tr>
                <th>일련번호</th>
                <th>아이디</th>
                <th>이름</th>
                <th>이메일</th>
                <th>장르</th>
                <th>성별</th>
                <th>파트</th>
                <th>가입일</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($i=0 ; $row = mysqli_fetch_assoc($result) ; $i++) :  ?>
            <tr>
                <td><?php $i++ ?></td>
                <td><?php echo $row['mb_id'] ?></td>
                <td><?php echo $row['mb_name'] ?></td>
                <td><?php echo $row['mb_email'] ?></td>
                <td><?php echo $row['mb_genre'] ?></td>
                <td><?php echo $row['mb_sex'] ?></td>
                <td><?php echo $row['mb_part'] ?></td>
                <td><?php echo $row['mb_datetime'] ?></td>
            </tr>
            <?php endfor; ?>
            <?php
            if ($total_cnt == 0) {
                echo "<tr><td colspan='8'>등록된 회원이 없습니다.</td></tr>";
            }
            ?>
            </tbody>
        </table>

        <a href="./04_register.php" class="btn btn-primary">회원수정</a>
        <a href="./03_logout.php" class="btn btn-danger">로그아웃</a>
    </div>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
