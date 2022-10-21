<?php
include("./data/db_config.php");

# 회원수정 mode
if (isset($_SESSION['ss_mb_id'])) {
    $mb_id = $_SESSION['ss_mb_id'];

    $sql = "select * from metal_god.band where mb_id = '$mb_id'";
    $result = mysqli_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);
    mysqli_close($conn);

    $mode = "modify";
    $title = "회원수정";
    $modify_mb_info = "readonly";
    $href = "./05_member_list.php";
} else {
    # 회원가입 mode
    $mode = "join";
    $title = "회원가입";
    $modify_mb_info = "";
    $href = "./01_index.php";
}
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h4 class="display-4 text-center"><?php echo $title ?></h4>

    <form action="./03_register_update.php" method="post">
        <input type="hidden" name="mode" value="<?php echo $mode ?>">

        <label for="mb_id">아이디</label>
        <div class="mb-3">
            <input type="text"
                   id="mb_id"
                   name="mb_id"
                   class="form-control"
                   value="<?php echo $mb['mb_id'] ?? '' ?>" <?php echo $modify_mb_info ?>>
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

        <label for="mb_sex">성별</label>
        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input type="radio"
                       id="sex01"
                       name="mb_sex"
                       class="form-check-input"
                       value="Male" <?php echo ($mb['mb_sex'] === "Male") ? "checked" : "" ?>>
                <label for="sex01">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio"
                       id="sex02"
                       name="mb_sex"
                       class="form-check-input"
                       value="Female" <?php echo ($mb['mb_sex'] === "Female") ? "checked" : "" ?>>
                <label for="sex02">Female</label>
            </div>
        </div>

        <label for="mb_genre">장르</label>
        <div class="mb-3">
            <select class="form-select" name="mb_genre">
                <option value="">----Choose One----</option>
                <option value="hard_rock" <?php echo ($mb['mb_genre'] === "Hard Rock") ? "selected" : "" ?>>Hard Rock
                </option>
                <option value="classic_rock" <?php echo ($mb['mb_genre'] === "Classic Rock") ? "selected" : "" ?>>
                    Classic Rock
                </option>
                <option value="heavy_metal" <?php echo ($mb['mb_genre'] === "Heavy Metal") ? "selected" : "" ?>>Heavy
                    Metal
                </option>
                <option value="thrash metal" <?php echo ($mb['mb_genre'] === "Thrash Metal") ? "selected" : "" ?>>Thrash
                    Metal
                </option>
                <option value="la_metal" <?php echo ($mb['mb_genre'] === "LA Metal") ? "selected" : "" ?>>LA Metal
                </option>
                <option value="glam_rock" <?php echo ($mb['mb_genre'] === "Glam Rock") ? "selected" : "" ?>>Glam Rock
                </option>
                <option value="progressive_rock" <?php echo ($mb['mb_genre'] === "Progressive Rock") ? "selected" : "" ?>>
                    Progressive Rock
                </option>
                <option value="grunge_rock" <?php echo ($mb['mb_genre'] === "Grunge Rock") ? "selected" : "" ?>>Grunge
                    Rock
                </option>
                <option value="modern_rock" <?php echo ($mb['mb_genre'] === "Modern Rock") ? "selected" : "" ?>>Modern
                    Rock
                </option>
                <option value="neo_punk" <?php echo ($mb['mb_genre'] === "Neo Punk") ? "selected" : "" ?>>Neo Punk
                </option>
                <option value="post_grunge" <?php echo ($mb['mb_genre'] === "Post Grunge") ? "selected" : "" ?>>Post
                    Grunge
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary"><?php echo $title ?></button>
        <a href="<?php echo $href ?>" class="btn btn-danger">CANCEL</a>
    </form>
</div>

</body>
</html>
