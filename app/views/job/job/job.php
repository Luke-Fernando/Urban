<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require __DIR__ . "/../../shared/head.php";
    ?>
    <title>Urban | View job</title>
</head>

<body class="bg-[var(--main-bg-yellow)]">
    <?php
    require __DIR__ . "/../../shared/nav/nav-user.php";
    ?>
    <main class="container h-auto mx-auto mt-5 lg:mt-10 mb-32 box-border px-4 flex flex-col lg:flex-row justify-between items-start">
        <section class="w-full lg:w-[70%] h-auto flex flex-col justify-start items-start box-border">
            <div class="w-full h-auto border-b border-[var(--main-font-color-20)] pt-4 pb-5 lg:py-8 px-4 flex flex-col justify-start items-start">
                <p class="text-base font-normal text-[var(--main-font-color-80)] mb-3">
                    <?php echo $title; ?>
                </p>
                <span class="text-sm font-normal text-[var(--main-font-color-30)]">Posted on <?php echo $date; ?></span>
            </div>
            <div class="w-full h-auto border-b border-[var(--main-font-color-20)] pb-8 pt-4 px-4 flex flex-col justify-start items-start">
                <div class="w-auto h-auto">
                    <p class="text-sm font-medium text-[var(--main-font-color-80)] my-1"><?php echo $payment_type; ?>:
                        <span class="text-sm font-normal">$<?php echo $budget; ?></span>
                    </p>
                    <p class="text-sm font-medium text-[var(--main-font-color-80)] my-1">Looking for:
                        <span class="text-sm font-normal"><?php echo $number_of_freelancers; ?> freelancer(s)</span>
                    </p>
                    <p class="text-sm font-medium text-[var(--main-font-color-80)] my-1">Experience:
                        <span class="text-sm font-normal"><?php echo $experience; ?></span>
                    </p>
                </div>
                <p class="text-sm font-normal text-[var(--main-font-color-80)] mt-10 leading-6">
                    <?php echo $description; ?>
                </p>
                <div class="w-full h-auto flex justify-start items-start flex-wrap box-border py-3 px-4">
                    <!-- <span class="w-max h-auto text-[var(--main-font-color-80)] flex justify-center items-center relative my-2 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" class="h-auto w-11 px-1 py-1">
                            <path fill="currentColor" d="M854.6 288.7c6 6 9.4 14.1 9.4 22.6V928c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h424.7c8.5 0 16.7 3.4 22.7 9.4zM790.2 326L602 137.8V326z"></path>
                        </svg>
                        <button class="w-max h-auto text-[var(--bg-white-low)] bg-[var(--active-color-brown-low)] hover:bg-[var(--active-color-brown)] duration-75 ease-linear
                        active:scale-95 flex justify-center items-center absolute bottom-0 right-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36" class="w-5 h-auto p-1">
                                <path fill="currentColor" d="M31 31H5a1 1 0 0 0 0 2h26a1 1 0 0 0 0-2" class="clr-i-outline clr-i-outline-path-1"></path>
                                <path fill="currentColor" d="m18 29.48l10.61-10.61a1 1 0 0 0-1.41-1.41L19 25.65V5a1 1 0 0 0-2 0v20.65l-8.19-8.19a1 1 0 1 0-1.41 1.41Z" class="clr-i-outline clr-i-outline-path-2"></path>
                                <path fill="none" d="M0 0h36v36H0z"></path>
                            </svg>
                        </button>
                    </span>
                    <span class="w-max h-auto text-[var(--main-font-color-80)] flex justify-center items-center relative my-2 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" class="h-auto w-11 px-1 py-1">
                            <path fill="currentColor" d="M854.6 288.7c6 6 9.4 14.1 9.4 22.6V928c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h424.7c8.5 0 16.7 3.4 22.7 9.4zM790.2 326L602 137.8V326z"></path>
                        </svg>
                        <button class="w-max h-auto text-[var(--bg-white-low)] bg-[var(--active-color-brown-low)] hover:bg-[var(--active-color-brown)] duration-75 ease-linear
                        active:scale-95 flex justify-center items-center absolute bottom-0 right-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36" class="w-5 h-auto p-1">
                                <path fill="currentColor" d="M31 31H5a1 1 0 0 0 0 2h26a1 1 0 0 0 0-2" class="clr-i-outline clr-i-outline-path-1"></path>
                                <path fill="currentColor" d="m18 29.48l10.61-10.61a1 1 0 0 0-1.41-1.41L19 25.65V5a1 1 0 0 0-2 0v20.65l-8.19-8.19a1 1 0 1 0-1.41 1.41Z" class="clr-i-outline clr-i-outline-path-2"></path>
                                <path fill="none" d="M0 0h36v36H0z"></path>
                            </svg>
                        </button>
                    </span> -->
                    <?php
                    foreach ($files as $file) {
                    ?>
                        <span class="w-max h-auto text-[var(--main-font-color-80)] flex justify-center items-center relative my-2 mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" class="h-auto w-11 px-1 py-1">
                                <path fill="currentColor" d="M854.6 288.7c6 6 9.4 14.1 9.4 22.6V928c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h424.7c8.5 0 16.7 3.4 22.7 9.4zM790.2 326L602 137.8V326z"></path>
                            </svg>
                            <a href="assets/images/job/<?php echo $file; ?>" download="<?php echo uniqid(); ?>" class="w-max h-auto text-[var(--bg-white-low)] bg-[var(--active-color-brown-low)] hover:bg-[var(--active-color-brown)] duration-75 ease-linear
                            active:scale-95 flex justify-center items-center absolute bottom-0 right-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36" class="w-5 h-auto p-1">
                                    <path fill="currentColor" d="M31 31H5a1 1 0 0 0 0 2h26a1 1 0 0 0 0-2" class="clr-i-outline clr-i-outline-path-1"></path>
                                    <path fill="currentColor" d="m18 29.48l10.61-10.61a1 1 0 0 0-1.41-1.41L19 25.65V5a1 1 0 0 0-2 0v20.65l-8.19-8.19a1 1 0 1 0-1.41 1.41Z" class="clr-i-outline clr-i-outline-path-2"></path>
                                    <path fill="none" d="M0 0h36v36H0z"></path>
                                </svg>
                            </a>
                        </span>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="w-full h-auto border-b border-[var(--main-font-color-20)] pb-8 pt-4 px-4 flex flex-col justify-start items-start">
                <p class="text-sm font-medium text-[var(--main-font-color-80)] mt-1 mb-3">Skills</p>
                <div class="w-full h-auto flex justify-start items-start flex-wrap">
                    <!-- <a href="#" class="text-sm font-normal text-[var(--main-font-color-80)] px-2 border border-[var(--main-font-color-20)] 
                    bg-[var(--bg-white-low)] mx-2 my-2">
                        HTML
                    </a>
                    <a href="#" class="text-sm font-normal text-[var(--main-font-color-80)] px-2 border border-[var(--main-font-color-20)] 
                    bg-[var(--bg-white-low)] mx-2 my-2">
                        CSS
                    </a>
                    <a href="#" class="text-sm font-normal text-[var(--main-font-color-80)] px-2 border border-[var(--main-font-color-20)] 
                    bg-[var(--bg-white-low)] mx-2 my-2">
                        JavaScript
                    </a>
                    <a href="#" class="text-sm font-normal text-[var(--main-font-color-80)] px-2 border border-[var(--main-font-color-20)] 
                    bg-[var(--bg-white-low)] mx-2 my-2">
                        PHP
                    </a>
                    <a href="#" class="text-sm font-normal text-[var(--main-font-color-80)] px-2 border border-[var(--main-font-color-20)] 
                    bg-[var(--bg-white-low)] mx-2 my-2">
                        MySQL
                    </a> -->
                    <?php
                    foreach ($skills as $skill) {
                    ?>
                        </a>
                        <a href="/search?skill=<?php echo $skill['id']; ?>" class="text-sm font-normal text-[var(--main-font-color-80)] px-2 border border-[var(--main-font-color-20)] 
                        bg-[var(--bg-white-low)] mx-2 my-2">
                            <?php echo $skill['skill'] ?>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="w-full h-auto lg:border-b border-[var(--main-font-color-20)] pb-8 pt-4 px-4 flex flex-col justify-start items-start">
                <p class="text-sm font-medium text-[var(--main-font-color-80)] mt-1 mb-3">Activities</p>
                <div class="w-auto h-auto">
                    <p class="text-sm font-medium text-[var(--main-font-color-80)] my-1">Applications:
                        <span class="text-sm font-normal"><?php echo $applications; ?></span>
                    </p>
                    <p class="text-sm font-medium text-[var(--main-font-color-80)] my-1">Hired:
                        <span class="text-sm font-normal"><?php echo $hired; ?></span>
                    </p>
                    <p class="text-sm font-medium text-[var(--main-font-color-80)] my-1">Last Viewed:
                        <span class="text-sm font-normal"><?php echo $formatted_datetime_dif; ?></span>
                    </p>
                </div>
            </div>
        </section>
        <section class="w-full lg:w-[30%] h-auto min-h-full flex flex-col justify-start items-start px-5 box-border border lg:border-t-0 lg:border-r-0
        lg:border-b-0 lg:border-l border-[var(--main-font-color-20)]">
            <div class="w-full h-auto flex flex-wrap lg:justify-start justify-center items-center py-5 lg:py-8 fixed bottom-0 lg:static lg:top-auto lg:bottom-auto
            z-20 lg:z-auto left-1/2 -translate-x-1/2 lg:-translate-x-0 lg:left-auto bg-[var(--bg-white-low)] lg:bg-transparent">
                <button class="w-36 h-auto flex justify-center items-center text-sm font-medium text-[var(--bg-white-low)] bg-[var(--active-color-brown-low)]
                    hover:bg-[var(--active-color-brown)] active:scale-95 border border-[var(--main-font-color-20)] py-2 duration-75 ease-linear my-2 mx-2">
                    Apply now
                </button>
                <button class="w-36 h-auto flex justify-center items-center text-sm font-medium text-[var(--bg-white-low)] bg-[var(--main-font-color-80)]
                    hover:bg-[var(--main-font-color-90)] active:scale-95 border border-[var(--main-font-color-20)] py-2 duration-75 ease-linear my-2 mx-2">
                    Save job
                </button>
            </div>
            <div class="w-full h-auto flex flex-col justify-start items-start mb-10 mt-3">
                <a href="#" class="w-8 aspect-square flex justify-center items-center overflow-hidden border border-[var(--main-font-color-20)]
                hover:border-[var(--active-color-brown)] duration-75 ease-linear mb-1">
                    <img src="/assets/images/users/<?php echo $job_owner_profile_picture; ?>" alt="Review auther's profile pictire" class="min-w-full min-h-full object-cover">
                </a>
                <a href="#" class="text-sm font-medium text-[var(--main-font-color-80)]"><?php echo $job_owner_name; ?></a>
                <a href="#" class="text-sm font-normal text-[var(--main-font-color-30)] mb-1">@<?php echo $job_owner_username; ?></a </a>
                <!-- <p class="text-sm font-normal text-[var(--main-font-color-80)]">From:
                    <span class="text-sm font-medium text-[var(--main-font-color-80)]">Sri Lanka</span>
                </p> -->
            </div>
            <?php
            if (count($job_owner_reviews) > 0) {
                foreach ($job_owner_reviews as $review) {
            ?>
                    <div class="w-full h-auto flex flex-col justify-start items-start my-3">
                        <p class="text-sm font-medium text-[var(--main-font-color-80)]"><?php echo $review['title']; ?></p>
                        <span class="text-sm font-normal text-[var(--main-font-color-30)] mb-2">on <?php echo $review['datetime_added']; ?></span>
                        <div class="w-auto h-auto flex justify-start items-star mb-2">
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                                if ($i < $review['star']) {
                            ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                                    </svg>
                                <?php
                                } else {
                                ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)]">
                                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                                    </svg>
                            <?php
                                }
                            }
                            ?>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                                <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)]">
                                <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                            </svg> -->
                        </div>
                        <p class="text-sm font-normal text-[var(--main-font-color-80)] line-clamp-3 mb-2">
                            <?php echo $review['description']; ?>
                        </p>
                        <p class="text-sm font-normal text-[var(--main-font-color-80)]">From:
                            <a href="/?user=<?php echo $review['reviewed_by_username']; ?>" class="text-sm text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)] duration-75 ease-linear"><?php echo $review['reviewed_by_name']; ?></a>
                        </p>
                    </div>
            <?php
                }
            }
            ?>
            <!-- <div class="w-full h-auto flex flex-col justify-start items-start my-3">
                <p class="text-sm font-medium text-[var(--main-font-color-80)]">This is the sample review title</p>
                <span class="text-sm font-normal text-[var(--main-font-color-30)] mb-2">on 08 Jul, 2024, 01.13 PM</span>
                <div class="w-auto h-auto flex justify-start items-star mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                </div>
                <p class="text-sm font-normal text-[var(--main-font-color-80)] line-clamp-3 mb-2">
                    Morem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec
                    fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
                </p>
                <p class="text-sm font-normal text-[var(--main-font-color-80)]">From:
                    <a href="#" class="text-sm text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)] duration-75 ease-linear">Bradley G. Medeiros</a>
                </p>
            </div>
            <div class="w-full h-auto flex flex-col justify-start items-start my-3">
                <p class="text-sm font-medium text-[var(--main-font-color-80)]">This is the sample review title</p>
                <span class="text-sm font-normal text-[var(--main-font-color-30)] mb-2">on 08 Jul, 2024, 01.13 PM</span>
                <div class="w-auto h-auto flex justify-start items-star mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                </div>
                <p class="text-sm font-normal text-[var(--main-font-color-80)] line-clamp-3 mb-2">
                    Morem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec
                    fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
                </p>
                <p class="text-sm font-normal text-[var(--main-font-color-80)]">From:
                    <a href="#" class="text-sm text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)] duration-75 ease-linear">Bradley G. Medeiros</a>
                </p>
            </div>
            <div class="w-full h-auto flex flex-col justify-start items-start my-3">
                <p class="text-sm font-medium text-[var(--main-font-color-80)]">This is the sample review title</p>
                <span class="text-sm font-normal text-[var(--main-font-color-30)] mb-2">on 08 Jul, 2024, 01.13 PM</span>
                <div class="w-auto h-auto flex justify-start items-star mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--active-color-brown)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-4 h-auto text-[var(--main-font-color-30)]">
                        <path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z"></path>
                    </svg>
                </div>
                <p class="text-sm font-normal text-[var(--main-font-color-80)] line-clamp-3 mb-2">
                    Morem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec
                    fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
                </p>
                <p class="text-sm font-normal text-[var(--main-font-color-80)]">From:
                    <a href="#" class="text-sm text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)] duration-75 ease-linear">Bradley G. Medeiros</a>
                </p>
            </div> -->
            <a href="#" class="text-sm font-normal text-[var(--active-color-brown-low)] hover:text[--active-color-brown] hover:underline duration-75 ease-linear mt-4">
                See all reviews
                &#40;<span class="text-sm"><?php echo $total_reviews; ?></span>&#41;
            </a>
        </section>
    </main>
    <?php
    require __DIR__ . "/../../shared/footer.php";
    ?>
</body>

</html>