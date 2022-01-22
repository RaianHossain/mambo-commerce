<x-frontend.layouts.master>
    <x-slot name="searchBar">
        <div class="header-search hs-simple">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
    </x-slot>
</x-frontend.layouts.master>