<!doctype html>
<html lang="{{app()->getLocale()}}">
<head> 
    <meta charset="utf-8">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Laravel: @yield('title','Home Page') </title>
</head>
<body>

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <img src={{ URL::asset('images/article-5fb667267f100.jpg') }} width="60%"/>
        </div>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-2 md:grid-cols-1">
                <div class="p-6">
                    @include('header')
                </div>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    @yield('cars_theme')
                </div>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    @yield('cars_contents')
                </div>
            </div>
        </div>

        @include('footer')
</div>    

</body> 
</html>                   