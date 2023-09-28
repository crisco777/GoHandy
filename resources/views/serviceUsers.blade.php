<x-layout>
    <div class="container">
        <div class="text-center pt-5 pb-4">
            <h1 style="font-family: 'Bevan'; text-decoration:blanchedalmond">{{ $service }}</h1>
        </div>
        <div class="row row-cols-3 gx-2 gy-4">
            @foreach ($users as $user)
                <x-profileCard :user="$user"/>
            @endforeach
        </div>
    </div>
</x-layout>
