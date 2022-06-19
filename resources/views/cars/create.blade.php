<x-layout>
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Create Car</h1>
                <form method="POST" action="/storeCar">
                    @csrf
                <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="name"
                    placeholder="Car Name" />
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
    
                <button
                    type="submit"
                    class="w-full text-center py-3"
                >Submit</button>
                </form>
    
          
            </div>
    
        </div>
    </div>
    </x-layout>