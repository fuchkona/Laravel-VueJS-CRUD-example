@extends(config('demands_module.default_layout'))

@section('breadcrumb')
    <ul>
        <li><a href="/">{{ config('demands_module.app_name') }}</a></li>
        <li class="is-active"><a href="#">Demands dashboard</a></li>
    </ul>
@endsection

@section('content')
    <div class="has-margin-bottom-50">
        <h3 class="title is-3">
            Demands dashboard
        </h3>

        <div class="columns is-multiline">

            <div class="column is-half">
                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-96x96 has-text-centered">
                                <i class="fas fa-file fa-fw fa-4x"></i>
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        <a class="has-text-black" href="{{ route('demands_module.demands.index') }}">
                                            <i class="fas fa-external-link-alt fa-sm"></i>
                                            Demands
                                        </a>
                                    </strong>
                                    <small>
                                        <span class="tag">
                                            Count:
                                            {{ $demands_count }}
                                        </span>
                                    </small>
                                    <br>
                                    Demands used to ask someone about something. It may has different <b>Graph</b>
                                    (depends on
                                    <b>Demand Type</b>)
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
                                <i class="fas fa-file-alt fa-fw fa-4x"></i>
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        <a class="has-text-black"
                                           href="{{ route('demands_module.demand_types.index') }}">
                                            <i class="fas fa-external-link-alt fa-sm"></i>
                                            Demand types
                                        </a>
                                    </strong>
                                    <small>
                                        <span class="tag">
                                            Count:
                                            {{ $demand_types_count }}
                                        </span>
                                    </small>
                                    <br>
                                    Demand types (template) used to describe business process (<b>Graph</b>), content
                                    fields and other attributes
                                    for a specific <b>Demand</b> document.
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