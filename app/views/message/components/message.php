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
        <?php
        if (sizeof($data['files']) > 0) {
        ?>
            <!-- sent files -->
            <div class="w-full h-auto flex justify-start items-start flex-wrap mt-2">
                <!-- download file -->
                <button class="w-10 h-auto flex justify-center items-center relative mx-3 my-3 text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)]
            duration-75 ease-linear group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512" class="w-full h-auto">
                        <path fill="currentColor" d="M413.4 0H114.7C91.1 0 72 19.1 72 42.7v426.7c0 23.5 19.1 42.7 42.7 42.7h298.7c23.5 0 42.7-19.1 42.7-42.7V42.7C456 19.1 436.9 0 413.4 0m-192 469.3L242.7 320h42.7l21.3 149.3zM328 128h-64v42.7h64v42.7h-64V256h64v42.7h-64V256h-64v-42.7h64v-42.7h-64V128h64V85.3h-64V42.7h64v42.7h64zm-74.6 277.3L242.7 448h42.7l-10.7-42.7z" />
                    </svg>
                    <span class="absolute bottom-0 right-0 w-5 h-auto flex justify-center items-center bg-[var(--active-color-brown)] group-hover:bg-[var(--active-color-brown)]
                text-[var(--bg-white-low)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36" class="w-[90%] h-auto">
                            <path fill="currentColor" d="M31 31H5a1 1 0 0 0 0 2h26a1 1 0 0 0 0-2" class="clr-i-outline clr-i-outline-path-1" />
                            <path fill="currentColor" d="m18 29.48l10.61-10.61a1 1 0 0 0-1.41-1.41L19 25.65V5a1 1 0 0 0-2 0v20.65l-8.19-8.19a1 1 0 1 0-1.41 1.41Z" class="clr-i-outline clr-i-outline-path-2" />
                            <path fill="none" d="M0 0h36v36H0z" />
                        </svg>
                    </span>
                </button>
                <!-- download file -->
                <!-- download file -->
                <button class="w-10 h-auto flex justify-center items-center relative mx-3 my-3 text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)]
            duration-75 ease-linear group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" class="w-full h-auto">
                        <path fill="currentColor" d="M854.6 288.7c6 6 9.4 14.1 9.4 22.6V928c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h424.7c8.5 0 16.7 3.4 22.7 9.4zM790.2 326L602 137.8V326z" />
                    </svg>
                    <span class="absolute bottom-0 right-0 w-5 h-auto flex justify-center items-center bg-[var(--active-color-brown)] group-hover:bg-[var(--active-color-brown)]
                text-[var(--bg-white-low)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36" class="w-[90%] h-auto">
                            <path fill="currentColor" d="M31 31H5a1 1 0 0 0 0 2h26a1 1 0 0 0 0-2" class="clr-i-outline clr-i-outline-path-1" />
                            <path fill="currentColor" d="m18 29.48l10.61-10.61a1 1 0 0 0-1.41-1.41L19 25.65V5a1 1 0 0 0-2 0v20.65l-8.19-8.19a1 1 0 1 0-1.41 1.41Z" class="clr-i-outline clr-i-outline-path-2" />
                            <path fill="none" d="M0 0h36v36H0z" />
                        </svg>
                    </span>
                </button>
                <!-- download file -->
                <!-- download file -->
                <button class="w-10 h-auto flex justify-center items-center relative mx-3 my-3 text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)]
            duration-75 ease-linear group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                        <path fill="currentColor" d="M21 21V3H3v18zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5z" />
                    </svg>
                    <span class="absolute bottom-0 right-0 w-5 h-auto flex justify-center items-center bg-[var(--active-color-brown)] group-hover:bg-[var(--active-color-brown)]
                text-[var(--bg-white-low)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36" class="w-[90%] h-auto">
                            <path fill="currentColor" d="M31 31H5a1 1 0 0 0 0 2h26a1 1 0 0 0 0-2" class="clr-i-outline clr-i-outline-path-1" />
                            <path fill="currentColor" d="m18 29.48l10.61-10.61a1 1 0 0 0-1.41-1.41L19 25.65V5a1 1 0 0 0-2 0v20.65l-8.19-8.19a1 1 0 1 0-1.41 1.41Z" class="clr-i-outline clr-i-outline-path-2" />
                            <path fill="none" d="M0 0h36v36H0z" />
                        </svg>
                    </span>
                </button>
                <!-- download file -->
            </div>
            <!-- sent files -->
        <?php
        }
        ?>

    </div>
</div>
<!-- message -->