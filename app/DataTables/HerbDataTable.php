<?php

namespace App\DataTables;

use App\Herb;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class HerbDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('approve', function($herb) {
                return '<a class="btn btn-success btn-sm" href="' .route('admin.approve', $herb->id) . '" role="button" data-toggle="tooltip" title="Approuver la plante">
                <i class="fas fa-thumbs-up"></i>
            </a>';
            })
            ->addColumn('edit', function($herb) {
                return '<a class="btn btn-success btn-sm" href="' .route('herb.show', $herb->id) . '" role="button" data-toggle="tooltip" title="Approuver la plante">
                <i class="fas fa-thumbs-up"></i>
            </a>';
            })
            ->addColumn('delete', function($herb) {
                return ' <a class="btn btn-danger btn-sm" href="#" role="button" data-id="{{ $herb->id }}" data-toggle="tooltip" title="Refuser la plante">
                <i class="fas fa-thumbs-down"></i>
            </a>';
            })
            ->rawColumns(['approve', 'edit', 'delete']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Herb $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Herb $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('herb-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->lengthMenu()
                    ->language('//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json');

    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [

            Column::make('name'),
            Column::make('sciname'),
            Column::make('author'),

            Column::computed('approve')
            ->title('')
            ->width(60)
            ->addClass('text-center'),
          Column::computed('edit')
            ->title('')
            ->width(60)
            ->addClass('text-center'),
          Column::computed('delete')
            ->title('')
            ->width(60)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Herb_' . date('YmdHis');
    }
}
