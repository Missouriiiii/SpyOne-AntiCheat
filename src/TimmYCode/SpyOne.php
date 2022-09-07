<?php

namespace TimmYCode;

use pocketmine\plugin\PluginBase;
use TimmYCode\Event\CallCustomEvents;
use TimmYCode\Event\ModuleEventListener;
use TimmYCode\Event\WatchEventListener;

class SpyOne extends PluginBase
{

	const PREFIX = "§7[§bAnticheat§7]§l§e »§r ";
	private static self $instance;

	public function onEnable(): void
	{
		self::$instance = $this;
		$this->getServer()->getPluginManager()->registerEvents(new ModuleEventListener(), $this);
		$this->getServer()->getPluginManager()->registerEvents(new WatchEventListener(), $this);
		$this->getServer()->getPluginManager()->registerEvents(new CallCustomEvents(), $this);
	}

	public static function getInstance(): self
	{
		return self::$instance;
	}

}
