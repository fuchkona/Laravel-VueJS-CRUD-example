@extends(config('state_machine_module.default_layout'))

@section('breadcrumb')
    <ul>
        <li><a href="/">{{ config('state_machine_module.app_name') }}</a></li>
        <li><a href="{{ route('state_machine_module.index') }}">State machine module</a></li>
        <li><a href="{{ route('state_machine_module.graphs.index') }}">Graphs</a></li>
        <li class="is-active"><a href="#" aria-current="page">View graph</a></li>
    </ul>
@endsection

@section('content')
    <div class="container has-margin-bottom-50">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <h1 class="title is-4">View graph</h1>
                    </div>
                </div>


                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Display name</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                {{ $graph->title }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Code (system.code)</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                {{ $graph->code }}
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
            </div>
        </div>

        <div class="columns">
            <div class="column is-10 is-offset-1">
                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <h1 class="title is-4">Attached transitions</h1>
                    </div>
                </div>

                @foreach($graph->transitions as $transition)
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">{{ $transition->title }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <form method="POST"
                                          action="{{ route('state_machine_module.graphs.transitions.detach') }}">
                                        {{ csrf_field() }}

                                        From <strong>{{ $transition->state_from->title }}</strong>
                                        to <strong>{{ $transition->state_to->title }}</strong>

                                        <input type="number" required class="hidden" hidden="hidden"
                                               name="detach[graph_id]" id="detach_graph_id" value="{{ $graph->id }}">
                                        <input type="number" required class="hidden" hidden="hidden"
                                               name="detach[transition_id]" id="detach_transition_id"
                                               value="{{ $transition->id }}">

                                        <button type="submit" class="button is-danger is-small" title="Delete"><i
                                                    class="fa fa-times"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <hr>

                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <h1 class="title is-4">Attach new transition</h1>
                    </div>
                </div>

                @include('hamelius-state-machine::graphs.view.attach',['graph' => $graph, 'transitions' => $transitions])

            </div>
        </div>

    </div>
@endsection