<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
            <li>
                <a href="{{ route('admin.blogs.index') }}" class="text-blue-500 hover:underline">
                    Manage blogs
                </a>
            </li>
            <li>
                <a href="{{ route('admin.categories.index') }}" class="text-blue-500 hover:underline">
                    Manage category
                </a>
            </li>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Navigation Links -->
                    <nav class="mb-6">
                        <ul class="space-y-2">




                            <!-- Add more navigation links here -->
                        </ul>
                    </nav>

                    <!-- Main Content -->
                    {{ __("You're logged in!") }}
                    <p>Hi admin. Are you here?</p>

                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                            {{ __('Log out') }}
                        </button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
