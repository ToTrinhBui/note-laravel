<x-app-layout>
    <div class="note-container p-8">
        <a href="{{ route("note.create") }}" class="new-note-btn inline-block">
            <div
                class="flex h-9 w-9 items-center justify-center border border-black bg-yellow-400"
            >
                <svg
                    width="20px"
                    height="20px"
                    viewBox="0 0 32 32"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                    fill="#000000"
                >
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>plus</title>
                        <desc>Created with Sketch Beta.</desc>
                        <defs></defs>
                        <g
                            id="Page-1"
                            stroke="none"
                            stroke-width="1"
                            fill="none"
                            fill-rule="evenodd"
                            sketch:type="MSPage"
                        >
                            <g
                                id="Icon-Set-Filled"
                                sketch:type="MSLayerGroup"
                                transform="translate(-362.000000, -1037.000000)"
                                fill="#000000"
                            >
                                <path
                                    d="M390,1049 L382,1049 L382,1041 C382,1038.79 380.209,1037 378,1037 C375.791,1037 374,1038.79 374,1041 L374,1049 L366,1049 C363.791,1049 362,1050.79 362,1053 C362,1055.21 363.791,1057 366,1057 L374,1057 L374,1065 C374,1067.21 375.791,1069 378,1069 C380.209,1069 382,1067.21 382,1065 L382,1057 L390,1057 C392.209,1057 394,1055.21 394,1053 C394,1050.79 392.209,1049 390,1049"
                                    id="plus"
                                    sketch:type="MSShapeGroup"
                                ></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </a>
        <div
            class="notes grid grid-cols-[repeat(auto-fit,minmax(250px,1fr))] gap-12 py-6"
        >
            @foreach ($notes as $note)
                <div
                    class="note my-1 border border-black p-4 shadow-[5px_5px_0px_#000000]"
                >
                    <div class="note-header flex items-center justify-between">
                        <h2 class="note-title text-lg font-semibold">
                            {{ $note->title }}
                        </h2>
                        <div
                            class="note-buttons flex flex-row-reverse items-center gap-1"
                        >
                            <a
                                href="{{ route("note.show", $note) }}"
                                class="note-edit-button flex h-8 w-8 items-center justify-center rounded hover:bg-[#C8A0FB]"
                            >
                                <svg
                                    width="20px"
                                    height="20px"
                                    viewBox="0 0 1024 1024"
                                    class="icon"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="#000000"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z"
                                            fill="#000000"
                                        ></path>
                                    </g>
                                </svg>
                            </a>
                            <a
                                href="{{ route("note.edit", $note) }}"
                                class="note-edit-button flex h-8 w-8 items-center justify-center rounded hover:bg-[#C8A0FB]"
                            >
                                <svg
                                    width="20px"
                                    height="20px"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g
                                        id="SVGRepo_bgCarrier"
                                        stroke-width="0"
                                    ></g>
                                    <g
                                        id="SVGRepo_tracerCarrier"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M13 21H21"
                                            stroke="#323232"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M20.0651 7.39423L7.09967 20.4114C6.72438 20.7882 6.21446 21 5.68265 21H4.00383C3.44943 21 3 20.5466 3 19.9922V18.2987C3 17.7696 3.20962 17.2621 3.58297 16.8873L16.5517 3.86681C19.5632 1.34721 22.5747 4.87462 20.0651 7.39423Z"
                                            stroke="#323232"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M15.3097 5.30981L18.7274 8.72755"
                                            stroke="#323232"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </g>
                                </svg>
                            </a>
                            <form
                                action="{{ route("note.destroy", $note) }}"
                                method="POST"
                                class="flex h-8 w-8 items-center justify-center rounded hover:bg-[#C8A0FB]"
                            >
                                @csrf
                                @method("DELETE")
                                <button class="note-delete-button">
                                    <svg
                                        width="28px"
                                        height="28px"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g
                                            id="SVGRepo_bgCarrier"
                                            stroke-width="0"
                                        ></g>
                                        <g
                                            id="SVGRepo_tracerCarrier"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M4.99997 8H6.5M6.5 8V18C6.5 19.1046 7.39543 20 8.5 20H15.5C16.6046 20 17.5 19.1046 17.5 18V8M6.5 8H17.5M17.5 8H19M9 5H15M9.99997 11.5V16.5M14 11.5V16.5"
                                                stroke="#000000"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            ></path>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div
                        class="note-body flex h-5/6 w-full justify-between gap-2 py-2"
                    >
                        @if ($note->image_description)
                            {!! "<img src='$note->image_description' alt='image-description' class='object-cover w-1/2'>" !!}
                            <div>
                                {{ Str::words(strip_tags($note->note), 12) }}
                            </div>
                        @else
                            <div>
                                {{ Str::words(strip_tags($note->note), 35) }}
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        {{ $notes->links() }}
    </div>
</x-app-layout>
