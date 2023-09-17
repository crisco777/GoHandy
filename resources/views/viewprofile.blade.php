@push('css')
    <style>
        body {
            background: #4682a9;
        }
    </style>
@endpush


<x-layout>
    <div class="container py-4">
        <div class="row">
            <div class="col-6">
                <form action="updateprofile" method="post" class="input-box">
                    @csrf
                    <div class="row">
                        <div class="col 6">
                            <p class="mb-1">Firstname</p>
                            <input name="firstname" class="form-control" :value="$user - > firstname"
                                value={{ Auth::user()->firstname }} />
                            <p class="mb-1">Lastname</p>
                            <input label="Last Name" name="lastname" class="form-control"
                                value={{ Auth::user()->lastname }} />

                        </div>
                        <div class="col 6">
                            <p class="mb-1">Email</p>
                            <input label="Email" name="email" class="form-control" value={{ Auth::user()->email }} />
                            <p class="mb-1">Age</p>
                            <input label="Age" name="age" class="form-control mb-2"
                                value={{ Auth::user()->age }} />
                        </div>
                    </div>
                    <p class="mb-1">Sex</p>
                    <input label="Age" name="age" class="form-control mb-2"
                        value={{ Auth::user()->sex->type }} />
                    <p class="mb-1">Dirección</p>
                    <input label="Age" name="age" class="form-control mb-2" value={{ Auth::user()->address }} />
                    <p class="mb-1">Número de contacto</p>
                    <input label="Age" name="age" class="form-control mb-2" value={{ Auth::user()->contact }} />
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Select Image</label>
                        <input type="file" class="form-control" id="inputGroupFile01" name='img'>
                    </div>
                    <button type="submit" class="btn mb-4" style="background-color: #4682a9">Save Changes</button>
                </form>
            </div>
            <div class="col-6">
                <img class="rounded mx-auto d-block" src="img/criso.jpeg"
                    style="width: 50vh; height:65vh; margin-top:5vh">
            </div>
</x-layout>
