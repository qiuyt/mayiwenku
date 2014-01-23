<?php
class MyLog{
    private $logHandle = null;

    public function __construct($log_type){
        switch($log_type){
            case 'add':
                $this->logHandle = fopen('log/add.log','ab');
                break;
            case 'manage':
                $this->logHandle = fopen('log/manage.log','ab');
                break;
            case 'error':
                $this->logHandle = fopen('log/error.log','ab');
                break;
        }
    }

   
}
?>