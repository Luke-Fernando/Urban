<label for="<?php echo $input_id; ?>" class="w-full <?php if (!$full_width) {
                                                        echo ("md:w-1/2");
                                                    } ?> h-auto flex flex-col justify-start items-start px-2 my-2 relative">
    <div class="w-max h-auto flex justify-center items-center mb-3">
        <p class="text-sm font-normal text-[var(--main-font-color-90)]"><?php echo $input_name; ?></p>
        <?php
        if ($instructions) {
        ?>
            <button data-popover-target="popover-<?php echo $input_id; ?>" class="w-[16px] h-auto ml-2 flex justify-center items-center 
                        text-[var(--main-font-color-90)] hover:text-[var(--main-font-color)] ease-linear duration-75">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" class="w-full h-auto">
                    <path fill="currentColor" d="M16 2C8.3 2 2 8.3 2 16s6.3 14 14 14s14-6.3 14-14S23.7 2 16 2m-1.1 6h2.2v11h-2.2zM16 25c-.8 0-1.5-.7-1.5-1.5S15.2 22 16 22s1.5.7 1.5 1.5S16.8 25 16 25" />
                </svg>
            </button>
            <div data-popover id="popover-<?php echo $input_id; ?>" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 
                        transition-opacity duration-75 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] shadow-sm opacity-0">
                <div class="p-3 space-y-2">
                    <p class="font-medium text-[var(--main-font-color-80)] text-sm">Password must have at least:</p>
                    <ul>
                        <li class="flex items-start mb-1 font-normal text-[var(--main-font-color-80)] text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 100 100" class="w-[25px] h-auto text-[var(--active-color-brown-low)]">
                                <path fill="currentColor" d="M50 37.45c-6.89 0-12.55 5.66-12.55 12.549c0 6.89 5.66 12.55 12.55 12.55c6.655 0 12.112-5.294 12.48-11.862a3.5 3.5 0 0 0 .07-.688a3.5 3.5 0 0 0-.07-.691C62.11 42.74 56.653 37.45 50 37.45m0 7c3.107 0 5.55 2.442 5.55 5.549s-2.443 5.55-5.55 5.55c-3.107 0-5.55-2.443-5.55-5.55c0-3.107 2.443-5.549 5.55-5.549" color="currentColor" />
                            </svg>
                            6 characters
                        </li>
                        <li class="flex items-start mb-1 font-normal text-[var(--main-font-color-80)] text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 100 100" class="w-[25px] h-auto text-[var(--active-color-brown-low)]">
                                <path fill="currentColor" d="M50 37.45c-6.89 0-12.55 5.66-12.55 12.549c0 6.89 5.66 12.55 12.55 12.55c6.655 0 12.112-5.294 12.48-11.862a3.5 3.5 0 0 0 .07-.688a3.5 3.5 0 0 0-.07-.691C62.11 42.74 56.653 37.45 50 37.45m0 7c3.107 0 5.55 2.442 5.55 5.549s-2.443 5.55-5.55 5.55c-3.107 0-5.55-2.443-5.55-5.55c0-3.107 2.443-5.549 5.55-5.549" color="currentColor" />
                            </svg>
                            One Upper & lower case letter
                        </li>
                        <li class="flex items-start justify-start mb-1 font-normal text-[var(--main-font-color-80)] text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 100 100" class="w-[25px] h-auto text-[var(--active-color-brown-low)]">
                                <path fill="currentColor" d="M50 37.45c-6.89 0-12.55 5.66-12.55 12.549c0 6.89 5.66 12.55 12.55 12.55c6.655 0 12.112-5.294 12.48-11.862a3.5 3.5 0 0 0 .07-.688a3.5 3.5 0 0 0-.07-.691C62.11 42.74 56.653 37.45 50 37.45m0 7c3.107 0 5.55 2.442 5.55 5.549s-2.443 5.55-5.55 5.55c-3.107 0-5.55-2.443-5.55-5.55c0-3.107 2.443-5.549 5.55-5.549" color="currentColor" />
                            </svg>
                            One number
                        </li>
                        <li class="flex items-start mb-1 font-normal text-[var(--main-font-color-80)] text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 100 100" class="w-[25px] h-auto text-[var(--active-color-brown-low)]">
                                <path fill="currentColor" d="M50 37.45c-6.89 0-12.55 5.66-12.55 12.549c0 6.89 5.66 12.55 12.55 12.55c6.655 0 12.112-5.294 12.48-11.862a3.5 3.5 0 0 0 .07-.688a3.5 3.5 0 0 0-.07-.691C62.11 42.74 56.653 37.45 50 37.45m0 7c3.107 0 5.55 2.442 5.55 5.549s-2.443 5.55-5.55 5.55c-3.107 0-5.55-2.443-5.55-5.55c0-3.107 2.443-5.549 5.55-5.549" color="currentColor" />
                            </svg>
                            One symbol (#$&)
                        </li>
                    </ul>
                </div>
                <div data-popper-arrow></div>
            </div>
        <?php
        }
        ?>
    </div>
    <input id="<?php echo $input_id; ?>" type="<?php echo $input_type; ?>" class="w-full h-[40px] border-none text-sm bg-[var(--bg-white-low)] ring-1 
                    ring-[var(--main-font-color-20)] focus:ring-[var(--active-color-brown)] box-border pr-10">
    <button data-toggle-password="<?php echo $input_id; ?>" class="h-[40px] aspect-square absolute right-2 bottom-0 flex justify-center items-center 
                    text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] ease-linear duration-75">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-[50%] h-auto">
            <path fill="currentColor" d="M9.75 12a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0" />
            <path fill="currentColor" fill-rule="evenodd" d="M2 12c0 1.64.425 2.191 1.275 3.296C4.972 17.5 7.818 20 12 20c4.182 0 7.028-2.5 8.725-4.704C21.575 14.192 22 13.639 22 12c0-1.64-.425-2.191-1.275-3.296C19.028 6.5 16.182 4 12 4C7.818 4 4.972 6.5 3.275 8.704C2.425 9.81 2 10.361 2 12m10-3.75a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5" clip-rule="evenodd" />
        </svg>
    </button>
</label>