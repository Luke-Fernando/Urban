<div class="w-[90%] h-auto relative flex justify-start items-start">
    <button data-dropdown-toggler="<?php echo $data['id']; ?>" class="w-full h-[40px] bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] flex justify-between 
                            items-center text-sm font-normal text-start text-[var(--main-font-color-30)] box-border px-4 select-none hover:border-[var(--active-color-brown)] 
                            duration-75 ease-linear">
        <?php echo $data['title']; ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 9l-7 6l-7-6" />
        </svg>
    </button>
    <div data-dropdown-menu="<?php echo $data['id']; ?>" data-show="false" class="absolute z-50 top-[110%] left-0 w-full h-auto overflow-auto flex flex-col 
                            justify-start items-start bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] px-4 py-2 box-border shadow-md invisible max-h-0">
        <?php
        echo $data['content'];
        ?>
    </div>
</div>