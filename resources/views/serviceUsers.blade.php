<x-layout>

    <div class="container ">
        <div class="text-center pt-5 pb-4" >
            <h1 style=" text-decoration:blanchedalmond; margin-top:80px; color:white" class="fw-bold">{{ $service }}</h1>
        </div>
        <div class=" fw-bold row row-cols-3 gx-2 gy-4">
            @foreach ($users as $user)
                <x-profileCard :user="$user"/>
            @endforeach
        </div>
    </div>
</x-layout>
