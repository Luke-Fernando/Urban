<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../../shared/head.php";
    ?>
    <title>Urban | My jobs</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../../shared/nav/nav-user.php";
    ?>
    <main class="container h-auto mx-auto flex flex-col justify-start items-start mt-10 mb-32 box-border px-4">
        <section class="w-max h-auto mb-5">
            <h3 class="text-lg font-medium text-[var(--main-font-color-90)]">My jobs</h3>
        </section>
        <section class="w-full h-auto flex flex-col justify-start items-start my-5 px-8 relative">
            <a href="/job/post" class="w-max h-auto flex justify-start items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75 ease-linear">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-8 h-auto mr-2">
                    <path fill="currentColor" d="M21 3H3v18h18zm-4 10h-4v4h-2v-4H7v-2h4V7h2v4h4z" />
                </svg>
                <span class="text-sm text-inherit">Post new job</span>
            </a>
        </section>
        <!-- job post -->
        <section class="w-full h-auto flex flex-col justify-start items-start my-10 px-8 relative hover:before:bg-[var(--active-color-brown)] before:duration-75 before:ease-linear
        before:content-[''] before:absolute before:w-[1px] before:bg-[var(--main-font-color-20)] before:h-[60%] before:right-full before:top-1/2 before:-translate-y-1/2">
            <span class="relative w-max h-auto mb-2">
                <a href="/job" class="text-base font-medium text-[var(--main-font-color-90)] pr-2">This is the sample title</a>
            </span>
            <p class="text-xs font-normal text-[var(--main-font-color-80)] mb-2">08 Jul, 2024, 01.03 PM</p>
            <div class="flex justify-start items-start mb-3">
                <button class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75
                ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-9 h-auto p-2">
                        <path fill="currentColor" d="M9 17h2V8H9zm4 0h2V8h-2zm-8 4V6H4V4h5V3h6v1h5v2h-1v15z"></path>
                    </svg>
                </button>
                <a href="/job" class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75
                ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48" class="w-9 h-auto p-2">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M8 12V4h16v8m0 24v8H8v-8m36-12H24m-8 10V14m20 2l8 8l-8 8" />
                    </svg>
                </a>
                <a href="/job/applications" class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75
                ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-9 h-auto p-2">
                        <path fill="currentColor" d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1M8 7v2h8V7zm0 4v2h8v-2zm0 4v2h5v-2z" />
                    </svg>
                </a>
                <a href="/job/room" class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75
                ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" class="w-9 h-auto p-2">
                        <path fill="currentColor" d="M12.215 5.217a2.227 2.227 0 1 0-4.455 0a2.227 2.227 0 0 0 4.455 0M2.515 12h2.99V9.014l.008-.18c.026-.297.118-.575.26-.82H3.016l-.117.007a1 1 0 0 0-.883.993V11.5a.5.5 0 0 0 .5.5m15.475-.5a.5.5 0 0 1-.5.5h-3.016V9.014l-.006-.149a2 2 0 0 0-.262-.851h2.784a1 1 0 0 1 .993.884l.007.116zm-4.523-2.602a1 1 0 0 0-.994-.884H7.506l-.117.007a1 1 0 0 0-.883.993V12h6.969V9.014zm1.508-5.28a1.913 1.913 0 1 1 0 3.826a1.913 1.913 0 0 1 0-3.827M6.929 5.53a1.913 1.913 0 1 0-3.826 0a1.913 1.913 0 0 0 3.826 0M2.5 13a.5.5 0 0 0-.5.5v1A2.5 2.5 0 0 0 4.5 17h11a2.5 2.5 0 0 0 2.5-2.5v-1a.5.5 0 0 0-.5-.5z" />
                    </svg>
                </a>
            </div>
            <a href="/job" class="text-sm font-normal text-[var(--main-font-color-80)] line-clamp-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae hic, assumenda sed perferendis ipsam beatae distinctio ipsum quibusdam unde.
                Quia perferendis hic voluptate molestias suscipit tempora enim ipsa dolorum natus at, tenetur fugiat ratione laborum error odit tempore animi repellat
                ea est, ex illo! Quibusdam ipsa saepe quisquam. Error commodi vel laudantium minima explicabo, a soluta vero dolores possimus iure ipsa, fuga
                repudiandae? Distinctio debitis animi sapiente libero dicta nesciunt, iure, et consequatur accusamus labore ad pariatur ut? Deleniti, deserunt! Odio
                repellendus reprehenderit nulla, quia nostrum, incidunt aliquid nihil perspiciatis expedita consectetur voluptate error impedit, magni quidem
                dignissimos! Cupiditate!
            </a>
        </section>
        <!-- job post -->
        <!-- job post -->
        <section class="w-full h-auto flex flex-col justify-start items-start my-10 px-8 relative hover:before:bg-[var(--active-color-brown)] before:duration-75 before:ease-linear
        before:content-[''] before:absolute before:w-[1px] before:bg-[var(--main-font-color-20)] before:h-[60%] before:right-full before:top-1/2 before:-translate-y-1/2">
            <span class="relative w-max h-auto mb-2">
                <a href="/job" class="text-base font-medium text-[var(--main-font-color-90)] pr-2">This is the sample title</a>
            </span>
            <p class="text-xs font-normal text-[var(--main-font-color-80)] mb-2">08 Jul, 2024, 01.03 PM</p>
            <div class="flex justify-start items-start mb-3">
                <button class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75
                ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-9 h-auto p-2">
                        <path fill="currentColor" d="M9 17h2V8H9zm4 0h2V8h-2zm-8 4V6H4V4h5V3h6v1h5v2h-1v15z"></path>
                    </svg>
                </button>
                <a href="/job" class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75
                ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48" class="w-9 h-auto p-2">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M8 12V4h16v8m0 24v8H8v-8m36-12H24m-8 10V14m20 2l8 8l-8 8" />
                    </svg>
                </a>
                <a href="/job/applications" class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75
                ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-9 h-auto p-2">
                        <path fill="currentColor" d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1M8 7v2h8V7zm0 4v2h8v-2zm0 4v2h5v-2z" />
                    </svg>
                </a>
                <a href="/job/room" class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--main-font-color-90)] duration-75
                ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" class="w-9 h-auto p-2">
                        <path fill="currentColor" d="M12.215 5.217a2.227 2.227 0 1 0-4.455 0a2.227 2.227 0 0 0 4.455 0M2.515 12h2.99V9.014l.008-.18c.026-.297.118-.575.26-.82H3.016l-.117.007a1 1 0 0 0-.883.993V11.5a.5.5 0 0 0 .5.5m15.475-.5a.5.5 0 0 1-.5.5h-3.016V9.014l-.006-.149a2 2 0 0 0-.262-.851h2.784a1 1 0 0 1 .993.884l.007.116zm-4.523-2.602a1 1 0 0 0-.994-.884H7.506l-.117.007a1 1 0 0 0-.883.993V12h6.969V9.014zm1.508-5.28a1.913 1.913 0 1 1 0 3.826a1.913 1.913 0 0 1 0-3.827M6.929 5.53a1.913 1.913 0 1 0-3.826 0a1.913 1.913 0 0 0 3.826 0M2.5 13a.5.5 0 0 0-.5.5v1A2.5 2.5 0 0 0 4.5 17h11a2.5 2.5 0 0 0 2.5-2.5v-1a.5.5 0 0 0-.5-.5z" />
                    </svg>
                </a>
            </div>
            <a href="/job" class="text-sm font-normal text-[var(--main-font-color-80)] line-clamp-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repudiandae hic, assumenda sed perferendis ipsam beatae distinctio ipsum quibusdam unde.
                Quia perferendis hic voluptate molestias suscipit tempora enim ipsa dolorum natus at, tenetur fugiat ratione laborum error odit tempore animi repellat
                ea est, ex illo! Quibusdam ipsa saepe quisquam. Error commodi vel laudantium minima explicabo, a soluta vero dolores possimus iure ipsa, fuga
                repudiandae? Distinctio debitis animi sapiente libero dicta nesciunt, iure, et consequatur accusamus labore ad pariatur ut? Deleniti, deserunt! Odio
                repellendus reprehenderit nulla, quia nostrum, incidunt aliquid nihil perspiciatis expedita consectetur voluptate error impedit, magni quidem
                dignissimos! Cupiditate!
            </a>
        </section>
        <!-- job post -->
    </main>
    <?php
    require __DIR__ . "/../../shared/footer.php";
    ?>
</body>

</html>