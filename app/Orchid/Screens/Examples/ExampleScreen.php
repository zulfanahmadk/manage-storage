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
use App\Models\MovementItem;
use Illuminate\Support\Facades\DB;


class ExampleScreen extends Screen
{

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {

            // Ambil total barang masuk atau keluar
            $dataBarangMasuk = MovementItem::select('item_id', DB::raw('SUM(quantity) as total_masuk'))
                ->where('movement_type', 'in')
                ->groupBy('item_id')
                ->with('item') // pastikan relasi ke tabel items
                ->get();

            $labelsMasuk = $dataBarangMasuk->pluck('item.nama_item')->toArray(); // ambil nama item
            $valuesMasuk = $dataBarangMasuk->pluck('total_masuk')->toArray();     // ambil total masuk

            $dataBarangKeluar = MovementItem::select('item_id', DB::raw('SUM(quantity) as total_keluar'))
                ->where('movement_type', 'out')
                ->groupBy('item_id')
                ->with('item')
                ->get();

            $labelsKeluar = $dataBarangKeluar->pluck('item.nama_item')->toArray();
            $valuesKeluar = $dataBarangKeluar->pluck('total_keluar')->toArray();

            // Kolom total barang masuk dan keluar
            $totalMasuk  = MovementItem::where('movement_type', 'in')->sum('quantity');
            $totalKeluar = MovementItem::where('movement_type', 'out')->sum('quantity');
            $jumlahSupplier = Supplier::count();
            return [

            'chartsMasuk'  => [
                [
                    'name'   => 'Barang Masuk',
                    'values' => $valuesMasuk,
                    'labels' => $labelsMasuk,
                ],
            ],
            'chartsKeluar'  => [
                [
                    'name'   => 'Barang Keluar',
                    'values' => $valuesKeluar,
                    'labels' => $labelsKeluar,
                ],
            ],
            'items' => Item::orderBy('item_id', 'desc')->paginate(), // pagination agar sorting bekerja optimal

            'metrics' => [
                'barangMasuk'  => ['value' => number_format($totalMasuk)],
                'barangKeluar' => ['value' => number_format($totalKeluar)],
                'supplier'   => ['value' => number_format(Supplier::count())],
                'total' => number_format(Item::sum('stock')),
            ],
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Data Barang';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Halaman untuk memantau stock barang';
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
                'Total Barang Masuk'    => 'metrics.barangMasuk',
                'Total Barang Keluar'   => 'metrics.barangKeluar',
                'Jumlah Supplier'       => 'metrics.supplier',
                'Total Stock Barang'    => 'metrics.total',
            ]),

            Layout::columns([
                ChartLineExample::make('chartsMasuk', 'Barang Masuk'),
                ChartBarExample::make('chartsKeluar', 'Barang Keluar'),
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
}
