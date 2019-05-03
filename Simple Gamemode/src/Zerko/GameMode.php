<?php

namespace Zerko;

use pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\utils\Utils;
use pocketmine\math\Vector3;
use pocketmine\level\Level;
use pocketmine\Server;
use pocketmine\event\entity\EntityLevelChangeEvent;

class GameMode extends PluginBase implements Listener{


    public function onEnable(){

	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }


    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        if(strtolower($command->getName()) == "gms"){

            if($sender instanceof Player){
                 $player = $sender->getPlayer();
                 $player->setgamemode(0);
                 $sender->sendMessage("§3(§1!!§3)Tu est en gamemode 0");
       
            }
                 return false;
            }
            if(strtolower($command->getName()) == "gmc"){
       
            if($sender instanceof Player){
                 $player = $sender->getPlayer();
                 $player->setGamemode(1);
                 $sender->sendMessage("§3(§1!!§3)Tu est en gamemode 1");
       
            }
                 return false;
            }
            if(strtolower($command->getName()) == "gma"){
       
            if($sender instanceof Player){
                 $player = $sender->getPlayer();
                 $player->setGamemode(2);
                 $sender->sendMessage("§3(§1!!§3)Tu est en gamemode 2");
       
            }
                 return false;
            }
            if(strtolower($command->getName()) == "gmt"){
       
            if($sender instanceof Player){
                 $player = $sender->getPlayer();
                 $player->setGamemode(3);
                 $sender->sendMessage("§3(§1!!§3)Tu est en gamemode 3");
       
            }
                 return false;
            
            }
                 return false;
            }
            }