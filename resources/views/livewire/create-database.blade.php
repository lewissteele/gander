<dialog class="modal" open>
    <form wire:submit="save" class="modal-box flex flex-col gap-4 w-full items-center">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        <h3 class="font-bold text-lg">
            Create Database Connection
        </h3>
        <select
            class="select input-bordered w-full input-block"
            wire:model="driver"
        >
            <option selected>pgsql</option>
            <option>mysql</option>
        </select>
        <input
            class="input input-bordered w-full input-block"
            placeholder="hostname"
            type="text"
            wire:model="hostname"
        />
        <input
            class="input input-bordered w-full input-block"
            placeholder="username"
            type="text"
            wire:model="username"
        />
        <input
            class="input input-bordered w-full input-block"
            placeholder="password"
            type="password"
            wire:model="password"
        />
        <input
            class="input input-bordered w-full input-block"
            placeholder="port"
            type="text"
            wire:model="port"
        />
        <button class="btn btn-primary btn-block" type="submit">
            Create
        </button>
    </form>
</dialog>
