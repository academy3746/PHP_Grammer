<?php
include("./db_config.php");

if (isset($_SESSION['ss_mb_id'])) {
    // 세션이 유효한 상태라면...?
    $mb_id = $_SESSION['ss_mb_id'];

    $sql = " SELECT * FROM lions.hero WHERE mb_id = '$mb_id' ";
    $result = mysqli_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);

    mysqli_close($conn);

    // 회원수정 mode
    $mode = "modify";
    $title = "회원수정";
    $modify_mb_id = "readonly";
    $href = "./06_member_list.php";

} else {
    // 회원가입 mode
    $mode = "join";
    $title = "회원가입";
    $modify_mb_id = "";
    $href = "./01_index.php";
}
?>
<!doctype html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h4 class="display-4 text-center"><?php echo $title ?></h4>

    <form action="./05_register_update.php" method="post">
        <input type="hidden" name="mode" value="<?php echo $mode ?>">

        <label for="mb_id">아이디</label>
        <div class="mb-3">
            <input type="text"
                   id="mb_id"
                   name="mb_id"
                   class="form-control"
                   value="<?php echo $mb['mb_id'] ?? '' ?>" <?php echo $modify_mb_id ?>>
        </div>

        <label for="mb_password">비밀번호</label>
        <div class="mb-3">
            <input type="password"
                   id="mb_password"
                   name="mb_password"
                   class="form-control">
        </div>

        <label for="mb_password_re">비밀번호 확인</label>
        <div class="mb-3">
            <input type="password"
                   id="mb_password_re"
                   name="mb_password_re"
                   class="form-control">
        </div>

        <label for="mb_name">이름</label>
        <div class="mb-3">
            <input type="text"
                   id="mb_name"
                   name="mb_name"
                   class="form-control"
                   value="<?php echo $mb['mb_name'] ?? '' ?>">
        </div>

        <label for="mb_email">이메일</label>
        <div class="mb-3">
            <input type="email"
                   id="mb_email"
                   name="mb_email"
                   class="form-control"
                   value="<?php echo $mb['mb_email'] ?? '' ?>">
        </div>

        <label for="mb_genre">장르</label>
        <div class="mb-3">
            <select class="form-select" id="mb_genre" name="mb_genre">
                <option value="">----선택하세요----</option>
                <option value="hard_rock" <?php echo ($mb['mb_genre'] == "hard_rock") ? "selected" : "" ?>>Hard Rock</option>
                <option value="classic_rock" <?php echo ($mb['mb_genre'] == "classic_rock") ? "selected" : "" ?>>Classic Rock</option>
                <option value="heavy_metal" <?php echo ($mb['mb_genre'] == "heavy_metal") ? "selected" : "" ?>>Heavy Metal</option>
                <option value="thrash_metal" <?php echo ($mb['mb_genre'] == "thrash_metal") ? "selected" : "" ?>>Thrash Metal</option>
                <option value="la_metal" <?php echo ($mb['mb_genre'] == "la_metal") ? "selected" : "" ?>>LA Metal</option>
                <option value="glam_rock" <?php echo ($mb['mb_genre'] == "glam_rock") ? "selected" : "" ?>>Glam Rock</option>
                <option value="progressive_rock" <?php echo ($mb['mb_genre'] == "progressive_rock") ? "selected" : "" ?>>Progressive Rock</option>
                <option value="grunge_rock" <?php echo ($mb['mb_genre'] == "grunge_rock") ? "selected" : "" ?>>Grunge Rock</option>
                <option value="modern_rock" <?php echo ($mb['mb_genre'] == "modern_rock") ? "selected" : "" ?>>Modern Rock</option>
                <option value="neo_punk" <?php echo ($mb['mb_genre'] == "neo_punk") ? "selected" : "" ?>>Neo Punk</option>
                <option value="post_grunge" <?php echo ($mb['mb_genre'] == "post_grunge") ? "selected" : "" ?>>Post Grunge</option>
            </select>
        </div>

        <label>성별</label>
        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input type="radio"
                       id="sex01"
                       name="mb_sex"
                       class="form-check-input"
                       value="male" <?php echo ($mb['mb_sex'] == "male") ? "checked" : "" ?>>
                <label for="sex01">Male</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="radio"
                       id="sex02"
                       name="mb_sex"
                       class="form-check-input"
                       value="female" <?php echo ($mb['mb_sex'] == "female") ? "checked" : "" ?>>
                <label for="sex02">Female</label>
            </div>
        </div>

        <label>파트</label>
        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input type="checkbox"
                       id="mb_part01"
                       name="mb_part[]"
                       class="form-check-input"
                       value="vocal" <?php echo str_contains($mb['mb_part'], "vocal") ? "checked" : "" ?>>
                <label for="mb_part01">Vocal</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox"
                       id="mb_part02"
                       name="mb_part[]"
                       class="form-check-input"
                       value="drum" <?php echo str_contains($mb['mb_part'], "drum") ? "checked" : "" ?>>
                <label for="mb_part02">Drum</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox"
                       id="mb_part03"
                       name="mb_part[]"
                       class="form-check-input"
                       value="bass" <?php echo str_contains($mb['mb_part'], "bass") ? "checked" : "" ?>>
                <label for="mb_part03">Bass Guitar</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox"
                       id="mb_part04"
                       name="mb_part[]"
                       class="form-check-input"
                       value="e_guitar" <?php echo str_contains($mb['mb_part'], "e_guitar") ? "checked" : "" ?>>
                <label for="mb_part04">E.Guitar</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="checkbox"
                       id="mb_part05"
                       name="mb_part[]"
                       class="form-check-input"
                       value="keyboard" <?php echo str_contains($mb['mb_part'], "keyboard") ? "checked" : "" ?>>
                <label for="mb_part05">Keyboard</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary"><?php echo $title ?></button>
        <a href="<?php echo $href ?>" class="btn btn-danger">CANCEL</a>
    </form>
</div>

</body>
</html>
