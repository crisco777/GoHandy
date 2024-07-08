<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('css/css profile.css') }}" rel="stylesheet">


<x-layout>

    <div class="mt-5">
        <!-- ===== ===== Main-Container ===== ===== -->
        <div class=" " style="background-color: #ffffff">

            <div class="container mt-5">


                <section class="userProfile card ">
                    <div class="profile ">
                        <figure><img src="{{ asset('img/taylor.jpg') }} " alt="profile" width="250px" height="250px">
                        </figure>
                    </div>
                </section>


                <!-- ===== ===== Work & Skills Section ===== ===== -->
                <section class="work_skills card">

                    <!-- ===== ===== Work Contaienr ===== ===== -->
                    <div class="work">
                        <h1 class="heading">experience</h1>
                        <div class="primary">

                            <p> I have developed a diverse skill set that encompasses a wide range of practical and
                                technical abilities. My background includes hands-on work in areas such as carpentry,
                                plumbing, electrical work, and general maintenance. I am adept at problem-solving, quick
                                to
                                adapt to new challenges, and consistently deliver high-quality work. My dedication to
                                safety, precision, and efficiency has been a cornerstone of my professional journey.
                                <br> san miguel, +503 7314 6647
                            </p>
                        </div>

                        <div class="secondary">
                            <h1>Personal information <br>skills</h1>
                            <ul>
                                <li style="--i:0">blueprint reading</li>
                                <li style="--i:1">Use of hand tools</li>
                                <li style="--i:2">Cutting and assembly</li>
                                <li style="--i:3">Furniture repair</li>
                            </ul>

                        </div>
                    </div>

                    <!-- ===== ===== Skills Contaienr ===== ===== -->

                </section>


                <!-- ===== ===== User Details Sections ===== ===== -->
                <section class="userDetails card ">
                    <div class="userName">
                        <h1 class="name">Marayela Swift </h1>
                        <div class="map">
                            <i class="ri-map-pin-fill ri"></i>
                            <span>Santa tecla</span>
                        </div>
                        <p>Carpinter</p>
                    </div>

                    <div class="rank">
                        <h1 class="heading">Rankings</h1>
                        <div class="rating">
                            <i class="ri-star-fill rate"></i>
                            <i class="ri-star-fill rate"></i>
                            <i class="ri-star-fill rate"></i>
                            <i class="ri-star-fill rate"></i>
                            <i class="ri-star-fill rate underrate"></i>
                        </div>
                    </div>

                    <div class="btns">
                        <ul>
                            <li class="sendMsg">
                                <i class="ri-chat-4-fill ri"></i>
                                <a href="#">Send Message</a>
                            </li>

                            <li class="sendMsg active">
                                <i class="ri-check-fill ri"></i>
                                <a href="#">Contacts</a>
                            </li>

                            <li class="sendMsg">
                                <a href="#">Report User</a>
                            </li>
                        </ul>
                    </div>
                </section>


                <!-- ===== ===== Timeline & About Sections ===== ===== -->
                <section class="timeline_about card">
                    <div class="tabs">
                        <ul>
                            <li class="timeline">
                                <i class="ri-eye-fill ri"></i>
                                <span>Timeline</span>
                            </li>

                            <li class="about active">
                                <i class="ri-user-3-fill ri"></i>
                                <span>About</span>
                            </li>
                        </ul>
                    </div>

                    <div class="contact_Info">
                        <h1 class="heading">Contact Information</h1>
                        <ul>
                            <li class="phone">
                                <h3 class="label">Phone:</h3>
                                <span class="info">+503 7653 2482</span>
                            </li>

                            <li class="address">
                                <h3 class="label">Address:</h3>
                                <span class="info">Carr. Panamericana, Santa Tecla <br></span>
                            </li>

                            <li class="email">
                                <h3 class="label">E-mail:</h3>
                                <span class="info">nlinares31@gmail.com</span>
                            </li>

                            <li class="site">
                                <h3 class="label">Site:</h3>
                                <span class="info">www.rsmarquetech.com</span>
                            </li>
                        </ul>
                    </div>

                    <div class="basic_info">
                        <h1 class="heading">Basic Information</h1>
                        <ul>
                            <li class="birthday">
                                <h3 class="label">Birthday:</h3>
                                <span class="info">22/2/2007</span>
                            </li>

                            <li class="sex">
                                <h3 class="label">Gender:</h3>
                                <span class="info">Male</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

</x-layout>
