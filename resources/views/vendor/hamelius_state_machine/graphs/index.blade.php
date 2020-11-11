@extends(config('state_machine_module.default_layout'))

@section('breadcrumb')
    <ul>
        <li><a href="/">{{ config('state_machine_module.app_name') }}</a></li>
        <li><a href="{{ route('state_machine_module.index') }}">State machine module</a></li>
        <li class="is-active"><a href="#">Graphs</a></li>
    </ul>
@endsection

@section('content')
    <div class="has-margin-bottom-50">
        <h3 class="title is-3">
            Graphs
        </h3>

        <div class="columns">
            <div class="column">
                <div class="buttons">
                    <a href="{{ route('state_machine_module.graphs.create') }}" class="button">
                        <span class="icon">
                            <span class="fas fa-plus-circle"></span>
                        </span>
                        <span>Create</span>
                    </a>
                </div>
            </div>
        </div>

        <div>
            <table class="table is-bordered is-striped is-fullwidth">
                <thead>
                <tr>
                    <th>Actions</th>
                    <th>Title</th>
                    <th>Code</th>
                    <th>Transitions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($graphs as $graph)
                    <tr>
                        <td width="200">
                            <form method="POST" action="{{ route('state_machine_module.graphs.delete', $graph->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="button is-danger" title="Delete"><i
                                            class="fa fa-times"></i></button>

                                <a href="{{ route('state_machine_module.graphs.edit',$graph->id) }}"
                                   class="button is-primary" title="Edit"><i class="fa fa-pencil-alt"></i></a>

                                <a href="{{ route('state_machine_module.graphs.view',$graph->id) }}"
                                   class="button is-success" title="View"><i class="fa fa-eye"></i></a>
                            </form>
                        </td>
                        <td>{{ $graph->title }}</td>
                        <td>{{ $graph->code }}</td>
                        <td>{{ implode(', ', $graph->transitions->pluck('title')->toArray()) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

    @push('styles')
    @endpush

    @push('scripts')
    @endpush
@endsection