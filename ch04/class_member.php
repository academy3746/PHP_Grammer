<?php
class Member // 클래스는 대문자로 시작, Camel 기법을 준수하는 것이 표준!
{
    var $id = 'Lee ';
    # Same as public
    public $name = 'Jonghyun';

    protected $nickname = 'Tech Otaku';
    # 클래스 / 상속받는 자식 클래스에서 사용 가능
    private $age = 32;
    # 클래스에서만 사용 가능
}

$member = new Member();
# Create Instance
echo $member->id; // Can be accessed
echo $member->name; // Can be accessed
// echo $member->nickname; : Member has protected visibility
// echo $member->age; : Member has private visibility