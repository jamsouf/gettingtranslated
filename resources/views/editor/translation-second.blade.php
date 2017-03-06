<div uk-form-custom="target: > * > span:last">
    <select>
        @foreach($bundle->locales as $locale)
            <option value="{{ $locale->locale }}"{{ $loop->iteration == 2 ? ' selected' : '' }}>{{ $locale->name }}</option>
        @endforeach
    </select>
    <span class="uk-link">
        <span uk-icon="icon: triangle-down"></span>
        <span></span>
    </span>
</div>
<textarea id="translation-second" class="uk-textarea">{{ $resource->keys->first()->values->get($bundle->locales->has(1) ? $bundle->locales->get(1)->locale : $bundle->locales->first()->locale) }}</textarea>