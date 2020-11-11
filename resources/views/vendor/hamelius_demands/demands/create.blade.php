@extends(config('demands_module.default_layout'))

@section('breadcrumb')
    <ul>
        <li><a href="/">{{ config('demands_module.app_name') }}</a></li>
        <li><a href="{{ route('demands_module.index') }}">Demands Module</a></li>
        <li><a href="{{ route('demands_module.demands.index') }}">Demands</a></li>
        <li class="is-active"><a href="#" aria-current="page">Create demand</a></li>
    </ul>
@endsection

@section('content')
    <div class="container has-margin-bottom-50">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <h1 class="title is-4">New demand</h1>
                    </div>
                </div>

                <form action="{{ route('demands_module.demands.store') }}" accept-charset="UTF-8" method="post">
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
                            <label for="demand_title" class="label">Display name</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" required class="input" name="demand[title]"
                                           id="demand_title">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="demand_description" class="label">Description</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <textarea type="text" required class="textarea" name="demand[description]"
                                              id="demand_description">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="demand_demand_type_id" class="label">Demand type</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="select">
                                    <select required="required" name="demand[demand_type_id]"
                                            id="demand_demand_type_id">
                                        @foreach($demand_types as $demand_type)
                                            <option value="{{ $demand_type->id }}">{{ $demand_type->title }}</option>
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