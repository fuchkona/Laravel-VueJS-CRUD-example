@extends(config('demands_module.default_layout'))

@section('breadcrumb')
    <ul>
        <li><a href="/">{{ config('demands_module.app_name') }}</a></li>
        <li><a href="{{ route('demands_module.index') }}">Demands Module</a></li>
        <li><a href="{{ route('demands_module.demand_types.index') }}">Demand types</a></li>
        <li class="is-active"><a href="#" aria-current="page">Edit demand type</a></li>
    </ul>
@endsection

@section('content')
    <div class="container has-margin-bottom-50">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <h1 class="title is-4">Edit demand type</h1>
                    </div>
                </div>

                <form action="{{ route('demands_module.demand_types.update', $demand_type->id) }}"
                      accept-charset="UTF-8"
                      method="post">
                    @if (count($errors) > 0)
                        <div class="notification is-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{ csrf_field() }}

                    <input name="_method" type="hidden" value="PUT">

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="demand_type_title" class="label">Display name</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" required class="input" name="demand_type[title]"
                                           id="demand_type_title" value="{{ $demand_type->title }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="demand_type_code" class="label">Code (system.code)</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" required class="input" name="demand_type[code]"
                                           id="demand_type_code" value="{{ $demand_type->code }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="demand_type_graph_id" class="label">Graph</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="select">
                                    <select required="required" name="demand_type[graph_id]" id="demand_type_graph_id">
                                        @foreach($graphs as $graph)
                                            <option {{ $demand_type->graph_id == $graph->id ? 'selected' : '' }} value="{{ $graph->id }}">{{ $graph->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="demand_type_initial_state_id" class="label">Initial state</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="select">
                                    <select required="required" name="demand_type[initial_state_id]"
                                            id="demand_type_initial_state_id">
                                        @foreach($states as $state)
                                            <option {{ $demand_type->initial_state_id == $state->id ? 'selected' : '' }} value="{{ $state->id }}">{{ $state->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                        </div>
                        <div class="field-body">
                            <div class="buttons">
                                <button type="submit" class="button is-primary has-gradient">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection