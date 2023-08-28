<form method='GET' action='{{ route('recipes') }}'>
    <div class='search__search'>
        <div>
            <input 
                value='{{ request()->input('search') }}'
                class='search__search__input' 
                placeholder='Название блюда...'
                name='search'>
        </div>
        <div>
            <button class='search__search__findButton' type='submit'>
                <p class='findButtonText'>{{ __('Поиск') }}</p>
            </button>
        </div>
    </div>
</form>