@extends('layouts.default')
@section('page')

    <body class='flex'>
        <!-- Sidebar Start -->
        <x-sidebar.base />
        <!-- Sidebar End -->
        <!-- Main Start -->
        <main class='flex flex-col text-wrap'>
            <section class="bg-white dark:bg-gray-900">
                <div class="container px-6 py-10 mx-auto">
                    <div class="lg:-mx-6 lg:flex lg:items-center">
                        <img class="object-cover object-center lg:w-1/2 lg:mx-6 w-full h-96 rounded-lg lg:h-[36rem]"
                            src="{{ asset('storage/profile-img-jc.jpg') }}" alt="profile picture">

                        <div class="mt-8 lg:w-1/2 lg:px-6 lg:mt-0">
                            <label class="text-gray-700 dark:text-gray-200" for="name">Nama Kandidat</label>
                            <h3 id="name" class="mt-6 text-lg font-medium text-blue-500">
                                Jendy Caprico</h3>
                            <p class="text-gray-600 dark:text-gray-300 font-bold">Website Developer</p>
                            <hr class="my-8" />
                            <h4 class="text-gray-600 dark:text-gray-300 font-bold my-2">Portfolio</h4>
                            <ul>
                                <li class="my-4">
                                    <a class="text-gray-600 dark:text-gray-300 appearance-none"
                                        href="https://astreamline.space">Astream.js</a>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm">Anime Streaming Website using
                                        Next.js 13, app route with server actions</p>
                                </li>
                                <li class="my-4">
                                    <a class="text-gray-600 dark:text-gray-300 appearance-none"
                                        href="https://liff.line.me/1645278921-kWRPP32q/?accountId=164xjdmd">JCLine-Bot</a>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm">Chat bot using OpenAI 3.5 turbo in
                                        Line Messenger (Testing Ground for Prompt Engineering techniques)</p>
                                </li>
                            </ul>
                        </div>



                    </div>
                </div>
            </section>
        </main>
    </body>
