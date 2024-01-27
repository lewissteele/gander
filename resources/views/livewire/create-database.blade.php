<dialog
    class="modal"
    @if ($open) open @endif
>
    <form
        wire:submit="save"
        class="modal-box flex flex-col gap-4 w-full items-center"
    >
        <button
            wire:click="$dispatch('hide-create-database')"
            class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
            type="button"
        >
            ✕
        </button>
        <h3 class="font-bold text-lg">
            Create Database Connection
        </h3>
        <select
            class="select input-bordered w-full input-block"
            wire:model="form.driver"
        >
            <option value="mysql">mysql</option>
            <option value="pgsql">pgsql</option>
        </select>
        <input
            class="input input-bordered w-full input-block"
            placeholder="hostname"
            type="text"
            required
            wire:model="form.host"
        />
        <input
            class="input input-bordered w-full input-block"
            placeholder="database"
            type="text"
            required
            wire:model="form.database"
        />
        <input
            class="input input-bordered w-full input-block"
            placeholder="username"
            type="text"
            required
            wire:model="form.username"
        />
        <input
            class="input input-bordered w-full input-block"
            placeholder="password"
            type="password"
            wire:model="form.password"
        />
        <input
            class="input input-bordered w-full input-block"
            placeholder="port"
            type="text"
            wire:model="form.port"
        />
        <button class="btn btn-primary btn-block" type="submit">
            Create
        </button>
    </form>
</dialog>
