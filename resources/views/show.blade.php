<x-app-layout>
    <div>
        <a href="#" class="flex items-center font-semibold hover:underline ">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="ml-2">
                All ideas
           </span>

        </a>
    </div>
    <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer mt-4 ">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A random title can go here </a>


                </h4>
                <div class="text-gray-600 mt-3 ">
                    Lorem ipsum dolor sit ame t, consectetur adipisicing elit. Aspernatur consequuntur deleniti
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aliquid architecto asperiores at aut doloremque dolorum eius eos esse, ex excepturi laudantium necessitatibus nemo nobis numquam ratione repudiandae temporibus tenetur.

                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 text-semibold space-x-2">
                        <div class="font-bold text-gray-900">
                            John Doe
                        </div>
                        <div>
                            10 hours ago
                        </div>
                        <div>&middot;</div>
                        <div>Category 1</div>
                        <div>&middot;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2 ">
                        <div
                            class="bg-green text-xxs font-bold uppercase leading-none rounded-full text-white text-center w-28 h-7 py-2 px-4 ">
                            Implemented
                        </div>
                        <button
                            class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3 relative">
                            <svg class="h-3 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                            </svg>
                            <ul class="absolute  hidden w-44 text-left font-semibold bg-white shadow-dialog rounded-xl ml-8">
                                <li>
                                    <a href=""
                                       class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Mark a
                                        span</a></li>
                                <li><a href=""
                                       class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Delete
                                        Post</a>
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="button-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="button"
                    class="flex items-center text-white justify-center w-36 h-11 w-32 text-xs font-semibold rounded-xl border border-blue bg-blue hover:blue-hover transition duration-150 ease-in px-6 py-3 ">

                <span class="ml-1 ">Reply </span>
            </button>
            <button
                class="flex items-center justify-center h-11 text-xs font-semibold rounded-xl border border-gray-200 bg-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 ">
                <span>Set status </span>
                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2 ">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none ">Votes</div>
            </div>
            <button
                class=" w-36 h-11 text-xs font-semibold rounded-xl uppercase border border-gray-200 bg-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 ">
                <span>Vote</span>

            </button>
        </div>
    </div>
    <div class="comments-container space-y-6 ml-22 pt-4 my-8 relative mt-1">
        <div class="comment-container relative bg-white rounded-xl flex hover:shadow-card cursor-pointer mt-4 ">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=6" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>

                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status changed to "Under Construction"</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit ame t, consectetur adipisicing elit. Aspernatur consequuntur deleniti

                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 text-semibold space-x-2">
                            <div class="font-bold text-gray-900">
                                John Doe
                            </div>
                            <div>&bull;</div>
                            <div>
                                10 hours ago
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 ">
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3 relative">
                                <svg class="h-3 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute  hidden w-44 text-left font-semibold bg-white shadow-dialog rounded-xl ml-8">
                                    <li>
                                        <a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Mark
                                            a span</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Delete
                                            Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="is-admin comment-container relative bg-white rounded-xl flex hover:shadow-card cursor-pointer mt-4 ">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue font-bold mt-1 text-xxs">Admin</div>
                </div>
                <div class="w-full mx-4">
                    {{--                    <h4 class="text-xl font-semibold">--}}
                    {{--                        <a href="#" class="hover:underline">A random title can go here </a>--}}
                    {{--                    </h4>--}}
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit ame t, consectetur adipisicing elit. Aspernatur consequuntur deleniti

                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 text-semibold space-x-2">
                            <div class=" text-blue font-bold text-gray-900">
                                Andrea
                            </div>
                            <div>&bull;</div>
                            <div>
                                10 hours ago
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 ">
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3 relative">
                                <svg class="h-3 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute  hidden w-44 text-left font-semibold bg-white shadow-dialog rounded-xl ml-8">
                                    <li>
                                        <a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Mark
                                            a span</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Delete
                                            Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-container relative bg-white rounded-xl flex hover:shadow-card cursor-pointer mt-4 ">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    {{--                    <h4 class="text-xl font-semibold">--}}
                    {{--                        <a href="#" class="hover:underline">A random title can go here </a>--}}
                    {{--                    </h4>--}}
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit ame t, consectetur adipisicing elit. Aspernatur consequuntur deleniti

                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 text-semibold space-x-2">
                            <div class=" text-blue font-bold text-gray-900">
                                Andrea
                            </div>
                            <div>&bull;</div>
                            <div>
                                10 hours ago
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 ">
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 border transition duration-150 ease-in py-2 px-3 relative">
                                <svg class="h-3 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute  hidden w-44 text-left font-semibold bg-white shadow-dialog rounded-xl ml-8">
                                    <li>
                                        <a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Mark
                                            a span</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Delete
                                            Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>