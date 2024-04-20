<x-app-layout>
    <div class="note-container single-note m-auto w-4/5 p-8">
        <div class="note-header flex justify-between py-4">
            <div class="note-in4">
                <h1 class="text-2xl font-bold">{{ $note->title }}</h1>
                <h3 class="text-sm text-[#C7C7C7]">
                    Edited on {{ $note->updated_at->toDayDateTimeString() }}
                </h3>
            </div>
            <div class="note-buttons flex flex-row-reverse items-center gap-2">
                <a
                    href="{{ route("note.edit", $note) }}"
                    class="note-edit-button flex h-8 w-8 items-center justify-center border border-black bg-yellow-400 shadow-[2px_2px_0px_#000000] hover:bg-[#C8A0FB]"
                >
                    <svg
                        width="20px"
                        height="20px"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
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
                    class="flex h-8 w-8 items-center justify-center border border-red-700 shadow-[2px_2px_0px_rgb(185,28,28)] hover:bg-[#C8A0FB]"
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
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g
                                id="SVGRepo_tracerCarrier"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M4.99997 8H6.5M6.5 8V18C6.5 19.1046 7.39543 20 8.5 20H15.5C16.6046 20 17.5 19.1046 17.5 18V8M6.5 8H17.5M17.5 8H19M9 5H15M9.99997 11.5V16.5M14 11.5V16.5"
                                    stroke="rgb(185,28,28)"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                            </g>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {!! $note->note !!}
            </div>
        </div>
    </div>
</x-app-layout>
