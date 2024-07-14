<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../../shared/head.php";
    ?>
    <title>Urban | Profile</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../../shared/nav/nav-user.php";
    ?>
    <main class="container mx-auto h-auto box-border px-4 mt-10 mb-32">
        <section class="w-full h-auto flex flex-col sm:flex-row justify-start items-center sm:justify-between sm:items-start">
            <div class="w-52 h-auto flex flex-col justify-start items-center overflow-hidden">
                <div class="w-full aspect-square flex justify-center items-center relative">
                    <img id="profile-picture" src="/assets/images/users/user.png" alt="profile picture" class="min-w-full min-h-full object-cover">
                    <label title="Change profile picture" for="profile-picture-edit" class="w-6 h-auto p-1 flex justify-center items-center absolute bottom-0 right-0 text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                        <input type="file" id="profile-picture-edit" class="hidden" accept="image/*">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                            <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                        </svg>
                    </label>
                </div>
                <div class="w-full flex justify-center items-center flex-wrap">
                    <span title="Rising star" class="w-5 aspect-square flex justify-center items-center mx-1 my-2 overflow-hidden">
                        <img src="/assets/images/badges/badge_1.svg" alt="rising star" class="min-w-full min-h-full object-cover">
                    </span>
                    <span title="Repeat buyer" class="w-5 aspect-square flex justify-center items-center mx-1 my-2 overflow-hidden">
                        <img src="/assets/images/badges/badge_2.svg" alt="repeat buyer" class="min-w-full min-h-full object-cover">
                    </span>
                </div>
            </div>
            <div class="flex-1 pl-4 flex flex-col justify-start items-start my-4 sm:my-0">
                <span class="relative pr-2">
                    <span data-text="name" class="text-[var(--main-font-color-90)] text-2xl font-medium">Luke Fernando</span>
                    <button data-edit="name" class="w-5 h-auto p-1 flex justify-center items-center absolute top-0 left-full text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                            <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                        </svg>
                    </button>
                </span>
                <p class="text-[var(--main-font-color-80)] text-xs font-normal">@lukefer</p>
                <span class="mt-4 relative pr-2">
                    <span data-text="languages" class="text-[var(--main-font-color-90)] text-sm font-normal">English / Sinhala / French</span>
                    <button data-edit="languages" class="w-4 h-auto p-1 flex justify-center items-center absolute top-0 left-full text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                            <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                        </svg>
                    </button>
                </span>
                <span class="relative pr-2 mt-2">
                    <span data-text="title" class="text-[var(--main-font-color-90)] text-base font-medium">Frontend Developer</span>
                    <button data-edit="title" class="w-4 h-auto p-1 flex justify-center items-center absolute top-0 left-full text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                            <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                        </svg>
                    </button>
                </span>
                <span class="relative pr-2 mt-2">
                    <span data-text-toggle-expandable="about" data-text="about" class="text-[var(--main-font-color-80)] text-sm font-normal line-clamp-3 sm:line-clamp-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem error numquam suscipit consequuntur veniam, nulla voluptatibus soluta
                        autem tenetur rerum similique, explicabo fugiat architecto voluptatum in aut voluptate facilis laboriosam omnis! Molestiae corporis quisquam
                        odio amet repellat aperiam, fuga temporibus ipsam dignissimos atque reprehenderit enim delectus aspernatur! Aliquam labore eos incidunt
                        mollitia odio aperiam corrupti aliquid, dolorem quas. Adipisci natus expedita pariatur cumque, sequi facere dolores quis reiciendis voluptatum
                        explicabo cupiditate recusandae asperiores corporis sit qui minima eum! Quia vitae sunt, vel qui commodi ipsum, omnis aliquid earum quod
                        officia ratione delectus nobis sint? Totam voluptatum eum aliquam minus dicta sed? A enim exercitationem atque laudantium nobis officia, hic
                        excepturi sapiente adipisci voluptate delectus.
                    </span>
                    <button data-edit="about" class="w-5 h-auto p-1 flex justify-center items-center absolute top-0 right-0 text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                            <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                        </svg>
                    </button>
                    <button data-text-toggle-expand="about" class="absolute top-full left-0">
                        <span data-read-more class="text-[var(--active-color-brown)] text-sm font-normal 
                    duration-75 ease-linear hover:underline">Read more</span>
                        <span data-read-less class="text-[var(--active-color-brown)] text-sm font-normal 
                    duration-75 ease-linear hover:underline hidden">Read less</span>
                    </button>
                </span>
            </div>
        </section>
        <section class="w-full h-auto mt-10">
            <!-- title  -->
            <span class="relative pr-2">
                <span data-text="skills" class="text-[var(--main-font-color-90)] text-xl font-medium">Skills</span>
                <button data-edit="skills" class="w-4 h-auto p-1 flex justify-center items-center absolute top-0 left-full text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                        <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                    </svg>
                </button>
            </span>
            <!-- title  -->
            <div class="w-max max-w-full h-auto flex justify-start items-start flex-wrap mt-3">
                <p class="text-[var(--main-font-color-80)] text-sm font-normal leading-6">
                    HTML, CSS, JavaScript, PHP, Laravel, MySQL, Git, GitHub, Tailwind, Bootstrap, Vue, React, Nuxt, Astro, Svelte, Vite
                </p>
            </div>
        </section>
        <section class="w-full h-auto mt-10">
            <!-- title  -->
            <span class="relative pr-2">
                <span data-text="portfolio" class="text-[var(--main-font-color-90)] text-xl font-medium">Portfolio</span>
                <button data-edit="portfolio" class="w-4 h-auto p-1 flex justify-center items-center absolute top-0 left-full text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                        <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                    </svg>
                </button>
            </span>
            <!-- title  -->
            <div class="w-max max-w-full h-auto flex justify-center sm:justify-start items-start flex-wrap mt-3">
                <!-- card 1 -->
                <div class="w-[60%] sm:w-[200px] h-auto flex flex-col justify-start items-center sm:mx-4 my-4">
                    <div class="w-full aspect-[5/7] bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] flex flex-col justify-start 
                items-center">
                        <div class="w-full h-[10%] flex justify-end items-center">
                            <a href="#" class="h-full w-max flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--active-color-brown)] 
                        duration-75 ease-linear pr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15" class="h-full w-auto">
                                    <path fill="none" stroke="currentColor" d="m13.5 7.5l-4-4m4 4l-4 4m4-4H1" />
                                </svg>
                            </a>
                        </div>
                        <a href="#" class="w-full h-[80%] border-t border-b border-[var(--main-font-color-20)] overflow-hidden flex justify-center items-center">
                            <img src="/assets/images/portfolios/portfolio_1.png" alt="portfolio image" class="min-w-full min-h-full object-cover">
                        </a>
                    </div>
                    <div class="w-full h-auto flex justify-center items-center">
                        <a href="#" class="text-[var(--main-font-color-80)] text-sm font-normal text-center hover:text-[var(--active-color-brown)] 
                        duration-75 ease-linear">This is the sample project name</a>
                    </div>
                </div>
                <!-- card 1 -->
                <!-- card 1 -->
                <div class="w-[60%] sm:w-[200px] h-auto flex flex-col justify-start items-center mx-4 my-4">
                    <div class="w-full aspect-[5/7] bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] flex flex-col justify-start 
                items-center">
                        <div class="w-full h-[10%] flex justify-end items-center">
                            <a href="#" class="h-full w-max flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--active-color-brown)] 
                        duration-75 ease-linear pr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15" class="h-full w-auto">
                                    <path fill="none" stroke="currentColor" d="m13.5 7.5l-4-4m4 4l-4 4m4-4H1" />
                                </svg>
                            </a>
                        </div>
                        <a href="#" class="w-full h-[80%] border-t border-b border-[var(--main-font-color-20)] overflow-hidden flex justify-center items-center">
                            <img src="/assets/images/portfolios/portfolio_2.jpg" alt="portfolio image" class="min-w-full min-h-full object-cover">
                        </a>
                    </div>
                    <div class="w-full h-auto flex justify-center items-center">
                        <a href="#" class="text-[var(--main-font-color-80)] text-sm font-normal text-center hover:text-[var(--active-color-brown)] 
                        duration-75 ease-linear">This is the sample project name</a>
                    </div>
                </div>
                <!-- card 1 -->
            </div>
        </section>
        <section class="w-full h-auto mt-10">
            <!-- title  -->
            <span class="relative pr-2">
                <span data-text="certifications" class="text-[var(--main-font-color-90)] text-xl font-medium">Certifications</span>
                <button data-edit="certifications" class="w-4 h-auto p-1 flex justify-center items-center absolute top-0 left-full text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                        <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                    </svg>
                </button>
            </span>
            <!-- title  -->
            <div class="w-full h-auto flex justify-start items-start flex-wrap mt-3 px-3">
                <!-- certificate -->
                <div class="w-full h-auto flex flex-col justify-start items-start box-border px-5 py-3 my-2 border-t border-b border-[var(--main-font-color-20)]">
                    <h3 class="text-lg font-medium text-[var(--main-font-color-90)] mb-3">Certification title</h3>
                    <p class="text-sm font-normal text-[var(--main-font-color-80)]">Provided by: <span class="text-sm font-normal text-[var(--main-font-color-90)]">freeCodeCamp.org</span></p>
                    <p class="text-sm font-normal text-[var(--main-font-color-80)]">Issued on: <span class="text-sm font-normal text-[var(--main-font-color-90)]">2024.06.06</span></p>
                    <p class="mt-1 text-base text-[var(--main-font-color-80)]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit iste blanditiis dicta, obcaecati accusantium vero. Iure suscipit dolore velit!
                    </p>
                    <a href="#" class="mt-3 text-sm font-normal text-[var(--active-color-brown-low)] underline hover:text-[var(--active-color-brown)] duration-75 ease-linear">
                        Learn more
                    </a>
                </div>
                <!-- certificate -->
                <!-- certificate -->
                <div class="w-full h-auto flex flex-col justify-start items-start box-border px-5 py-3 my-2 border-t border-b border-[var(--main-font-color-20)]">
                    <h3 class="text-lg font-medium text-[var(--main-font-color-90)] mb-3">Certification title</h3>
                    <p class="text-sm font-normal text-[var(--main-font-color-80)]">Provided by: <span class="text-sm font-normal text-[var(--main-font-color-90)]">freeCodeCamp.org</span></p>
                    <p class="text-sm font-normal text-[var(--main-font-color-80)]">Issued on: <span class="text-sm font-normal text-[var(--main-font-color-90)]">2024.06.06</span></p>
                    <p class="mt-1 text-base text-[var(--main-font-color-80)]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit iste blanditiis dicta, obcaecati accusantium vero. Iure suscipit dolore velit!
                    </p>
                    <a href="#" class="mt-3 text-sm font-normal text-[var(--active-color-brown-low)] underline hover:text-[var(--active-color-brown)] duration-75 ease-linear">
                        Learn more
                    </a>
                </div>
                <!-- certificate -->
            </div>
        </section>
        <section class="w-full h-auto mt-10">
            <!-- title  -->
            <span class="relative pr-2">
                <span data-text="education" class="text-[var(--main-font-color-90)] text-xl font-medium">Education</span>
                <button data-edit="education" class="w-4 h-auto p-1 flex justify-center items-center absolute top-0 left-full text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                        <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                    </svg>
                </button>
            </span>
            <!-- title  -->
            <div class="w-full h-auto flex justify-start items-start flex-wrap mt-3 px-3">
                <!-- education -->
                <div class="w-full h-auto flex flex-col justify-start items-start box-border px-5 py-3 my-2 border-t border-b border-[var(--main-font-color-20)]">
                    <h3 class="text-lg font-medium text-[var(--main-font-color-90)] mb-3">Example university</h3>
                    <p class="text-sm font-normal text-[var(--main-font-color-80)]">Example bachelor on example field </p>
                    <p class="text-sm font-normal text-[var(--main-font-color-80)]">2024.06.06</p>
                    <p class="mt-1 text-base text-[var(--main-font-color-80)]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit iste blanditiis dicta, obcaecati accusantium vero. Iure suscipit dolore velit!
                    </p>
                    <a href="#" class="mt-3 text-sm font-normal text-[var(--active-color-brown-low)] underline hover:text-[var(--active-color-brown)] duration-75 ease-linear">
                        Learn more
                    </a>
                </div>
                <!-- education -->
                <!-- education -->
                <div class="w-full h-auto flex flex-col justify-start items-start box-border px-5 py-3 my-2 border-t border-b border-[var(--main-font-color-20)]">
                    <h3 class="text-lg font-medium text-[var(--main-font-color-90)] mb-3">Example university</h3>
                    <p class="text-sm font-normal text-[var(--main-font-color-80)]">Example bachelor on example field </p>
                    <p class="text-sm font-normal text-[var(--main-font-color-80)]">2024.06.06</p>
                    <p class="mt-1 text-base text-[var(--main-font-color-80)]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sit iste blanditiis dicta, obcaecati accusantium vero. Iure suscipit dolore velit!
                    </p>
                    <a href="#" class="mt-3 text-sm font-normal text-[var(--active-color-brown-low)] underline hover:text-[var(--active-color-brown)] duration-75 ease-linear">
                        Learn more
                    </a>
                </div>
                <!-- education -->
            </div>
        </section>
    </main>
    <?php
    require __DIR__ . "/../../shared/footer.php";
    ?>
</body>

</html>