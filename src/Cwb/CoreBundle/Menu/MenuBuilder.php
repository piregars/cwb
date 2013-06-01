<?php

namespace Cwb\CoreBundle\Menu;

use Knp\Menu\FactoryInterface;
use Msi\CmfBundle\Menu\BaseMenuBuilder;

class MenuBuilder extends BaseMenuBuilder
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $this->getMenu($factory, 'main');

        $menu->setChildrenAttribute('class', 'nav nav-pills pull-right');
        $this->setBootstrapDropdownMenuAttributes($menu);

        return $this->execute($menu);
    }
}
