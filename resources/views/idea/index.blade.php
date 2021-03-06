<x-app-layout>
    <div class="flex md:space-y-0 md:space-x-6 flex-col md:flex-row filters">

        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full px-4 py-2 border-none rounded-xl ">
                <option value="Category One">
                    Category One
                </option>
                <option value="Category One">
                    Category Two
                </option>
                <option value="Category One">
                    Category Three
                </option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filter" id="other_filter" class="w-full px-4 py-2 border-none rounded-xl ">
                <option value="Filter One">
                    Filter One
                </option>
                <option value="Filter One">
                    Filter Two
                </option>
                <option value="Filter One">
                    Filter Three
                </option>
            </select>
        </div>
        <div class="w-full relative md:w-2/3">
            <input type="search" placeholder="Find an idea"
                   class="w-full px-4 py-2 pl-8 bg-white border-none placeholder-text-gray-900 rounded-xl">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="my-6 space-y-6 ideas-container">
        @foreach($ideas as $idea)
        <div
            x-data
            @click="
                target = $event.target.tagName.toLowerCase();
                ignores = ['button', 'svg', 'path', 'a'];

                if (! ignores.includes(target)){
                    $event.target.closest('.idea-container').querySelector('.idea-link').click();
                }

            "
            class="flex bg-white cursor-pointer idea-container rounded-xl hover:shadow-card ">
            <div class="hidden md:block  px-5 py-8 border-r border-gray-100">

                <div class="text-center">
                    <div class="text-2xl font-semibold">
                        12
                    </div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 hover:border-gray-400 text-xxs rounded-xl">
                        Vote
                    </button>

                </div>
            </div>
            <div class=" flex flex-col md:flex-row  flex-1 px-2 py-6">
                <div class="flex justify-center md:flex-none mx-2 md:mx-0">
                    <a href="#" >
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-2 flex flex-col justify-between">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href=" {{ route('idea.show', $idea->slug) }} " class="idea-link hover:underline">{{ $idea->title }}</a>


                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        {{ $idea->description }}
                    </div>
                    <div class="flex items-center md:justify-between flex-col md:flex-row mt-6">
                        <div class="flex items-center space-x-2 text-xs text-gray-400 text-semibold">
                            <div>
                                {{ $idea->created_at->diffForHumans() }}
                            </div>
                            <div>&middot;</div>
                            <div>Category 1</div>
                            <div>&middot;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex mt-4 md:mt-0 items-center space-x-2 ">
                            <div
                                class="px-4 py-2 font-bold leading-none text-center uppercase bg-gray-200 rounded-full text-xxs w-28 h-7 ">
                                Open
                            </div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 rounded-full hover:bg-gray-200 h-7">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-3" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute md:ml-8 top-8 md:top-6 right-0 md:left-0 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl ">
                                    <li>
                                        <a href=""
                                           class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100 ">Mark
                                            a span</a></li>
                                    <li><a href=""
                                           class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100 ">Delete
                                            Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                        <div class="flex items-center md:hidden mt-4 md:mt-0">
                            <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 md:pr-8">
                                <div class="text-sm font-bold leading-none ">
                                    12
                                </div>
                                <div class="text-xxs font-semibold leading-none text-gray-400 ">
                                    Votes
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $ideas->links() }}
    </div>

</x-app-layout>
