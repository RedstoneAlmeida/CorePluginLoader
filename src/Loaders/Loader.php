<?php

namespace Loaders;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase{
  
  public function onEnable(){
        @mkdir($this->getServer()->getDataPath()."coreplugins/");
        $this->getServer()->getPluginManager()->loadPlugins($this->getServer()->getDataPath()."coreplugins/");
  }
  
}
