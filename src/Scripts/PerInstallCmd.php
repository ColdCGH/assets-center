<?php

namespace Wbk\Asset\Scripts;

use Composer\Script\Event;

class PerInstallCmd
{
    public static function run(Event $event)
    {
        $io = $event->getIO();
        $config = $event->getComposer()->getConfig()->get('vendor-dir');
        $dir = $config. '/../';
        if (file_exists($dir.'composer.json')){
            $fileRead = fopen($dir.'composer.json', 'r+');
            $content = fread($fileRead, 1024*1024*1024);
            $json = json_decode($content, true);
            print_r($json);
            if (!isset($json['scripts'])) {
                $json['scripts'] = [];
            }

            if (!isset($json['scripts']['pre-install-cmd'])) {
                $json['scripts']['pre-install-cmd'] = [
                    'Wbk\Asset\Scripts\PerInstallCmd::run'
                ];
            }else{
                $json['scripts']['pre-install-cmd'][] = 'Wbk\Asset\Scripts\PerInstallCmd::run';
                $json['scripts']['pre-install-cmd'] = array_unique($json['scripts']['pre-install-cmd']);
            }
            $fileWrite = fopen($dir.'composer.json', 'w+');
            fwrite($fileWrite, json_encode($json));
            fclose($fileRead);
            fclose($fileWrite);
            echo '您已经如'."\n";
        }
        if (!$io->askConfirmation("你想推出吗？", false)) {
            echo '您选择了退出！'."\n";
            return true;
        }
        echo '您选择了继续！'."\n";
        exit;
    }
}