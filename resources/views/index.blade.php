<x-layout>
      
    <div class="flex  justify-center items-center h-screen">
        <div class="rounded-lg border border-gray-200 shadow-md p-6 mx-4 lg:mx-44 md:mx-24 sm:mx-8">
            <form method="POST" action="/import" enctype="multipart/form-data">
                @csrf
                <div class="grid justify-items-center grid-cols-1 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="excel-file">Select your excel file</label>
                        <input type="file" name="excel-file" id="excel-file"
                            class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                        @error('excel-file')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="text-white mt-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Upload
                        </button>
                    </div>

                </div>
                <div  class="flex mt-4 justify-center">
                    <a href="/view-data"
                    class="text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    View Data
                </a>

        </div>
        </form>
    </div>
    </div>
    </div>
</x-layout>
