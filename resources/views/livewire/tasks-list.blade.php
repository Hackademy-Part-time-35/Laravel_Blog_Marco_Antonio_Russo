<div class="pb-10">
    <div class="overflow-x-auto md:w-3/5 mx-auto rounded-3xl shadow-xl border border-gray-800">
        <table class="table">
        <!-- head -->
        <thead class="bg-neutral text-neutral-content text-base bg-gradient-to-r from-slate-900 to-slate-800">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Priorità</th>
                <th>Completato</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        @foreach($tasks as $task)
            <tbody class="bg-gradient-to-r from-slate-800 to-slate-700">
                <tr class="hover:bg-slate-700">
                    <th>{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->priority }}</td>
                    <td>
                        @if($task->completed)
                            Completato
                        @else
                            Non Completato
                        @endif
                    </td>
                    <td class="text-end">
                        <button wire:click="edit({{ $task->id }})" class="btn btn-warning btn-outline">Modifica</button>
                        <button wire:click="delete({{ $task->id }})" class="btn btn-error btn-outline">Elimina</button>
                        <button wire:click="checkCompleted({{ $task->id }})" class="btn btn-success btn-outline">Completa</button>
                    </td>
                </tr>
            </tbody>
        @endforeach
        </table>
    </div>
    <x-toast-success />
</div>
