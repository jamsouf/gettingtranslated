<a href="#" class="resource-key{{ $loop->first ? ' active' : '' }}">
    <div class="key">{{ $key->name }}</div>
    <div class="text">{{ $key->values->first() }}</div>
</a>