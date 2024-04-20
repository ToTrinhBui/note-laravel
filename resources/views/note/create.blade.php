<x-app-layout>
    <div class="note-container single-note m-auto w-4/5 p-8">
        <h1 class="text-xl text-gray-400">What do you have to remember?</h1>
        <form
            action="{{ route("note.store") }}"
            method="POST"
            class="note"
            id="create-form"
        >
            @csrf
            <div class="note-header flex justify-between py-4">
                <div class="flex w-1/2 items-center gap-2">
                    <label class="font-semibold text-black">Title:</label>
                    <input
                        name="title"
                        placeholder="Give it a name"
                        rows="1"
                        required
                        class="note-body block w-full rounded border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                    />
                </div>
                <div class="note-buttons flex items-center gap-2">
                    <a
                        href="{{ route("note.index") }}"
                        class="note-cancel-button border-2 border-black shadow-[2px_2px_0px_#000000] hover:bg-red-400"
                    >
                        <svg
                            fill="#000000"
                            width="28px"
                            height="28px"
                            viewBox="0 0 32 32"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g
                                id="SVGRepo_tracerCarrier"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>cancel2</title>
                                <path
                                    d="M19.587 16.001l6.096 6.096c0.396 0.396 0.396 1.039 0 1.435l-2.151 2.151c-0.396 0.396-1.038 0.396-1.435 0l-6.097-6.096-6.097 6.096c-0.396 0.396-1.038 0.396-1.434 0l-2.152-2.151c-0.396-0.396-0.396-1.038 0-1.435l6.097-6.096-6.097-6.097c-0.396-0.396-0.396-1.039 0-1.435l2.153-2.151c0.396-0.396 1.038-0.396 1.434 0l6.096 6.097 6.097-6.097c0.396-0.396 1.038-0.396 1.435 0l2.151 2.152c0.396 0.396 0.396 1.038 0 1.435l-6.096 6.096z"
                                ></path>
                            </g>
                        </svg>
                    </a>
                    <button
                        type="submit"
                        form="create-form"
                        class="note-submit-button border-2 border-black shadow-[2px_2px_0px_#000000] hover:bg-lime-400"
                    >
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
                                    d="M4.89163 13.2687L9.16582 17.5427L18.7085 8"
                                    stroke="#000000"
                                    stroke-width="2.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="note-content bg-white">
                <div class="note-title"></div>
                <textarea
                    id="summernote"
                    name="notedata"
                    rows="10"
                    placeholder="Write something..."
                    required
                    class="note-body block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                ></textarea>
            </div>
        </form>
        <script>
            $(document).ready(function () {
                $('#summernote').summernote({
                    placeholder: 'Write something...',
                    minHeight: 320,
                });
            });
        </script>
    </div>
</x-app-layout>
