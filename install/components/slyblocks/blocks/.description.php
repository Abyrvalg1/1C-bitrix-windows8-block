<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
    "NAME" => '������� ���������',
    "DESCRIPTION" => '������� ���������',
    "ICON" => "/images/news_list.gif",
    "SORT" => 20,
    "CACHE_PATH" => "Y",
    "PATH" => array(
        "ID" => "content",
        "CHILD" => array(
            "ID" => "news",
            "NAME" => '������� �����������',
            "SORT" => 10,
            "CHILD" => array(
                "ID" => "news_cmpx",
            ),
        ),
    ),
);
?>