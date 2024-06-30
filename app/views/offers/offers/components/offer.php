<section class="w-full h-auto flex flex-col justify-start items-start my-10 px-8 relative hover:before:bg-[var(--active-color-brown)] before:duration-75 before:ease-linear
        before:content-[''] before:absolute before:w-[1px] before:bg-[var(--main-font-color-20)] before:h-[60%] before:right-full before:top-1/2 before:-translate-y-1/2">
    <span class="relative w-max h-auto mb-2">
        <p data-content="<?php echo $data['id']; ?>" class="text-base font-medium text-[var(--main-font-color-90)] pr-2"><?php echo $data['title']; ?></p>
        <button data-edit="<?php echo $data['id']; ?>" class="w-4 h-auto p-1 flex justify-center items-center absolute top-1/2 -translate-y-1/2 left-full text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z"></path>
            </svg>
        </button>
    </span>
    <p class="text-xs font-normal text-[var(--main-font-color-80)] mb-2"><?php echo $data['datetime']; ?></p>
    <div class="flex justify-start items-start mb-3">
        <button class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75
                ease-linear">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-9 h-auto p-2">
                <path fill="currentColor" d="M20 2H4a2 2 0 0 0-2 2v18l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2" />
            </svg>
        </button>
        <button class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75
                ease-linear">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48" class="w-9 h-auto p-2">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M8 12V4h16v8m0 24v8H8v-8m36-12H24m-8 10V14m20 2l8 8l-8 8" />
            </svg>
        </button>
    </div>
    <p class="text-sm font-normal text-[var(--main-font-color-80)] line-clamp-3">
        <?php echo $data['description']; ?>
    </p>
</section>