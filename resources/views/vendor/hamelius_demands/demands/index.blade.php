@extends(config('demands_module.default_layout'))

@section('breadcrumb')
    <ul>
        <li><a href="/">{{ config('demands_module.app_name') }}</a></li>
        <li><a href="{{ route('demands_module.index') }}">Demands Module</a></li>
        <li class="is-active"><a href="#">Demands</a></li>
    </ul>
@endsection

@section('content')
    <div class="has-margin-bottom-50">
        <h3 class="title is-3">
            Demands
        </h3>

        <div class="columns">
            <div class="column">
                <div class="buttons">
                    <a href="{{ route('demands_module.demands.create') }}" class="button">
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
                    <th>Type</th>
                    <th>Description</th>
                    <th>State</th>
                </tr>
                </thead>
                <tbody>
                @foreach($demands as $demand)
                    <tr>
                        <td width="200">
                            <form method="POST" action="{{ route('demands_module.demands.delete', $demand->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="button is-danger" title="Delete"><i
                                            class="fa fa-times"></i></button>

                                <a href="{{ route('demands_module.demands.edit', $demand->id) }}"
                                   class="button is-primary" title="Edit"><i class="fa fa-pencil-alt"></i></a>

                                <a href="{{ route('demands_module.demands.view', $demand->id) }}"
                                   class="button is-success" title="View"><i class="fa fa-eye"></i></a>
                            </form>
                        </td>
                        <td>{{ $demand->title }}</td>
                        <td>{{ $demand->demandType->title }}</td>
                        <td>{{ $demand->description }}</td>
                        <td>{{ $demand->state->title }}</td>
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