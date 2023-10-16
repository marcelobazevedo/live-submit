<div>
    <form method="POST" wire:submit="save">
        <div>
            <label for="country">Países</label>
            <select wire:model.live="country" id="country" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                <option value="0">-- Escolha um país --</option>
                @foreach($countries as $id => $country)
                    <option value="{{ $id }}">{{ $country }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <label for="city">Cidades</label>
            <select wire:model="city" id="city" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                @if ($cities->count() == 0)
                    <option value="">-- Primeiro escolha um país --</option>
                @endif
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="mt-4 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
            Salvar
        </button>
    </form>
</div>
