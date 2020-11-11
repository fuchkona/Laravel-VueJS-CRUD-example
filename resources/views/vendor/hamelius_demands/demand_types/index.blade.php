@extends(config('demands_module.default_layout'))

@section('breadcrumb')
    <ul>
        <li><a href="/">{{ config('demands_module.app_name') }}</a></li>
        <li><a href="{{ route('demands_module.index') }}">Demands Module</a></li>
        <li class="is-active"><a href="#">Demand types</a></li>
    </ul>
@endsection

@section('content')
    <div class="has-margin-bottom-50">
        <h3 class="title is-3">
            Demand types
        </h3>

        <div class="columns">
            <div class="column">
                <div class="buttons">
                    <a href="{{ route('demands_module.demand_types.create') }}" class="button">
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
                    <th>Graph</th>
                    <th>Initial state</th>
                </tr>
                </thead>
                <tbody>
                @foreach($demand_types as $demand_type)
                    <tr>
                        <td width="150">
                            <form method="POST"
                                  action="{{ route('demands_module.demand_types.delete',$demand_type->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="button is-danger" title="Delete"><i
                                            class="fa fa-times"></i></button>

                                <a href="{{ route('demands_module.demand_types.edit', $demand_type->id) }}"
                                   class="button is-primary" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                            </form>
                        </td>
                        <td>{{ $demand_type->title }}</td>
                        <td>{{ $demand_type->code }}</td>
                        <td>{{ $demand_type->graph->title }}</td>
                        <td>{{ $demand_type->initialState->title }}</td>
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