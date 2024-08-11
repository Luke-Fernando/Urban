<section data-confirm="" class="fixed w-screen h-screen top-0 left-0 bg-[var(--main-font-color-20)] z-[9999] flex justify-center items-center">
    <div data-confirm-model="" class="w-[90%] max-w-[300px] h-auto bg-[var(--bg-white-low)] flex flex-col justify-center items-center p-5 
    box-border border border-[var(--main-font-color-20)] relative">
        <div class="absolute w-full h-auto top-0 left-0 flex justify-end items-center">
            <button data-confirm-close="" class="w-max aspect-square flex justify-center items-center text-[var(--main-font-color-20)] 
            hover:text-[var(--main-font-color-80)] duration-75 ease-linear p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-6 h-auto">
                    <path fill="currentColor" d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12z"></path>
                </svg>
            </button>
        </div>
        <p data-confirm-notice="" class="text-sm font-medium text-[var(--main-font-color-80)] text-center pt-6">
            Are you sure you want to delete this message?
        </p>
        <div class="w-full h-auto flex justify-center items-center flex-wrap mt-3">
            <button data-confirm-false="" class="w-max h-[40px] px-3 py-2 border border-[var(--main-font-color-20)] text-sm font-normal 
            text-[var(--bg-white-low)] mx-2 my-2 bg-[var(--main-font-color-30)] hover:bg-[var(--main-font-color-80)] active:scale-95 duration-75 ease-linear">
                Cancel
            </button>
            <button data-confirm-true="" class="w-max h-[40px] px-3 py-2 border border-[var(--main-font-color-20)] text-sm font-normal 
            text-[var(--bg-white-low)] mx-2 my-2 bg-[var(--active-color-brown-low)] hover:bg-[var(--active-color-brown)] active:scale-95 duration-75 ease-linear">
                Delete
            </button>
        </div>
    </div>
</section>