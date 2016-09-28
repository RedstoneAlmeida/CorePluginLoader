<?php

namespace Loaders;

use pocketmine\plugin\PluginBase;

use CoreLoader\PLoader;

use pocketmine\plugin\PluginLoadOrder;
use pocketmine\Server;

class Loader extends PluginBase{
  
  public function onEnable(){
        @mkdir($this->getServer()->getDataPath()."coreplugins/");
       $this->getServer()->getPluginManager()->registerInterface("CoreLoader\\PLoader");
        $this->getServer()->getPluginManager()->loadPlugins($this->getServer()->getDataPath()."coreplugins/", ["CoreLoader\\PLoader"]);
        $this->getServer()->enablePlugins(PluginLoadOrder::STARTUP);
  }
  
}
