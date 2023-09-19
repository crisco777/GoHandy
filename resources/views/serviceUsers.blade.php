<x-layout>



    <div class="team">
        <div class="container">
            <div class="text-center pt-4">
                <h1 style="font-family: 'Bevan'; text-decoration:blanchedalmond">{{ $service }}</h1>
            </div>
            <div class="row row-cols-3">
                @foreach ($users as $user)
                    <x-profileCard :user="$user" />
                @endforeach
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
            </script>
        </div>
    </div>
</x-layout>
