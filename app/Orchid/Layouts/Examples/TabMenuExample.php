<?php

namespace App\Orchid\Layouts\Examples;

use Orchid\Screen\Actions\Menu;
use Orchid\Screen\Layouts\TabMenu;

class TabMenuExample extends TabMenu
{
    /**
     * Get the menu elements to be displayed.
     *
     * @return Menu[]
     */
    protected function navigations(): iterable
    {
        return [
            Menu::make('Layouts Overview')
                ->route('platform.example.layouts'),

            Menu::make('Get Started')
                ->route('platform.main'),

            Menu::make('Documentation')
                ->url('https://orchid.software/en/docs'),

            Menu::make('Data Barang')
                ->route('platform.example')
                ->badge(fn () => 6),
        ];
    }
}
