<x-layout>
    <div class="container">
        <div class="container">
<div class="d-flex justify-content-center align-items-center">

    <img src="{{ asset('imgprofile/vegeta.jpg') }}" style="width: 30vh; height:30vh; margin-top:5vh" >
</div>
        </div>

        <form action="updateprofile" method="post" class="">
            @csrf

            <p class="mb-1">Firstname</p>
            <input  name="firstname" class="form-control" :value="$user->firstname" placeholder={{Auth::user()->firstname}} />
            <p class="mb-1">Lastname</p>
            <input label="Last Name" name="lastname" class="form-control" placeholder={{Auth::user()->lastname}} />
            <p class="mb-1">Email</p>
            <input label="Email" name="email" class="form-control" placeholder={{Auth::user()->email}} />
            <p class="mb-1">Age</p>
            <input label="Age" name="age" class="form-control mb-2" placeholder={{Auth::user()->age}} />
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Select Image</label>
                <input type="file" class="form-control" id="inputGroupFile01" name='img'>
            </div>
            <button type="submit" class="btn btn-danger mb-4">Save Changes</button>
        </form>
    </div>
</x-layout>
