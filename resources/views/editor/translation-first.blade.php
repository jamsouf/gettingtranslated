<div uk-form-custom="target: > * > span:last">
    <select>
        @foreach($bundle->locales as $locale)
            <option value="{{ $locale->locale }}"{{ $loop->first ? ' selected' : '' }}>{{ $locale->name }}</option>
        @endforeach
    </select>
    <span class="uk-link">
        <span uk-icon="icon: triangle-down"></span>
        <span></span>
    </span>
</div>
<textarea id="translation-first" class="uk-textarea">{{ $resource->keys->first()->values->get($bundle->locales->first()->locale) }}</textarea>