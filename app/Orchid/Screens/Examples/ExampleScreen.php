<?php

namespace App\Orchid\Screens\Examples;

use App\Orchid\Layouts\Examples\ChartBarExample;
use App\Orchid\Layouts\Examples\ChartLineExample;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Components\Cells\Currency;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use App\Models\Supplier;
use App\Models\Item;

class ExampleScreen extends Screen
{

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'charts'  => [
                [
                    'name'   => 'Some Data',
                    'values' => [25, 40, 30, 35, 8, 52, 17],
                    'labels' => ['12am-3am', '3am-6am', '6am-9am', '9am-12pm', '12pm-3pm', '3pm-6pm', '6pm-9pm'],
                ],
                [
                    'name'   => 'Another Set',
                    'values' => [25, 50, -10, 15, 18, 32, 27],
                    'labels' => ['12am-3am', '3am-6am', '6am-9am', '9am-12pm', '12pm-3pm', '3pm-6pm', '6pm-9pm'],
                ],
                [
                    'name'   => 'Yet Another',
                    'values' => [15, 20, -3, -15, 58, 12, -17],
                    'labels' => ['12am-3am', '3am-6am', '6am-9am', '9am-12pm', '12pm-3pm', '3pm-6pm', '6pm-9pm'],
                ],
                [
                    'name'   => 'And Last',
                    'values' => [10, 33, -8, -3, 70, 20, -34],
                    'labels' => ['12am-3am', '3am-6am', '6am-9am', '9am-12pm', '12pm-3pm', '3pm-6pm', '6pm-9pm'],
                ],
            ],
            'items' => Item::orderBy('item_id', 'desc')->paginate(), // pagination agar sorting bekerja optimal

            'metrics' => [
                'sales'    => ['value' => number_format(6851), 'diff' => 10.08],
                'visitors' => ['value' => number_format(24668), 'diff' => -30.76],
                'supplier'   => ['value' => number_format(Supplier::count()), 'diff'  => 0,],
                'total'    => number_format(65661),
            ],
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Monitoring';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Halaman Monitoring untuk memantau data keluar atau masuk';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */


    /**
     * The screen's layout elements.
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            Layout::metrics([
                'Sales Today'    => 'metrics.sales',
                'Visitors Today' => 'metrics.visitors',
                'Jumlah Supplier' => 'metrics.supplier',
                'Total Earnings' => 'metrics.total',
            ]),

            Layout::columns([
                ChartLineExample::make('charts', 'Line Chart')
                    ->description('Visualize data trends with multi-colored line graphs.'),

                ChartBarExample::make('charts', 'Bar Chart')
                    ->description('Compare data sets with colorful bar graphs.'),
            ]),

            Layout::table('items', [
            TD::make('item_id', 'ID')
                ->sort()
                ->width('100')
                ->render(fn($item) => $item->item_id),

            TD::make('nama_item', 'Nama Item')
                ->sort()
                ->width('100')
                ->render(fn($item) => $item->nama_item),

            TD::make('stock', 'Stok')
                ->sort()
                ->width('100')
                ->render(fn($item) => $item->stock),

            TD::make('unit', 'Unit')
                ->sort()
                ->width('100')
                ->render(fn($item) => $item->unit),

            TD::make('created_at', 'Dibuat')
                ->sort()
                ->width('100')
                ->render(fn($item) => $item->created_at->format('d-m-Y H:i')),
        ]),
        ];
    }

        public function query_search(Request $request): iterable
    {
        // Ambil kata kunci pencarian dari parameter request
        $searchTerm = $request->get('search', '');

        // Query untuk mendapatkan data dari Item dan filter berdasarkan pencarian
        $itemsQuery = Item::query();

        if ($searchTerm) {
            $itemsQuery->where('nama_item', 'like', '%' . $searchTerm . '%');
        }

        $items = $itemsQuery->get();

        return [
            'items' => $items,
            'metrics' => [
                'sales'    => ['value' => number_format(6851), 'diff' => 10.08],
                'visitors' => ['value' => number_format(24668), 'diff' => -30.76],
                'supplier' => ['value' => number_format(Supplier::count()), 'diff' => 0],
                'total'    => number_format(65661),
            ],
        ];
    }
}
