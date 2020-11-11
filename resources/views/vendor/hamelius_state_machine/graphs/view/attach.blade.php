<form action="{{ route('state_machine_module.graphs.transitions.attach') }}" accept-charset="UTF-8" method="post">
    {{ csrf_field() }}

    <input type="number" required class="hidden" hidden="hidden" name="attach[graph_id]" id="attach_graph_id"
           value="{{ $graph->id }}">

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label for="attach_transition_id" class="label">Transition</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="select">
                    <select required="required" name="attach[transition_id]" id="attach_transition_id">
                        @foreach($transitions as $transition)
                            <option value="{{ $transition->id }}">{{ $transition->title }}</option>
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
                <button type="submit" class="button is-primary has-gradient">Attach</button>
            </div>
        </div>
    </div>
</form>