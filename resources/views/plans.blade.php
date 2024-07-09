
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    body {
        background: rgb(44, 44, 44);
        background: linear-gradient(90deg, rgba(44, 44, 44, 1) 0%, rgba(44, 58, 79, 1) 50%, rgba(44, 44, 44, 1) 100%);
    }

    .content {

        text-align: center;
        color: white;


    }

    .row {
        text-align: center;
        position: fixed;
        left: 5%;
        right: 5%;
        color: #2C3A4F;
    }

    .card {
        width: 100%;
        height: 105%;
        background-color: #2C3A4F;
        -webkit-box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.75);
    }

    .card-body {
        color: white;
    }

    .btn {
        font-size: 175%;
        color: white;


    }
</style>
<x-layout>

    <div class="content">
        <h1>Choose your ideal plan!</h1>
        <p>
            Enjoy all the benefits that GoHandy offers to you with these plans.
            <br>
            Connecting people and solving needs!

        </p>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn">Free Trial</a>
                    <p class="card-text">
                        -We give you up to 3 negotiations with contractors with no time restriction
                        <br>
                        -Create and customize your basic tasker profile and publish your services in no more than one
                        category.
                        <br>
                        -You can not add samples of your previous work and will not be certified.
                    </p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn">Tasker Pass</a>
                    <p class="card-text">
                        -Enables all our options and benefits for you as a tasker.
                        <br>
                        -Delete all advertisements on the website.
                        <br>
                        -Add samples of your work.
                        <br>
                        -Increased visibility in searches.
                        -Access to ratings and reviews that feature your profile.
                        <br>
                        -Offer your services in as many categories as you want.
                        <br>
                        -Unlimited negotiations with clients for a period of 60 days.
                    </p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn">Publicity option</a>
                    <p class="card-text">
                        -Increasing your visibility on the website so more clients get to know about your services.
                        <br>
                        -You will get specially publicized and recommended on our platform for a span of 30 days.
                        <br>
                        -A discount will be offered to you if you contract it at the same time as your first subscription.</p>

                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</x-layout>

