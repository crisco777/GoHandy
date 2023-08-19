<x-layout>
@push('css')
<style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(to bottom, #176bb7, #3b3f58, #494961);
    }

    .profile-card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 950px;
      height: 500px;
      text-align: center;
    }

    .profile-picture {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      margin: 0 auto 10px;
      background-color: #ccc;
      overflow: hidden;
    }

    .profile-picture img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-name {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .profile-title {
      font-size: 16px;
      color: #777;
    }

    .profile-contact {
      margin-top: 20px;
    }

    .contact-icon {
      font-size: 24px;
      margin-right: 10px;
      color: #333;
    }
  </style>
  @endpush
  <body>
  <div class="profile-card">
    <div class="profile-picture">
      <img src="d" alt="Profile Picture">
    </div>
    <div class="profile-name">John Doe</div>
    <div class="profile-title">Web Developer</div>
    <div class="profile-contact">
      <span class="contact-icon">&#9742;</span> (123) 456-7890
      <br>
      <span class="contact-icon">&#9993;</span> john.doe@example.com
    </div>
  </div>
  </body>
</x-layout>
