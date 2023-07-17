<?php

declare(strict_types=1);

namespace App\View\Composers;

use App\Enums\LayoutEnum;
use App\Main\MenuBuilder;
use Illuminate\View\View;

final class MenuComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        if (!is_null(request()->route())) {
            $pageName = request()->route()->getName();
            $layout = $this->layout($view);
            $activeMenu = $this->activeMenu($pageName, $layout);

            $view->with('top_menu', MenuBuilder::menu($layout));
            $view->with('side_menu', MenuBuilder::menu($layout));
            $view->with('simple_menu', MenuBuilder::menu($layout));
            $view->with('first_level_active_index', $activeMenu['first_level_active_index']);
            $view->with('second_level_active_index', $activeMenu['second_level_active_index']);
            $view->with('third_level_active_index', $activeMenu['third_level_active_index']);
            $view->with('page_name', $pageName);
            $view->with('layout', $layout->value);
        }
    }

    /**
     * Specify the layout to use for the current view.
     */
    public function layout(View $view): LayoutEnum
    {
        $layout = null;
        if (isset($view->layout)) {
            $layout = $view->layout;
        }

        if (request()->has('layout')) {
            $layout = request()->query('layout');
        }

        return !is_null($layout) ? LayoutEnum::tryFrom($layout) : LayoutEnum::SIDEMENU;
    }

    /**
     * Determine the active menu item & submenu.
     */
    public function activeMenu(string $pageName, LayoutEnum $layout): array
    {
        $menu = MenuBuilder::menu($layout);

        $activeMenu = $this->findActiveMenu($menu, $pageName);

        return [
            'first_level_active_index' => $activeMenu['first_level_active_index'],
            'second_level_active_index' => $activeMenu['second_level_active_index'],
            'third_level_active_index' => $activeMenu['third_level_active_index'],
        ];
    }

    /**
     * Determine the active menu item & submenu.
     */
    private function findActiveMenu(array $menu, string $pageName): array
    {
        $firstLevelActiveIndex = '';
        $secondLevelActiveIndex = '';
        $thirdLevelActiveIndex = '';

        foreach ($menu as $menuKey => $menuItem) {
            if ('devider' !== $menuItem && isset($menuItem['route_name']) && $menuItem['route_name'] === $pageName && empty($firstLevelActiveIndex)) {
                $firstLevelActiveIndex = $menuKey;
            }

            if (isset($menuItem['sub_menu'])) {
                foreach ($menuItem['sub_menu'] as $subMenuKey => $subMenuItem) {
                    if (isset($subMenuItem['route_name']) && $subMenuItem['route_name'] === $pageName && 'menu-layout' !== $menuKey && empty($secondLevelActiveIndex)) {
                        $firstLevelActiveIndex = $menuKey;
                        $secondLevelActiveIndex = $subMenuKey;
                    }

                    if (isset($subMenuItem['sub_menu'])) {
                        foreach ($subMenuItem['sub_menu'] as $lastSubMenuKey => $lastSubMenu) {
                            if (isset($lastSubMenu['route_name']) && $lastSubMenu['route_name'] === $pageName) {
                                $firstLevelActiveIndex = $menuKey;
                                $secondLevelActiveIndex = $subMenuKey;
                                $thirdLevelActiveIndex = $lastSubMenuKey;
                            }
                        }
                    }
                }
            }
        }

        return [
            'first_level_active_index' => $firstLevelActiveIndex,
            'second_level_active_index' => $secondLevelActiveIndex,
            'third_level_active_index' => $thirdLevelActiveIndex,
        ];
    }
}
