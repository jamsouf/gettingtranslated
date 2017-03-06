<div class="resource-selection uk-margin-large-right">
    <h3>{{ $bundle->name }}</h3>
    @foreach($bundle->resources as $resource)
        <a href="{{ url('editor/'.$bundle->name.'/'.$resource->name) }}">{{ $resource->displayName }}</a>
    @endforeach
</div>