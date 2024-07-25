<div>
    
    
    <div class="flex justify-center p-5">
        <label class="flex items-center relative">
            <input type="text" placeholder="Cerca" class="input input-bordered w-full max-w-xs bg-slate-800" wire:model.live="search" />
            <i class="fa-solid fa-magnifying-glass text-gray-500 block absolute right-3"></i>
        </label>
    </div>

    <div class="pb-10">
        <div class="overflow-x-auto md:w-3/5 mx-auto rounded-3xl shadow-xl border border-gray-800">
            <table class="table ">
            <!-- head -->
            <thead class="bg-neutral text-neutral-content text-base bg-gradient-to-r from-slate-900 to-slate-800">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($users as $user)
                <tbody class="bg-gradient-to-r from-slate-800 to-slate-700">
                    <tr class="hover:bg-slate-700">
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td><a href="mailto:{{$user->email}}">{{ $user->email }}</a></td>
                        <td>
                            <button wire:click="edit({{ $user->id }})" class="btn btn-warning btn-outline">Modifica</button>
                            <button wire:click="delete({{ $user->id }})" class="btn btn-error btn-outline">Elimina</button>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            </table>
        </div>
    </div>
<x-toast-success />
        
</div>