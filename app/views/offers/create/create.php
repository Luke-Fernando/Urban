<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../../shared/head.php";
    ?>
    <title>Urban | All offers</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../../shared/nav/nav-user.php";
    ?>
    <main class="container h-auto mx-auto mt-10 mb-32 box-border px-4">
        <section class="w-max h-auto mb-5">
            <h3 class="text-lg font-medium text-[var(--main-font-color-90)]">Create offer</h3>
        </section>
        <section class="flex flex-col justify-start items-start w-full box-border px-20 my-10">
            <label for="title" class="w-full h-auto my-4">
                <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Title</p>
                <input type="text" id="title" class="w-full h-[40px] bg-[var(--bg-white-low)] outline-none border-none ring-1 ring-[var(--main-font-color-20)]
                px-3 focus:ring-[var(--active-color-brown)] text-sm text-[var(--main-font-color-90)]">
            </label>
            <label for="description" class="w-full h-auto my-4">
                <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Description</p>
                <textarea rows="8" type="text" id="description" class="w-full h-auto bg-[var(--bg-white-low)] outline-none border-none ring-1 ring-[var(--main-font-color-20)]
                px-3 focus:ring-[var(--active-color-brown)] text-sm text-[var(--main-font-color-90)]"></textarea>
            </label>
            <div class="w-full h-auto flex flex-col justify-start items-start my-5">
                <span class="text-base font-normal text-[var(--main-font-color-90)] mb-5">Milestones</span>
                <div class="flex flex-col justify-start items-start px-5">
                    <!-- milestone -->
                    <div data-milestone="id" class="w-max h-auto flex justify-start items-center">
                        <button class="w-max h-auto flex justify-center items-center text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)]
                        duration-75 ease-linear px-2 py-3 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-8 h-auto">
                                <path fill="currentColor" d="M9 17h2V8H9zm4 0h2V8h-2zm-8 4V6H4V4h5V3h6v1h5v2h-1v15z" />
                            </svg>
                        </button>
                        <div class="w-max max-w-full h-auto flex flex-col justify-start items-start">
                            <span class="w-max h-auto relative mb-3">
                                <p class="text-sm font-medium text-[var(--main-font-color-90)] pr-2">This is the sample milestone title of the current milestone</p>
                                <button data-edit="id" class="w-4 h-auto p-1 flex justify-center items-center absolute top-1/2 -translate-y-1/2 left-full text-[var(--bg-white-low)] 
                hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                                        <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z"></path>
                                    </svg>
                                </button>
                            </span>
                            <!-- details main -->
                            <div class="w-max h-auto flex justify-start items-start">
                                <!-- detail left -->
                                <div class="w-max h-auto flex flex-col justify-start items-start mr-8">
                                    <p class="text-sm text-[var(--main-font-color-80)] font-normal mb-1">Duration</p>
                                    <div>
                                        <input type="text" placeholder="Months" class="w-20 h-[35px] text-sm text-[var(--main-font-color-80)] border-none outline-none ring-1
                                        ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)] mr-2">
                                        <input type="text" placeholder="Days" class="w-20 h-[35px] text-sm text-[var(--main-font-color-80)] border-none outline-none ring-1
                                        ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)]">
                                    </div>
                                </div>
                                <!-- detail left -->
                                <!-- detail right -->
                                <div class="w-max h-auto flex flex-col justify-start items-start">
                                    <p class="text-sm text-[var(--main-font-color-80)] font-normal mb-1">Duration</p>
                                    <div>
                                        <input type="text" placeholder="Months" class="w-20 h-[35px] text-sm text-[var(--main-font-color-80)] border-none outline-none ring-1
                                        ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)] mr-3">
                                        <div class="w-max h-auto flex justify-center items-center">
                                            <div class="w-auto h-[35px] flex justify-center items-center ring-1 ring-[var(--main-font-color-20)] bg-[var(--bg-white-low)] px-2">
                                                $
                                            </div>
                                            <input type="text" placeholder="Days" class="w-20 h-[35px] text-sm text-[var(--main-font-color-80)] border-none outline-none ring-1
                                            ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)]">
                                        </div>
                                    </div>
                                </div>
                                <!-- detail right -->
                            </div>
                            <!-- details main -->
                        </div>
                    </div>
                    <!-- milestone -->
                </div>
            </div>
        </section>
    </main>
    <?php
    require __DIR__ . "/../../shared/footer.php";
    ?>
</body>

</html>