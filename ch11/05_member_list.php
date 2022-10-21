<?php
include("./data/db_config.php");

# `band` 테이블에 등록된 회원들의 '수'를 구할 것
$sql = "select count(*) as `cnt` from metal_god.band";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_cnt = $row['cnt'];

# `band` 테이블에서 등록된 전체 '회원 목록'을 '회원가입일자' 기준 '내림차순'으로 출력할 것
$sql = "select * from metal_god.band order by mb_datetime desc";
$result = mysqli_query($conn, $sql);

# 세션이 만료되었다면...?
if (!$_SESSION['ss_mb_id']) {
    echo "<script>alert('로그인 후 사용가능합니다!')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
}
?>
<!doctype html>
<html>
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
        <table class="table table-stripped">
            <caption>Total <?php echo number_format($total_cnt) ?>명</caption>
            <thead>
            <tr>
                <th>No.</th>
                <th>아이디</th>
                <th>이름</th>
                <th>이메일</th>
                <th>성별</th>
                <th>장르</th>
                <th>가입일</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($i=0 ; $row=mysqli_fetch_assoc($result) ; $i++): ?>
            <tr>
                <td><?php echo $i+1 ?></td>
                <td><?php echo $row['mb_id'] ?></td>
                <td><?php echo $row['mb_name'] ?></td>
                <td><?php echo $row['mb_email'] ?></td>
                <td><?php echo $row['mb_sex'] ?></td>
                <td><?php echo $row['mb_genre'] ?></td>
                <td><?php echo $row['mb_datetime'] ?></td>
            </tr>
            <?php endfor ?>
            <?php
            if ($total_cnt === 0):
            echo "<tr><td colspan='8'>등록된 회원이 없습니다.</td></tr>";
            endif;
            ?>
            </tbody>
        </table>
        <a href="./02_register.php" class="btn btn-primary">회원수정</a>
        <a href="./06_logout.php" class="btn btn-danger">로그아웃</a>
    </div>
</div>
<?php
mysqli_close($conn)
?>
</body>
</html>
