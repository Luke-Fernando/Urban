<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../shared/head.php";
    ?>
    <title>Urban | Job Dashboard</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../shared/nav/nav-user.php";
    ?>
    <main class="container mx-auto mt-10 mb-32 flex justify-between items-start box-border px-4 h-auto">
        <section data-filter-bg="filter-jobs" class="w-screen h-screen fixed top-0 left-0 bg-[var(--main-font-color-20)] z-[990] hidden md:hidden"></section>
        <section data-filter-menu="filter-jobs" data-show="false" class="fixed z-[999] md:static md:z-auto w-[85vw] h-[95vh] bottom-0 left-1/2 -translate-x-1/2 md:translate-x-0 md:w-[30%] 
        md:min-h-full max-h-0 invisible md:visible md:max-h-none md:flex flex-col justify-start items-start bg-[var(--main-bg-yellow)] md:bg-transparent 
         ease-linear duration-75 border border-[var(--main-font-color-20)] md:border-none shadow-md md:shadow-none py-10 md:py-0">
            <div data-filter-close="filter-jobs" class="w-full h-auto flex md:hidden justify-end items-center absolute top-0 left-0">
                <button class="w-max h-auto flex justify-center items-center text-[var(--main-font-color-30)] hover:text-[var(--active-color-brown)] 
                    ease-linear duration-75 p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-7 h-auto">
                        <path fill="currentColor" d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12z" />
                    </svg>
                </button>
            </div>
            <!-- close  -->
            <div class="w-full h-full flex flex-col justify-start items-start overflow-auto">
                <!-- filter      -->
                <div class="w-full h-auto flex flex-col justify-start items-start px-5 my-5">
                    <p class="font-normal text-[var(--main-font-color-90)] text-base">Experience level</p>
                    <div class="w-full h-auto flex flex-col justify-start items-start mt-3">
                        <?php
                        $checkboxes = array(
                            array(
                                'id' => 'development-and-it',
                                'title' => 'Development and IT'
                            ),
                            array(
                                'id' => 'design-and-art',
                                'title' => 'Design and art'
                            ),
                            array(
                                'id' => 'writing-and-translation',
                                'title' => 'Writing and translation'
                            ),
                            array(
                                'id' => 'video-and-animation',
                                'title' => 'Video and animation'
                            ),
                            array(
                                'id' => 'digital-marketing',
                                'title' => 'Digital marketing'
                            ),
                            array(
                                'id' => 'Finance-and-accounting',
                                'title' => 'Finance and accounting'
                            )
                        );
                        ob_start();
                        foreach ($checkboxes as $checkbox) {
                            $data = $checkbox;
                            require __DIR__ . '/components/checkbox.php';
                        }
                        $checkboxes_html = ob_get_clean();
                        $data = array(
                            'id' => 'category',
                            'title' => 'Select your category',
                            'content' => $checkboxes_html
                        );
                        require __DIR__ . '/components/dropdown.php';
                        ?>
                    </div>
                </div>
                <!-- filter      -->
                <!-- filter      -->
                <div class="w-full h-auto flex flex-col justify-start items-start px-5 my-5">
                    <p class="font-normal text-[var(--main-font-color-90)] text-base">Experience level</p>
                    <div class="w-max h-auto flex flex-col justify-start items-start mt-3">
                        <?php
                        $checkboxes = array(
                            array(
                                'id' => 'junior',
                                'title' => 'Junior'
                            ),
                            array(
                                'id' => 'intermediate',
                                'title' => 'Intermediate'
                            ),
                            array(
                                'id' => 'expert',
                                'title' => 'Expert'
                            )
                        );
                        foreach ($checkboxes as $checkbox) {
                            // extract($checkbox);
                            $data = $checkbox;
                            require __DIR__ . '/components/checkbox.php';
                        }
                        ?>
                    </div>
                </div>
                <!-- filter      -->
                <!-- filter      -->
                <div class="w-full h-auto flex flex-col justify-start items-start px-5 my-5">
                    <p class="font-normal text-[var(--main-font-color-90)] text-base">Job type</p>
                    <div class="w-max h-auto flex flex-col justify-start items-start mt-3">
                        <?php
                        $checkboxes = array(
                            array(
                                'id' => 'hourly',
                                'title' => 'Hourly'
                            ),
                            array(
                                'id' => 'fixed',
                                'title' => 'Fixed'
                            )
                        );
                        foreach ($checkboxes as $checkbox) {
                            // extract($checkbox);
                            $data = $checkbox;
                            require __DIR__ . '/components/checkbox.php';
                        }
                        ?>
                    </div>
                </div>
                <!-- filter      -->
                <!-- filter      -->
                <div class="w-full h-auto flex flex-col justify-start items-start px-5 my-5">
                    <p class="font-normal text-[var(--main-font-color-90)] text-base">Number of applications</p>
                    <div class="w-max h-auto flex flex-col justify-start items-start mt-3">
                        <?php
                        $checkboxes = array(
                            array(
                                'id' => 'less-than-10',
                                'title' => 'Less than 10'
                            ),
                            array(
                                'id' => 'less-than-15',
                                'title' => 'Less than 15'
                            ),
                            array(
                                'id' => '15-to-20',
                                'title' => '15 to 20'
                            ),
                            array(
                                'id' => 'more-than-20',
                                'title' => 'More than 20'
                            )
                        );
                        foreach ($checkboxes as $checkbox) {
                            // extract($checkbox);
                            $data = $checkbox;
                            require __DIR__ . '/components/checkbox.php';
                        }
                        ?>
                    </div>
                </div>
                <!-- filter      -->
                <!-- filter      -->
                <div class="w-full h-auto flex flex-col justify-start items-start px-5 my-5">
                    <p class="font-normal text-[var(--main-font-color-90)] text-base">Project length</p>
                    <div class="w-max h-auto flex flex-col justify-start items-start mt-3">
                        <?php
                        $checkboxes = array(
                            array(
                                'id' => 'less-than-1-month',
                                'title' => 'Less than 1 month'
                            ),
                            array(
                                'id' => '1-to-3-months',
                                'title' => '1 to 3 months'
                            ),
                            array(
                                'id' => '3-to-6-months',
                                'title' => '3 to 6 months'
                            ),
                            array(
                                'id' => 'more-than-6-months',
                                'title' => 'More than 6 months'
                            )
                        );
                        foreach ($checkboxes as $checkbox) {
                            // extract($checkbox);
                            $data = $checkbox;
                            require __DIR__ . '/components/checkbox.php';
                        }
                        ?>
                    </div>
                </div>
                <!-- filter      -->
            </div>
        </section>
        <section class="w-full md:w-[65%] h-auto flex flex-col justify-center items-start">
            <!-- search  -->
            <div class="w-full h-auto flex justify-center md:justify-start items-center">
                <label for="search" class="flex-1 md:flex-none md:max-w-[630px] md:w-[90%] h-[40px] flex justify-center items-center">
                    <input data-enter-trigger-input="search-jobs" placeholder="Search jobs" type="search" class="flex-1 h-full box-border border-none text-sm bg-[var(--bg-white-low)] ring-1 
                    ring-[var(--main-font-color-20)] focus:ring-[var(--active-color-brown)]">
                    <button data-enter-trigger-input-enter="search-jobs" class="w-max h-full flex justify-center items-center font-medium text-[var(--main-bg-yellow)] text-sm 
                    bg-[var(--active-color-brown-low)] hover:bg-[var(--active-color-brown)] ease-linear duration-75 px-4 ring-1 
                    ring-[var(--main-font-color-20)] active:scale-95">Search</button>
                </label>
                <button data-filter-trigger="filter-jobs" class="w-[40px] aspect-square ml-2 md:hidden flex justify-center items-center box-border p-1 
                bg-[var(--active-color-brown-low)] text-[var(--bg-white-low)] hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear ring-1 ring-[var(--main-font-color-20)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                        <path fill="currentColor" d="M3 17v2h6v-2zM3 5v2h10V5zm10 16v-2h8v-2h-8v-2h-2v6zM7 9v2H3v2h4v2h2V9zm14 4v-2H11v2zm-6-4h2V7h4V5h-4V3h-2z" />
                    </svg>
                </button>
            </div>
            <!-- search  -->
            <!-- job nav  -->
            <div class="w-full h-auto flex justify-center md:justify-start items-center mt-5">
                <a href="#" class="flex w-max h-max justify-center items-center font-normal text-base text-[var(--main-font-color-90)] 
                hover:text-[var(--active-color-brown)] pr-4 py-2 duration-75 ease-linear relative before:content-[''] before:w-1/2 before:h-[1px] before:bg-[var(--main-font-color-20)] 
                before:absolute before:z-0 before:right-0 before:top-full before:duration-75 before:ease-linear hover:before:bg-[var(--active-color-brown)]">Job feed</a>
                <a href="#" class="flex w-max h-max justify-center items-center font-normal text-base text-[var(--main-font-color-90)] 
                hover:text-[var(--active-color-brown)] pl-4 py-2 duration-75 ease-linear relative before:content-[''] before:w-1/2 before:h-[1px] before:bg-[var(--main-font-color-20)] 
                before:absolute before:z-0 before:left-0 before:top-full before:duration-75 before:ease-linear hover:before:bg-[var(--active-color-brown)]">Saved jobs</a>
            </div>
            <!-- job nav  -->
            <!-- jobs  -->
            <div class="w-full h-auto flex flex-col justify-start items-center mt-16">
                <!-- job  -->
                <div class="w-full h-auto border-t border-b border-[var(--main-font-color-20)] py-4 px-3">
                    <div class="w-full h-auto flex justify-between items-start">
                        <a href="/job" class="flex-1 h-auto">
                            <p class="font-normal text-sm text-[var(--main-font-color-30)]">Posted on today</p>
                            <h3 class="font-normal text-base text-[var(--main-font-color-90)] mt-1">Corem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <p class="font-normal text-sm text-[var(--main-font-color-30)]">$10.00/hr</p>
                        </a>
                        <button class=" w-max h-max flex justify-center items-center active:scale-95">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-6 h-auto 
                            text-[var(--main-font-color-30)] hover:text-[var(--active-color-brown)] duration-75 ease-linear">
                                <path fill="currentColor" d="M5 21V3h14v18l-7-3z" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-full h-auto mt-4">
                        <a href="/job" class="line-clamp-4 font-normal text-[var(--main-font-color-80)] text-sm">
                            Torem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim,
                            metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit,
                            sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent
                            auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna.
                            Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
                        </a>
                    </div>
                    <div class="w-full h-auto flex justify-start items-center mt-4">
                        <a href="/job" class="font-medium text-sm text-[var(--main-font-color-90)]">10+ applications</a>
                    </div>
                    <div class="w-full h-auto flex justify-start items-start flex-wrap mt-4">
                        <a href="#" class="flex justify-center items-center w-max h-auto px-2 py-1 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] 
                        text-sm font-normal text-[var(--main-font-color-80)] mx-1 my-2">HTML</a>
                        <a href="#" class="flex justify-center items-center w-max h-auto px-2 py-1 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] 
                        text-sm font-normal text-[var(--main-font-color-80)] mx-1 my-2">CSS</a>
                        <a href="#" class="flex justify-center items-center w-max h-auto px-2 py-1 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] 
                        text-sm font-normal text-[var(--main-font-color-80)] mx-1 my-2">JavaScript</a>
                        <a href="#" class="flex justify-center items-center w-max h-auto px-2 py-1 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] 
                        text-sm font-normal text-[var(--main-font-color-80)] mx-1 my-2">PHP</a>
                        <a href="#" class="flex justify-center items-center w-max h-auto px-2 py-1 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] 
                        text-sm font-normal text-[var(--main-font-color-80)] mx-1 my-2">MySQL</a>
                    </div>
                    <div class="w-full h-auto flex justify-start items-start flex-wrap mt-4">
                        <div class="w-max h-auto flex flex-col justify-start items-start mx-3 my-2">
                            <p class="font-medium text-sm text-[var(--main-font-color-90)]">Author</p>
                            <a href="#" class="text-sm font-normal text-[var(--main-font-color-80)] flex justify-center items-center">Luke Fernando
                                <span class="ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto 
                                    text-[var(--verified-color-green)]">
                                        <path fill="currentColor" d="m9 20.42l-6.21-6.21l2.83-2.83L9 14.77l9.88-9.89l2.83 2.83z" />
                                    </svg>
                                </span>
                            </a>
                            <div class="flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)]">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-max h-auto flex flex-col justify-start items-start mx-3 my-2">
                            <p class="font-medium text-sm text-[var(--main-font-color-90)]">From</p>
                            <p class="text-sm font-normal text-[var(--main-font-color-80)]">Sri Lanka</p>
                        </div>
                    </div>
                </div>
                <!-- job  -->
                <!-- job  -->
                <div class="w-full h-auto border-t border-b border-[var(--main-font-color-20)] py-4 px-3">
                    <div class="w-full h-auto flex justify-between items-start">
                        <a href="/job" class="flex-1 h-auto">
                            <p class="font-normal text-sm text-[var(--main-font-color-30)]">Posted on today</p>
                            <h3 class="font-normal text-base text-[var(--main-font-color-90)] mt-1">Corem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <p class="font-normal text-sm text-[var(--main-font-color-30)]">$10.00/hr</p>
                        </a>
                        <button class=" w-max h-max flex justify-center items-center active:scale-95">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-6 h-auto 
                            text-[var(--main-font-color-30)] hover:text-[var(--active-color-brown)] duration-75 ease-linear">
                                <path fill="currentColor" d="M5 21V3h14v18l-7-3z" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-full h-auto mt-4">
                        <a href="/job" class="line-clamp-4 font-normal text-[var(--main-font-color-80)] text-sm">
                            Torem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim,
                            metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit,
                            sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent
                            auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna.
                            Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
                        </a>
                    </div>
                    <div class="w-full h-auto flex justify-start items-center mt-4">
                        <a href="/job" class="font-medium text-sm text-[var(--main-font-color-90)]">10+ applications</a>
                    </div>
                    <div class="w-full h-auto flex justify-start items-start flex-wrap mt-4">
                        <a href="#" class="flex justify-center items-center w-max h-auto px-2 py-1 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] 
                        text-sm font-normal text-[var(--main-font-color-80)] mx-1 my-2">HTML</a>
                        <a href="#" class="flex justify-center items-center w-max h-auto px-2 py-1 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] 
                        text-sm font-normal text-[var(--main-font-color-80)] mx-1 my-2">CSS</a>
                        <a href="#" class="flex justify-center items-center w-max h-auto px-2 py-1 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] 
                        text-sm font-normal text-[var(--main-font-color-80)] mx-1 my-2">JavaScript</a>
                        <a href="#" class="flex justify-center items-center w-max h-auto px-2 py-1 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] 
                        text-sm font-normal text-[var(--main-font-color-80)] mx-1 my-2">PHP</a>
                        <a href="#" class="flex justify-center items-center w-max h-auto px-2 py-1 bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] 
                        text-sm font-normal text-[var(--main-font-color-80)] mx-1 my-2">MySQL</a>
                    </div>
                    <div class="w-full h-auto flex justify-start items-start flex-wrap mt-4">
                        <div class="w-max h-auto flex flex-col justify-start items-start mx-3 my-2">
                            <p class="font-medium text-sm text-[var(--main-font-color-90)]">Author</p>
                            <a href="#" class="text-sm font-normal text-[var(--main-font-color-80)] flex justify-center items-center">Luke Fernando
                                <span class="ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto 
                                    text-[var(--verified-color-green)]">
                                        <path fill="currentColor" d="m9 20.42l-6.21-6.21l2.83-2.83L9 14.77l9.88-9.89l2.83 2.83z" />
                                    </svg>
                                </span>
                            </a>
                            <div class="flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)]">
                                    <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-max h-auto flex flex-col justify-start items-start mx-3 my-2">
                            <p class="font-medium text-sm text-[var(--main-font-color-90)]">From</p>
                            <p class="text-sm font-normal text-[var(--main-font-color-80)]">Sri Lanka</p>
                        </div>
                    </div>
                </div>
                <!-- job  -->
            </div>
            <!-- jobs  -->
            <div class="w-full h-auto flex justify-center md:justify-start items-center mt-10">
                <button class="w-max h-auto flex justify-center items-center text-sm font-normal text-[var(--main-font-color-80)] border 
                border-[var(--active-color-brown-low)] px-5 py-2 hover:border-[var(--active-color-brown)] hover:text-[var(--active-color-brown)]">
                    Load more
                </button>
            </div>
        </section>
    </main>
    <?php
    require __DIR__ . "/../shared/footer.php";
    ?>
</body>

</html>