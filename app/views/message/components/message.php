<!-- message -->
<div class="w-full h-auto flex justify-between items-start my-10">
    <a href="/profile" class="w-10 aspect-square flex justify-center items-center overflow-hidden mr-4 border border-[var(--main-font-color-20)] 
                    hover:border-[var(--active-color-brown)]">
        <img src="/assets/images/users/<?php echo $data['profile_picture']; ?>" alt="user profile picture" class="min-w-full min-h-full object-cover">
    </a>
    <div class="w-full h-auto flex flex-col justify-start items-start">
        <span class="text-base font-medium text-[var(--main-font-color-90)] relative"><a href="/profile"><?php echo $data['name']; ?></a>
            <span class="text-[var(--main-font-color-80)] text-xs font-normal ml-2"><?php echo $data['datetime']; ?></span>
            <span class="w-6 h-auto flex justify-center items-center absolute top-0 left-full">
                <button data-message-option-trigger="<?php echo $data['id']; ?>" class="w-full h-auto text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] 
                duration-75 ease-linear active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 12.25v-.5m4 .5v-.5m-8 .5v-.5" />
                    </svg>
                </button>
                <!-- dropdown container -->
                <div data-message-option-dropdown="<?php echo $data['id']; ?>" data-show="false" class="absolute z-30 h-auto w-max flex justify-center items-center top-1/2 -translate-y-1/2 left-full
                max-w-0 invisible overflow-hidden duration-500 ease-linear shadow-md">
                    <!-- arrow -->
                    <div class="w-max h-auto flex justify-center items-center -rotate-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="hidden md:block w-4 h-auto text-[var(--bg-white-low)] 
                        stroke-[var(--main-font-color-30)] stroke-1">
                            <path fill="currentColor" d="M3 19h18a1.002 1.002 0 0 0 .823-1.569l-9-13c-.373-.539-1.271-.539-1.645 0l-9 13A.999.999 0 0 0 3 19" />
                        </svg>
                    </div>
                    <!-- arrow -->
                    <!-- dropdown -->
                    <div class="bg-[var(--bg-white-low)] flex flex-col justify-start items-start py-2 px-5 border border-[var(--main-font-color-20)]]">
                        <button class="w-max h-auto text-xs font-normal text-[var(--main-font-color-80)] py-1 hover:text-[var(--active-color-brown)] duration-75 ease-linear">
                            Delete message
                        </button>
                        <button class="w-max h-auto text-xs font-normal text-[var(--main-font-color-80)] py-1 hover:text-[var(--active-color-brown)] duration-75 ease-linear">
                            Report message
                        </button>
                    </div>
                    <!-- dropdown -->
                </div>
                <!-- dropdown container -->
            </span>

        </span>
        <p class="text-sm font-medium text-[var(--main-font-color-80)] mt-3">
            <?php echo $data['message']; ?>
        </p>
    </div>
</div>
<!-- message -->