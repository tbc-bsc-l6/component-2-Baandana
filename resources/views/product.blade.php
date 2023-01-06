<div class="p-2 bg-blue-100">
      <div class="bg-white p-i rounded lg shadow lg">
        <h1 class="text-blue-700 no-4 text-ig font bold">{{$product->artist}}</h1>
    <h2 class= "font-bold no-2 text-gray-800">{{$product->title}}</h2>
      <div class="flex justify-between">
        <p class="text-gray-700">{{$product->price}}</p>
        <button value="{{$product->id}}" class="bg-blue-500 hover:bg blue 700 text-white font-bold py-2 px-4 rounded-full select product">Select</button>
</div>
</div>
</div>
