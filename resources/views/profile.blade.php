<x-layout>
    <div class="container">
        <div class="container">
<div class="d-flex justify-content-center align-items-center">

    <img src="{{ asset('img/logochiquito.jpg') }}" style="width: 30vh; height:30vh; margin-top:5vh" >
</div>
        </div>

        <form action="updateprofile" method="post" class="">

            <p class="mb-1">Firstname</p>
            <input  name="firstname" class="form-control" :value="$user->firstname" value={{Auth::user()->firstname}} />
            <p class="mb-1">Lastname</p>
            <input label="Last Name" name="lastname" class="form-control" value={{Auth::user()->lastname}} />
            <p class="mb-1">Email</p>
            <input label="Email" name="email" class="form-control" value={{Auth::user()->email}} />
            <p class="mb-1">Age</p>
            <input label="Age" name="age" class="form-control mb-2" value={{Auth::user()->age}} />
            <p class="mb-1">Sex</p>
            <input label="Age" name="age" class="form-control mb-2" value={{Auth::user()->sex->type}} />
            <p class="mb-1">Dirección</p>
            <input label="Age" name="age" class="form-control mb-2" value={{Auth::user()->address}} />
            <p class="mb-1">Número de contacto</p>
            <input label="Age" name="age" class="form-control mb-2" value={{Auth::user()->contact}} />
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Select Image</label>
                <input type="file" class="form-control" id="inputGroupFile01" name='img'>
            </div>
            <button type="submit" class="btn btn-danger mb-4">Save Changes</button>
        </form>
    </div>
</x-layout>
