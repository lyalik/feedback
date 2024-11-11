<?php
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Application;

class your_module extends CModule
{
    public function __construct()
    {
        $this->MODULE_ID = 'your.module';
        $this->MODULE_NAME = 'Оценки обращений';
        $this->MODULE_VERSION = '1.0.0';
        $this->MODULE_VERSION_DATE = '2024-11-11';
    }

    public function DoInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);
        $this->InstallDB();
        $this->InstallFiles();
    }

    public function DoUninstall()
    {
        $this->UnInstallDB();
        $this->UnInstallFiles();
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }

    public function InstallDB()
    {
        $connection = Application::getConnection();
        $connection->queryExecute("CREATE TABLE IF NOT EXISTS `appeals` (
            `ID` int(11) NOT NULL AUTO_INCREMENT,
            `NUMBER` varchar(255) NOT NULL,
            PRIMARY KEY (`ID`)
        )");

        $connection->queryExecute("CREATE TABLE IF NOT EXISTS `ratings` (
            `ID` int(11) NOT NULL AUTO_INCREMENT,
            `APPEAL_ID` int(11) NOT NULL,
            `OPERATOR` int(1) NOT NULL,
            `POLITENESS` int(1) NOT NULL,
            `SPEED` int(1) NOT NULL,
            PRIMARY KEY (`ID`)
        )");
    }

    public function UnInstallDB()
    {
        $connection = Application::getConnection();
        $connection->queryExecute("DROP TABLE IF EXISTS `appeals`");
        $connection->queryExecute("DROP TABLE IF EXISTS `ratings`");
    }

    public function InstallFiles()
{
    CopyDirFiles(
        __DIR__ . "/admin",
        $_SERVER["DOCUMENT_ROOT"] . "/bitrix/admin",
        true,
        true
    );
}

public function UnInstallFiles()
{
    // Удаление административных файлов
    DeleteDirFiles(
        __DIR__ . "/admin",
        $_SERVER["DOCUMENT_ROOT"] . "/bitrix/admin"
    );
}
    
}