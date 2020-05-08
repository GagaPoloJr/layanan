<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Maintenance_hook
{

    public function offline_check()
    {
        include(APPPATH . 'config/config.php');
        if (isset($config['maintenance_mode']) && $config['maintenance_mode'] === TRUE) {
            include(APPPATH . 'views/maintenance.php');
            exit;
        }
    }
}