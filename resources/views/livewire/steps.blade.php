<!-- This example requires Tailwind CSS v2.0+ -->
<nav aria-label="Progress">
    <ol role="list" class="overflow-hidden">
            <li class="relative pb-10" :wire:key="$loop->index">
                <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-blue-600" aria-hidden="true"></div>
                <!-- Complete Step -->
                <a href="#" class="relative flex items-start group">
                    <span class="h-9 flex items-center">
                        <span
                            class="relative z-10 w-8 h-8 flex items-center justify-center bg-blue-600 rounded-full group-hover:bg-blue-800">
                            <!-- Heroicon name: solid/check -->
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </span>
                    <span class="ml-4 min-w-0 flex flex-col">
                        <span class="text-xs font-semibold tracking-wide uppercase">hello</span>
                        <span class="text-sm text-gray-500">yolo</span>
                    </span>
                </a>
            </li>
    </ol>
</nav>
