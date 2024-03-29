<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        <title>Laravel CRUD</title>
    </head>
    <body class="bg-gray-50">
        <main>
            <div class=" mx-10 min-w-screen min-h-screen flex items-center p-5 lg:p-10 overflow-hidden relative">
                <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
                    <div class="md:flex items-center -mx-10">
                        <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                            <div class="relative">
                                <img src="{{asset('/product/'.$product->image)}}" class="w-full relative z-10" alt="">
                                <div class="border-4 border-yellow-200 absolute top-10 bottom-10 left-10 right-10 z-0"></div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-10">
                            <div class="mb-10">
                                <p class="font-bold uppercase text-xl mb-5">{{$product->name}}</p>
                                <p class="text-md">{{$product->description}}</p>
                            </div>
                            <!-- <div>
                                <div class="inline-block align-bottom mr-5">
                                    <span class="text-2xl leading-none align-baseline">$</span>
                                    <span class="font-bold text-5xl leading-none align-baseline">59</span>
                                    <span class="text-2xl leading-none align-baseline">.99</span>
                                </div>
                                <div class="inline-block align-bottom">
                                    <button class="bg-yellow-300 opacity-75 hover:opacity-100 text-yellow-900 hover:text-gray-900 rounded-full px-10 py-2 font-semibold"><i class="mdi mdi-cart -ml-2 mr-2"></i> BUY NOW</button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
