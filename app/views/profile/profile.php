<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../shared/head.php";
    ?>
    <title>Urban | Profile</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../shared/nav/nav-user.php";
    ?>
    <main class="container mx-auto h-auto box-border px-4 mt-10 mb-32">
        <section class="w-full h-auto flex flex-col sm:flex-row justify-start items-center sm:justify-between sm:items-start">
            <div class="w-52 h-auto flex flex-col justify-start items-center overflow-hidden">
                <div class="w-full aspect-square flex justify-center items-center relative">
                    <img id="profile-picture" src="/assets/images/users/profile.png" alt="profile picture" class="min-w-full min-h-full object-cover">
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
            </div>
        </section>
        <section class="w-full h-auto flex justify-start items-start">
            <p class="text-[var(--main-font-color-80)] text-base font-normal">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem error numquam suscipit consequuntur veniam, nulla voluptatibus soluta
                autem tenetur rerum similique, explicabo fugiat architecto voluptatum in aut voluptate facilis laboriosam omnis! Molestiae corporis quisquam
                odio amet repellat aperiam, fuga temporibus ipsam dignissimos atque reprehenderit enim delectus aspernatur! Aliquam labore eos incidunt
                mollitia odio aperiam corrupti aliquid, dolorem quas. Adipisci natus expedita pariatur cumque, sequi facere dolores quis reiciendis voluptatum
                explicabo cupiditate recusandae asperiores corporis sit qui minima eum! Quia vitae sunt, vel qui commodi ipsum, omnis aliquid earum quod
                officia ratione delectus nobis sint? Totam voluptatum eum aliquam minus dicta sed? A enim exercitationem atque laudantium nobis officia, hic
                excepturi sapiente adipisci voluptate delectus consectetur deserunt commodi, dolor illum quos asperiores minima placeat voluptates provident
                nostrum corporis perferendis. Rerum iste quas omnis repellat veniam, perspiciatis nostrum exercitationem ullam vero facere veritatis! Rerum
                autem accusantium atque asperiores veritatis, eligendi sapiente minima, porro vitae excepturi quo eveniet natus repellendus. Expedita quidem
                necessitatibus, natus tempora, ut voluptatibus mollitia, temporibus aut voluptatem earum accusantium minima amet quasi eos modi cupiditate
                voluptas vitae cumque repudiandae deleniti? Possimus iste, eum explicabo deleniti corporis recusandae praesentium excepturi saepe, sapiente,
                numquam consequuntur? Corrupti deserunt dolorum, quis illum officia assumenda nesciunt ab earum nobis voluptas odio optio, rem veritatis,
                culpa sint? Suscipit error illo ducimus voluptas, ipsam quis eveniet laborum nihil explicabo autem fuga quibusdam a vel, dicta minima
                veritatis aspernatur voluptatibus velit? Provident facere sunt temporibus atque doloribus ab consectetur dolore! Ratione similique eveniet
                fugiat laudantium voluptatem unde molestias perferendis reprehenderit accusamus suscipit ipsam quo saepe recusandae, accusantium.
            </p>
        </section>
    </main>
    <?php
    require __DIR__ . "/../shared/footer.php";
    ?>
</body>

</html>