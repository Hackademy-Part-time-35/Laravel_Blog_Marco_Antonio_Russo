<form wire:submit="submit" class="border border-red-500 p-6 bg-gray-900 w-full">
    @csrf
    
    <h2 class="text-2xl pb-3 font-semibold">
        Registrati
    </h2>
    <div>
        <div class="flex flex-col mb-3">
            <label for="name">Nome</label>
            <input type="text" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500" wire:model.live="name">
        </div>
        <div class="flex flex-col mb-3">
            <label for="email">Email</label>
            <input name="email" type="email" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("email") border-red-700 @enderror" value="{{old("email")}}" wire:model.live="email">
            <x-error-validation name="email" />
        </div>
        <div class="flex flex-col mb-3">
            <label for="password">Password</label>
            <input name="password" type="password" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("email") border-red-700 @enderror" wire:model.live="password">
            <x-error-validation name="password" />
        </div>
    </div>
    <div class="w-full pt-3">
        <button type="submit" class="w-full bg-gray-900 border border-red-500 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-red-500 hover:text-white text-xl cursor-pointer">
        Invia
        </button>
    </div>
</form>
