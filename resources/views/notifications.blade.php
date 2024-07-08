<link href="{{ asset('css/notifications.css') }}" rel="stylesheet">
<x-layout>
    <div class="notifi-box mt-5 fw-bold" id="box ">
        <h2 class="fw-bold">Notifications <span>4</span></h2>

        <div class="notifi-item">
            <img src="{{ asset('img/taylor.jpg') }} " alt="img" style="height: 100px; width:100px">
            <div class="text">
                <h4>Valentina Sanchez</h4>
                <p>New message</p>
                <p>5m ago</p>
            </div>
        </div>

        <div class="notifi-item">
            <img src="{{ asset('img/kanye.jpg') }}" alt="img" style="height: 100px; width:100px">
            <div class="text">
                <h4>John Doe</h4>
                <p>New message</p>
                <p>5m ago</p>
            </div>
        </div>

        <div class="notifi-item">
            <img src="{{ asset('img/ryan.webp') }}" alt="img" style="height: 100px; width:100px">
            <div class="text">
                <h4>Emad Ali</h4>
                <p>New message</p>
                <p>5m ago</p>
            </div>
        </div>

        <div class="notifi-item">
            <img src="{{ asset('img/nestor.jpeg') }}" alt="img" style="height: 100px; width:100px" >
            <div class="text">
                <h4>Ekram Abu </h4>
                <p>New message</p>
                <p>5m ago</p>
            </div>
        </div>




    </div>

</x-layout>
