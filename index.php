<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


  <link href="..//twinsbeans/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-B0DdjIwRwoRgab8p/qG0eTDKp84oL+l6HTbX9UQd6oOzs6hxMgCfW1zrUaZzjIyAWv6ZnUJXamU6ydcIUEGBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/@fortawesome/fontawesome-free/5.15.3/css/all.min.css" integrity="sha512-BxuV7pXrxJdHnv7lLQ2jKug+q3S2SULJCEMf+K5x5F9jYWs4dV7pJcpwNY+fn0wk8zI6Z1b6FzVD9FLzsJxOaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <script src="https://cdn.tailwindcss.com"></script>



</head>

<body>

  <!--navbar  -->

  <nav class="p-2 border-gray-200 rounded bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-wrap items-center justify-between mx-auto">
      <div> <a href="index.php" class="flex items-center">
          <img src="./assets/images/twinslogo.png" class="h-20 object-cover w-28 " alt="Flowbite Logo" />
        </a>
      </div>
      <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul class="flex flex-col mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
          <li>
            <a href="#home" class="block py-2 pl-2 pr-3 hover:text-orange-200" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#aboutus" class="block py-2 pl-2 pr-3  hover:text-orange-200">About Us</a>
          </li>
          <li>
            <a href="#gallery" class="block py-2 pl-2 pr-3 hover:text-orange-200 ">Gallery</a>
          </li>
          <li>
            <a href="#contactus" class="block py-2 pl-2 pr-3  hover:text-orange-200">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Home  -->
  <section id="home">
    <div class="imgbg bg-cover bg-center opacity-50" style="background-image: url('./assets/images/1.jpg')">
      <div id="animated-text" class="py-6 px-6 pt-20">
        <h1 class="text-4xl font-bold mb-10 ml2 uppercase text-center">Welcome to our website</h1>
        <p class="text-black text-lg sm:w-full md:w-96" id="intro">Meet Hanna, the adorable baby girl! Born with a bright smile and curious nature, she has already captured the hearts of everyone around her. Hanna loves to explore her surroundings and is always eager to learn and discover new things. With her happy and playful personality, she brings joy and happiness to all who meet her.
          And meet Zoe, the sweet baby girl! She is calm, content, and loves to be snuggled and cuddled. Zoe has a gentle personality and a peaceful demeanor that make her a joy to be around. With her curious and observant nature, she loves to take in the world around her and discover new things. She is sure to bring happiness to all who meet her with her adorable smiles and charming personality.</p>
      </div>
    </div>
    <div class="container mx-auto">
      <h1 class="text-4xl font-bold mb-10 ml3 uppercase text-center mt-5 w-full sm:w-auto">Ready to Meet Us? Let's Make It Happen!</h1>
      <div class="flex flex-col sm:flex-row justify-around">
        <div class="relative w-full sm:w-1/3">
          <img src="./assets/images/zoe.jpg" alt="Image 1" class="w-full">
          <button class="absolute top-0 left-0 w-full h-full text-grey flex items-center justify-center" id="card1">

          </button>
          <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center" id="text1">
            <p class="p-4 text-2xl font-bold uppercase">Hello!My name is Zoe.</p>
          </div>
        </div>
        <div class="relative w-full sm:w-1/3 mt-4 sm:mt-0">
          <img src="./assets/images/hanna.jpg" alt="Image 2" class="w-full">
          <button class="absolute top-0 left-0 w-full h-full text-white text-center flex items-center justify-center" id="card2">

          </button>
          <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center hidden" id="text2">
            <p class="p-4 text-2xl font-bold uppercase">Hello!My name is Hannah.</p>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!--About Us-->

  <section id="aboutus" class="bg-gray-50">
    <div class="container mx-auto">
      <h1 class="headerh1 uppercase text-4xl font-bold mb-8 pt-5 text-center">About Us</h1>
      <div class="flex flex-col md:flex-row justify-around items-center">

        <div class="relative w-full sm:w-1/3 text-center sm:text-left mb-4 md:mb-0">

          <p class="paratxt text-lg text-justify">"Hi there, we're Hannah and Zoe, and we're 19-month-old twin sisters! We love to explore and discover new things every day, and we're always on the go. Hannah is the adventurous one, always eager to try new things and go on exciting adventures. Zoe, on the other hand, is more of a thinker, always contemplating the world around her and taking it all in. Together, we make a great team and have so much fun together!"</p>
        </div>
        <div class="relative w-full md:w-1/2">
          <img src="./assets/images/IMG_1424.JPG" alt="Image" class="w-full rounded">
        </div>
      </div>
    </div>

  </section>
  <!--Gallery-->
  <section id="gallery" class="pb-5">
    <div class="container mx-auto">
      <h1 class="headerh1 uppercase text-4xl font-bold  lg:pt-5 lg:pb-5 text-center sm:pt-0 sm:pb-0 sm:m-0">Gallery</h1>

      <div class="relative w-full" data-carousel="slide">
        <div class="relative h-screen overflow-hidden rounded-lg md:h-screen">
          <!-- Item 1 -->
          <div class="hidden duration-1000 ease-in-out" data-carousel-item>
            <img src="./assets/images/img1.jpg" class="absolute inset-0 w-full h-full object-contain sm:mt-2" alt="Item 1">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-1000 ease-in-out" data-carousel-item>
            <img src="./assets/images/1.jpg" class="absolute inset-0 w-full h-full object-contain sm:mt-2" alt="Item 2">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-1000 ease-in-out" data-carousel-item>
            <img src="./assets/images/img3.jpg" class="absolute inset-0 w-full h-full object-contain sm:mt-2" alt="Item 3">
          </div>
          <!-- Item 4 -->
          <div class="hidden duration-1000 ease-in-out" data-carousel-item>
            <img src="./assets/images/img4.jpg" class="absolute inset-0 w-full h-full object-contain sm:mt-2" alt="Item 4">
          </div>
          <!-- Item 5 -->
          <div class="hidden duration-1000 ease-in-out" data-carousel-item>
            <img src="./assets/images/img5.jpg" class="absolute inset-0 w-full h-full object-contain sm:mt-2" alt="Item 5">
          </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-5 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 group-hover:bg-gray-700 group-focus:ring-4 group-focus:ring-gray-300 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-5 cursor-pointer group focus:outline-none " data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 group-hover:bg-gray-700 group-focus:ring-4 group-focus:ring-gray-300 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>


      </div>
    </div>
  </section>

  <!--Contact Us-->

  <section id="contactus" class="bg-gray-50 pb-5">
    <h1 class="headerh1 uppercase text-4xl font-bold mb-8 pt-5 text-center">Contact Us</h1>
    <div class="flex flex-col md:flex-row justify-around">
      <div class="flex">
        <div class="flex flex-col items-center mx-2 mb-4 md:mb-0">
          <h3 class="followh3 text-2xl font-bold uppercase">Follow Us</h3>
          <div class="flex mt-4">
            <div class="flex ">
              <a href="https://www.instagram.com/cimerkov/"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="52" width="54" viewBox="-19.5036 -32.49725 169.0312 194.9835">
                  <defs>
                    <radialGradient fy="578.088" fx="158.429" gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.399 454.004)" gradientUnits="userSpaceOnUse" xlink:href="#a" r="65" cy="578.088" cx="158.429" id="c" />
                    <radialGradient fy="473.455" fx="147.694" gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.351 -458.493)" gradientUnits="userSpaceOnUse" xlink:href="#b" r="65" cy="473.455" cx="147.694" id="d" />
                    <linearGradient id="b">
                      <stop stop-color="#3771c8" offset="0" />
                      <stop offset=".128" stop-color="#3771c8" />
                      <stop stop-opacity="0" stop-color="#60f" offset="1" />
                    </linearGradient>
                    <linearGradient id="a">
                      <stop stop-color="#fd5" offset="0" />
                      <stop stop-color="#fd5" offset=".1" />
                      <stop stop-color="#ff543e" offset=".5" />
                      <stop stop-color="#c837ab" offset="1" />
                    </linearGradient>
                  </defs>
                  <path d="M65.033 0C37.891 0 29.953.028 28.41.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468-4.125 4.282-6.625 9.55-7.53 15.812-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28a27.22 27.22 0 0017.75-14.53c1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624-4.3-4.108-9.56-6.608-15.829-7.512C102.338.157 101.733.027 86.193 0z" fill="url(#c)" />
                  <path d="M65.033 0C37.891 0 29.953.028 28.41.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468-4.125 4.282-6.625 9.55-7.53 15.812-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28a27.22 27.22 0 0017.75-14.53c1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624-4.3-4.108-9.56-6.608-15.829-7.512C102.338.157 101.733.027 86.193 0z" fill="url(#d)" />
                  <path d="M65.003 17c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C17.06 50.327 17 51.964 17 65s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97a5.76 5.76 0 105.76 5.758c0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C78.616 89.645 89.65 78.613 89.65 65S78.615 40.35 65.002 40.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z" fill="#fff" />
                </svg>
              </a>
            </div>
            <div class="mx-2" style="padding-top:2px;">
              <a href="https://www.facebook.com/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                  <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                  <path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-2/3 lg:w-1/2">
        <form class="bg-white rounded-lg px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-2" for="name">
              Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Name" />
          </div>
          <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-2" for="email">
              Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email" />
          </div>
          <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-2" for="message">
              Message
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" placeholder="Message"></textarea>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">
              Send
            </button>
          </div>
        </form>
      </div>


    </div>
    </div>



  </section>

  <!--Footer-->

  <div class="text-center p-5 bg-gray-700">
    <p class="text-white">© 2023 Copyright: Cimerkov</p>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


  <script src="./app.js"></script>


</body>

</html>