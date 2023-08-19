<x-layout>
    <style>
        .background {
            background-color: rgb(255, 255, 255);
            padding: 20px;
            border-radius: 20px;
            margin-top: 20px;
            border: 10px;
        }

        .format,
        .format2,
        .format3 {
            list-style: none;
        }

        .format li,
        .format2 li,
        .format3 li {
            display: inline-block;
            margin: 5px;
            padding: 2px;
            font-size: 20px;
        }
    </style>
    <div class="body">
        <div class="container align-items-center justify-content-center">

            <div class="row justify-content-between">
                <div class="col row align-self-center justify-content-center">
                    <h4 style="color:rgb(9, 53, 104)" class="col row align-self-center justify-content-center">INFORMATION
                    </h4>
                    <img src="{{ asset('imgprofile/vegeta.jpg') }}" alt="" srcset="" class="rounded-circle">
                    <br>
                </div>
                <div class="format col-8">
                    <br>
                    <ul>
                        <form action="updateprofile" method="post" class="">
                            @csrf
                            <x-input label="First Name" name="firstName" :value="$user->firstname" />
                            <x-input label="Last Name" name="lastName" :value="$user->lastname" />
                            <x-input label="Email" name="email" :value="$user->email" />
                            <x-input label="Age" name="age" :value="$user->age" />
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">Select Image</label>
                                <input type="file" class="form-control" id="inputGroupFile01" name='img'>
                            </div>
                            <button type="submit" class="btn btn-danger">Save Changes</button>
                        </form>
                        <!--agregar el x-input de rol-->

                    </ul>
                </div>


            </div>

        </div>
    </div>
    <br>
</x-layout>
