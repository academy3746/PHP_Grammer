<?php
// Interface #01_WebApp
interface WebApp
{
    public function join($id, $password, $name);
    public function login($id, $password);
    public function logout($id);
}

// Interface #02_CMS
interface CMS
{
    public function post($subject);
}

// Class WebSite: Multiple Interface
class WebSite implements WebApp, CMS
{
    public function join($id, $password, $name)
    {
        // TODO: Implement join() method.
        echo "회원 가입 (ID / Password / 이름): {$id} / {$password} / {$name} <br>";
    }

    public function login($id, $password)
    {
        // TODO: Implement login() method.
        echo "로그인: {$id}님, 방문을 환영합니다! <br>";
    }

    public function logout($id)
    {
        // TODO: Implement logout() method.
        echo "로그아웃: {$id}님, 안녕히 가십시오! <br>";
    }

    public function post($subject)
    {
        // TODO: Implement post() method.
        echo "게시글 등록: {$subject} <br>";
    }
}
$website = new WebSite();

$id = "nazi";
$name = "Adolf Hitler";
$password = "6974";
$subject = "This is Paranoid of Ozzy Osbourne.";

$website->join(id: $id, password: $password, name: $name);
$website->login(id: $id, password: $password);
$website->logout(id:$id);
$website->post(subject: $subject);
