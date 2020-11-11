@extends(config('state_machine_module.default_layout'))

@section('breadcrumb')
    <ul>
        <li><a href="/">{{ config('state_machine_module.app_name') }}</a></li>
        <li class="is-active"><a href="#">StateMachine dashboard</a></li>
    </ul>
@endsection

@section('content')
    <div class="has-margin-bottom-50">
        <h3 class="title is-3">
            StateMachine dashboard
        </h3>

        <div class="columns is-multiline">

            <div class="column is-half">
                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-96x96 has-text-centered">
                                <i class="fas fa-project-diagram fa-fw fa-4x"></i>
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        <a class="has-text-black" href="{{ route('state_machine_module.graphs.index') }}">
                                            <i class="fas fa-external-link-alt fa-sm"></i>
                                            Graphs
                                        </a>
                                    </strong>
                                    <small>
                                        <span class="tag">
                                            Count:
                                            {{ $graphs_count }}
                                        </span>
                                    </small>
                                    <br>
                                    Graphs contain <b>Transitions</b> for a specific <b>StateMachine Type</b>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="column is-half">
                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-96x96 has-text-centered">
                                <i class="fas fa-tasks fa-fw fa-4x"></i>
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        <a class="has-text-black"
                                           href="{{ route('state_machine_module.transitions.index') }}">
                                            <i class="fas fa-external-link-alt fa-sm"></i>
                                            Transitions
                                        </a>
                                    </strong>
                                    <small>
                                        <span class="tag">
                                            Count:
                                            {{ $transitions_count }}
                                        </span>
                                    </small>
                                    <br>
                                    Transition is a description of a possible <b>StateMachine</b>'s business process.
                                    It bases on <b>State</b> points.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="column is-half">
                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-96x96 has-text-centered">
                                <i class="fas fa-check fa-fw fa-4x"></i>
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        <a class="has-text-black" href="{{ route('state_machine_module.states.index') }}">
                                            <i class="fas fa-external-link-alt fa-sm"></i>
                                            States
                                        </a>
                                    </strong>
                                    <small>
                                        <span class="tag">
                                            Count:
                                            {{ $states_count }}
                                        </span>
                                    </small>
                                    <br>
                                    States is a descriptions of a current <b>StateMachine</b>'s state.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

        </div>

    </div>

    @push('styles')
    @endpush

    @push('scripts')
    @endpush
@endsection