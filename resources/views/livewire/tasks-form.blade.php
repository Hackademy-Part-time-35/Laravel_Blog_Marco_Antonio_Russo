<div class="flex justify-center items-center m-auto w-1/2 py-10">
    <form wire:submit="submit" class=" w-1/2 border border-red-500 p-6 bg-gray-900">
            
        <h2 class="text-2xl pb-3 font-semibold">
            @if($taskID)
                Modifica 
            @else
                Crea
            @endif
                Task
        </h2>

        <div>
        
            <div class="flex flex-col mb-3">
                <label for="name">Nome</label>
                <input name="name" type="text" id="name" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("name") border-red-700 @enderror" wire:model.live="name">
                <x-error-validation name="name" />
            </div>

            <div class="flex flex-col mb-3">
                <label for="priority">Priorità</label>
                <select name="priority" id="priority"  class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("priority") border-red-700 @enderror" wire:model.live="priority">
                    <option value="low">Bassa</option>
                    <option value="medium">Media</option>
                    <option value="high">Alta</option>
                </select>
                <x-error-validation name="priority" />
            </div>
        
            @if($taskID)
                <div class="mb-3">
                    <label for="completed">Completato</label>
                    <div class="mb-1">
                        <input value="1" type="radio" name="completed" id="true" wire:model="completed" class="radio radio-error" />
                        <label for="true">Si</label>
                    </div>
                    <div>
                        <input value="0" type="radio" name="completed" id="false" wire:model="completed" class="radio radio-error" />
                        <label for="false">No</label>
                    </div>
                </div>
                <x-error-validation name="completed" />
            @endif

        </div>

        <div class="w-full pt-3">
            <button type="submit" class="w-full bg-gray-900 border border-red-500 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-red-500 hover:text-white text-xl cursor-pointer">
                @if($taskID)
                Modifica 
            @else
                Crea
            @endif
            </button>
        </div>

    </form>
    <x-toast-success />

        


</div>