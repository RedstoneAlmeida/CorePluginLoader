<?php

namespace Loaders;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase{
  
  public function onEnable(){
        @mkdir($this->getServer()->getDataPath()."coreplugins/");
       $this->getServer()->getPluginManager()->registerInterface("CoreLoader\\PLoader");
        $this->getServer()->getPluginManager()->loadPlugins($this->getServer()->getDataPath()."coreplugins/", ["CoreLoader\\PLoader"]);
        $this->getServer()->enablePlugins(PluginLoadOrder::STARTUP);
  }
  
}
