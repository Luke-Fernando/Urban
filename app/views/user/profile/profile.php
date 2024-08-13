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
        <section id="details" class="w-full h-auto">
            <section class="w-full h-auto flex flex-col sm:flex-row justify-start items-center sm:justify-between sm:items-start">
                <div class="w-52 h-auto flex flex-col justify-start items-center overflow-hidden">
                    <div class="w-full aspect-square flex justify-center items-center relative">
                        <img id="profile-picture" src="/assets/images/users/<?php echo $profile_picture; ?>" alt="profile picture" class="min-w-full min-h-full object-cover">
                        <label title="Change profile picture" for="profile-picture-edit" class="w-6 h-auto p-1 flex justify-center items-center absolute bottom-0 right-0 text-[var(--bg-white-low)] 
                    hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                            <input type="file" id="profile-picture-edit" class="hidden" accept="image/*">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                                <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                            </svg>
                        </label>
                    </div>
                    <div class="w-full flex justify-center items-center flex-wrap">
                        <?php
                        if (isset($badges)) {
                            foreach ($badges as $badge) {
                        ?>
                                <span title="<?php echo $badge['badge']; ?>" class="w-5 aspect-square flex justify-center items-center mx-1 my-2 overflow-hidden">
                                    <img src="/assets/images/badges/<?php echo $badge['badge_file']; ?>" alt="<?php echo $badge['badge']; ?>" class="min-w-full min-h-full object-cover">
                                </span>
                        <?php
                            }
                        }
                        ?>
                        <!-- <span title="Rising star" class="w-5 aspect-square flex justify-center items-center mx-1 my-2 overflow-hidden">
                            <img src="/assets/images/badges/badge_1.svg" alt="rising star" class="min-w-full min-h-full object-cover">
                        </span>
                        <span title="Repeat buyer" class="w-5 aspect-square flex justify-center items-center mx-1 my-2 overflow-hidden">
                            <img src="/assets/images/badges/badge_2.svg" alt="repeat buyer" class="min-w-full min-h-full object-cover">
                        </span> -->
                    </div>
                </div>
                <div class="flex-1 pl-4 flex flex-col justify-start items-start my-4 sm:my-0">
                    <span class="relative pr-2">
                        <span data-text="name" class="text-[var(--main-font-color-90)] text-2xl font-medium"><?php echo $first_name; ?> <?php echo $last_name; ?></span>
                        <button data-edit="name" class="w-5 h-auto p-1 flex justify-center items-center absolute top-0 left-full text-[var(--bg-white-low)] 
                    hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                                <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                            </svg>
                        </button>
                    </span>
                    <p class="text-[var(--main-font-color-80)] text-xs font-normal">@<?php echo $username; ?></p>
                    <span class="mt-4 mb-3 relative pr-2">
                        <span data-text="languages" class="text-[var(--main-font-color-90)] text-sm font-normal">
                            <?php
                            if (isset($user_languages)) {
                                if (count($user_languages) == 0) {
                                    echo "Add your languages";
                                } else {
                                    foreach ($user_languages as $language) {
                                        echo $language["language"] . " ";
                                    }
                                }
                            }
                            ?>
                        </span>
                        <button data-edit="languages" class="w-4 h-auto p-1 flex justify-center items-center absolute top-0 left-full text-[var(--bg-white-low)] 
                    hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                                <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                            </svg>
                        </button>
                    </span>
                    <span class="relative pr-2 mt-2">
                        <span data-text="title" class="text-[var(--main-font-color-90)] text-base font-medium"><?php
                                                                                                                if (empty($title)) {
                                                                                                                    echo "Add your title";
                                                                                                                } else {
                                                                                                                    echo $title;
                                                                                                                }
                                                                                                                ?></span>
                        <button data-edit="title" class="w-4 h-auto p-1 flex justify-center items-center absolute top-0 left-full text-[var(--bg-white-low)] 
                    hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear bg-[var(--active-color-brown-low)]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto">
                                <path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75z" />
                            </svg>
                        </button>
                    </span>
                    <span class="relative pr-2 mt-2">
                        <span data-text-toggle-expandable="about" data-text="about" class="text-[var(--main-font-color-80)] text-sm font-normal line-clamp-3 sm:line-clamp-4">
                            <?php
                            if (empty($description)) {
                                echo "Add your description";
                            } else {
                                echo $description;
                            }
                            ?>
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
                        <?php
                        if (isset($user_skills)) {
                            foreach ($user_skills as $skill) {
                                echo $skill["skill"] . ' ';
                            }
                        }
                        ?>
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
                    <?php
                    if (isset($portfolios)) {
                        foreach ($portfolios as $portfolio) {
                    ?>
                            <!-- card 1 -->
                            <div class="w-[60%] sm:w-[200px] h-auto flex flex-col justify-start items-center sm:mx-4 my-4">
                                <div class="w-full aspect-[5/7] bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] flex flex-col justify-start 
                            items-center">
                                    <div class="w-full h-[10%] flex justify-end items-center">
                                        <a href="<?php echo $portfolio["link"]; ?>" class="h-full w-max flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--active-color-brown)] 
                                    duration-75 ease-linear pr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15" class="h-full w-auto">
                                                <path fill="none" stroke="currentColor" d="m13.5 7.5l-4-4m4 4l-4 4m4-4H1" />
                                            </svg>
                                        </a>
                                    </div>
                                    <a href="<?php echo $portfolio["link"]; ?>" class="w-full h-[80%] border-t border-b border-[var(--main-font-color-20)] overflow-hidden flex justify-center items-center">
                                        <img src="/assets/images/portfolios/<?php echo $portfolio["file"]; ?>" alt="portfolio image" class="min-w-full min-h-full object-cover">
                                    </a>
                                </div>
                                <div class="w-full h-auto flex justify-center items-center">
                                    <a href="<?php echo $portfolio["link"]; ?>" class="text-[var(--main-font-color-80)] text-sm font-normal text-center hover:text-[var(--active-color-brown)] 
                                duration-75 ease-linear"><?php echo $portfolio["title"]; ?></a>
                                </div>
                            </div>
                            <!-- card 1 -->
                    <?php
                        }
                    }
                    ?>
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
                    <?php
                    if (isset($certifications)) {
                        foreach ($certifications as $certification) {
                    ?>
                            <!-- certificate -->
                            <div class="w-full h-auto flex flex-col justify-start items-start box-border px-5 py-3 my-2 border-t border-b border-[var(--main-font-color-20)]">
                                <h3 class="text-lg font-medium text-[var(--main-font-color-90)] mb-3"><?php echo $certification['title']; ?></h3>
                                <p class="text-sm font-normal text-[var(--main-font-color-80)]">Provided by:
                                    <span class="text-sm font-normal text-[var(--main-font-color-90)]"><?php echo $certification['provider']; ?>
                                    </span>
                                </p>
                                <p class="text-sm font-normal text-[var(--main-font-color-80)]">Issued on:
                                    <span class="text-sm font-normal text-[var(--main-font-color-90)]">
                                        <?php echo date('Y.m.d', strtotime($certification['date'])); ?>
                                    </span>
                                </p>
                                <p class="mt-1 text-base text-[var(--main-font-color-80)]">
                                    <?php echo $certification['description']; ?>
                                </p>
                                <a href="<?php echo $certification['link']; ?>" class="mt-3 text-sm font-normal text-[var(--active-color-brown-low)] underline hover:text-[var(--active-color-brown)] duration-75 ease-linear">
                                    Learn more
                                </a>
                            </div>
                            <!-- certificate -->
                    <?php
                        }
                    }
                    ?>
                </div>
            </section>
        </section>
        <section id="edit" class="w-full h-auto hidden justify-start items-start flex-wrap px-5 lg:px-28 box-border">
            <div class="w-full h-auto flex justify-start items-center mb-5">
                <button id="back-details" class="h-auto w-auto flex justify-center items-center text-[var(--main-font-color-80)] hover:text-[var(--active-color-brown)] 
                    duration-75 ease-linear p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" class="w-[25px] h-auto">
                        <path fill="currentColor" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64"></path>
                        <path fill="currentColor" d="m237.248 512l265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312z"></path>
                    </svg>
                </button>
            </div>
            <!-- name -->
            <section data-editor="name" class="w-full h-auto hidden justify-start items-start flex-wrap">
                <div class="w-full md:w-1/2 h-auto flex justify-start items-start px-4">
                    <label for="first-name" class="w-full h-auto my-4">
                        <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">First name</p>
                        <input value="<?php echo $first_name; ?>" type="text" id="first-name" class="w-full h-[40px] bg-[var(--bg-white-low)] outline-none border-none ring-1 ring-[var(--main-font-color-20)]
                px-3 focus:ring-[var(--active-color-brown)] text-sm text-[var(--main-font-color-90)]">
                    </label>
                </div>
                <div class="w-full md:w-1/2 h-auto flex justify-start items-start px-4">
                    <label for="last-name" class="w-full h-auto my-4">
                        <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Last name</p>
                        <input value="<?php echo $last_name; ?>" type="text" id="last-name" class="w-full h-[40px] bg-[var(--bg-white-low)] outline-none border-none ring-1 ring-[var(--main-font-color-20)]
                px-3 focus:ring-[var(--active-color-brown)] text-sm text-[var(--main-font-color-90)]">
                    </label>
                </div>
            </section>
            <!-- name -->
            <!-- languages -->
            <section data-editor="languages" class="w-full h-auto hidden justify-start items-start flex-wrap">
                <div class="w-full h-auto px-4 box-border my-4">
                    <!--  -->
                    <span class="w-full h-auto relative flex flex-col justify-start items-start">
                        <label for="language" class="w-full h-auto box-border relative">
                            <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Laguages</p>
                            <input placeholder="Select preferresd skills" data-dropdown-toggler="language" type="text" id="language" class="w-full h-[40px] bg-[var(--bg-white-low)] border-none outline-none px-3 ring-1 ring-[var(--main-font-color-20)] focus:ring-[var(--active-color-brown)] box-border text-sm font-normal text-[var(--main-font-color-80)] border-[var(--main-font-color-20)]">
                            <div data-dropdown-menu="language" data-show="false" class="absolute z-50 top-[110%] left-0 w-full h-auto overflow-auto flex flex-col justify-start items-start bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] px-4 py-2 box-border shadow-md invisible max-h-0">
                                <?php
                                if (isset($languages)) {
                                    foreach ($languages as $language) {
                                        $selected = false;
                                        $unique_id = uniqid();
                                        $generated_id = $language["id"] . "-" . $unique_id;
                                        if (in_array($language, $user_languages)) {
                                            $selected = true;
                                        }
                                        if ($selected) {
                                ?>
                                            <label data-trigger-checkbox="<?php echo $generated_id; ?>" for="<?php echo $generated_id; ?>" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                                <input checked id="<?php echo $generated_id; ?>" data-input-checkbox="<?php echo $generated_id; ?>" type="checkbox" value="<?php echo $language["id"]; ?>" class="hidden">
                                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                                    <div data-custom-checkbox="<?php echo $generated_id; ?>" class="w-full h-full justify-center items-center flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                                        </svg>
                                                    </div>
                                                </span>
                                                <span data-checkbox-content="<?php echo $generated_id; ?>" class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm
                                            text-[var(--main-font-color-80)] select-none ml-3">
                                                    <?php echo $language["language"]; ?>
                                                </span>
                                            </label>
                                        <?php
                                        } else {
                                        ?>
                                            <label data-trigger-checkbox="<?php echo $generated_id; ?>" for="<?php echo $generated_id; ?>" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                                <input id="<?php echo $generated_id; ?>" data-input-checkbox="<?php echo $generated_id; ?>" type="checkbox" value="<?php echo $language["id"]; ?>" class="hidden">
                                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                                    <div data-custom-checkbox="<?php echo $generated_id; ?>" class="w-full h-full justify-center items-center hidden">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                                        </svg>
                                                    </div>
                                                </span>
                                                <span data-checkbox-content="<?php echo $generated_id; ?>" class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm
                                            text-[var(--main-font-color-80)] select-none ml-3">
                                                    <?php echo $language["language"]; ?>
                                                </span>
                                            </label>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </label>
                        <p data-select-selected="language" class="text-sm font-normal text-[var(--active-color-brown)] text-start mt-2">
                            <?php
                            if (isset($user_languages)) {
                                foreach ($user_languages as $language) {
                                    if (count($user_languages) == 0) {
                                        echo "Select your preferred languages";
                                    } else {
                                        echo $language["language"] . " ";
                                    }
                                }
                            }
                            ?>
                        </p>
                    </span>
                    <!--  -->
                </div>
            </section>
            <!-- languages -->
            <!-- title -->
            <section data-editor="title" class="w-full h-auto hidden justify-start items-start flex-wrap">
                <div class="w-full h-auto flex justify-start items-start px-4">
                    <label for="title" class="w-full h-auto my-4">
                        <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Title</p>
                        <input value="<?php echo $title; ?>" type="text" id="title" placeholder="Add your title" class="w-full h-[40px] bg-[var(--bg-white-low)] outline-none border-none ring-1 ring-[var(--main-font-color-20)]
                px-3 focus:ring-[var(--active-color-brown)] text-sm text-[var(--main-font-color-90)]">
                    </label>
                </div>
            </section>
            <!-- title -->
            <!-- about -->
            <section data-editor="about" class="w-full h-auto hidden justify-start items-start flex-wrap">
                <div class="w-full h-auto flex justify-start items-start px-4">
                    <label for="about" class="w-full h-auto my-4">
                        <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">About</p>
                        <textarea placeholder="Tell us about yourself" rows="10" type="text" id="about" class="w-full h-auto bg-[var(--bg-white-low)] outline-none border-none ring-1 ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)] text-sm text-[var(--main-font-color-90)]"><?php echo $description; ?></textarea>
                    </label>
                </div>
            </section>
            <!-- about -->
            <!-- skills -->
            <section data-editor="skills" class="w-full h-auto hidden justify-start items-start flex-wrap">
                <div class="w-full h-auto px-4 box-border my-4">
                    <!--  -->
                    <span class="w-full h-auto relative flex flex-col justify-start items-start">
                        <label for="skills" class="w-full h-auto box-border relative">
                            <p class="text-sm font-normal text-[var(--main-font-color-80)] mb-2">Skills</p>
                            <input placeholder="Select preferresd skills" data-dropdown-toggler="skills" type="text" id="skills" class="w-full h-[40px] bg-[var(--bg-white-low)] border-none outline-none px-3 ring-1 ring-[var(--main-font-color-20)] focus:ring-[var(--active-color-brown)] box-border text-sm font-normal text-[var(--main-font-color-80)] border-[var(--main-font-color-20)]">
                            <div data-dropdown-menu="skills" data-show="false" class="absolute z-50 top-[110%] left-0 w-full h-auto overflow-auto flex flex-col justify-start items-start bg-[var(--bg-white-low)] border border-[var(--main-font-color-20)] px-4 py-2 box-border shadow-md invisible max-h-0">
                                <?php
                                if (isset($skills)) {
                                    foreach ($skills as $skill) {
                                        $selected = false;
                                        $unique_id = uniqid();
                                        $generated_id = $skill["id"] . "-" . $unique_id;
                                        if (in_array($skill, $user_skills)) {
                                            $selected = true;
                                        }
                                        if ($selected) {
                                ?>
                                            <!--  -->
                                            <label data-trigger-checkbox="<?php echo $generated_id; ?>" for="<?php echo $generated_id; ?>" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                                <input checked id="<?php echo $generated_id; ?>" data-input-checkbox="<?php echo $generated_id; ?>" type="checkbox" class="hidden" value="<?php echo $skill["id"]; ?>">
                                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                                    <div data-custom-checkbox="<?php echo $generated_id; ?>" class="w-full h-full justify-center items-center flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                                        </svg>
                                                    </div>
                                                </span>
                                                <span data-checkbox-content="<?php echo $generated_id; ?>" class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm 
                                            text-[var(--main-font-color-80)] select-none ml-3"><?php echo $skill["skill"]; ?></span>
                                            </label>
                                            <!--  -->
                                        <?php
                                        } else {
                                        ?>
                                            <!--  -->
                                            <label data-trigger-checkbox="<?php echo $generated_id; ?>" for="<?php echo $generated_id; ?>" class="w-max max-w-full h-auto flex justify-start items-start my-1">
                                                <input id="<?php echo $generated_id; ?>" data-input-checkbox="<?php echo $generated_id; ?>" type="checkbox" class="hidden" value="<?php echo $skill["id"]; ?>">
                                                <span class="w-4 aspect-square bg-[--bg-white-low] border border-[var(--main-font-color-20)] flex justify-center items-center">
                                                    <div data-custom-checkbox="<?php echo $generated_id; ?>" class="w-full h-full justify-center items-center hidden">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-full h-auto text-[var(--active-color-brown)]">
                                                            <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19L21 7l-1.41-1.41z"></path>
                                                        </svg>
                                                    </div>
                                                </span>
                                                <span data-checkbox-content="<?php echo $generated_id; ?>" class="flex-1 h-auto flex flex-wrap justify-start items-start font-normal text-sm 
                                            text-[var(--main-font-color-80)] select-none ml-3"><?php echo $skill["skill"]; ?></span>
                                            </label>
                                            <!--  -->
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </label>
                        <p data-select-selected="skills" class="text-sm font-normal text-[var(--active-color-brown)] text-start mt-2">
                            <?php
                            if (isset($user_skills)) {
                                if (count($user_skills) > 0) {
                                    foreach ($user_skills as $skill) {
                                        echo $skill["skill"] . " ";
                                    }
                                } else {
                                    echo "Select your skills";
                                }
                            }
                            ?>
                        </p>
                    </span>
                    <!--  -->
                </div>
            </section>
            <!-- skills -->
            <!-- portfolio -->
            <section data-editor="portfolio" class="w-full h-auto hidden justify-start items-start flex-wrap">
                <?php
                if (isset($portfolios)) {
                    foreach ($portfolios as $portfolio) {
                        $unique_id = uniqid();
                        $general_id = $portfolio["id"] . "-" . $unique_id;
                        $title_id = $portfolio["id"] . "-" . $unique_id . "-title";
                        $link_id = $portfolio["id"] . "-" . $unique_id . "-link";
                        $image_id = $portfolio["id"] . "-" . $unique_id . "-image";
                ?>
                        <div data-portfolio="<?php echo $general_id; ?>" data-portfolio-update="<?php echo $portfolio["id"]; ?>" class="w-full h-auto flex flex-col justify-center items-center relative
                        before:content-[''] before:absolute before:right-full before:top-1/2 before:-translate-y-1/2 before:w-[1px] before:h-full
                        before:bg-[var(--main-font-color-20)] my-4">
                            <div data-editor-expand-trigger="<?php echo $general_id; ?>" class="w-full h-auto flex justify-start items-center hover:bg-[var(--main-font-color-10)] duration-75
                            ease-linear px-4 py-2 cursor-default">
                                <div class="w-10 aspect-square overflow-hidden flex justify-center items-center border border-[var(--main-font-color-20)]
                                hover:border-[var(--active-color-brown)] duration-75 ease-linear pointer-events-none">
                                    <img src="/assets/images/portfolios/<?php echo $portfolio["file"]; ?>" alt="portfolio picture" class="min-w-full min-h-full object-cover">
                                </div>
                                <div class="w-full h-auto flex flex-col justify-start items-start pl-5 pointer-events-none">
                                    <p data-editor-title-display="<?php echo $title_id; ?>" class="text-base font-medium text-[var(--main-font-color-80)] line-clamp-1"><?php echo $portfolio["title"]; ?></p>
                                </div>
                                <button data-editor-remove-portfolio="<?php echo $general_id; ?>" class="w-max h-auto flex justify-center items-center text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)]
                                duration-75 ease-linear">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-8 h-auto pointer-events-none">
                                        <path fill="currentColor" d="M9 17h2V8H9zm4 0h2V8h-2zm-8 4V6H4V4h5V3h6v1h5v2h-1v15z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div data-editor-expand-content="<?php echo $general_id; ?>" data-show="true" class="w-full h-auto flex justify-start md:items-center items-start flex-wrap px-4 duration-700 
                            ease-linear max-h-0 overflow-hidden">
                                <label for="<?php echo $image_id; ?>" class="w-52 aspect-[5/7] flex justify-center items-center overflow-hidden md:mr-5 border border-dashed
                                border-[var(--main-font-color-80)] p-3">
                                    <img data-editor-image="<?php echo $image_id; ?>" src="/assets/images/portfolios/<?php echo $portfolio["file"]; ?>" alt="portfolio picture" class="min-w-full min-h-full object-cover">
                                    <input data-editor-image-input="<?php echo $image_id; ?>" type="file" id="<?php echo $image_id; ?>" class="hidden" accept="image/*">
                                </label>
                                <div class="w-full md:flex-1 h-auto flex justify-start items-start flex-wrap">
                                    <div class="w-full h-auto flex justify-start items-start px-4">
                                        <label for="<?php echo $title_id; ?>" class="w-full h-auto my-4">
                                            <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Title</p>
                                            <input data-editor-title="<?php echo $general_id; ?>" value="<?php echo $portfolio["title"]; ?>" type="text" id="<?php echo $title_id; ?>" class="w-full h-[40px] bg-[var(--bg-white-low)]
                                            outline-none border-none ring-1 ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)]
                                            text-sm text-[var(--main-font-color-90)]">
                                        </label>
                                    </div>
                                    <div class="w-full h-auto flex justify-start items-start px-4">
                                        <label for="<?php echo $link_id; ?>" class="w-full h-auto my-4">
                                            <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Link</p>
                                            <input data-editor-link="<?php echo $general_id; ?>" value="<?php echo $portfolio["link"]; ?>" type="text" id="<?php echo $link_id; ?>" class="w-full h-[40px] bg-[var(--bg-white-low)]
                                            outline-none border-none ring-1 ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)]
                                            text-sm text-[var(--main-font-color-90)]">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <div class="w-full h-auto flex order-last flex-col justify-start items-start my-10 px-4 relative">
                    <button id="add-new-portfolio" class="w-max h-auto flex justify-start items-center text-[var(--main-font-color-80)]
                    hover:text-[var(--main-font-color-90)] duration-75 ease-linear">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-8 h-auto mr-2">
                            <path fill="currentColor" d="M21 3H3v18h18zm-4 10h-4v4h-2v-4H7v-2h4V7h2v4h4z"></path>
                        </svg>
                        <span class="text-sm text-inherit">Add new project</span>
                    </button>
                </div>
            </section>
            <!-- portfolio -->
            <!--  certifications -->
            <section data-editor="certifications" class="w-full h-auto hidden justify-start items-start flex-wrap">
                <?php
                if (isset($certifications)) {
                    foreach ($certifications as $certification) {
                        $unique_id = uniqid();
                        $general_id = $certification["id"] . "-" . $unique_id;
                        $title_id = $certification["id"] . "-" . $unique_id . "-title";
                        $year_id = $certification["id"] . "-" . $unique_id . "-year";
                        $month_id = $certification["id"] . "-" . $unique_id . "-month";
                        $day_id = $certification["id"] . "-" . $unique_id . "-day";
                        $provider_id = $certification["id"] . "-" . $unique_id . "-provider";
                        $description_id = $certification["id"] . "-" . $unique_id . "-description";
                        $link_id = $certification["id"] . "-" . $unique_id . "-link";
                        $image_id = $certification["id"] . "-" . $unique_id . "-image";
                        $date = new DateTime($certification["date"]);
                        $year = $date->format("Y");
                        $month = $date->format("m");
                        $day = $date->format("d");
                ?>
                        <div data-certification="<?php echo $general_id; ?>" data-certification-update="<?php echo $certification["id"]; ?>" class="w-full h-auto flex flex-col justify-center items-center relative
                        before:content-[''] before:absolute before:right-full before:top-1/2 before:-translate-y-1/2 before:w-[1px] before:h-full
                        before:bg-[var(--main-font-color-20)] my-4">
                            <div data-editor-expand-trigger="<?php echo $general_id; ?>" class="w-full h-auto flex justify-start items-center hover:bg-[var(--main-font-color-10)] duration-75
                            ease-linear px-4 py-2 cursor-default">
                                <div class="w-full h-auto flex flex-col justify-start items-start pl-5 pointer-events-none">
                                    <p data-editor-title-display="<?php echo $title_id; ?>" class="text-base font-medium text-[var(--main-font-color-80)] line-clamp-1"><?php echo $certification["title"]; ?></p>
                                </div>
                                <button data-editor-remove-certification="<?php echo $general_id; ?>" class="w-max h-auto flex justify-center items-center text-[var(--active-color-brown-low)] hover:text-[var(--active-color-brown)]
                                duration-75 ease-linear">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-8 h-auto pointer-events-none">
                                        <path fill="currentColor" d="M9 17h2V8H9zm4 0h2V8h-2zm-8 4V6H4V4h5V3h6v1h5v2h-1v15z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div data-editor-expand-content="<?php echo $general_id; ?>" data-show="true" class="w-full h-auto flex justify-start md:items-center items-start flex-wrap px-4 duration-700 
                            ease-linear max-h-0 overflow-hidden">
                                <div class="w-full md:flex-1 h-auto flex justify-start items-start flex-wrap">
                                    <div class="w-full h-auto flex justify-start items-start px-4">
                                        <label for="<?php echo $title_id; ?>" class="w-full h-auto my-4">
                                            <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Title</p>
                                            <input data-editor-title="<?php echo $title_id; ?>" value="<?php echo $certification["title"]; ?>" type="text" id="<?php echo $title_id; ?>" class="w-full h-[40px] bg-[var(--bg-white-low)]
                                            outline-none border-none ring-1 ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)]
                                            text-sm text-[var(--main-font-color-90)]">
                                        </label>
                                    </div>
                                    <div class="w-full h-auto flex flex-col justify-start items-start px-4">
                                        <div class="w-full h-auto">
                                            <p>Issued on:</p>
                                        </div>
                                        <div class="w-full h-auto flex justify-start items-start">
                                            <label for="<?php echo $year_id; ?>" class="w-max h-auto my-4 mx-1">
                                                <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Year</p>
                                                <input data-editor-year="" size="3" max="2024" min="1900" placeholder="yyyy" value="<?php echo $year; ?>" type="number" id="<?php echo $year_id; ?>" class="w-auto h-[40px] bg-[var(--bg-white-low)]
                                                outline-none border-none ring-1 ring-[var(--main-font-color-20)] focus:ring-[var(--active-color-brown)]
                                                text-sm text-[var(--main-font-color-90)]">
                                            </label>
                                            <label for="<?php echo $month_id ?>" class="w-max h-auto my-4 mx-1">
                                                <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Month</p>
                                                <input data-editor-month="" size="1" max="12" min="01" placeholder="mm" value="<?php echo $month; ?>" type="number" id="<?php echo $month_id ?>" class="h-[40px] bg-[var(--bg-white-low)]
                                                outline-none border-none ring-1 ring-[var(--main-font-color-20)] focus:ring-[var(--active-color-brown)]
                                                text-sm text-[var(--main-font-color-90)]">
                                            </label>
                                            <label for="<?php echo $day_id ?>" class="w-max h-auto my-4 mx-1">
                                                <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Day</p>
                                                <input data-editor-day="" size="1" max="31" min="01" placeholder="dd" value="<?php echo $day; ?>" type="number" id="<?php echo $day_id ?>" class="h-[40px] bg-[var(--bg-white-low)]
                                                outline-none border-none ring-1 ring-[var(--main-font-color-20)] focus:ring-[var(--active-color-brown)]
                                                text-sm text-[var(--main-font-color-90)]">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="w-full h-auto flex justify-start items-start px-4">
                                        <label for="<?php echo $provider_id; ?>" class="w-full h-auto my-4">
                                            <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Organization/ Institution</p>
                                            <input data-editor-provider value="<?php echo $certification["provider"]; ?>" type="text" id="<?php echo $provider_id; ?>" class="w-full h-[40px] bg-[var(--bg-white-low)]
                                            outline-none border-none ring-1 ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)]
                                            text-sm text-[var(--main-font-color-90)]">
                                        </label>
                                    </div>
                                    <div class="w-full h-auto flex justify-start items-start px-4">
                                        <label for="<?php echo $description_id; ?>" class="w-full h-auto my-4">
                                            <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Description</p>
                                            <textarea data-editor-description="" rows="5" value="<?php echo $certification["description"]; ?>" type="text" id="<?php echo $description_id; ?>" class="w-full h-auto bg-[var(--bg-white-low)] outline-none border-none ring-1 ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)] text-sm text-[var(--main-font-color-90)]"><?php echo $certification["description"]; ?></textarea>
                                        </label>
                                    </div>
                                    <div class="w-full h-auto flex justify-start items-start px-4">
                                        <label for="<?php echo $link_id; ?>" class="w-full h-auto my-4">
                                            <p class="text-sm font-normal text-[var(--main-font-color-90)] mb-3">Link</p>
                                            <input data-editor-link value="<?php echo $certification["link"]; ?>" type="text" id="<?php echo $link_id; ?>" class="w-full h-[40px] bg-[var(--bg-white-low)]
                                            outline-none border-none ring-1 ring-[var(--main-font-color-20)] px-3 focus:ring-[var(--active-color-brown)]
                                            text-sm text-[var(--main-font-color-90)]">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

                <div class="w-full h-auto flex flex-col justify-start items-start my-10 px-4 relative order-last">
                    <button id="add-new-certification" class="w-max h-auto flex justify-start items-center text-[var(--main-font-color-80)]
                    hover:text-[var(--main-font-color-90)] duration-75 ease-linear">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-8 h-auto mr-2">
                            <path fill="currentColor" d="M21 3H3v18h18zm-4 10h-4v4h-2v-4H7v-2h4V7h2v4h4z"></path>
                        </svg>
                        <span class="text-sm text-inherit">Add new certification</span>
                    </button>
                </div>
            </section>
            <!--  certifications -->
            <div class="w-full h-auto flex justify-start items-start px-4 mt-10">
                <button id="update-details" class="w-max h-auto flex justify-center items-center text-sm font-medium text-[var(--bg-white-low)] bg-[var(--active-color-brown-low)]
                    hover:bg-[var(--active-color-brown)] active:scale-95 border border-[var(--main-font-color-20)] px-4 py-2 duration-75 ease-linear">
                    Update
                </button>
            </div>
        </section>
    </main>
    <?php
    require __DIR__ . "/../../shared/footer.php";
    ?>
</body>

</html>