@extends(config('state_machine_module.default_layout'))

@section('breadcrumb')
    <ul>
        <li><a href="/">{{ config('state_machine_module.app_name') }}</a></li>
        <li><a href="{{ route('state_machine_module.index') }}">State machine module</a></li>
        <li><a href="{{ route('state_machine_module.graphs.index') }}">Graphs</a></li>
        <li class="is-active"><a href="#" aria-current="page">Create graph</a></li>
    </ul>
@endsection

@section('content')
    <div class="container has-margin-bottom-50">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <h1 class="title is-4">New graph</h1>
                    </div>
                </div>

                <form action="{{ route('state_machine_module.graphs.store') }}" accept-charset="UTF-8" method="post">
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

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="graph_title" class="label">Display name</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" required class="input" name="graph[title]"
                                           id="graph_title">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="graph_code" class="label">Code (system.code)</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" required class="input" name="graph[code]"
                                           id="graph_code">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                        </div>
                        <div class="field-body">
                            <div class="buttons">
                                <button type="submit" class="button is-primary has-gradient">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    @push('styles')
    @endpush

    @push('scripts')
    @endpush
@endsection