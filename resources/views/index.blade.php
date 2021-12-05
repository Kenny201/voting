<x-app-layout>
    <div class="filters flex space-x-6">

        <div class="w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2 ">
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
        <div class="w-1/3">
            <select name="other_filter" id="other_filter" class="w-full border-none rounded-xl px-4 py-2 ">
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
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                   class="w-full placeholder-text-gray-900  rounded-xl bg-white px-4 py-2 pl-8 border-none">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer  ">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">
                        12
                    </div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 transition duration-150 ease-in border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>

                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here </a>


                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit ame t, consectetur adipisicing elit. Aspernatur consequuntur deleniti
                        doloremque ducimus ea eveniet excepturi exercitationem fugiat, impedit in iure modi molestias
                        nihil, odit perferendis provident quae quibusdam quidem quis recusandae repudiandae saepe sequi
                        soluta suscipit tenetur veniam voluptatem? Accusantium ad aliquid aperiam consequatur cumque
                        cupiditate deleniti doloremque doloribus facere fuga fugiat ipsa ipsam modi molestias
                        necessitatibus nemo neque, nobis non pariatur possimus praesentium sit sunt tempora temporibus
                        tenetur vero voluptatem, voluptatum. Dignissimos earum fugiat incidunt nemo omnis perspiciatis
                        voluptatum. Accusamus alias animi, asperiores assumenda blanditiis culpa dolor dolorum enim est
                        facere fugit impedit in ipsam libero nesciunt nulla numquam officiis perferendis provident quasi
                        qui quibusdam quod ratione recusandae repellat repellendus sed sit tempore totam voluptatum!
                        Assumenda est fugiat ipsum iusto reprehenderit saepe. Consequuntur culpa deserunt earum eligendi
                        eum explicabo fugiat, in maiores non officiis, pariatur, velit. Aliquid enim numquam voluptatem.
                        Ab accusamus aliquid aspernatur assumenda blanditiis culpa cumque deleniti dolores doloribus
                        eaque, eligendi eum eveniet, incidunt laborum minima minus odit pariatur, placeat porro
                        praesentium quis quos reprehenderit repudiandae sed tempora veniam voluptate voluptates. Cum hic
                        id laboriosam magni nihil nisi quos ut. Aliquam aliquid animi dignissimos distinctio eius
                        exercitationem explicabo hic in minus nesciunt, odit officia, praesentium temporibus!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 text-semibold space-x-2">
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
                                class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 ">
                                Open
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl ml-8">
                                    <li>
                                        <a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Mark a span</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Delete Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer  ">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">
                        66
                    </div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-blue text-white transition duration-150 ease-in border border-blue-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3">
                        Voted
                    </button>

                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here </a>


                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit ame t, consectetur adipisicing elit. Aspernatur consequuntur deleniti
                        doloremque ducimus ea eveniet excepturi exercitationem fugiat, impedit in iure modi molestias
                        nihil, odit perferendis provident quae quibusdam quidem quis recusandae repudiandae saepe sequi
                        soluta suscipit tenetur veniam voluptatem? Accusantium ad aliquid aperiam consequatur cumque
                        cupiditate deleniti doloremque doloribus facere fuga fugiat ipsa ipsam modi molestias
                        necessitatibus nemo neque, nobis non pariatur possimus praesentium sit sunt tempora temporibus
                        tenetur vero voluptatem, voluptatum. Dignissimos earum fugiat incidunt nemo omnis perspiciatis
                        voluptatum. Accusamus alias animi, asperiores assumenda blanditiis culpa dolor dolorum enim est
                        facere fugit impedit in ipsam libero nesciunt nulla numquam officiis perferendis provident quasi
                        qui quibusdam quod ratione recusandae repellat repellendus sed sit tempore totam voluptatum!
                        Assumenda est fugiat ipsum iusto reprehenderit saepe. Consequuntur culpa deserunt earum eligendi
                        eum explicabo fugiat, in maiores non officiis, pariatur, velit. Aliquid enim numquam voluptatem.
                        Ab accusamus aliquid aspernatur assumenda blanditiis culpa cumque deleniti dolores doloribus
                        eaque, eligendi eum eveniet, incidunt laborum minima minus odit pariatur, placeat porro
                        praesentium quis quos reprehenderit repudiandae sed tempora veniam voluptate voluptates. Cum hic
                        id laboriosam magni nihil nisi quos ut. Aliquam aliquid animi dignissimos distinctio eius
                        exercitationem explicabo hic in minus nesciunt, odit officia, praesentium temporibus!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 text-semibold space-x-2">
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
                                class="bg-yellow text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 ">
                               In progress
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl ml-8">
                                    <li>
                                        <a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Mark a span</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Delete Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer  ">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">
                        32
                    </div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 transition duration-150 ease-in border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>

                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here </a>


                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit ame t, consectetur adipisicing elit. Aspernatur consequuntur deleniti

                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 text-semibold space-x-2">
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
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl ml-8">
                                    <li>
                                        <a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Mark a span</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Delete Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer  ">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">
                        2
                    </div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 transition duration-150 ease-in border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>

                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here </a>


                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit ame t, consectetur adipisicing elit. Aspernatur consequuntur deleniti
                        doloremque ducimus ea eveniet excepturi exercitationem fugiat, impedit in iure modi molestias
                        nihil, odit perferendis provident quae quibusdam quidem quis recusandae repudiandae saepe sequi
                        soluta suscipit tenetur veniam voluptatem? Accusantium ad aliquid aperiam consequatur cumque
                        cupiditate deleniti doloremque doloribus facere fuga fugiat ipsa ipsam modi molestias
                        necessitatibus nemo neque, nobis non pariatur possimus praesentium sit sunt tempora temporibus
                        tenetur vero voluptatem, voluptatum. Dignissimos earum fugiat incidunt nemo omnis perspiciatis
                        voluptatum. Accusamus alias animi, asperiores assumenda blanditiis culpa dolor dolorum enim est
                        facere fugit impedit in ipsam libero nesciunt nulla numquam officiis perferendis provident quasi
                        qui quibusdam quod ratione recusandae repellat repellendus sed sit tempore totam voluptatum!
                        Assumenda est fugiat ipsum iusto reprehenderit saepe. Consequuntur culpa deserunt earum eligendi
                        eum explicabo fugiat, in maiores non officiis, pariatur, velit. Aliquid enim numquam voluptatem.
                        Ab accusamus aliquid aspernatur assumenda blanditiis culpa cumque deleniti dolores doloribus
                        eaque, eligendi eum eveniet, incidunt laborum minima minus odit pariatur, placeat porro
                        praesentium quis quos reprehenderit repudiandae sed tempora veniam voluptate voluptates. Cum hic
                        id laboriosam magni nihil nisi quos ut. Aliquam aliquid animi dignissimos distinctio eius
                        exercitationem explicabo hic in minus nesciunt, odit officia, praesentium temporibus!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 text-semibold space-x-2">
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
                                class="bg-indigo-600 text-xxs font-bold uppercase leading-none rounded-full text-white text-center w-28 h-7 py-2 px-4 ">
                                Considering
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl ml-8">
                                    <li>
                                        <a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Mark a span</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block ">Delete Post</a>
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