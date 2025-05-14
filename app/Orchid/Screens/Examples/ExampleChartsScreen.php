<?php

namespace App\Orchid\Screens\Examples;

use App\Orchid\Layouts\Examples\ChartBarExample;
use App\Orchid\Layouts\Examples\ChartLineExample;
use App\Orchid\Layouts\Examples\ChartPercentageExample;
use App\Orchid\Layouts\Examples\ChartPieExample;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use App\Models\Item;
use App\Models\User;


class ExampleChartsScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */

    public function query(): iterable
    {
        $items = Item::all();

        return [
            'charts' => [
                [
                    'name'   => 'Jumlah Stok',
                    'values' => $items->pluck('stock')->toArray(),
                    'labels' => $items->pluck('nama_item')->toArray(),
                ],
            ],

            'user_chart' => [
                [
                    'name'   => 'Jumlah Pengguna',
                    'values' => [User::count()],
                    'labels' => ['Total Pengguna'],
                ],
            ],
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Monitoring Grafik';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Halaman Monitoring Grafik';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @throws \Throwable
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            Layout::columns([
                ChartLineExample::make('charts', 'Stok Barang (Line Chart)')
                    ->description('Grafik jumlah stok dari masing-masing item.'),
                ChartBarExample::make('user_chart', 'Jumlah Pengguna')
                    ->description('Total pengguna yang terdaftar di sistem.'),
            ]),

            // Layout::columns([
            //     ChartPercentageExample::make('charts', 'Percentage Chart')
            //         ->description('Display data as visually appealing and modern percentage graphs.'),

            //     ChartPieExample::make('charts', 'Pie Chart')
            //         ->description('Break down data into easy-to-understand pie graphs with modern design.'),
            // ]),
        ];
    }
}
