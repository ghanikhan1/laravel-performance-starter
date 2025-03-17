{{--       Alpine Toggle Menu options --}}
<div x-data="{ open: false }" class="relative">
    <button @click="open = !open" class="bg-blue-500 text-white px-4 py-2 rounded">
        Toggle Menu
    </button>

    <div x-show="open" class="absolute mt-2 w-48 bg-white border rounded shadow-md">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
    </div>
</div>
{{--       Alpine Toggle Dark Mode--}}
<button @click="darkMode = !darkMode" x-data="{ darkMode: false }"
        x-bind:class="darkMode ? 'bg-gray-900 text-white' : 'bg-white text-black'"
        class="px-4 py-2 border rounded">
    Toggle Dark Mode
</button>
{{--       Alpine Modal Example--}}
<div x-data="{ open: false }">
    <button @click="open = true" class="px-4 py-2 bg-green-500 text-white rounded">Open Modal</button>

    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
        <div class="bg-white p-6 rounded shadow-md">
            <h2 class="text-lg font-bold">Alpine.js Modal</h2>
            <p class="mt-2">This is a simple Alpine.js modal example.</p>
            <button @click="open = false" class="mt-4 px-4 py-2 bg-red-500 text-white rounded">Close</button>
        </div>
    </div>
</div>
{{--Alpine Accordion Example--}}
<div x-data="{ open: false }">
    <button @click="open = !open" class="bg-blue-500 text-white px-4 py-2 rounded">
        Toggle Accordion
    </button>

    <div x-show="open" class="mt-2 p-4 border rounded bg-gray-100">
        <p>This is a simple accordion using Alpine.js!</p>
    </div>
</div>
