<?php

namespace Creativestyle\Component\Notification\Builder;

use Creativestyle\Component\Notification\Builder\Strategy\BuildStrategyInterface;
use Creativestyle\Component\Notification\Builder\Strategy\BaseBuildStrategy;
use Creativestyle\Component\Notification\Builder\StrategyProviderInterface;
use \InvalidArgumentException as InvalidBuildStrategyException;
use \InvalidArgumentException as UnsupportedBuildStrategyException;

class StrategyProvider implements StrategyProviderInterface
{
    protected $strategies;

    public function __construct($strategies = array())
    {
        $this->strategies = array();
        foreach ($strategies as $strategy) {
            if (!$strategy instanceof BuildStrategyInterface) {
                throw new InvalidBuildStrategyException(
                    sprintf(
                        '%s does not provide BuildStrategyInterface',
                        gettype($strategy)
                    )
                );
            }
            $this->strategies[] = $strategy;
        }

        $this->strategies['baseNotification'] = new BaseBuildStrategy();
    }

    public function addBuildStrategy($type, $strategy)
    {
        $this->strategies[$type] = $strategy;
        return $this;
    }

    public function getSubscribedStrategies()
    {
        return $this->strategies;
    }

    public function getBuildStrategy($type)
    {
        if (!array_key_exists($type, $this->getSubscribedStrategies())) {
            throw new UnsupportedBuildStrategyException(
                sprintf(
                    'Unsupported %s build strategy',
                    $type
                )
            );
        }

        return $this->strategies[$type];
    }
}