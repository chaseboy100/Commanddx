<?php
namespace esh123cookie\Commandx;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;
use pocketmine\level\sound\PopSound;
use pocketmine\item\Item;
	public $fts = "§7[§bExtraCommands§7]";
 
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {
    
  
   if($cmd->getName() == "heal") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("heal.use")) {
   	    $sender->setHealth(20);
            $sender->sendMessage($this->fts . TF::GREEN . " You have been healed!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . " You are not allowed to use this command");
               }
            }
          return true;
      }
         
    if($cmd->getName() == "feed") {
   	if($sender instanceof Player) {
     	if($sender->hasPermission("feed.use")) {
   	    $sender->setFood(20);
            $sender->sendMessage($this->fts . TF::GREEN . " Your food is full!");
           }else{
           $sender->sendMessage($this->fts . TF::RED . " You are not allowed to use this command");
              }
            }
          return true;
      }
	 
	   if($cmd->getName() == "gms") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("gms.use")) {
   	    $sender->setGamemode(0);
            $sender->sendMessage($this->fts . TF::GREEN . "You have set your gamemode to survival mode!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      }
       
         if($cmd->getName() == "gmc") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("gmc.use")) {
   	    $sender->setGamemode(1);
            $sender->sendMessage($this->fts . TF::GREEN . " You have set your gamemode to creative mode!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      }
       
               if($cmd->getName() == "gma") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("gma.use")) {
   	    $sender->setGamemode(2);
            $sender->sendMessage($this->fts . TF::GREEN . " You have set your gamemode to creative mode!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      }
		 
if($cmd->getName() == "gmspc") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("gmspc.use")) {
   	    $sender->setGamemode(3);
            $sender->sendMessage($this->fts . TF::GREEN . " You have set your gamemode to spectator mode!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      }
      if($cmd->getName() == "day") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("day.use")) {
   	    $sender->getLevel()->setTime(6000);
            $sender->sendMessage($this->fts . TF::GREEN . " You have set the time to day!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      } 
		 
if($cmd->getName() == "cclear") {
foreach($this->getServer()->getOnlinePlayers() as $player) {
        $player->sendMessage("n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\nn\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n $this->fts . TF::GREEN . Chat cleared");
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("ccclear.use")) {
            }else{
            $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      }
  }
	if($cmd->getName() == "night") {
   	if($sender instanceof Player) {
   	 if($sender->hasPermission("night.use")) {
   	    $sender->getLevel()->setTime(16000);
            $sender->sendMessage($this->fts . TF::GREEN . " You have set the time to night!");
            }else{
            $sender->sendMessage($this->fts . TF::RED . "You are not allowed to use this command");
               }
            }
          return true;
      }	
© 2019 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
