<?php

namespace NewAPI;

use pocketmine\plugin\PluginBase;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use NewAPI\Core;

interface NewAPI{
  
  public function cmdAPI(CommandSender $sender, Command $command, $label, Array $args);
  
  public function API(Core $core);
  
}
