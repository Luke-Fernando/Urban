<label data-trigger-checkbox="<?php echo $data["id"] ?>" for="<?php echo $data["id"] ?>" class="w-max max-w-full h-auto flex justify-start items-start my-1">
    <input id="<?php echo $data["id"] ?>" data-input-checkbox="<?php echo $data["id"] ?>" type="checkbox" class="hidden">
    <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
        <div data-custom-checkbox="<?php echo $data["id"] ?>" class="w-full h-full justify-center items-center hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z" />
            </svg>
        </div>
    </span>
    <span class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm text-[var(--main-font-color-80)] select-none ml-3"><?php echo $data["title"]; ?></span>
</label>