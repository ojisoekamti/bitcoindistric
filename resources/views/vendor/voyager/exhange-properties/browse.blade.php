@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }}
        </h1>
        @can('add', app($dataType->model_name))
            <a href="{{ route('voyager.' . $dataType->slug . '.create') }}" class="btn btn-success btn-add-new">
                <i class="voyager-plus"></i> <span>{{ __('voyager::generic.add_new') }}</span>
            </a>
        @endcan
        @can('delete', app($dataType->model_name))
            @include('voyager::partials.bulk-delete')
        @endcan
        @can('edit', app($dataType->model_name))
            @if (!empty($dataType->order_column) && !empty($dataType->order_display_column))
                <a href="{{ route('voyager.' . $dataType->slug . '.order') }}" class="btn btn-primary btn-add-new">
                    <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
                </a>
            @endif
        @endcan
        @can('delete', app($dataType->model_name))
            @if ($usesSoftDeletes)
                <input type="checkbox" @if ($showSoftDeleted) checked @endif id="show_soft_deletes"
                    data-toggle="toggle" data-on="{{ __('voyager::bread.soft_deletes_off') }}"
                    data-off="{{ __('voyager::bread.soft_deletes_on') }}">
            @endif
        @endcan
        @foreach ($actions as $action)
            @if (method_exists($action, 'massAction'))
                @include('voyager::bread.partials.actions', ['action' => $action, 'data' => null])
            @endif
        @endforeach
        @include('voyager::multilingual.language-selector')
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        @if ($isServerSide)
                            <form method="get" class="form-search">
                                <div id="search-input">
                                    <div class="col-2">
                                        <select id="search_key" name="key">
                                            @foreach ($searchNames as $key => $name)
                                                <option value="{{ $key }}"
                                                    @if ($search->key == $key || (empty($search->key) && $key == $defaultSearchKey)) selected @endif>{{ $name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <select id="filter" name="filter">
                                            <option value="contains" @if ($search->filter == 'contains') selected @endif>
                                                contains</option>
                                            <option value="equals" @if ($search->filter == 'equals') selected @endif>=
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-12">
                                        <input type="text" class="form-control"
                                            placeholder="{{ __('voyager::generic.search') }}" name="s"
                                            value="{{ $search->value }}">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="submit">
                                                <i class="voyager-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                @if (Request::has('sort_order') && Request::has('order_by'))
                                    <input type="hidden" name="sort_order" value="{{ Request::get('sort_order') }}">
                                    <input type="hidden" name="order_by" value="{{ Request::get('order_by') }}">
                                @endif
                            </form>
                        @endif
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        @if ($showCheckboxColumn)
                                            <th class="dt-not-orderable">
                                                <input type="checkbox" class="select_all">
                                            </th>
                                        @endif
                                        @foreach ($dataType->browseRows as $row)
                                            <th>
                                                @if ($isServerSide && in_array($row->field, $sortableColumns))
                                                    <a href="{{ $row->sortByUrl($orderBy, $sortOrder) }}">
                                                @endif
                                                {{ $row->getTranslatedAttribute('display_name') }}
                                                @if ($isServerSide)
                                                    @if ($row->isCurrentSortField($orderBy))
                                                        @if ($sortOrder == 'asc')
                                                            <i class="voyager-angle-up pull-right"></i>
                                                        @else
                                                            <i class="voyager-angle-down pull-right"></i>
                                                        @endif
                                                    @endif
                                                    </a>
                                                @endif
                                            </th>
                                        @endforeach
                                        <th class="actions text-right dt-not-orderable">
                                            {{ __('voyager::generic.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataTypeContent as $data)
                                        @php
                                            //dd($data);
                                            
                                            // "id" => 11
                                            // "market" => "BTCUSDT"
                                            // "trend_info" => "0"
                                            // "trend_war_info" => "0"
                                            // "corr_info" => "0"
                                            // "corr_warn_info" => "0"
                                            // "created_at" => "2022-05-12 04:01:48"
                                            // "updated_at" => "2022-05-12 04:01:48"
                                            // "deleted_at" => null
                                            // "updated_by" => 1
                                            // "warp_top" => null
                                            // "warp_bot" => null
                                            // "break" => "0"
                                            // "description" => "BTCUSDT II"
                                        @endphp
                                        <tr>
                                            @if ($showCheckboxColumn)
                                                <td>
                                                    <input type="checkbox" name="row_id"
                                                        id="checkbox_{{ $data->getKey() }}"
                                                        value="{{ $data->getKey() }}">
                                                </td>
                                            @endif
                                            <td>
                                                {{ $data->market }}
                                            </td>
                                            <td>
                                                {{ $data->description }}
                                            </td>
                                            <td>
                                                <div class="toggle btn btn-primary" data-toggle="toggle"
                                                    style="width: 68.3125px; height: 29px;"><input type="checkbox"
                                                        name="trend_info" class="toggleswitch" data-on="On"
                                                        data-off="Off">
                                                    <div class="toggle-group"><label
                                                            class="btn btn-primary toggle-on">On</label><label
                                                            class="btn btn-default active toggle-off">Off</label><span
                                                            class="toggle-handle btn btn-default"></span></div>
                                                </div>
                                                {{ $data->trend_info }}
                                            </td>
                                            <td>
                                                {{ $data->trend_war_info }}
                                            </td>
                                            <td>
                                                {{ $data->corr_info }}
                                            </td>
                                            <td>
                                                {{ $data->corr_warn_info }}
                                            </td>
                                            <td>
                                                {{ $data->updated_by }}
                                            </td>
                                            <td>
                                                {{ $data->warp_top }}
                                            </td>
                                            <td>
                                                {{ $data->warp_bot }}
                                            </td>
                                            <td>
                                                {{ $data->break }}
                                            </td>
                                            <td class="no-sort no-click bread-actions">
                                                @foreach ($actions as $action)
                                                    @if (!method_exists($action, 'massAction'))
                                                        @include('voyager::bread.partials.actions', ['action' => $action])
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if ($isServerSide)
                            <div class="pull-left">
                                <div role="status" class="show-res" aria-live="polite">
                                    {{ trans_choice('voyager::generic.showing_entries', $dataTypeContent->total(), [
                                        'from' => $dataTypeContent->firstItem(),
                                        'to' => $dataTypeContent->lastItem(),
                                        'all' => $dataTypeContent->total(),
                                    ]) }}
                                </div>
                            </div>
                            <div class="pull-right">
                                {{ $dataTypeContent->appends([
                                        's' => $search->value,
                                        'filter' => $search->filter,
                                        'key' => $search->key,
                                        'order_by' => $orderBy,
                                        'sort_order' => $sortOrder,
                                        'showSoftDeleted' => $showSoftDeleted,
                                    ])->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i>
                        {{ __('voyager::generic.delete_question') }}
                        {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                            value="{{ __('voyager::generic.delete_confirm') }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right"
                        data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('css')
    @if (!$dataType->server_side && config('dashboard.data_tables.responsive'))
        <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
    @endif
@stop

@section('javascript')
    <!-- DataTables -->
    @if (!$dataType->server_side && config('dashboard.data_tables.responsive'))
        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
    @endif
    <script>
        $(document).ready(function() {
            @if (!$dataType->server_side)
                var table = $('#dataTable').DataTable({!! json_encode(
    array_merge(
        [
            'order' => $orderColumn,
            'language' => __('voyager::datatable'),
            'columnDefs' => [['targets' => 'dt-not-orderable', 'searchable' => false, 'orderable' => false]],
        ],
        config('voyager.dashboard.data_tables', []),
    ),
    true,
) !!});
            @else
                $('#search-input select').select2({
                    minimumResultsForSearch: Infinity
                });
            @endif

            @if ($isModelTranslatable)
                $('.side-body').multilingual();
                //Reinitialise the multilingual features when they change tab
                $('#dataTable').on('draw.dt', function() {
                    $('.side-body').data('multilingual').init();
                })
            @endif
            $('.select_all').on('click', function(e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
            });
        });


        var deleteFormAction;
        $('td').on('click', '.delete', function(e) {
            $('#delete_form')[0].action = '{{ route('voyager.' . $dataType->slug . '.destroy', '__id') }}'
                .replace(
                    '__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });

        @if ($usesSoftDeletes)
            @php
                $params = [
                    's' => $search->value,
                    'filter' => $search->filter,
                    'key' => $search->key,
                    'order_by' => $orderBy,
                    'sort_order' => $sortOrder,
                ];
            @endphp
            $(function() {
                $('#show_soft_deletes').change(function() {
                    if ($(this).prop('checked')) {
                        $('#dataTable').before(
                            '<a id="redir" href="{{ route('voyager.' . $dataType->slug . '.index', array_merge($params, ['showSoftDeleted' => 1]), true) }}"></a>'
                        );
                    } else {
                        $('#dataTable').before(
                            '<a id="redir" href="{{ route('voyager.' . $dataType->slug . '.index', array_merge($params, ['showSoftDeleted' => 0]), true) }}"></a>'
                        );
                    }

                    $('#redir')[0].click();
                })
            })
        @endif
        $('input[name="row_id"]').on('change', function() {
            var ids = [];
            $('input[name="row_id"]').each(function() {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            $('.selected_ids').val(ids);
        });
    </script>
@stop
