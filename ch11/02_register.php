<?php
# Include 'db_conn.php' to connect DB server
include "./data/db_conn.php";

# If there is a session, get member information and enter '0201_register_update.php'.
if (isset($_SESSION['ss_bh_id'])) {
    $bh_id = $_SESSION['ss_bh_id'];

    $sql = " select * from metal_god_project.band_hero where bh_id = $bh_id";
    $result = mysqli_query($conn, $sql);
    $bh = mysqli_fetch_assoc($result);
    mysqli_close($conn);

    $mode = "modify";
    $title = "정보수정";
    $modify_mb_info = "readonly";
    $href = "./0301_member_list.php";
} else {
    $mode = "insert";
    $title = "회원가입";
    $modify_mb_info = "";
    $href = "01_index.php";
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
    <h4 class="display-4 text-center"><?php $title ?></h4>

    <form action="./0201_register_update.php" method="post">
        <input type="hidden" name="mode" value="<?php echo $mode ?>">

        <label for="bh_id">아이디</label>
        <div class="mb-3">
            <input type="text"
                   id="bh_id"
                   name="bh_name"
                   class="form-control"
                   value="<?php echo $bh['bh_id'] ?? '' ?>" <?php echo $modify_mb_info ?>>
        </div>

        <label for="bh_password">비밀번호</label>
        <div class="mb-3">
            <input type="password"
                   id="bh_password"
                   name="bh_password"
                   class="form-control">
        </div>

        <label for="bh_password_re">비밀번호 확인</label>
        <div class="mb-3">
            <input type="password"
                   id="bh_password_re"
                   name="bh_password_re"
                   class="form-control">
        </div>

        <label for="bh_name">이름</label>
        <div class="mb-3">
            <input type="text"
                   id="bh_name"
                   name="bh_name"
                   class="form-control"
                   value="<?php echo $bh['bh_name'] ?? '' ?> ">
        </div>

        <label for="bh_password_re">이메일</label>
        <div class="mb-3">
            <input type="email"
                   id="bh_email"
                   name="bh_email"
                   class="form-control"
                   value="<?php echo $bh['bh_email'] ?? '' ?>">
        </div>

        <label>성별</label>
        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input type="radio"
                       class="form-check-input"
                       name="bh_sex"
                       id="sex01"
                       value="Male" <?php echo ($bh['bh_sex'] === "Male") ? "checked" : ""; ?>>
                <label for="sex01">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio"
                       class="form-check-input"
                       name="bh_sex"
                       id="sex02"
                       value="Female" <?php echo ($bh['bh_sex'] === "Female") ? "checked" : ""; ?>>
                <label for="sex02">Female</label>
            </div>
        </div>

        <label>장르</label>
        <div class="mb-3">
            <select class="form-select" name="bh_genre">
                <option value="">--Choose--</option>
                <option value="hard_rock" <?php echo ($bh['bh_genre'] === "Hard Rock") ? "selected" : ""; ?>>Hard Rock
                </option>
                <option value="classic_rock" <?php echo ($bh['bh_genre'] === "Classic Rock") ? "selected" : ""; ?>>
                    Classic Rock
                </option>
                <option value="heavy_metal" <?php echo ($bh['bh_genre'] === "Heavy Metal") ? "selected" : ""; ?>>Heavy
                    Metal
                </option>
                <option value="thrash_metal" <?php echo ($bh['bh_genre'] === "Thrash Metal") ? "selected" : ""; ?>>
                    Thrash Metal
                </option>
                <option value="la_metal" <?php echo ($bh['bh_genre'] === "LA Metal") ? "selected" : ""; ?>>LA Metal
                </option>
                <option value="glam_rock" <?php echo ($bh['bh_genre'] === "Glam Rock") ? "selected" : ""; ?>>Glam Rock
                </option>
                <option value="progressive_rock" <?php echo ($bh['bh_genre'] === "Progressive Rock") ? "selected" : ""; ?>>
                    Progressive Rock
                </option>
                <option value="grunge_rock" <?php echo ($bh['bh_genre'] === "Grunge Rock") ? "selected" : ""; ?>>Grunge
                    Rock
                </option>
                <option value="modern_rock" <?php echo ($bh['bh_genre'] === "Modern Rock") ? "selected" : ""; ?>>Modern
                    Rock
                </option>
                <option value="neo_punk" <?php echo ($bh['bh_genre'] === "Neo Punk") ? "selected" : ""; ?>>Neo Punk
                </option>
                <option value="post_grunge" <?php echo ($bh['bh_genre'] === "Post Grunge") ? "selected" : ""; ?>>Post
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
