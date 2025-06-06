<?php

declare(strict_types=1);

namespace maipianx;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Rickroll extends PluginBase implements Listener{

    public function onLoad() : void{
        $this->getLogger()->info("§b> §eLoding...§b <");
    }

    public function onEnable() : void{
        $this->getLogger()->info("§b>§a Enable §b<");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDisable() : void{
        $this->getLogger()->info("§b>§c Disable §b<");
    }

    public function onJoin(PlayerJoinEvent $event) : void{
        $player = $event->getPlayer();
        $event->setJoinMessage("§6[§a+§6]§2 " . $player->getName());
    }

    public function onQuit(PlayerQuitEvent $event) : void{
        $player = $event->getPlayer();
        $event->setQuitMessage("§6[§c-§6]§4 " . $player->getName());
    }
}
