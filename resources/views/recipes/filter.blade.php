<form method='GET' action='{{ route('recipes') }}'>
    <div class='mainContainer__search'>
        <div>
            <p class='mainContainer__search__name'>
                {{ __('Поиск рецепта') }}
            </p>
        </div>
        <div>
            <input 
                value='{{ request()->input('search') }}' 
                class='mainContainer__search__input' 
                placeholder='Название блюда...' 
                name='search'>
        </div>
        <div>
            <button class='mainContainer__search__findButton' type='submit'>
                <p class='findButtonText'>{{ __('Поиск') }}</p>
            </button>
        </div>
    </div>
</form>