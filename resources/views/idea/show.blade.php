<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline ">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="ml-2">
                All ideas
            </span>

        </a>
    </div>
    <div class="flex mt-4 bg-white cursor-pointer idea-container rounded-xl hover:shadow-card ">
        <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-2 md:mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">{{ $idea->title }}</a>
                </h4>
                <div class="mt-3 text-gray-600 ">{{ $idea->description }}</div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                    <div class="flex items-center space-x-2 text-xs text-gray-400 text-semibold">
                        <div class="hidden md:block font-bold text-gray-900">
                            {{ $idea->user->name }}
                        </div>
                        <div class="hidden md:block">&middot;</div>
                        <div>
                            {{ $idea->created_at->diffForHumans() }}
                        </div>
                        <div>&middot;</div>
                        <div>Category 1</div>
                        <div>&middot;</div>
                        <div class="text-gray-900">3  Comments</div>
                    </div>
                    <div
                        x-data="{ isOpen: false }"
                        class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div
                            class="px-4 py-2 font-bold leading-none text-center text-white uppercase rounded-full bg-green text-xxs w-28 h-7 ">
                            Implemented
                        </div>
                        <button
                            @click="isOpen = !isOpen"
                            class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                            <svg class="w-6 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                            </svg>
                            <ul
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute z-10 md:ml-8 top-8 md:top-6 right-0 md:left-0 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                <li>
                                    <a href=""
                                       class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100 ">Mark
                                        a
                                        span</a>
                                </li>
                                <li><a href=""
                                       class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100 ">Delete
                                        Post</a>
                                </li>
                            </ul>
                        </button>
                    </div>
                    <div class="flex items-center md:hidden mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none ">
                                12
                            </div>
                            <div class="text-xxs font-semibold leading-none text-gray-400 ">
                                Votes
                            </div>
                            <button
                                class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in border border-blue-200 bg-gray-200 hover:border-gray-400 text-xxs rounded-xl -mx-5   ">
                                Vote
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6 buttons-container">
        <div class="flex flex-col md:flex-row items-center md:ml-6 space-x-4">
            <div
                x-data="{ isOpen: false }"
                class="relative ">
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="flex items-center justify-center w-32 px-6 py-3 text-sm font-semibold text-white transition duration-150 ease-in border w-36 h-11 rounded-xl border-blue bg-blue hover:blue-hover ">
                    Reply
                </button>
                <div
                    x-cloak
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 mt-2 text-sm font-semibold text-left bg-white w-64 md:w-104 shadow-dialog rounded-xl">
                    <form action="" class="px-4 py-6 space-y-4 ">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                      class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                                      placeholder="Go ahead, don`t be shy. Share your thoughts..."></textarea>
                        </div>
                        <div class="hidden flex flex-col md:flex-row items-center md:space-x-3">
                            <button type="button"
                                    class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400 ">
                                Post comment
                            </button>
                            <button
                                class="flex items-center justify-center w-full md:w-32 px-6 py-3 text-sm font-semibold text-white transition duration-150 ease-in border w-36 h-11 rounded-xl border-blue bg-blue hover:blue-hover mt-2 md:mt-0"
                            >
                                <svg class="w-4 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>
                                </svg>
                                <span class="ml-2">Attach </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div
                x-data="{ isOpen: false }"
                class="relative">
                <button
                    @click="isOpen = !isOpen"
                    class="flex items-center justify-center px-6 py-3 text-sm font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400 mt-2 md:mt-0">
                    <span>Set status </span>
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div
                    x-cloak
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20  w-64 mt-2 text-sm font-semibold text-left bg-white w-76 shadow-dialog rounded-xl">
                    <form action="" class="px-4 py-6 space-y-4 ">
                        <div class="space-y-2 ">
                            <div>
                                <label class="inline-flex items-center ">
                                    <input type="radio" class="bg-gray-200 border-none text-yellow" name="status"
                                           value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center ">
                                    <input type="radio" class="bg-gray-200 border-none text-green" name="status"
                                           value="1">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center ">
                                    <input type="radio" class="bg-gray-200 border-none text-red" name="status"
                                           value="1">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center ">
                                    <input type="radio" class="bg-gray-200 border-none text-yellow" name="status"
                                           value="1">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center ">
                                    <input type="radio" class="bg-gray-200 border-none text-yellow" name="status"
                                           value="1">
                                    <span class="ml-2">Closed 1</span>
                                </label>
                            </div>
                        </div>
                        <div><textarea name="update_comment" id="update_comment" cols="30" rows="3"
                                       class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                       placeholder="Add an update comment (optional)"></textarea></div>

                        <div class="flex items-center justify-between space-x-3">
                            <button
                                class="flex items-center justify-center w-1/2 h-11 text-xs font-semibold rounded-xl border border-gray-200 bg-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 ">
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>
                                </svg>
                                <span class="ml-2">Attach </span>
                            </button>
                            <button type="submit"
                                    class="flex items-center text-white justify-center w-1/2 h-11 text-xs font-semibold rounded-xl border border-blue bg-blue hover:blue-hover transition duration-150 ease-in px-6 py-3 ">

                                <span class="ml-1 ">Update </span>
                            </button>

                        </div>
                        <div>
                            <label class="inline-flex items-center font-normal">
                                <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked>
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="hidden md:flex items-center space-x-3">
            <div class="px-3 py-2 font-semibold text-center bg-white rounded-xl ">
                <div class="text-xl leading-snug">12</div>
                <div class="text-xs leading-none text-gray-400 ">Votes</div>
            </div>
            <button
                class="px-6 py-3 text-xs font-semibold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 w-36 h-11 rounded-xl hover:border-gray-400">
                <span>Vote</span>

            </button>
        </div>
    </div>
    <div class="relative pt-4 my-8 mt-1 space-y-6 comments-container md:ml-22">
        <div class="relative flex mt-4 bg-white cursor-pointer is-admin comment-container rounded-xl hover:shadow-card ">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="mt-1 font-bold text-center uppercase text-blue text-xxs">Admin</div>
                </div>
                <div class="w-full mx-2 md:mx-4">
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit ame t, consectetur adipisicing elit. Aspernatur consequuntur deleniti

                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs text-gray-400 text-semibold">
                            <div class="hidden md:block font-bold text-gray-900 text-blue">
                                Andrea
                            </div>
                            <div class="hidden md:block">&bull;</div>
                            <div>
                                10 hours ago
                            </div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2 ">
                            <button
                                @click="isOpen = !isOpen"
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                <svg class="w-6 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute z-10 md:ml-8 top-8 md:top-6 right-0 md:left-0 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                    <li>
                                        <a href=""
                                           class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100 ">Mark
                                            a span</a>
                                    </li>
                                    <li><a href=""
                                           class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100 ">Delete
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
