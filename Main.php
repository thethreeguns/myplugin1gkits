<?php
namespace GKits;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        
    }
public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
  
                    if($command->getName() == "gkits"){ 
                   $sender->sendMessage("Test");
                     return true;
                     
               
                               }
                     
                       } 
                                   
                               }
   
