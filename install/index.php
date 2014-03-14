<?

Class slyblocksmodule extends CModule
{
    var $MODULE_ID = "slyblocksmodule";
    var $MODULE_VERSION = "1.0.0";
    var $MODULE_VERSION_DATE = "23.12.2013";
    var $MODULE_NAME = "������������� �����";
    var $MODULE_DESCRIPTION = "� ����� ����� ��������� �������,
���������, �����������, ��������� �����
����� ����� ��������, ������� ����
������, ���������� �� ����� �� ����� (���
�� ������ � ������ ������ �����) ��
������ ��������";
    var $MODULE_CSS = 'style.css';

    function slyblocksmodule()
    {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path."/version.php");

        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }

        $this->MODULE_NAME = "Sly Blocks � ������������� �����";
        $this->MODULE_DESCRIPTION = "������������� ����. � ����� ����� ��������� �������,���������, �����������, ��������� ����� ����� ����� ��������, ������� ���� ������, ���������� �� ����� �� ����� (��� �� ������ � ������ ������ �����) �� ������ ��������.";
    }

    function InstallFiles($arParams = array())
    {
        CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/slyblocksmodule/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);
        return true;
    }

    function UnInstallFiles()
    {
        DeleteDirFilesEx("/bitrix/components/slyblocks");
        return true;
    }

    function DoInstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;
        $this->InstallFiles();
        RegisterModule("slyblocksmodule");
        $APPLICATION->IncludeAdminFile("��������� ������ ������������� �����", $DOCUMENT_ROOT."/bitrix/modules/slyblocksmodule/install/step.php");
    }

    function DoUninstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;
        $this->UnInstallFiles();
        UnRegisterModule("slyblocksmodule");
        $APPLICATION->IncludeAdminFile("������������� ������ ������������� �����", $DOCUMENT_ROOT."/bitrix/modules/slyblocksmodule/install/unstep.php");
    }
}
?>