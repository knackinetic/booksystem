@extends('tri-layout')

@section('body')
    <div class="content-wrap card">
        @include('shelves.list', ['shelves' => $shelves, 'view' => $view])
    </div>
@stop

@section('right')

    <div class="actions mb-xl">
        <h5>{{ trans('common.actions') }}</h5>
        <div class="icon-list text-primary">
            @include('partials.view-toggle', ['view' => $view, 'type' => 'shelf'])
            @if($currentUser->can('bookshelf-create-all'))
                <a href="{{ baseUrl("/create-shelf") }}" class="icon-list-item">
                    <span class="icon">@icon('add')</span>
                    <span>{{ trans('entities.shelves_create') }}</span>
                </a>
            @endif
        </div>
    </div>

@stop

@section('left')
    @if($recents)
        <div id="recents-shelves">
            <h5>{{ trans('entities.recently_viewed') }}</h5>
            @include('partials.entity-list', ['entities' => $recents, 'style' => 'compact'])
        </div>
    @endif

    <div id="popular-shelves">
        <h5>{{ trans('entities.shelves_popular') }}</h5>
        @if(count($popular) > 0)
            @include('partials.entity-list', ['entities' => $popular, 'style' => 'compact'])
        @else
            <div class="text-muted">{{ trans('entities.shelves_popular_empty') }}</div>
        @endif
    </div>

    <div id="new-shelves">
        <h5>{{ trans('entities.shelves_new') }}</h5>
        @if(count($new) > 0)
            @include('partials.entity-list', ['entities' => $new, 'style' => 'compact'])
        @else
            <div class="text-muted">{{ trans('entities.shelves_new_empty') }}</div>
        @endif
    </div>
@stop