@extends(config('demands_module.default_layout'))

@section('breadcrumb')
    <ul>
        <li><a href="/">{{ config('demands_module.app_name') }}</a></li>
        <li><a href="{{ route('demands_module.index') }}">Demands Module</a></li>
        <li><a href="{{ route('demands_module.demands.index') }}">Demands</a></li>
        <li class="is-active"><a href="#" aria-current="page">View demand</a></li>
    </ul>
@endsection

@section('content')
    <div class="container has-margin-bottom-50">
        <div class="columns is-multiline">
            <div class="column is-10 is-offset-1">
                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <h1 class="title is-4">View demand</h1>
                    </div>
                </div>


                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Display name</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                {{ $demand->title }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Description</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                {{ $demand->description }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Type</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                {{ $demand->demandType->title }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Current state</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                {{ $demand->state->title }}
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Possible transitions</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="buttons">
                                @foreach($demand->getPossibleTransitions() as $possibleTransition)
                                    <form method="POST" class="has-margin-right-10"
                                          action="{{ route('demands_module.demands.apply_transition', [$demand->id, $possibleTransition->id]) }}">
                                        {{ csrf_field() }}
                                        <button type="submit" class="button" title="{{ $possibleTransition->title }}">
                                            <i class="fa fa-check has-margin-right-10"></i> {{ $possibleTransition->title }}
                                        </button>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection