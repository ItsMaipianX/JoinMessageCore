<?php

namespace Iceman;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Rickroll extends PluginBase implements Listener {

    public function onLoad() {
        $this->getLogger()->info("§b> §eLoding...§b <");
    }

    public function onEnable() {
        $this->getLogger()->info("§b>§a Enable §b<");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDisable() {
        $this->getLogger()->info("§b>§c Disable §b<");
    }

    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $event->setJoinMessage("§6[§a+§6]§2 " . $player->getName());
        $player->sendMessage("§8=========================");
        $player->sendMessage("§bDiscord:§e Iceman#7361");
        $player->sendMessage("§cYouTube:§e Iceman");
        $player->sendMessage("§6Omlet:§e iceman903_my");
        $player->sendMessage("§aAuthor:§e Iceman");
        $player->sendMessage("§dMake By §eIceman");
        $player->sendMessage("§8=========================");
    }

    public function onQuit(PlayerQuitEvent $event) {
        $player = $event->getPlayer();
        $event->setQuitMessage("§6[§c-§6]§4 " . $player->getName());
    }
}