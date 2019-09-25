<?php
namespace cmd;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\entity\Effect;
use pocketmine\entity\Living;
use pocketmine\entity\EffectInstance;
class Main extends PluginBase implements Listener {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);   
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        if(!$api){
            $this->getServer()->getLogger()->alert("You must download plugin Form API here : https://poggit.pmmp.io/ci/jojoe77777/FormAPI/FormAPI");
            $this->getServer()->shutdown();
        } else {
        $this->getLogger()->info(TextFormat::GREEN . "NightVision UI On");
        }
    }
    public function onDisable() {
        $this->getLogger()->info(TextFormat::RED . "NightVision UI Off");
    }
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
        switch($cmd->getName()){                    
            case "nv":               
                     $this->Menu($sender);                               
            break;         
            
         }  
        return true;                         
    }
   
    public function Menu($sender){ 
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $sender, int $data = null) { 
            $result = $data;
            if($result === null){
                return true;
            }             
            switch($result){
                case 0:
       
					
                $eff = new EffectInstance(Effect::getEffect(Effect::NIGHT_VISION), 100 * 99999, 100, false);
                $sender->addEffect($eff);
                $sender->sendMessage("§a§lNightvision: On");
                break;
                    
                case 1:
                $sender->removeEffect(Effect::NIGHT_VISION);
                $sender->sendMessage("§4§lNightvision: Off");
                break;
            }
            
            
            });
            $form->setTitle("§5§lMenu NightVision");
            $form->addButton("§2§lEnable");
            $form->addButton("§4§lDisable");
            $form->addButton("§7§lBack");
            $form->sendToPlayer($sender);
            return $form;                                            
    }
 
  
                                                                                                                                                                                                                                                                                          
}
